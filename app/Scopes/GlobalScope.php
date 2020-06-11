<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class GlobalScope implements Scope
{
     /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void


    public function scopeLatestFirst($query){
        return $query->orderBy('id', 'desc');
    }

    public function scopeFilter($query) {
        if ($companyId = request('company_id')) {
            $query->where('company_id', $companyId);
        }
        if ($search = request('search')) {
            $query->where('first_name', 'LIKE', "%{$search}%");
        }

        return $query;
    }*/

    public function apply(Builder $builder, Model $model)
    {
        if ($companyId = request('company_id')) {
            $builder->where('company_id', $companyId);
        }
        if ($search = request('search')) {
            $builder->where('first_name', 'LIKE', "{$search}%")
                    ->orWhere('last_name', 'LIKE', "{$search}%");
        }

        return $builder->orderBy('first_name', 'asc');
    }

}

?>
