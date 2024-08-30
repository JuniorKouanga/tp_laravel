<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AgentController extends Controller
{
    public function index(): JsonResponse
    {
        $agents = Agent::all();
        return response()->json($agents);
    }
}
