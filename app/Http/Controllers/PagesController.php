<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $pages = Pages::all();
        return view('admin.pages.index', [
            'pages' => $pages,
        ]); // returns all the available pages

    }

    public function create(){
        return view('admin.pages.create');
    }
    

    public function store(Request $req){
        Pages::create([
            'slug' => $req->slug,
            'banner_heading' => $req->banner_heading,
            'banner_paragraph' => $req->banner_paragraph,
            'main_content_heading' => $req->main_content_heading,
            'main_content_paragraph' => $req->main_content_paragraph,
            'pages_main_content' => $req->pages_main_content,
            'user_id' => 1
        ]);
        return redirect('siteadmin/pages');
    }

    public function show(Pages $page){
        return view('admin.pages.show', [
            'page' => $page
        ]);
    }
    
    public function PublicShow(Pages $page){
        return view('single_page', [
            'page' => $page
        ]);
    }

    public function edit(Request $req, Pages $tech){

    }

    public function destroy(Pages $tech){
        $tech->delete;
        return view('admin.pages.show');
    }
}
