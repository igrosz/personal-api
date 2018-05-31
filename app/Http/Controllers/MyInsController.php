<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Institution;
use App\InstitutionId;
use App\Http\Resources\Institution as InstitutionResource;
use App\Http\Resources\InstitutionId as InstitutionIdResource;

class MyInsController extends Controller
{
    public function index(){
        
      return InstitutionResource::collection(Institution::all());


    }
    public function show($id){
        //$institutionId = InstitutionId::findOrFail($id);
        return new InstitutionIdResource(Institution::findOrFail($id));
    }

}