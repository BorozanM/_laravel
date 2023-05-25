<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaptopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            'id'=>$this->resource->id,
            'naziv'=>$this->resource->naziv,
            'boja'=>$this->resource->boja,
            'baterija'=>$this->resource->baterija,
            'ekran'=>$this->resource->ekran,
            'cena'=>$this->resource->cena,
            'os'=>$this->resource->os,


        ];
    }
}
