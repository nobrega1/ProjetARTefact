<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Address extends JsonResource
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
            'street'=>$this->street,
            'streetnumber'=>$this->streetnumber,
            'pobox'=>$this->pobox,
            'postalcode'=>$this->postalcode,
            'city'=>$this->city,
            'canton'=>$this->canton,
        ];
    }
}
