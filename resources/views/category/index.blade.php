<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }}
            </h2>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('categories.create')" :active="request()->routeIs('categories.create')">
                        {{ __('Create New Category') }}
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
                            <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Title</th>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Status</th>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Created at</th>
                            <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$category->name}}</td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$category->is_active ? 'Active' : 'In Active'}}</td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$category->created_at}}</td>
                            <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">
                                <a href="{{route('categories.edit', $category->id)}}" class="rounded-md bg-green-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Edit</a>
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