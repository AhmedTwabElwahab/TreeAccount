<?php

namespace App\Http\Controllers;

use App\Models\chart_account;
use Illuminate\Http\Request;

class ChartAccountController extends Controller
{
    public function index()
    {
        $accounts = chart_account::all();
        $count = chart_account::all()->count();
        return view('welcome',compact('accounts','count'));
    }
}
