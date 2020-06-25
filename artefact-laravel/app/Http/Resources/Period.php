<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Period extends JsonResource
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
            'editionno'=>$this->editionno,
            'date'=>$this->date,
            'start'=>$this->start,
            'end'=>$this->end
        ];    }
}
