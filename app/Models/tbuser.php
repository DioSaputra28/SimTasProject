<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbuser extends Model
{
    protected $table = 'tbuser';
    protected $fillable = [
        'namalengkap',
        'jeniskelamin',
        'username',
        'password',
        'level',
    ];

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($rememberToken)
    {
        $this->remember_token = $rememberToken;
    }
}
