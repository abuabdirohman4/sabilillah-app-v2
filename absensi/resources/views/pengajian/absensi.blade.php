@extends('layouts.main')

@section('content')
    <div class="relative shadow-md rounded-lg">
        <div class="py-4 px-3 bg-white">
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search for items">
            </div>
        </div>

        <div class="px-3 bg-white overflow-auto h-[80vh]">
            <form action="">
                <table class="w-full table-fixed text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-[-1px]">
                        <tr>
                            <th scope="col" class="px-5 w-2/12">
                                #
                            </th>
                            <th scope="col" class="pl-0 pr-1 py-3 w-8/12">
                                Nama
                            </th>
                            <th scope="col" class="pl-4 pr-1 w-2/12">
                                <div class="flex items-center">
                                    <input id="checkbox-all" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < 22; $i++)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                                <td class="px-5 w-2/12">
                                    {{ $i }}
                                </td>
                                <th scope="row"
                                    class="pl-0 pr-1 py-3 w-8/12 truncate font-medium text-gray-900 whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="pl-4 pr-1 w-2/12">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <div class="sticky bottom-5">
                    <x-button class="w-full" children="Simpan" type="submit" />
                </div>
            </form>
        </div>
    </div>
@endsection
