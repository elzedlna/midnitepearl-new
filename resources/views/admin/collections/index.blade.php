<x-layouts.admin title="Collections">
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Collections</h1>
            <p class="text-sm text-gray-600">Manage your product collections</p>
        </div>
    </x-slot>

    @livewire('collections-table')
</x-layouts.admin>