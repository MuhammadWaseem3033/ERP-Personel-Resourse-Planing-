<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('alert'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold"></strong>
                        <span class="block sm:inline">{{ session('alert') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                @endif
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg"
                    style="border:5px dashed blue;">
                    @can('create company')
                    <button class="" style="float:right; padding:10px;background-color:rgb(44, 240, 240);color:rgb(51, 54, 56);border-radius:10px;margin:10px;"><a
                            href="{{ route('company.create') }}">Create</a></button>
                @endcan
                    <table class="w-full text-sm text-left bg-slate-600">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mobile
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $company->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $company->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $company->mobile }}
                                    </td>

                                    <td class="px-6 py-4">
                                        @can('edit company')
                                        <a href="{{ route('company.edit', ['company' => $company->id]) }}"
                                                style="color:rgb(13, 13, 218);float:left;" ><x-feathericon-edit class="hover:color-black-400" style="float:left"/></a>
                                        @endcan
                                        @can('delete company') 
                                            <a href="{{ route('company.delete', ['id' => $company->id]) }}"
                                                style="color:rgb(226, 13, 13);"><x-feathericon-trash style="float:left;margin-left:10px;"/></a>
                                        @endcan
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
