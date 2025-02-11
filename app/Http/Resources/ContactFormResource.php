<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactFormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'fullname' => $this->firstname . ' ' . strtoupper($this->lastname),
            'email' => $this->email,
            'trip_dates' => $this->start_date->format('Y-m-d') . ' - ' . $this->end_date->format('Y-m-d'),
            'program' => $this->program,
            'more_info' => $this->more_info
        ];
    }
}
