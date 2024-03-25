<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GlimpseAbout extends Model
{
    protected $table = 'glimpse_about';
    protected $fillable = [
        'company_id', 'description'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function GlimpseAboutComponen(): HasMany{
        return $this->hasMany(GlimpseAboutComponent::class);
    }

    use HasFactory;
}
