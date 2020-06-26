<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bike extends JsonResource
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
            'productno'=>$this->productno,
            'frameunit'=>$this->frameunit,
            'framesize'=>$this->framesize,
            'rimsize'=>$this->rimsize,
            'rimunit'=>$this->rimunit,
        ];    }
}
