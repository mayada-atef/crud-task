<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    function index()
    {
        $customers = Customer::get();
        return view("customer.allcustomers", compact("customers"));
    }
    function add()
    {
        return view('customer.addcustomer');
    }
    function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|string|unique:customers'
        ]);
        $customer = new Customer;
        $customer->create($request->all());
        return redirect()->route('customer.index');
    }
    function destory($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
    function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.showcustomer', ['customer' => $customer]);
    }
    function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.editcustomer', ['customer' => $customer]);
    }
    function update($id, Request $request)
    {
        $customer = Customer::find($id);

        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:customers,email,' . $customer->id . ',id',
            'phone' => 'required|string|unique:customers,phone,' . $customer->id . ',id'
        ]);
        $customer->update($request->all());
        return redirect()->route('customer.index');
    }
}
