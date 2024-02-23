<?php

namespace App\Http\Controllers;

use App\Models\UserVoucher;
use App\Http\Requests\StoreUserVoucherRequest;
use App\Http\Requests\UpdateUserVoucherRequest;

class UserVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserVoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserVoucherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserVoucher  $userVoucher
     * @return \Illuminate\Http\Response
     */
    public function show(UserVoucher $userVoucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserVoucher  $userVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVoucher $userVoucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserVoucherRequest  $request
     * @param  \App\Models\UserVoucher  $userVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserVoucherRequest $request, UserVoucher $userVoucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserVoucher  $userVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserVoucher $userVoucher)
    {
        //
    }
}
