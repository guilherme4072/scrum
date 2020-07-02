<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $table = 'user_contacts';
    protected $fillable = [
        'user_id',
        'address',
        'number',
        'district',
        'postalcode',
        'complement',
        'city',
        'state',
        'phone',
        'cell',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
