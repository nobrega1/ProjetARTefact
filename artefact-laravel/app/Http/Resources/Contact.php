<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
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
            'companyno'=>$this->companyno,
            'personno'=>$this->personno,
            'since'=>$this->since,
            'until'=>$this->until
        ];
    }
}
