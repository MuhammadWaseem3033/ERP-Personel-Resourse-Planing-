<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index');
    }
    public function create()
    {
        return view('company.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobile' =>'required|digits:11',
        ]);
    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update($id)
    {
        //
    }
    public function delete($id)
    {
        //
    }
}
