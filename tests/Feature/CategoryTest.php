<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function should_be_get_all_categories()
    {
        $this->handleValidationExceptions();
        $categories = factory(Category::class,5);

        dd($categories);


//        $response->assertStatus(200);
    }
}
