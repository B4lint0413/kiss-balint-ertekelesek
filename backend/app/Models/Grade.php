<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ["grade", "topic", "type", "weight", "student_id", "subject_id"];

    public function student() : BelongsTo{
        return $this->belongsTo(Student::class);
    }

    public function subject() : BelongsTo{
        return $this->belongsTo(Subject::class);
    }
}
