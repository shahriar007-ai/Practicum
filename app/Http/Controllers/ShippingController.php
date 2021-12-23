<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index(){
        return view('admin.shipping.index');
    }
    public function addShipping(){
        return view('admin.shipping.add');
    }
    public function storeShipping(Request $request){

    }
    public function editShipping($id){
        return view('admin.shipping.edit');
    }
    public function updateShipping(Request $request, $id){

    }
    public function deleteShipping($id){

    }
}
