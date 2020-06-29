<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Brand extends JsonResource
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
            'companyno'=>$this->companyno,
            'name'=>$this->name,
            'shortdescr'=>$this->shortdescr,
            'longdescr'=>$this->longdescr,
        ]; 
        }
}
