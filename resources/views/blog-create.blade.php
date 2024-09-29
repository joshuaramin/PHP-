<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>
    <div class="p-5">
        <div class="w-full min-h-[400px] bg-white rounded-md p-5">
            @if($errors->any())
            <div class="">
                <ul class="flex flex-col gap-2 py-4">
                    @foreach ($errors->all() as $error)
                    <li class="bg-red-200 rounded p-4  text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('success'))
            <div class="p-4 rounded bg-green-200 text-green-600 mb-4">
                {{ session('success') }}
            </div>
            @endif
            <form action=" {{ route('posts.store')}}" method="POST" class="flex flex-col gap-2 w-[250px]">
                @csrf
                <input class="w-[250px] h-[100px] py-2 rounded-md px-4 text-gray-500" type="text" value="" placeholder="Title" name="title" />
                <textarea class="h-[500px] rounded" name="description"></textarea>
                <div class=" w-full flex justify-end items-center">
                    <button class="p-2 px-4 bg-green-400 rounded">
                        <span class="text-md text-white">Submit</span>
                    </button>
                </div>
            </form>
        </div>
</x-guest-layout>
