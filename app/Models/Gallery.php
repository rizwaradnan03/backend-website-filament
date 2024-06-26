<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = [
        'company_id', 'image'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
