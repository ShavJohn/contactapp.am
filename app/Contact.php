<?php

namespace App;

use App\Scopes\GlobalScope;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'company_id'];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    protected static function booted()
    {
        parent::boot();
        static::addGlobalScope(new GlobalScope);
    }

}
