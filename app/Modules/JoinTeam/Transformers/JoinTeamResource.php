<?php

namespace App\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class JoinTeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name'   => $this->name,
            'email'   => $this->email,
            'phone'   => $this->phone,
            'designation'   => $this->designation,
            'file'   => $this->file,
            'company_name'   => $this->company_name,
            'from'   => $this->from,
            'to'   => $this->to,
            'current_salary'   => $this->current_salary,
            'expected_salary'   => $this->expected_salary,
            'opening_id'   => $this->opening_id,
        
            'status' => $this->status,
            'statusText' => $this->status ? trans('Role::role.form.active') : trans('Role::role.form.notActive'),
            'created_at'   => date('d-m-Y h:i A', strtotime($this->created_at)),
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
