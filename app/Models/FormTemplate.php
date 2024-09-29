<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'name',
        'description',
        'is_active'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function formFields()
    {
        return $this->hasMany(FormField::class);
    }

    public function formSubmissions()
    {
        return $this->hasMany(FormSubmission::class);
    }
}
