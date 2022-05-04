<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'bank_id',
        'type_account_id',
        'user_id'
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function typeAccount()
    {
        return $this->belongsTo(TypeAccount::class, 'type_account_id', 'id');
    }
}
