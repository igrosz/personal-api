<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionId extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
         "type" =>"institutions",
                "id"=>$this->id ,
                "attributes" =>
                 [
                    "title"=>$this->title,
                    "diplomas"=>$this->diplomas,
                ],
            ];
    }
}
