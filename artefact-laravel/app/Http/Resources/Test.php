<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Test extends JsonResource
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
            'productno'=>$this->productno,
            'clientno'=>$this->start,
            'start'=>$this->start,
            'end'=>$this->end,
            'commentstaff'=>$this->commentstaff,
            'stars'=>$this->stars,
            'feedback'=>$this->stars,


        ];      }
}
