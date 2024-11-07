<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'first_name'  => $this->first_name,
            'second_name' => $this->second_name,
            'email'       => $this->email,
            'birth_date'  => $this->birth_date,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
        ];
    }
}
