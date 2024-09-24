<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>
    <div class="p-5">
        <div class="w-full min-h-[400px] bg-white rounded-md p-5">
            <form class="flex flex-col gap-2 w-[250px]">
                <input class="w-[250px] h-[100px] py-2 rounded-md px-4 text-gray-500" type="text" value="" placeholder="Title" />
                <textarea class="h-[500px] rounded"></textarea>
                <div class="w-full flex justify-end items-center">
                    <button class="p-2 px-4 bg-green-400 rounded">
                        <span class="text-md text-white">Submit</span>
                    </button>
                </div>
            </form>
        </div>
</x-guest-layout>