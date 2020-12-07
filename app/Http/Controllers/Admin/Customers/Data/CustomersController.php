<?php

namespace App\Http\Controllers\Admin\Customers\Data;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{
    public function all()
    {
        return response()->json(['customers' => Customer::select('name', 'id')->get()]);
    }

    public function show(Customer $customer)
    {
        return response()->json(['customer' => $customer]);
    }
}
