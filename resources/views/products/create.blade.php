<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Products') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center w-full h-full py-12">
        <div class="flex items-center justify-center w-full h-full max-w-md p-6 bg-white border border-indigo-600 rounded-xl md:p-8">
            <form method="POST" action="{{ route('products.store') }}">
                @csrf
    
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="description" value="{{ __('Description') }}" />
                    <textarea id="description" class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description"></textarea>
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="price" value="{{ __('Price') }}" />
                    <x-jet-input id="price" class="block w-full mt-1" type="number" name="price" required step="any" />
                </div>
    
                <div class="flex items-center justify-end mt-4">    
                    <x-jet-button class="ml-4">
                        CREATE
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>