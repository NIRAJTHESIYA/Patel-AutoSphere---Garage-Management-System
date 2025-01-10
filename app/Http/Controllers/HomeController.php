<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class HomeController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('index',compact('services'));
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        $services = Service::all();

        return view('services.service_type', compact('service','services'));
    }

    public function randomServices()
    {
        $randomServices = Service::all();
        return response()->json($randomServices);
    }
}
