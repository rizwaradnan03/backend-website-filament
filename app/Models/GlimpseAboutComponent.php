<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GlimpseAboutComponent extends Model
{
    protected $table = 'glimpse_about_component';
    protected $fillable = [
        'company_id', 'glimpse_about', 'icon', 'title', 'description'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function GlimpseAbout(): BelongsTo{
        return $this->belongsTo(GlimpseAbout::class);
    }

    use HasFactory;
}
