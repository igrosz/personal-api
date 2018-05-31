<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use App\ProjectId;
use App\Http\Resources\Project as ProjectResource;
use App\Http\Resources\ProjectId as ProjectIdResource;

class MyProjController extends Controller
{
    public function index(){
        return ProjectResource::collection (Project::all());
    }
    public function show($id){
       
        return new ProjectIdResource(Project::findOrFail($id));
    }
}