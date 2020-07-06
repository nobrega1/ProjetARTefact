<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Edition as EditionResource;
use App\Http\Resources\Brand as BrandResource;


class Product extends JsonResource
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
            'brandno'=>$this->brandno,
            'shortdescr'=>$this->shortdescr,
            'longdescr'=>$this->longdescr,
            'distinctivesign'=>$this->distinctivesign,
            'lienimage'=>$this->lienimage,
            'editions' => EditionResource::collection($this->whenLoaded('editions')),
            'brand' => BrandResource::make($this->whenLoaded('brand'))          
            
        ];    }
}
