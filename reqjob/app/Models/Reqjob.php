<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reqjob extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id',
        'name',
        'major',
        'job',
        'cv',
        'phone',
        'status',
    ];

    /**
     * Get the listJob that owns the Reqjob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listJob()
    {
        return $this->belongsTo(ListJob::class, 'list_job_id');
    }
}
