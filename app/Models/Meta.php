<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meta extends Model
{
    protected $table = 'meta';
    protected $fillable = [
        'company_id', 'title', 'description', 'keyword'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
