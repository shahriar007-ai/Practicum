<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ShippingMethod;
use DB;

class ShippingController extends Controller
{
    public function index(){
        $shippings = ShippingMethod::orderBy('id','desc')->paginate(10);
        return view('admin.shipping.index',compact('shippings'));
    }
    public function addShipping(){
        return view('admin.shipping.add');
    }
    public function storeShipping(Request $request){
    
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100|unique:shipping_methods,title',
            'fee_amount' => 'required|numeric',
            'short_desc' => 'nullable|string|max:1000',
            'status' => 'required|integer',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $exist_shipping = DB::table('shipping_methods')->get();
        $shipping = new ShippingMethod;
        $shipping->title =  $request->title;
        $shipping->fee_amount =  $request->fee_amount;
        $shipping->short_desc =  $request->short_desc;
        if($request->status == 1 && count($exist_shipping) > 0){
            DB::table('shipping_methods')->update(['status'=>0]);
            $shipping->status = $request->status;
        }else{
            $shipping->status = $request->status;
        }
        $shipping->save();
        return redirect()->route('shipping.list')->with('success','Shipping Method Added Successfully');
    }
    public function editShipping($id){
        $shipping = ShippingMethod::findOrFail($id);
        return view('admin.shipping.edit',compact('shipping'));
    }
    public function updateShipping(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100|unique:shipping_methods,title,'.$id,
            'fee_amount' => 'required|numeric',
            'short_desc' => 'nullable|string|max:1000',
            'status' => 'required|integer',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $exist_shipping = DB::table('shipping_methods')->get();
        $shipping = ShippingMethod::find($id);
        $shipping->title =  $request->title;
        $shipping->fee_amount =  $request->fee_amount;
        $shipping->short_desc =  $request->short_desc;
        if($request->status == 1){
            if(count($exist_shipping) > 0){
                DB::table('shipping_methods')->where('id','!=',$id)->update(['status'=>0]);
            }
            $shipping->status = $request->status;
        }else{
            $shipping->status = $request->status;
        }
        $shipping->update();
        return redirect()->route('shipping.list')->with('success','Shipping Method Updated Successfully');
    }
    public function deleteShipping($id){
        $shipping = ShippingMethod::findOrFail($id);
        $shipping->delete();
        return redirect()->route('shipping.list')->with('success','Shipping Method Deleted Successfully');
    }
}
