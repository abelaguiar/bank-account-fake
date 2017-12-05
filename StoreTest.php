<?php

class StoreTest extends TestCase
{
    /** @test */
    function it_has_products()
    {
        $store = factory(Store::class)->create();
        factory(Product::class, 5)->create(['store_id' => $store->id]);

        $this->assertEquals(5, $store->products()->count());
        $this->assertInstanceOf(Collection::class, $store->products);
    }
}
