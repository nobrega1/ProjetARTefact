<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Catalogue extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'editionno'=>$this->editionno,
            'personno'=>$this->personno
        ];
    }
}