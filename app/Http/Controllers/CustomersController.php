<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function index(){

    	$customers = Customer::all();

    	return view('customers.index', compact('customers'));
    }

    public function create(){

    	$customer = new Customer();
    	return view('customers.create', compact('customer'));
    }

    public function store(Request $request){

    	$attributes = $this->validateAttributes($request, $customer = new Customer);
 	
    	Customer::create($attributes);

    	return view('customers.index');
    }

    public function show(Customer $customer){
    	
    	return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer){

    	return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer){
    	
    	$attributes = $this->validateAttributes($request, $customer);

    	$customer->update($attributes);

    	return view('customers.show', compact('customer'));
    }

    private function validateAttributes($request, $customer){

    	return $attributes = $request->validate([
    		'name' => 'required|min:6',
    		'company_id' => 'required',
    		'email' => 'required|email|unique:customers,email,'.$customer->id,
    		'active' => 'required'
    	]);
    }
}
