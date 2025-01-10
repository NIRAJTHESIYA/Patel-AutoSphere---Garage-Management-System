<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function fetchRandomService()
    {
        $service = Service::inRandomOrder()->first();

        if (!$service) {
            $service = (object) [
                'service_name' => null,
                'service_topic' => null,
            ];
        }

        return response()->json($service);
    }

    public function findservices($id)
    {
        $service = Service::findOrFail($id);
        return view('services.service_type', compact('service'));
    }
}

