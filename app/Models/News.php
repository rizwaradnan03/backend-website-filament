<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'company_id', 'title', 'slug', 'content'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
