<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TouristRoute;
class TouristRoutesController extends Controller
{
    public function getTouristRoutes(Request $request)
    {
        return TouristRoute::all();
    }
    public function getTouristRouteById(Request $request, $id)
    {
        return TouristRoute::find($id);
    }
}
