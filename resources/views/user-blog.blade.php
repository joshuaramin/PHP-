<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Management') }}
        </h2>
    </x-slot>
    <div class="p-5">
        <div class="w-full min-h-[400px] p-4 bg-white rounded-md">
            <div class="py-2 w-full flex items-center justify-end">
                <a href="{{ route('blog.create') }}" class="p-2 px-4 rounded-md text-white bg-green-400">Create</a>
            </div>
            <table class="text-sm text-left rtl:text-right text-gray-500 light:text-gray-400">
                <thead class="text-xs text-gray-300 uppercase bg-gray-50 dark:bg-gray-500 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Timestamp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                @foreach($posts as $post)
                <tbody>
                    <tr class="bg-white border-b light:bg-gray-800 light:border-gray-200">
                        <td class="px-6 py-4 text-center">
                            {{$post['title']}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{$post['description']}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{$post['timestamp']}}
                        </td>

                        <td>
                            <a href="{{ route('blog.show', $post['id']) }}" class="p-2 border">
                                View
                            </a>
                            <a href="{{ route('blog.edit', $post['id']) }}" class="p-2 border">
                                Edit
                            </a>
                        </td>>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
</x-guest-layout>