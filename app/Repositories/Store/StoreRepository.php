<?php

class StoreRepository
{
    public function findProducts(Store $store): Collection
    {
        return $store->products;
    }
}
