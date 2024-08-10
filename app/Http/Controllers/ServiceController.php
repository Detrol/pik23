<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getServiceContent($service)
    {
        $validServices = ['hus', 'lagenhet', 'kontor', 'trapphus', 'skyltfonster'];

        if (!in_array($service, $validServices)) {
            return response()->json(['error' => 'Invalid service'], 400);
        }

        $content = view($service)->render();
        return response()->json(['content' => $content]);
    }
}
