<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer as Customer;
use App\Payment as Payment;
use App\Office as Office;
use App\Employee as Employee;

class TestController extends Controller
{
    public function index(){
    	$data = Employee::with(['office', 'customers'])->take(10)->get();
    	echo json_encode($data);
    }
}
