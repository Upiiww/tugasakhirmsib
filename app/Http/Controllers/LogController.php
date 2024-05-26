<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return Log::all();
    }

    public function show($id)
    {
        return Log::findOrFail($id);
    }

    public function store(Request $request)
    {
        $log = Log::create($request->all());
        return response()->json($log, 201);
    }

    public function update(Request $request, $id)
    {
        $log = Log::findOrFail($id);
        $log->update($request->all());
        return response()->json($log, 200);
    }

    public function destroy($id)
    {
        $log = Log::findOrFail($id);
        $log->delete();
        return response()->json(null, 204);
    }
}

