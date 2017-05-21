<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';

    protected $fillable = [ 'code', 'title' ];

    public function accounts() {
        return $this->hasMany(Account::class, 'bank_id', 'id');
    }
}
