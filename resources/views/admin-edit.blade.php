<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User Management') }}
        </h2>
    </x-slot>

    <div class="py-4 px-4 m-h-[500px]">


        <div class="px-12 w-[500px]">
            <h2 class="text-2xl font-bold  py-6">Edit Profile</h2>
            <form class="flex flex-col gap-2 w-[250px]">
                <input class="w-[250px] h-[100px] py-2 rounded-md px-4 text-gray-500" type="text" value="{{$user['name']}}" placeholder="Name" />
                <input class="w-[250px] h-[100px] py-2 px-4 rounded-md text-gray-500" type="number" value="{{$user['age']}}" placeholder="" />
                <input class="w-[250px] h-[100px] py-2 px-4 rounded-md text-gray-500" type="text" value="{{ $user['occupation']}}" placeholder=" " />
                <div class="w-full flex justify-end items-center">
                    <button class="p-2 px-4 bg-green-400 rounded">
                        <span class="text-md text-white">Submit</span>
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>