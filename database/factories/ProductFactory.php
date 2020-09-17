<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;


   
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //required: 'name' (only field not nullable, w/ no default value)
        return [
            'name' => 'ProductQ',
            'printable' => true,   
            'categories_id' => Category::Factory(),    
            'colors' => [
                'red', 
                'black', 
                'white',
                'yellow',
                'green',
                'purple',
                'blue',
                'brown',
                'orange',
                'gray'
            ],
            'sizes' => [
                'XL',
                '2XL',
                '3XL',
                '4XL',
                '5XL',
                '6XL'
            ],
            'materials' => [
                'cotton'
            ]
        ];
    }

    
}
