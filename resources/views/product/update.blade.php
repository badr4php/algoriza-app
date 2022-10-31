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
                    <form method="POST" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="mt-4">
                        <x-input-label for="password" :value="__('Name')" />

                        <x-text-input id="name" class="block mt-1 w-full"
                                type="text"
                                name="name"
                                value="{{$product->name}}"
                                required />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Category</label>
                            <select id="categories" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose a Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected': ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tags" :value="__('Tags')" />
                            <x-text-input id="tags" class="block mt-1 w-full"
                                type="text"
                                name="tags"
                                value="{{$product->tags}}"
                                required />

                            <x-input-error :messages="$errors->get('tags')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message...">
                                {{$product->description}}
                            </textarea>
                        </div>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Picture</label>
                            <input name="picture" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
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