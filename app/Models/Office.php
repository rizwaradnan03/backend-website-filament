<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Office extends Model
{
    protected $table = 'offices';
    protected $fillable = [
        'company_id', 'name', 'address', 'latitude', 'longitude', 'phone', 'slug', 'google_maps_url'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
