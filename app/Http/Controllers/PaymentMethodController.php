<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PaymentMethod;
use App\Models\PaymentDetails;
use DB;

class PaymentMethodController extends Controller
{
    public function sslCommerz(){
        $ssl_info = PaymentDetails::all();
        $ssl_store_id =$ssl_info[2]->key_value;
        $ssl_store_password =$ssl_info[3]->key_value;
        $payments = DB::table('payment_details')
        ->select('payment_details.*','payment_methods.method_name as name')
        ->join('payment_methods','payment_methods.id','=','payment_details.method_id')
        ->where('payment_details.method_id',2)
        ->get()
        ->toArray();
        // dd($payments);
        $ssl_title = $payments[0]->name;
        $ssl_enable_option =$payments[0]->key_value;
        $ssl_store_id =$payments[1]->key_value;
        $ssl_store_password =$payments[2]->key_value;
       
     return view('admin.payment.ssl-commerz',compact('ssl_title','ssl_enable_option','ssl_store_id','ssl_store_password'));
    }

public function sslUpdate(Request $request)
{   
    $p_m=PaymentMethod::findOrFail(2);
    $validator = Validator::make($request->all(), [
        'title' => 'required|string',
        'store_id' => 'required|string',
        'store_password' => 'required|string',
        'status' => 'required',
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $p_title = $request->title;
    $p_store_id = $request->store_id;
    $p_store_password  = $request->store_password;;
    $p_status = $request->status;
   
    $p_m->method_name = $p_title;

    $p_m->save();
    $ssl_enable = DB::table('payment_details')->where('key_name','=','ssl_enable_option')->update(['key_value' => $p_status]);
    $ssl_store_id = DB::table('payment_details')->where('key_name','=','ssl_store_id')->update(['key_value' => $p_store_id]);
    $ssl_store_password = DB::table('payment_details')->where('key_name','=','ssl_store_password')->update(['key_value' => $p_store_password]);

    $this->set_ssl_info('STORE_ID',$p_store_id);
    $this->set_ssl_info('STORE_PASSWORD',$p_store_password);
    return back()->with('success','Payment Updated Successfully');
}

protected function set_ssl_info($key, $newValue, $delim='')
{   
    $path = base_path('.env');
    // get old value from current env
    $oldValue = env($key);
    // was there any change?
    if ($oldValue === $newValue) {
        return;
    }

    // rewrite file content with changed data
    if (file_exists($path)) {
        // replace current value with new value 
        file_put_contents(
            $path, str_replace(
                $key.'='.$delim.$oldValue.$delim, 
                $key.'='.$delim.$newValue.$delim, 
                file_get_contents($path)
            )
        );
    }
}

public function cashOnDelivery(){
    $payments = DB::table('payment_details')
    ->select('payment_details.*','payment_methods.method_name as name')
    ->join('payment_methods','payment_methods.id','=','payment_details.method_id')
    ->where('payment_details.method_id',1)
    ->get()
    ->toArray();
    $payment_title = $payments[0]->name;
    $payment_enable = $payments[0]->key_value;
    return view('admin.payment.cash-on-delivery',compact('payment_title','payment_enable'));
}
public function cashUpdate(Request $request){
    $validator = Validator::make($request->all(), [
        'title' => 'required',

    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $p_title = $request->title;
    $p_status = $request->status;    
    $p_m=PaymentMethod::findOrFail(1);
    $p_m->method_name = $p_title;
    $p_s = PaymentDetails::findOrFail(1);
    $p_s['key_value']= $p_status ;
    $p_s->save();
    $p_m->save();
    return back()->with('success','Payment Updated Successfully');

    }
}
