<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'company_id', 'blog_category_id', 'title', 'slug', 'image', 'content'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function BlogCategory(): BelongsTo{
        return $this->belongsTo(BlogCategory::class);
    }

    use HasFactory;
}
