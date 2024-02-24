<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use App\Models\Country;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerCreate()
    {
        
        $agents = User::where('is_type','2')->get();
        $countries = Country::orderby('id','DESC')->get();
        return view('admin.customer.index', compact('data','agents','countries'));
    }
}
