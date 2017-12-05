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
        $this->assertInstanceOf(Product::class, $store->products->first());
    }

    /** @test */
    function it_can_add_a_product()
    {
        $store = factory(Store::class)->create();
        $product = factory(Product::class)->create();

        $this->assertEquals(0, $store->products()->count());

        $return = $store->addProduct($product);

        $this->assertEquals(1, $store->products()->count());
        $this->assertInstanceOf(Product::class, $return);
    }
}
