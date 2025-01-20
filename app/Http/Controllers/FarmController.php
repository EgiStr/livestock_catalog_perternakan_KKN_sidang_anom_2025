<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Inertia\Inertia;
use Inertia\Response;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $farms = Farm::with(['user', 'iot_sensors'])->get();
        return Inertia::render('Peternakan', [
            'farms' => $farms,
        ]);
    }

    public function home(): Response
    {
        $farms = Farm::with(['user', 'iot_sensors'])->get();
        return Inertia::render('Home', [
            'farms' => $farms,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */


    public function show(Farm $farm): Response
{
    // Load related users and iot_sensors
    $farmWithRelations = Farm::with(['user', 'iot_sensors'])
        ->where('id', $farm->id)
        ->first();

    return Inertia::render('DetailTernak', [
        'farm' => $farmWithRelations,
    ]);
}

   
}
