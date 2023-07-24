<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups =Groups::all();
        // return view('groups');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GroupMessage $groupMessages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GroupMessage $groupMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GroupMessage $groupMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupMessage $groupMessages)
    {
        //
    }
}
