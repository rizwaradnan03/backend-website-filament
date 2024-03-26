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

    public function Blogs(): HasMany{
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

    public function Savings(): HasMany{
        return $this->hasMany(Saving::class);
    }

    public function LoanApplications(): HasMany{
        return $this->hasMany(LoanApplication::class);
    }

    public function DepositApplications(): HasMany{
        return $this->hasMany(DepositApplication::class);
    }

    public function SavingApplications(): HasMany{
        return $this->hasMany(SavingApplication::class);
    }

    public function FinancialStatement(): HasMany{
        return $this->hasMany(FinancialStatement::class);
    }

    public function GlimpseAbout(): HasMany{
        return $this->hasMany(GlimpseAbout::class);
    }

    public function GlimpseAboutComponent(): HasMany{
        return $this->hasMany(GlimpseAboutComponent::class);
    }

    public function Carousels(): HasMany{
        return $this->hasMany(Carousel::class);
    }

    public function members(): BelongsToMany{
        return $this->belongsToMany(User::class);
    }

    use HasFactory;
}
