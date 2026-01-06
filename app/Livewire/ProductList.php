<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductList extends Component
{
    use WithPagination;

    public $search = '';
    public $category = '';
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $useMockData = true; 

    protected $queryString = ['search', 'category', 'sortBy', 'sortDirection'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
    }

    
    private function getMockProducts()
    {
        $allProducts = collect([
            [
                'id' => 1,
                'name' => 'Pearl Elegance Bracelet',
                'price' => 89.90,
                'category' => 'bracelets',
                'image' => 'products/bracelet1.jpg',
                'created_at' => '2024-01-15'
            ],
            [
                'id' => 2,
                'name' => 'Golden Chain Necklace',
                'price' => 159.90,
                'category' => 'necklaces',
                'image' => 'products/necklace1.jpg',
                'created_at' => '2024-01-20'
            ],
            [
                'id' => 3,
                'name' => 'Diamond Stud Earrings',
                'price' => 299.90,
                'category' => 'earrings',
                'image' => 'products/earring1.jpg',
                'created_at' => '2024-01-25'
            ],
            [
                'id' => 4,
                'name' => 'Silver Band Ring',
                'price' => 129.90,
                'category' => 'rings',
                'image' => 'products/ring1.jpg',
                'created_at' => '2024-01-18'
            ],
            [
                'id' => 5,
                'name' => 'Crystal Charm Bracelet',
                'price' => 79.90,
                'category' => 'bracelets',
                'image' => 'products/bracelet2.jpg',
                'created_at' => '2024-01-22'
            ],
            [
                'id' => 6,
                'name' => 'Rose Gold Pendant Necklace',
                'price' => 189.90,
                'category' => 'necklaces',
                'image' => 'products/necklace2.jpg',
                'created_at' => '2024-01-28'
            ],
        ]);

        if ($this->search) {
            $allProducts = $allProducts->filter(function ($product) {
                return stripos($product['name'], $this->search) !== false;
            });
        }

        if ($this->category) {
            $allProducts = $allProducts->filter(function ($product) {
                return $product['category'] === $this->category;
            });
        }

        $allProducts = $allProducts->sortBy($this->sortBy, SORT_REGULAR, $this->sortDirection === 'desc');

        $currentPage = request()->get('page', 1);
        $perPage = 8;
        $items = $allProducts->forPage($currentPage, $perPage)->values();
        
        return new \Illuminate\Pagination\LengthAwarePaginator(
            $items,
            $allProducts->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    }

    
    private function getDatabaseProducts()
    {
        return Product::query()
            ->when($this->search, function($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->when($this->category, function($query) {
                $query->where('category', $this->category);
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(8);
    }

    public function render()
    {
        return view('livewire.components.product-list', [
            'products' => $this->useMockData 
                ? $this->getMockProducts() 
                : $this->getDatabaseProducts()
        ]);
    }
}