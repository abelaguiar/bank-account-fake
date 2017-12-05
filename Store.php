<?php

class Store extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
