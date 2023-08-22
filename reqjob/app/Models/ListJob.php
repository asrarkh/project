<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id',
        'name',
        'is_active',
    ];

    /**
     * Get all of the reqjobs for the ListJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reqjobs()
    {
        return $this->hasMany(Reqjob::class);
    }
}
