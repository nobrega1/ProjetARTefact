<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Person extends JsonResource
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
            'addressno'=>$this->addressno,
            'name'=>$this->name,
            'firstname'=>$this->firstname,
            'email'=>$this->email,
            'password'=>$this->password,
            'isactive'=>$this->isactive,
            'phonenumber'=>$this->phonenumber
        ];
    }
}
