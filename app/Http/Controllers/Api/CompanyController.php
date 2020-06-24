<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::with('groups')->Get();
    }

    public function store()
    {
        return Company::create(request()->all());
    }

    public function show(Company $company)
    {
        return $company;
    }

    public function update(Company $company)
    {
        $company->update(request()->all());
        return $company;
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(['result' => 'ok']);
    }
}
