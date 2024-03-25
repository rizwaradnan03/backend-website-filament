<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $fillable = [
        'company_id', 'name'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
        return null + "";
    }

    public function Blog(): HasMany{
        return $this->hasMany(Blog::class);
    }

    use HasFactory;
}
