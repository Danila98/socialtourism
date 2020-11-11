<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
class ClubsController extends Controller
{
    public function getClubs(Request $request)
    {
        return Club::all();
    }
    public function getClubById(Request $request, $id)
    {
        return Club::find($id);
    }
}
