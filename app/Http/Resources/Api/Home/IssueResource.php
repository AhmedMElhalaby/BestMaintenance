<?php

namespace App\Http\Resources\Api\Home;

use Illuminate\Http\Resources\Json\JsonResource;

class IssueResource extends JsonResource
{
    public function toArray($request): array
    {
        $Objects = array();
        $Objects['id'] = $this->getId();
        $Objects['name'] = (app()->getLocale() == 'ar')?$this->getNameAr():$this->getName();
        $Objects['IssueTypes'] = IssueTypeResource::collection($this->issue_types);
        return $Objects;
    }
}
