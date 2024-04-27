<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeviceRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id= $request->id;
        $user= User::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Get record successfully',
            'data' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceRequest $request)
    {
        $device = new User([
            'device_id' => $request->input('device_id'),
            'url' => $request->input('url'),
        ]);

        // Save the device to the database
        $device->save();
        return response()->json([
            'success' => true,
            'message' => 'Device created successfully',
            'data' => $device,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
