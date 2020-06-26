<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'group_id',
        'name',
        'company',
        'cnpj',
        'ie',
    ];
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
