<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Badge extends JsonResource
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
            'periodno'=>$this->periodno,
            'clientno'=>$this->clientno
        ];
    }
}
