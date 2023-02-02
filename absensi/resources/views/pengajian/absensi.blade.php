@extends('layouts.main')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full table-fixed text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                @for ($i = 1; $i < 12; $i++)
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
    </div>
@endsection
