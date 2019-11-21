<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

///**
// * @mixin \App\AccountBuilder
// */
class Account extends Model
{
    public function scopeActive(Builder $query)
    {
        $query->where('active', 1);
    }

    public function newEloquentBuilder($query): AccountBuilder
    {
        return new AccountBuilder($query);
    }
}
