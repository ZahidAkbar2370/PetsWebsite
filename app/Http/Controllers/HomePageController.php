<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(Request $request){
        $pets = Pet::orderBy("id", "DESC")->paginate(10);
        return view('pets.index',['user'=>$request->user(), "pets" => $pets]);
    }

    function showPet($id, Request $request) {
        $pet = Pet::find($id);
        return view('pets.home-page-pets.pet_detail',['user'=>$request->user(), "$pet" => $pet]);
    }
}
