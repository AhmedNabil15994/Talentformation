<?php

namespace App\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class OpeningResource extends JsonResource
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
            'title_ar'   => $this->title_ar,
        'title_en'   => $this->title_en,
        'brief_ar'   => $this->brief_ar,
        'brief_en'   => $this->brief_en,
        'description_ar'   => $this->description_ar,
        'description_en'   => $this->description_en,
        'job_details'   => $this->job_details,
        
            'status' => $this->status,
            'statusText' => $this->status ? trans('Role::role.form.active') : trans('Role::role.form.notActive'),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
