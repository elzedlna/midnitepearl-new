<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $items = [];
    public $open = false;

    protected $listeners = [
        'addToCart' => 'add',
        'toggle-cart' => 'toggle',
    ];

    public function mount()
    {
        $this->items = session()->get('cart', []);
    }

    public function updated($property)
    {
        if ($property === 'items') {
            session()->put('cart', $this->items);
        }
    }

    public function toggle()
    {
        $this->open = ! $this->open;
    }

        public function add($id, $name, $price, $image)
    {
        if (isset($this->items[$id])) {
            $this->items[$id]['qty']++;
        } else {
            $this->items[$id] = [
                'id'    => $id,
                'name'  => $name,
                'price' => $price,
                'image' => $image,
                'qty'   => 1,
            ];
        }

        session()->put('cart', $this->items);
        $this->open = true;
    }

    public function increment($id)
    {
        if (isset($this->items[$id])) {
            $this->items[$id]['qty']++;
        }
    }
    
    public function decrement($id)
    {
        if (isset($this->items[$id]) && $this->items[$id]['qty'] > 1) {
            $this->items[$id]['qty']--;
        }
    }

    public function remove($id)
    {
        unset($this->items[$id]);
    }

    
    public function getSubtotalProperty()
    {
        return collect($this->items)->sum(
            fn ($item) => $item['price'] * $item['qty']
        );
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
