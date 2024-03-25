<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Saving extends Model
{
    protected $table = 'savings';
    protected $fillable = [
        'company_id', 'product', 'slug', 'suku_bunga', 'image', 'content', 'terms_and_conditions'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function SavingApplications(): HasMany{
        return $this->hasMany(SavingApplication::class);
    }

    use HasFactory;
}
