<?php

class ListProductsByStore extends TestCase
{
    /** @test */
    function list_products_by_store()
    {
        $store = factory(Store::class)->create();

        // 5 produtos...
        factory(Product::class)->create(['store_id' => $store->id, 'name' => 'Arroz']);
        factory(Product::class)->create(['store_id' => $store->id, 'name' => 'Feijão']);
        factory(Product::class)->create(['store_id' => $store->id, 'name' => 'Macarrão']);
        factory(Product::class)->create(['store_id' => $store->id, 'name' => 'Carnes']);
        factory(Product::class)->create(['store_id' => $store->id, 'name' => 'Peixes']);

        $response = $this->get("/api/store/{$store->id}/products");

        $response->assertStatus(200);
        $response->assertJson([
            ['name' => 'Arroz'],
            ['name' => 'Feijão'],
            ['name' => 'Macarrão'],
            ['name' => 'Carnes'],
            ['name' => 'Peixes'],
        ]);

        $this->assertCount(5, $response->json());
    }
}
