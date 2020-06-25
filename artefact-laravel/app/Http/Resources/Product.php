<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'no'=>$this->no,
            'brandno'=>$this->brandno,
            'name'=>$this->name,
            'shortdescr'=>$this->shortdescr,
            'longdescr'=>$this->longdescr,
            
        ];    }
}
