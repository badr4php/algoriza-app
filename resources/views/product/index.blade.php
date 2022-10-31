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
                    <thead>
                        <tr>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Name</th>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Category</th>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Created at</th>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                    @foreach ($products as $product)
                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->name}}</td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->category->name}}</td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$product->created_at}}</td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">
                                <a href="{{route('products.edit', $product->id)}}" class="rounded-md bg-green-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Edit</a>
                                <a href="{{route('products.show', $product->id)}}" class="rounded-md bg-blue-500 text-white focus:ring-red-600 px-4 py-2 text-sm">View</a>
                                <form method="POST" action="{{route('products.delete', $product->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>