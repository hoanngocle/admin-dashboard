<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $userRepository;

//    public function __construct(
//        \App\Repositories\User\UserRepository $userRepository
//    ) {
//        $this->userRepository = $userRepository;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\AdminUser  $adminUser
//     * @return \Illuminate\Http\Response
//     */
//    public function show(AdminUser $adminUser)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\AdminUser  $adminUser
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(AdminUser $adminUser)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\AdminUser  $adminUser
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, AdminUser $adminUser)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\AdminUser  $adminUser
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(AdminUser $adminUser)
//    {
//        //
//    }
}
