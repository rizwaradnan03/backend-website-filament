<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepositApplication extends Model
{
    protected $table = 'deposit_applications';
    protected $fillable = [
        'company_id', 'deposit_id', 'first_name', 'last_name', 'address', 'phone', 'amount', 'jangka_waktu', 'no_identitas', 'email', 'kode_pengajuan', 'status', 'ibu_kandung', 'ktp_upload', 'ktp_selfie', 'employment', 'salary', 'province', 'city', 'subdistrict', 'ward'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function Deposits(): BelongsTo{
        return $this->belongsTo(Deposit::class);
    }

    use HasFactory;
}
