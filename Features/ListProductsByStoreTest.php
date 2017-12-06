<?php

class ListProductsByStore extends TestCase
{
    /** @test */
    function list_products_by_store()
    {
        $store = factory(Store::class)->create();
        factory(Product::class)->create(['store_id' => $store->id]);

        $response = $this->get("/api/store/{$store->id}/products");

        $response->assertStatus(200);
        $this->assertCount(5, $response->json());
    }
}
