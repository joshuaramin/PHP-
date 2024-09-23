<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12 flex items-center justify-center">

        <div class="w-[250px]  relative overflow-x-auto">
            <div class="py-2 w-full flex items-center justify-end">
                <a href="{{ route('admin.create') }}" class="p-2 px-4 rounded-md text-white bg-green-400">Create</a>
            </div>
            <table class="text-sm text-left rtl:text-right text-gray-500 light:text-gray-400">
                <thead class="text-xs text-gray-300 uppercase bg-gray-50 dark:bg-gray-500 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Age
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Occupation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                @foreach($users as $user)
                <tbody>
                    <tr class="bg-white border-b light:bg-gray-800 light:border-gray-200">
                        <td class="px-6 py-4 text-center">
                            {{$user['name']}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{$user['age']}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{$user['email']}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{$user['occupation']}}
                        </td>
                        <td>
                            <a href="{{ route('admin.show', $user['id']) }}" class="p-2 border">
                                View
                            </a>
                            <a href="{{ route('admin.edit', $user['id']) }}" class="p-2 border">
                                Edit
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
</x-app-layout>