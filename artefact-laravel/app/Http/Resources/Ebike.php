<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Emtb extends JsonResource
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
            'roadikeno'=>$this->roadbikeno,
            'feature'=>$this->feature,
        ];       }
}
