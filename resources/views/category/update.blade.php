<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{route('categories.update', $category->id)}}">
                        @method('PUT')
                        @csrf

                        <div class="mt-4">
                        <x-input-label for="password" :value="__('Name')" />

                        <x-text-input id="name" class="block mt-1 w-full"
                                type="text"
                                name="name"
                                value="{{$category->name}}"
                                required />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                        <x-input-label for="password" :value="__('Status')" />

                        
                        <div class="flex items-center mb-4">
                            <input {{$category->is_active ? 'checked' : ''}} id="default-radio-1" type="radio" value="1" name="is_active" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
                        </div>
                        <div class="flex items-center">
                            <input {{$category->is_active ? '' : 'checked'}} id="default-radio-2" type="radio" value="0" name="is_active" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">In Active</label>
                        </div>

                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>