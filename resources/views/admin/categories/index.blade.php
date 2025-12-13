<x-layouts.admin title="Categories">
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Categories</h1>
            <p class="text-sm text-gray-600">Manage your product categories</p>
        </div>
    </x-slot>

    @livewire('categories-table')
</x-layouts.admin>