<?php

namespace App\Http\Controllers;

use App\Models\Technologies;
use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    public function index(){
        $technologies = Technologies::all();
        return view('admin.technologies.index', [
            'technologies' => $technologies,
        ]); // returns all the available technologies

    }

    public function create(){
        return view('admin.technologies.create');
    }
    

    public function store(Request $req){
        Technologies::create([
            'slug' => $req->slug,
            'banner_heading' => $req->banner_heading,
            'banner_paragraph' => $req->banner_paragraph,
            'main_content_heading' => $req->main_content_heading,
            'main_content_paragraph' => $req->main_content_paragraph,
            'technologies_main_content' => $req->technologies_main_content,
            'user_id' => 1
        ]);
        return redirect('siteadmin/technologies');
    }

    public function show(Technologies $technology){
        return view('admin.technologies.show', [
            'technology' => $technology
        ]);
    }
    
    public function PublicShow(Technologies $technology){
        return view('single_technology', [
            'technology' => $technology
        ]);
    }

    public function edit(Request $req, Technologies $tech){

    }

    public function destroy(Technologies $tech){
        $tech->delete;
        return view('admin.technologies.show');
    }
}
