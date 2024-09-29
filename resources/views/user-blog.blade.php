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
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 light:text-gray-400">
                <thead class="text-xs text-gray-300 uppercase bg-gray-50 dark:bg-gray-500 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Author
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Created
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                @foreach($posts as $post)
                <tbody>
                    <tr class="bg-white border-b light:bg-gray-800 light:border-gray-200">
                        <td class="px-6 py-4 text-left">
                            {{$post['title']}}
                        </td>
                        <td class="px-6 py-4 w-[50px] text-left">
                            {{$post['description']}}
                        </td>
                        <td class="px-6 py-4 text-left">
                            {{$post->user->name}}
                        </td>
                        <td class="px-6 py-4 text-left">
                            {{$post['created_at']->format('Y-m-d')}}
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

            {{$posts->links()}}
        </div>
</x-guest-layout>
