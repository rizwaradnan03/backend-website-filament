<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FinancialStatement extends Model
{
    protected $table = 'financial_statements';
    protected $fillable = [
        'company_id', 'office_id', 'title'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
