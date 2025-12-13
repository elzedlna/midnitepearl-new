<?php

namespace App\Livewire;

use App\Models\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class CollectionsTable extends Component
{
    use WithPagination;

    // modal state
    public $showModal = false;
    public $editMode = false;
    public $collectionId = null;

    // form
    public $name = '';
    public $slug = '';
    public $description = '';
    public $is_active = true;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:collections,slug,' . $this->collectionId,
            'description' => 'nullable|string',
            'is_active' => 'boolean'
        ];
    }

    public function openCreateModal()
    {
        $this->resetForm();
        $this->editMode = false;
        $this->showModal = true;
    }

    public function openEditModal($collectionId)
    {
        $this->resetForm();
        $collection = Collection::findOrFail($collectionId);

        $this->collectionId = $collection->id;
        $this->name = $collection->name;
        $this->slug = $collection->slug;
        $this->description = $collection->description;
        $this->is_active = $collection->is_active;

        $this->editMode = true;
        $this->showModal = true;
    }

    public function updated($propertyName)
    {
        // auto generated from name
        if ($propertyName === 'name') {
            $this->slug = Str::slug($this->name);
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->editMode) {
            $collection = Collection::findOrFail($this->collectionId);
            $collection->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'is_active' => $this->is_active,
            ]);

            session()->flash('success', 'Collection updated successfully');
        } else {
            Collection::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'is_active' => $this->is_active,
            ]);

            session()->flash('success', 'Collection created successfully');
        }

        $this->closeModal();
        $this->resetPage();
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
        $this->resetValidation();
    }

    private function resetForm()
    {
        $this->collectionId = null;
        $this->name = '';
        $this->slug = '';
        $this->description = '';
        $this->is_active = true;
    }

    public function render()
    {
        $collections = Collection::latest()->paginate(10);

        return view('livewire.collections-table', [
            'collections' => $collections,
        ]);
    }
}
