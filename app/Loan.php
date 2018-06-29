<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function guarantor()
    {
        return $this->belongsTo('App\Guarantor');
    }
}
