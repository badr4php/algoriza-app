<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('products.create')" :active="request()->routeIs('products.create')">
                        {{ __('Create New Product') }}
                    </x-nav-link>
                </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="border-collapse table-auto w-full text-sm">
                    <tbody class="bg-white dark:bg-slate-800">
                    
                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">Name : </td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->name}}</td>
                        </tr>
                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">Category : </td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->name}}</td>
                        </tr>
                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">Description : </td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->description}}</td>
                        </tr>
                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">Tags : </td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->tags}}</td>
                        </tr>

                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">Picture : </td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400"><img src="{{asset(Storage::url($product->picture))}}" alt="Italian Trulli"/></td>
                        </tr>
                   
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>