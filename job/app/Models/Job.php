<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    /**
     * Get all of the jobsRequests for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobsRequests()
    {
        return $this->hasMany(jobsRequest::class);
    }
}
