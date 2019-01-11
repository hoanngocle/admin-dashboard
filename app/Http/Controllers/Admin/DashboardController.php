<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sentinel;

class DashboardController extends Controller
{
    protected $userFactory;

    public function __construct(
        \App\Models\Users $userFactory
    ) {
        $this->userFactory = $userFactory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // test contribute
        $nickName   = $this->userFactory->getUsername();
        $nickName   = $this->userFactory->getUsername();
        $nickName   = $this->userFactory->getUsername();
        $nickName   = $this->userFactory->getUsername();
        $nickName   = $this->userFactory->getUsername();
        $avatar     = $this->userFactory->getAvatar();

        return view('admin.pages.dashboard', [
            'nickname'  => $nickName,
            'avatar'    => $avatar
        ]);
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
