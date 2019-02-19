<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $listCustomer = Customer::all();
        return view('modules.customer.index', compact('listCustomer'));
    }

    public function create()
    {
        return view('modules.customer.add');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        if ($request->sub){
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email =$request->email;
            $customer->address = $request->address;
            $customer->save();

        }
        return redirect()->route('index');
    }

    public function show($id)
    {
        $customer = Customer::where('id',$id)->first();

        return view('modules.customer.show', compact('customer'));
    }

    public function edit(Request $request,$id)
    {
        $customer = Customer::where('id',$id)->first();
        if ($request->sub){
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email =$request->email;
            $customer->address = $request->address;
            $customer->save();

        }
        return redirect()->route('index');

    }

    public function update($id)
    {
        $customer = Customer::where('id',$id)->first();
        return view('modules.customer.edit',compact('customer'));
    }

    public function delete($id)
    {
        Customer::where('id',$id)->delete();
        return redirect()->route('index');

    }
}
