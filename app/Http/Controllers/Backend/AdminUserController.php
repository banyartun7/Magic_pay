<?php

namespace App\Http\Controllers\Backend;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\adminUserStoreRequest;
use App\Http\Requests\adminUserUpdateRequest;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminUsers = AdminUser::all();
        return view('backend.admin_user.index',compact('adminUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin_user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(adminUserStoreRequest $request)
    {
        AdminUser::create($request->validated());
        return redirect('/admin/admin_user')->with('create',config("flash_sms.admin_user.create"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminUser $adminUser)
    {
        return view('backend.admin_user.edit', compact('adminUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(adminUserUpdateRequest $request, AdminUser $adminUser)
    {
        //return $request->all();
        $adminUser->update(
            $request->validated() + ['password' => empty($request->password) ? $adminUser->password : Hash::make($request->password)]);
            return redirect('/admin/admin_user')->with('update', config("flash_sms.admin_user.update"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
