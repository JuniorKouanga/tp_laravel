<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class PersonneController extends Controller
{
    public function index(): JsonResponse
    {
        $personnes = Personne::all();
        return response()->json($personnes);
    }
}
