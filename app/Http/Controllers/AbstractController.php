<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AbstractController extends Controller
{
    public function index(Request $request)
    {
        $request = $this->service->getAll();
        return response()->json($request);
    }

    public function store(Request $request)
    {
        $response = $this->service->create($request->all());
        return response()->json($response);
    }

    public function show($id)
    {
        $response = $this->service->find($id);
        return response()->json($response);
    }

    public function update($id, Request $request)
    {
        $this->service->update($id, $request->all());
        return response()->
        json(['response' => 'Task updated successfully']);
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['status' =>'success']);
    }

    public function newUser(Request $request)
    {
        $data = $this->service->registerUser([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
        ]);
        return response()->json($data);
    }

    public function newAdmin(Request $request)
    {
        $data = $this->service->registerAdmin([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type
        ]);
        return response()->json($data);
    }
}
