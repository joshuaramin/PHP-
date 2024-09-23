<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="relative overflow-x-auto px-12">

            <p>Name: {{ $user['name']}}</p>
            <p>Age: {{ $user['age']}}</p>
            <p>Occupation: {{ $user['occupation']}}</p>

        </div>

    </div>
</x-app-layout>