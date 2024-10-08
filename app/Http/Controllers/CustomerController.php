<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerTransaction;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
{
    return view('customers.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'mobile' => 'required',
        'jar_taken' => 'required|integer',
        'amount_paid' => 'required|numeric',
    ]);

    // Create customer
    $customer = Customer::create($request->only(['name', 'address', 'mobile']));

    // Add transaction
    CustomerTransaction::create([
        'customer_id'=>$customer->id,
        'jar_taken' => $request->jar_taken,
        'cust_due_amount' =>$customer->amount_due,
        'amount_paid' => $request->amount_paid,
        'cust_jar_due' => $request->jar_taken,
    ]);

    return redirect()->route('customers.index');
}

}
