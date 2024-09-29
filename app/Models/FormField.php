<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_template_id',
        'field_label',
        'field_type',
        'options',
        'is_required',
        'field_order'
    ];

    protected $casts = [
        'options' => 'array',
    ];

      
      public function formTemplate()
      {
          return $this->belongsTo(FormTemplate::class);
      }


      public function submissionValues()
      {
          return $this->hasMany(FormSubmissionValue::class);
      }


}
