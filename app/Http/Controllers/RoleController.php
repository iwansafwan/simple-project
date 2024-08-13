<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;

use Illuminate\View\View as View;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Toh hang";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permissions = Permission::all();
 
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        return "delete";
    }
}
