<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    protected $table = 'guarantors';

    public function loan()
    {
        return $this->hasMany('App\Loan');
    }
}
