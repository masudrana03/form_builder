<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;
    protected $fillable = [
        'form_template_id',
        'user_id',
        'submitted_at'
    ];


    public function formTemplate()
    {
        return $this->belongsTo(FormTemplate::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function submissionValues()
    {
        return $this->hasMany(FormSubmissionValue::class);
    }
}
