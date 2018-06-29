<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    public function loan()
    {
        return $this->belongsTo('App\Loan');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
