<?php

class ProductController extends BaseController
{
    /**
     * @param  Store  $store
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Store $store)
    {
        $repository = app(StoreRepository::class);

        $products = $repository->findProducts($store);

        return response()->json($products);
    }
}
