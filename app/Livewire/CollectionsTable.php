<?php

namespace App\Livewire;

use App\Models\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class CollectionsTable extends Component
{
    use WithPagination;

    public function render()
    {
        $collections = Collection::latest()->paginate(10);

        return view('livewire.collections-table', [
            'collections' => $collections,
        ]);
    }
}
