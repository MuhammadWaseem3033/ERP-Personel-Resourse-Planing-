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
    public function store()
    {
        return redirect('/company');
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
