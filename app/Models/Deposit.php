<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deposit extends Model
{
    protected $table = 'deposits';
    protected $fillable = [
        'company_id', 'product', 'slug', 'suku_bunga', 'image', 'content', 'terms_and_conditions'
    ];

    public function Company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function DepositApplications(): HasMany
    {
        return $this->hasMany(DepositApplication::class);
    }

    use HasFactory;
}
