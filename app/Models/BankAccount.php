<?php

// File: app/Models/BankAccount.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'account_number',
        'account_name',
        'bank_id'
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'id_bank');
    }
}

