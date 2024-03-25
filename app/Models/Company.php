<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{

    protected $fillable = ['name', 'slug', 'email', 'address', 'phone', 'type', 'logo_navbar', 'logo_footer', 'helmet'];

    public function SocialMedia(): HasMany{
        return $this->hasMany(SocialMedia::class);
    }

    public function News(): HasMany{
        return $this->hasMany(News::class);
    }

    public function Gallery(): HasMany{
        return $this->hasMany(Gallery::class);
    }

    public function Meta(): HasMany{
        return $this->hasMany(Meta::class);
    }

    public function BlogCategories(): HasMany{
        return $this->hasMany(BlogCategory::class);
    }

    public function Blog(): HasMany{
        return $this->hasMany(Blog::class);
    }

    public function Office(): HasMany{
        return $this->hasMany(Office::class);
    }

    public function Loans(): HasMany{
        return $this->hasMany(Loan::class);
    }

    public function Deposits(): HasMany{
        return $this->hasMany(Deposit::class);
    }

    public function LoanApplications(): HasMany{
        return $this->hasMany(LoanApplication::class);
    }

    public function members(): BelongsToMany{
        return $this->belongsToMany(User::class);
    }

    use HasFactory;
}
