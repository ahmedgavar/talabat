<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['store_id', 'category_id', 'status'];
    public function scopeFilter(Builder $builder, $filters)
    {
        $options = array_merge([
            'store_id' => null,
            'category_id' => null,
            'tags' => [],
            'status' => 'active',
        ], $filters);
        $builder->when($options['store_id'], function ($builder, $value) {

            $builder->where('store_id', $value);
        });
        $builder->when($options['category_id'], function ($builder, $value) {

            $builder->where('category_id', $value);
        });
        $builder->when($options['store_id'], function ($builder, $value) {

            $builder->where('store_id', $value);
        });
    }

}
