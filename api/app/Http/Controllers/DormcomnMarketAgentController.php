<?php

namespace App\Http\Controllers;

use App\Models\dormcomn_market_agent;
use App\Http\Requests\Storedormcomn_market_agentRequest;
use App\Http\Requests\Updatedormcomn_market_agentRequest;

class DormcomnMarketAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resource = dormcomn_market_agent::all();
        return response()->json($resource);
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
    public function store(Storedormcomn_market_agentRequest $request)
    {
        $resource = new dormcomn_market_agent;
        // Set the properties of the resource based on the request data
        $resource->property1 = $request->input('property1');
        $resource->property2 = $request->input('property2');
        // ...
        $resource->save();
        
        return response()->json($resource, 201);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(dormcomn_market_agent $dormcomn_market_agent, $id)
    {
        $resource = dormcomn_market_agent::find($id);
        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
        return response()->json($resource);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dormcomn_market_agent $dormcomn_market_agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedormcomn_market_agentRequest $request, dormcomn_market_agent $dormcomn_market_agent, $id)
    {
        $resource = dormcomn_market_agent::find($id);
        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
        
        // Update the properties of the resource based on the request data
        $resource->property1 = $request->input('property1');
        $resource->property2 = $request->input('property2');
        // ...
        $resource->save();
        
        return response()->json($resource);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dormcomn_market_agent $dormcomn_market_agent, $id)
    {
        $resource = dormcomn_market_agent::find($id);
        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }
        
        $resource->delete();
        
        return response()->json(['message' => 'Resource deleted']);

    }
}
