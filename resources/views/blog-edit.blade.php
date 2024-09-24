<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>
    <div class="p-5">
        <div class="w-full min-h-[400px] bg-white rounded-md">
            <form class="flex flex-col gap-2 w-[250px]">
                <input class="w-[250px] h-[100px] py-2 rounded-md px-4 text-gray-500" type="text" value="" placeholder="Name" />
                <input class="w-[250px] h-[100px] py-2 px-4 rounded-md text-gray-500" type="number" value="" placeholder="Age" />
                <input class="w-[250px] h-[100px] py-2 px-4 rounded-md text-gray-500" type="text" value="" placeholder="Occupation" />
                <div class="w-full flex justify-end items-center">
                    <button class="p-2 px-4 bg-green-400 rounded">
                        <span class="text-md text-white">Submit</span>
                    </button>
                </div>
            </form>
        </div>
</x-guest-layout>