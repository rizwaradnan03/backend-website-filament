<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialMedia extends Model
{
    protected $table = 'social_medias';
    protected $fillable = [
        'company_id', 'url', 'type'
    ];

    public function company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
