<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectId extends JsonResource
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
         "type" =>"projects",
                "id"=>$this->id ,
                "attributes" =>
                 [
                    "title"=>$this->title,
                    "description"=>$this->description,
                    "start_date"=>$this->start_date,
                   
                ],
            ];
    }
}
