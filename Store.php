<?php

class Store extends Model
{
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function addProduct(Product $product): Product
    {
        return $this->products()->save($product);
    }
}
