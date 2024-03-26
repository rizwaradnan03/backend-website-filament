<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carousel extends Model
{
    protected $table = 'carousels';
    protected $fillable = [
        'company_id', 'name', 'image'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
