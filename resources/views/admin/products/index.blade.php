<x-layouts.admin title="Products">
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Products</h1>
            <p class="text-sm text-gray-600">Manage your product inventory</p>
        </div>
    </x-slot>

    @livewire('products-table')
</x-layouts.admin>