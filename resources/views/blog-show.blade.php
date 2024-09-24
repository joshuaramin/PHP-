<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post') }}
        </h2>
    </x-slot>
    <div class="p-5">
        <div class="w-[500px] min-h-[400px] bg-white rounded-md p-4">
            <h2 class="text-lg font-bold">{{$posts["title"]}}</h2>
            <span class="text-sm">Date Posted: {{$posts["timestamp"]}}</span>
            <p class="text-lg font-bold">{{$posts["description"]}}</p>
        </div>
</x-guest-layout>