<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;

    public function render()
    {
        $categories = Category::latest()->paginate(10);

        return view('livewire.categories-table', [
            'categories' => $categories,
        ]);
    }
}
