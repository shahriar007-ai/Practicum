<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupons.index', compact('coupons'));
    }
    public function addCoupon()
    {
        return view('admin.coupons.add');
    }
    public function storeCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|unique:coupons,coupon_code',
            'coupon_amount' => 'required|numeric',
            'expiry_date' => 'required|string',
            'status' => 'required|integer',
        ]);
        $coupon = new Coupon();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_amount = $request->coupon_amount;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->status = $request->status;
        $coupon->save();
        return redirect()->route('coupon.list')->with('success', 'Coupon Added Successfully');
    }
    public function editCoupon($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupons.edit', compact('coupon'));
    }
    public function updateCoupon(Request $request, $id)
    {
        $request->validate([
            'coupon_code' => 'required|unique:coupons,coupon_code,' . $id,
            'coupon_amount' => 'required|numeric',
            'expiry_date' => 'required|string',
            'status' => 'required|integer',
        ]);
        $coupon = Coupon::find($id);
        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_amount = $request->coupon_amount;
        $coupon->expiry_date = $request->expiry_date;
        $coupon->status = $request->status;
        $coupon->update();
        return redirect()->route('coupon.list')->with('success', 'Coupon Updated Successfully');
    }
    public function deleteCoupon($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return redirect()->route('coupon.list')->with('success', 'Coupon Deleted Successfully');
    }

}
