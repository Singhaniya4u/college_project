<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($admin_id)
    {
        $admin = Admin::find($admin_id);
        if (!$admin) {
            abort(404, 'Admin not found');
        }
        return view('admins.dashboard', ['admin' => $admin]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function login(Request $request)
    {
        $admin_id = $request->input('admin_id');
        $password = $request->input('password');
        $original_password = DB::table('admins')->where('admin_id', $admin_id)->get('password');
        if ($password == $original_password[0]->password) {
            return redirect()->route('admins.dashboard', ['admin_id' => $admin_id])
                ->with(['success' => 'Logged in successfully!', 'admin_id' => $admin_id]);
        }
        return back()->withErrors(['Password or username is not correct']);
    }
}
