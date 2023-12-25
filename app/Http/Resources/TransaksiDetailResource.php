<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransaksiDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'barang_id' => $this->barang_id,
            'jumlah' => $this->jumlah,
            'total' => $this->total,
            'nama_pembeli' => $this->nama_pembeli,
            'nama_kasir' => $this->nama_kasir,
            'barang' => $this->whenLoaded('barang'),
            'pembeli' => $this->whenLoaded('pembeli'),
            'kasir' => $this->whenLoaded('kasir'),
        ];
    }
}
