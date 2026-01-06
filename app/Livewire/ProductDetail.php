<?php

namespace App\Livewire;

use Livewire\Component;

class ProductDetail extends Component
{
    public $productId;
    public $product;
    public $quantity = 1;

    public function mount($id)
    {
        $this->productId = $id;
        $this->product = $this->getMockProduct();
    }

    private function getMockProduct()
    {
        // Dummy data for testing - just one product for now
        return [
            'id' => 1,
            'name' => 'Sangria Brooch',
            'price' => 42.99,
            'category' => 'brooches',
            'description' => 'Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.',
            'details' => 'Pearl, Silver sterling, diamonds',
            'care_instructions' => 'Store in a dry cool place, avoid harsh substance such as perfumes, liquid and water',
            'images' => [
                'products/brooch1.jpg',
                'products/brooch2.jpg',
                'products/brooch3.jpg',
                'products/brooch4.jpg',
            ]
        ];
    }

    public function increaseQuantity()
    {
        $this->quantity++;
    }

    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        $this->dispatch('addToCart', [
            'id'    => $this->product['id'],
            'name'  => $this->product['name'],
            'price' => $this->product['price'],
            'image' => $this->product['images'][0] ?? null,
        ]);
    }


    public function render()
    {
        return view('livewire.product-detail');
    }
}