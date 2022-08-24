<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id' => $this->id,
            'FirstName' => $this->first_name,
            'LastName' => $this->last_name,
            'Address' => $this->address,
            'CountryId' => $this->country_id,
            'StateId' => $this->state_id,
            'CityId' => $this->city_id,
            'DepartmentId'=> $this->department_id,
            'ZipCode' => $this->zip_code,
            'BirthDate' => $this->birth_date,
            'DateHired' =>  $this->date_hired,
        ];
    }
}
