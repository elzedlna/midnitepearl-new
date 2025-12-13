<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class CategoriesTable extends Component
{
    use WithPagination;

    // modal state
    public $showModal = false;
    public $editMode = false;
    public $categoryId = null;

    // form
    public $name = '';
    public $slug = '';
    public $description = '';
    public $is_active = true;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $this->categoryId,
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

    public function openEditModal($categoryId)
    {
        $this->resetForm();
        $category = Category::findOrFail($categoryId);

        $this->categoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
        $this->is_active = $category->is_active;

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
            $category = Category::findOrFail($this->categoryId);
            $category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'is_active' => $this->is_active,
            ]);

            session()->flash('success', 'Category updated successfully');
        } else {
            Category::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'description' => $this->description,
                'is_active' => $this->is_active,
            ]);

            session()->flash('success', 'Category created successfully');
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
        $this->categoryId = null;
        $this->name = '';
        $this->slug = '';
        $this->description = '';
        $this->is_active = true;
    }

    public function render()
    {
        $categories = Category::latest()->paginate(10);

        return view('livewire.categories-table', [
            'categories' => $categories,
        ]);
    }
}
