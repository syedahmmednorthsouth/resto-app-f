<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.catagories.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Create Catagroy</a>

            </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>

                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($catagories as $catagory)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="px-6 py-4">
                    {{$catagory->name}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ Storage::url($catagory->image)}}" class="w-16 h-16 rounded">
                </td>
                <td class="px-6 py-4 text-sm font-medium text-gray-900  whitespace-nowrap dark:text-white">
                    {{ $catagory->description}}
                </td>
                {{-- <td class="px-6 py-4 text-sm font-medium text-gray-900  whitespace-nowrap dark:text-white">
                    <a href="{{ route('admin.catagories.edit', $catagory->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded">
                </td> --}}
                <td
                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="flex space-x-2">
                    <a href="{{ route('admin.catagories.edit', $catagory->id) }}"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                    <form
                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                        method="POST"
                        action="{{ route('admin.catagories.destroy', $catagory->id) }}"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>
