<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(){
        
    }
    public function create(){
        return view('leads.leadCreate');
    }

    public function store(Request $request){
        
    }
}
