<div class="bg-white border border-gray-200">
    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
        <h3 class="font-semibold text-gray-800">Categories</h3>
        <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 text-sm text-white bg-teal-600 hover:bg-teal-700 rounded-md">
            Add Category
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Products</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($categories as $category)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                        {{ $category->slug }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        {{ Str::limit($category->description, 50) }}
                    </td>
                    {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $category->products->count() }}
                    </td> --}}
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($category->is_active)
                            <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded-full">Active</span>
                        @else
                            <span class="px-2 py-1 text-xs font-medium text-red-700 bg-red-100 rounded-full">Inactive</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm space-x-2">
                        <a href="{{ route('admin.categories.edit', $category) }}" class="text-teal-600 hover:text-teal-800 font-medium">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-8 text-center text-sm text-gray-500">
                        No categories found. <a href="{{ route('admin.categories.create') }}" class="text-teal-600 hover:text-teal-800">Create one now</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($categories->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $categories->links() }}
    </div>
    @endif
</div>
