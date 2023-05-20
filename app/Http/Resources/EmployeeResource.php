<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'    => $this->id,
            'employee_id'=>$this->employee_id,
            'name'  => $this->employee_name,
            'age'  => $this->age,
           'joining_date'=> $this->joining_date,
           'salary' => $this->salary

        ];

    }
}
