<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester_id',
        'amount',
        'description',
    ];

    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }

    public function syears(): BelongsToMany
    {
        return $this->belongsToMany(Syear::class, 'collection_syear', 'collection_id', 'syear_id')
            ->withTimestamps();
    }

    public function collectionEnrollments(): HasMany
    {
        return $this->hasMany(CollectionEnrollment::class);
    }

    public function enrollments(): BelongsToMany
    {
        return $this->belongsToMany(Enrollment::class, 'collection_enrollment')
            ->withPivot(['collection_status', 'updated_at']);
            // ->withTimestamps();
        ;
    }
}
