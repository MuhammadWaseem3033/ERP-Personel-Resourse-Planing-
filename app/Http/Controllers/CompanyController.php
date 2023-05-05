<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\DocumentType;
use App\Models\invoice;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        Auth::user()->assignRole('Super Admin');
        // $invoice = DocumentType::all();
        // dd($invoice);
        $companies = Company::paginate(5);
        return view('company.index',compact('companies'));
    }
    public function create()
    {
        return view('company.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobile' =>'required|digits:11',
        ]);
        Company::create($validated);
        return redirect(route('company.index'))->with('alert','Create Successfully');
    }
    
    public function edit(Company $company)
    {
        return view('company.Edit',compact('company'));
    }
    public function update(Request $request ,Company $company)
    {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobile' =>'required|digits:11',
        ]);
        $company->update($validated);
        return redirect(route('company.index'));
    }
    public function delete($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect()->route('company.index');
    }
}
