<?php

namespace Tests\Unit;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_product_store()
    {
            $response = $this->call('POST', '/products', [
                'cat_id' => '2',
                'name' => 'some book Name',
                'description' => 'dummy description',
                'price' => '250',
            ]);

           $response->assertStatus($response->status(),302);
    }

        public function test_category_store()
    {
            $response = $this->call('POST', '/categories', [
                'cat_id' => '2',
                'name' => 'some book Name',
                'description' => 'dummy description',
                'price' => '250',
            ]);

           $response->assertStatus($response->status(),302);
    }
    public function test_login_form(){
        $response = $this->get('/customer-login');
        $response->assertStatus($response->status(),200);
    }
}
