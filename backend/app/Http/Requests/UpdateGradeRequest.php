<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGradeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "grade" => ["required", "string", "in:1,2,3,4,5,5D,-,no,MT"],
            "topic" => ["string", "min:2", "max:20"],
            "type" => ["required", "string", "min:2", "max:20"],
            "weight" => ["required", "numeric", "between:0.25,3.0"],
            "student_id" => ["required", "exists:students,id"],
            "subject_id" => ["required", "exists:subjects,id"]
        ];
    }
}
