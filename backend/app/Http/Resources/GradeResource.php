<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GradeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "grade" => $this->grade,
            "topic" => $this->topic,
            "type" => $this->type,
            "weight" => $this->weight,
            "student" => new StudentResource($this->whenLoaded('student')),
            "subject" => new SubjectResource($this->whenLoaded('subject')),
        ];
    }
}
