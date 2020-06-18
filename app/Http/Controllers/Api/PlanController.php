<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return Plan::with('groups')->Get();
    }

    public function store()
    {
        return Plan::create(request()->all());
    }

    public function show(Plan $plan)
    {
        return $plan;
    }

    public function update(Plan $plan)
    {
        $plan->update(request()->all());
        return $plan;
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return response()->json(['result' => 'ok']);
    }
}
