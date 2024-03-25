<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SavingApplication extends Model
{
    protected $table = 'saving_applications';
    protected $fillable = [
        'company_id', 'saving_id', 'first_name', 'last_name', 'address', 'phone', 'amount', 'no_identitas', 'email', 'kode_pengajuan', 'status', 'ibu_kandung', 'ktp_upload', 'ktp_selfie', 'employment', 'salary', 'province', 'city', 'subdistrict', 'ward'
    ];

    public function Company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

    public function Savings(): BelongsTo{
        return $this->belongsTo(Saving::class);
    }

    use HasFactory;
}
