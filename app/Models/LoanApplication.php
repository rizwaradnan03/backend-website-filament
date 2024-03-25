<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoanApplication extends Model
{
    protected $table = 'loan_applications';
    protected $fillable = [
        'company_id', 'loan_id', 'first_name', 'last_name', 'address', 'phone', 'amount', 'jangka_waktu', 'no_identitas', 'email', 'kode_pengajuan', 'status', 'ibu_kandung', 'ktp_upload', 'ktp_selfie', 'employment', 'salary', 'province', 'city', 'subdistrict', 'ward'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function Loans(): BelongsTo{
        return $this->belongsTo(Loan::class);
    }

    use HasFactory;
}
