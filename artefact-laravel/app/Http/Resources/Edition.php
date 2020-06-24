<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Edition extends JsonResource
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
            'eventno'=>$this->eventno,
            'place'=>$this->place,
            'start'=>$this->start,
            'end'=>$this->end
        ];
    }
}
