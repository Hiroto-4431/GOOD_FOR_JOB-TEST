<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'company_id',
        'message',
        'occupation_id',
        'employment_type_id',
        'image',
        'access',
        'salary',
        'job_description',
        'status'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function employmentType()
    {
        return $this->belongsTo(EmploymentType::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_job')->withPivot(['id', 'job_id', 'feature_id']);
    }

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
