<div class="relative shadow-md rounded-lg">
    <div class="pb-4 pt-2 px-3 bg-white">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
            </div>
            <input type="text" wire:model="search"
                class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Cari Berdasarkan Nama">
        </div>
    </div>

    <div class="px-3 bg-white overflow-auto h-[80vh]" style="height: 80vh">
        {{-- <form action="{{ route('absensi.store') }}" method="post">
            @csrf --}}
        <form wire:submit.prevent="store">
            <table class="w-full table-fixed text-sm text-left text-gray-50 mb-20">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-[-1px]">
                    <tr>
                        <th scope="col" class="px-5 w-2/12">
                            #
                        </th>
                        <th scope="col" class="pl-0 pr-1 py-3 w-8/12">
                            Checkbox {{ $count }}
                        </th>
                        <th scope="col" class="pl-4 pr-1 w-2/12">
                            <div class="flex items-center pl-1">
                                {{-- <input id="checkbox-all" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                <label for="checkbox-all" class="sr-only">checkbox</label> --}}
                                H
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($santris as $santri)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-5 w-2/12 text-black">
                                {{ $loop->iteration }}
                                </span>
                            </td>
                            <th scope="row">
                                <label for="checkbox-{{ $santri->id }}"
                                    class="block pl-0 pr-1 py-3 w-full truncate font-medium text-gray-900 whitespace-nowrap cursor-pointer">{{ $santri->nama }}</label>
                            </th>
                            <td>
                                <div class="pl-4 pr-1 py-3 w-full cursor-pointer">
                                    <input id="checkbox-{{ $santri->id }}" type="checkbox"
                                        wire:click="getData({{ $santri->id }}, {{ true }})"
                                        wire:model="hadir.{{ $santri->id }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="absolute left-0 bottom-0 w-full h-[9vh] grid grid-cols-5 bg-gray-50">
                <div class="my-auto col-span-2 text-center text-sm font-bold">
                    Kehadiran
                    <input class="font-normal text-md text-center" name="persentase" value="{{ $persentase }}%"
                        readonly>
                </div>
                <div class="flex flex-col text-center ">
                    <button type="submit"
                        class="relative mx-auto -translate-y-4 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full w-14 h-14 text-sm py-2.5"><i
                            class="fa-regular fa-floppy-disk fa-2xl"></i></button>
                    <p for="" class="text-sm font-bold relative -translate-y-2">Simpan</p>
                </div>
                <div class="my-auto col-span-2 text-center text-sm font-bold">
                    Tanggal
                    <input class="font-normal text-center" value="{{ $tanggal }}" name="tanggal" readonly>
                </div>
            </div>
        </form>
    </div>
</div>
