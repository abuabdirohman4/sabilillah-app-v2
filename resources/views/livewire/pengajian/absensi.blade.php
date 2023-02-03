<div class="relative shadow-md rounded-lg">
    <div class="pb-4 pt-2 px-3 bg-white">
        <div class="relative">
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

    <div class="px-3 bg-white overflow-auto h-[80vh]" style="height: 80vh">
        <form action="">
            <table class="w-full table-fixed text-sm text-left text-gray-50 mb-20">
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
                <tbody x-data="{ checkbox: false }">
                    @for ($i = 1; $i < 22; $i++)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                            <td class="px-5 w-2/12 text-black">
                                {{ $i }}
                            </td>
                            <th scope="row">
                                <div class="pl-0 pr-1 py-3 w-full truncate font-medium text-gray-900 whitespace-nowrap cursor-pointer"
                                    x-on:click="checkbox = !checkbox">Apple MacBook Pro 17</div>
                            </th>
                            <td>
                                <div x-on:click="checkbox = !checkbox" class="pl-4 pr-1 py-3 w-full cursor-pointer">
                                    <input id="checkbox-table-1" type="checkbox" x-model="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            <div class="absolute left-0 bottom-0 w-full h-[9vh] grid grid-cols-5 bg-gray-50">
                <div class="my-auto col-span-2 text-center text-sm font-bold">
                    Kehadiran <br>
                    <span class="font-normal text-lg">
                        100%
                    </span>
                </div>
                <div class="flex flex-col text-center ">
                    <button type="submit"
                        class="relative mx-auto -translate-y-4 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full w-14 h-14 text-sm py-2.5"><i
                            class="fa-regular fa-floppy-disk fa-2xl"></i></button>
                    <p for="" class="text-sm font-bold relative -translate-y-2">Simpan</p>
                </div>
                <div class="my-auto col-span-2 text-center text-sm font-bold">
                    Tanggal <br>
                    <span class="font-normal">
                        2 Februari 2023
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>
