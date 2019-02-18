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

    /*public function create()
    {

    }*/

    /*public function store()
    {

    }*/

    public function show($id)
    {
        $customer = Customer::where('id',$id)->first();

        return view('modules.customer.show', compact('customer'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
