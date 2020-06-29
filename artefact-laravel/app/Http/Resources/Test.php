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
            'clientno'=>$this->clientno,
            'starttime'=>$this->starttime,
            'endtime'=>$this->endtime,
            'commentairestaff'=>$this->commentairestaff,
            'stars'=>$this->stars,
            'feedback'=>$this->feedback,


        ];      }
}
