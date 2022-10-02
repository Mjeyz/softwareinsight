<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $services = Services::all();
        return view('admin.services.index', [
            'services' => $services,
        ]); // returns all the available services

    }

    public function create(){
        return view('admin.services.create');
    }
    

    public function store(Request $req){
        Services::create([
            'slug' => $req->slug,
            'banner_heading' => $req->banner_heading,
            'banner_paragraph' => $req->banner_paragraph,
            'main_content_heading' => $req->main_content_heading,
            'main_content_paragraph' => $req->main_content_paragraph,
            'services_main_content' => $req->services_main_content,
            'user_id' => 1
        ]);
        return redirect('siteadmin/services');
    }

    public function show(Services $service){
        return view('admin.services.show', [
            'service' => $service
        ]);
    }
    
    public function PublicShow(Services $service){
        return view('single_service', [
            'service' => $service
        ]);
    }

    public function edit(Request $req, Services $services){

    }

    public function destroy(Services $services){
        $services->delete;
        return view('admin.services.show');
    }
}
