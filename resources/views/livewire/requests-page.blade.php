<div>
    @hasrole('student')
        @if ($request->isEmpty())
            <div class="mt-1.5 p-4">
                
                <div class="mb-4 col-span-full xl:mb-2">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                                    <svg class="mr-2.5 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#"
                                        class="ml-1 text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white md:ml-2">Permohonan
                                        PKL</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-gray-400 dark:text-gray-500 md:ml-2" aria-current="page">Semua
                                        tempat</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Semua tempat PKL</h1>
                </div>
                <div class="sm:flex">
                    <div
                        class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" wire:model.live.debounce.300ms="search" name="search" id="users-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for users">
                        </div>
                        </form>
                        <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        <button type="button" x-data @click="$dispatch('open-modal',{name:'industry'})"
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Tambah Industri
                        </button>
                    </div>
                </div>
            </div>

            <div
                class="mt-2 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:border-blue-500 dark:text-blue-500"
                            aria-current="page">Semua Tempat PKL</a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Nama Industri
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Nama Pimpinan
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            No HP
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Kuota
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Verifikasi
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-800">
                                    @foreach ($industries as $industry)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td
                                                class="p-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $industry->name }}
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white ">
                                                {{ $industry->leader }}
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $industry->phone }}
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white text-wrap">
                                                {{ $industry->address }}
                                            </td>
                                            <td
                                                class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $industry->countAcceptedRequests() }}/{{ $industry->quota }}
                                            </td>
                                            @if ($industry->countAcceptedRequests() >= $industry->quota)
                                                <td
                                                    class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="flex items-center">
                                                        <div class="mr-2 h-2.5 w-2.5 rounded-full bg-red-500"></div>
                                                        Terpenuhi
                                                    </div>
                                                </td>
                                            @else
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="flex items-center">
                                                        <div class="mr-2 h-2.5 w-2.5 rounded-full bg-green-400"></div>
                                                        Tersedia
                                                    </div>
                                                </td>
                                            @endif

                                            @if ($industry->is_verify == 0)
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="flex items-center">
                                                        <div class="mr-2 h-2.5 w-2.5 rounded-full bg-red-500"></div> Belum
                                                        Verifikasi
                                                    </div>
                                                </td>
                                            @else
                                                <td
                                                    class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="flex items-center">
                                                        <div class="mr-2 h-2.5 w-2.5 rounded-full bg-green-400"></div>
                                                        Terverifikasi
                                                    </div>
                                                </td>
                                            @endif

                                            <td class="p-4 space-x-2 whitespace-nowrap">
                                                @if ($industry->countAcceptedRequests() >= $industry->quota)
                                                    <button disabled type="button"
                                                        class="inline-flex px-3 py-2 text-sm font-medium text-center text-white bg-gray-400 rounded-lg cursor-not-allowed dark:bg-gray-500">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z"
                                                                clip-rule="evenodd" />
                                                            <path fill-rule="evenodd"
                                                                d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Terpenuhi
                                                    </button>
                                                @elseif ($industry->is_verify == 0)
                                                    <div
                                                        class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                        <div class="flex items-center">
                                                            <div class="mr-2 h-2.5 w-2.5 rounded-full bg-red-500"></div>
                                                            Menunggu
                                                        </div>
                                                    </div>
                                                @else
                                                    <button x-data @click="$dispatch('open-modal',{name:'request'})"
                                                        wire:click="$dispatch('open-request', { id: {{ $industry->id }} })"
                                                        type="button"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z"
                                                                clip-rule="evenodd" />
                                                            <path fill-rule="evenodd"
                                                                d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        Ajukan Permohonan
                                                    </button>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @if ($industries->lastPage() > 1)
                {{ $industries->links('vendor.livewire.custom') }}
            @else
                <div
                    class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-800 sm:flex sm:justify-between">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Memperlihatkan
                        <span class="font-semibold text-gray-900 dark:text-white">
                            @if ($industries->total() == 0)
                                0
                            @else
                                {{ $industries->firstItem() }}-{{ $industries->lastItem() }}
                            @endif
                        </span> dari <span class="font-semibold text-gray-900 dark:text-white">
                            {{ $industries->total() }}
                        </span>
                    </span>
                    <div class="flex items-center space-x-3">
                        <button
                            class="flex px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg cursor-not-allowed dark:bg-blue-500"
                            disabled>
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Sebelumnya
                        </button>
                        <button
                            class="flex px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg cursor-not-allowed dark:bg-blue-500"
                            disabled>
                            Selanjutnya
                            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
        @else
            <div class="mt-1.5 p-4">
                <div class="mb-4 col-span-full xl:mb-2">
                    <nav class="flex mb-5" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                                    <svg class="mr-2.5 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#"
                                        class="ml-1 text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white md:ml-2">Permohonan
                                        PKL</a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Permohonan PKL</h1>
                </div>
            </div>
            @foreach ($request as $item)
            
                <div class="p-4 pt-0">
                    <div class="grid gap-4 sm:grid-cols-1 lg:grid-cols-2 sm:gap-4 ">
                        <div
                            class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Industri
                            </h5>
                            <table class="table-auto">
                                <tr class="align-text-top">
                                    <td>
                                        <p class="w-56 font-semibold text-gray-900 dark:text-white">Nama Industri
                                    </td>
                                    <td class="w-3">:</td>
                                    <td><span class="font-normal">{{ $item->industry->name }}</span> </p>
                                    </td>
                                </tr>
                                <tr class="align-text-top">
                                    <td>
                                        <p class="w-56 font-semibold text-gray-900 dark:text-white">Telepon
                                    </td>
                                    <td class="w-3">:</td>
                                    <td> <span class="font-normal">{{ $item->industry->phone }}</span> </p>
                                    </td>
                                </tr>
                                <tr class="align-text-top">
                                    <td>
                                        <p class="w-56 font-semibold text-gray-900 dark:text-white">Alamat
                                    </td>
                                    <td class="w-3">:</td>
                                    <td> <span class="font-normal">{{ $item->industry->address }}</span> </p>
                                    </td>
                                </tr>
                            @if ($item->status == 'accepted')

                                <tr class="align-text-top">
                                    <td>
                                        <p class="w-56 font-semibold text-gray-900 dark:text-white">Jam Kerja
                                    </td>
                                    <td class="w-3">:</td>
                                    <td><span
                                        class="font-normal">{{ \Carbon\Carbon::parse($item->industry->entry_time)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($item->industry->exit_time)->format('H:i') }}</span> </p>
                                    </td>
                                </tr>
                                <tr class="align-text-top">
                                    <td>
                                        <p class="w-56 font-semibold text-gray-900 dark:text-white">Guru Pendamping
                                    </td>
                                    <td class="w-3">:</td>
                                    <td> <span class="font-normal">{{ $request->first()->teacher->user->name }}</span> </p>
                                    </td>
                                </tr>
                                <tr class="align-text-top">
                                    <td>
                                        <p class="w-56 font-semibold text-gray-900 dark:text-white">Telp Guru Pendamping
                                    </td>
                                    <td class="w-3">:</td>
                                    <td> <span class="font-normal">{{ $request->first()->teacher->phone }}</span> </p>
                                    </td>
                                </tr>
                                @endif
                            </table>




                        </div>
                        <div
                            class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Progress
                                permohonan
                            </h5>
                            <ol
                                class="relative ml-4 text-gray-500 border-gray-200 border-s dark:border-gray-700 dark:text-gray-400">
                                <li class="mb-10 ms-6">

                                    @if ($limitDateRequest <= \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-green-600 rounded-full -start-4 ring-4 ring-green-600 dark:ring-green-600 dark:bg-green-900">
                                            <svg class="w-3.5 h-3.5 text-green-100 dark:text-green-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                        </span>
                                        <h2 class="pb-2 font-medium leading-tight text-black">Pengajuan Tempat PKL</h3>
                                            <ul>
                                                <p class="text-sm text-gray-800 ">Unduh berkas pengajuan</p>
                                                <li>
                                                    <form action="{{ route('download-permohonan') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="industryId"
                                                            value="{{ $request->first()->industry_id }}">
                                                        <button type="submit"
                                                            class="flex items-center p-2 text-sm italic ">

                                                            <svg class="w-6 h-6 text-gray-800 dark:text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" fill="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                                                                    clip-rule="evenodd" />
                                                                <path fill-rule="evenodd"
                                                                    d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                            <span class="ml-3 text-sm text-green-800 "
                                                                sidebar-toggle-item="">Surat Permohonan Tempat PKL</span>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        @else
                                            <span
                                                class="absolute flex items-center justify-center w-8 h-8 bg-orange-600 rounded-full -start-4 ring-4 ring-orange-600 dark:ring-orange-600 dark:bg-orange-900">
                                                <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 500 500">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z" />
                                                </svg>
                                            </span>
                                            <h2 class="pb-2 font-medium leading-tight text-black">Pengajuan Tempat PKL</h3>
                                                <p class="text-sm text-gray-800 ">Sedang Di evaluasi oleh koordinator</p>
                                    @endif



                                </li>
                                <li class="mb-10 ms-6">
                                    @if ($item->status == 'pending' || $limitDateRequest > \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-gray-400 dark:ring-gray-900 dark:bg-gray-700">
                                            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z" />
                                            </svg>

                                        </span>
                                    @elseif ($item->status == 'process' && $limitDateRequest <= \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-orange-600 rounded-full -start-4 ring-4 ring-orange-600 dark:ring-orange-600 dark:bg-orange-900">
                                            <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M5 14v7M5 4.971v9.541c5.6-5.538 8.4 2.64 14-.086v-9.54C13.4 7.61 10.6-.568 5 4.97Z" />
                                            </svg>
                                            
                                        </span>
                                    @elseif (
                                        ($item->status == 'accepted' && $limitDateRequest <= \Carbon\Carbon::now()) ||
                                            $item->status == 'accepted_unconditional')
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-green-600 rounded-full -start-4 ring-4 ring-green-600 dark:ring-green-600 dark:bg-green-900">
                                            <svg class="w-3.5 h-3.5 text-green-100 dark:text-green-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                        </span>
                                    @else
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-red-800 rounded-full -start-4 ring-4 ring-red-800 dark:ring-gray-900 dark:bg-red-900">
                                            <svg class="w-3.5 h-3.5 text-white dark:text-gray-400 font-bold"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18 17.94 6M18 18 6.06 6" />
                                            </svg>

                                        </span>
                                    @endif
                                    <h2 class="pb-2 font-medium leading-tight text-black">Tanggapan dari DU/DI</h3>
                                        <p class="pb-2 text-sm text-gray-800">Upload surat </p>

                                        {{-- bagian upload --}}
                                        @if ($item->status != 'pending' && $limitDateRequest <= \Carbon\Carbon::now())
                                            <button x-data @click="$dispatch('open-modal',{name:'file_upload'})"
                                                wire:click="$dispatch('upload_form', { id: {{ $item->id }} })"
                                                type="button"
                                                class="inline-flex items-center rounded-lg
                                            @if ($item->status == 'accepted' || $item->status == 'accepted_unconditional') bg-gray-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800
                                            @else
                                                bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 @endif
                                            "
                                                @disabled($item->status == 'accepted' || $item->status == 'accepted_unconditional' || $item->status == 'rejected')>
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                Upload Surat Balasan
                                            </button>
                                        @endif

                                        {{-- bagian akhir --}}

                                        <x-modal name="file_upload" title="Balasan PKL" height="h-[380px]">
                                            <x-slot:body>
                                                <form wire:submit.prevent="save" class="p-4 md:p-5">

                                                    <div>
                                                        <label for="response_status"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                                            Balasan dari DUDI</label>
                                                        <select id="response_status"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                            wire:model="response_status">
                                                            <option selected>Pilih Status Balasan</option>
                                                            <option value="accepted_unconditional">Diterima</option>
                                                            <option value="rejected">Ditolak</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <input type="file" wire:model="response_doc">

                                                        @error('response_doc')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    <button type="submit"
                                                        class="mb-2 me-2 mt-3 flex rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <span class="mr-1">Submit</span>
                                                        <svg class="w-4 h-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z"
                                                                clip-rule="evenodd" />
                                                            <path fill-rule="evenodd"
                                                                d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </form>

                                            </x-slot>
                                        </x-modal>
                                </li>
                                <li class="mb-10 ms-6">
                                    @if ($item->status == 'accepted' && $limitDateRequest <= \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-green-600 rounded-full -start-4 ring-4 ring-green-600 dark:ring-green-600 dark:bg-green-900">
                                            <svg class="w-3.5 h-3.5 text-green-100 dark:text-green-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                        </span>
                                    @elseif ($item->status == 'rejected' && $limitDateRequest <= \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-red-800 rounded-full -start-4 ring-4 ring-red-800 dark:ring-gray-900 dark:bg-red-900">
                                            <svg class="w-3.5 h-3.5 text-white dark:text-gray-400 font-bold"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18 17.94 6M18 18 6.06 6" />
                                            </svg>

                                        </span>
                                    @else
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-gray-400 dark:ring-gray-900 dark:bg-gray-700">
                                            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 16">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                                            </svg>
                                        </span>
                                    @endif
                                    <h2 class="font-medium leading-tight">Proses Verifikasi</h3>
                                        <p class="text-sm">Proses verifikasi oleh admin</p>
                                </li>
                                <li class="ms-6">
                                    @if ($item->status == 'accepted' && $limitDateRequest <= \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-green-600 rounded-full -start-4 ring-4 ring-green-600 dark:ring-green-600 dark:bg-green-900">
                                            <svg class="w-3.5 h-3.5 text-green-100 dark:text-green-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5.917 5.724 10.5 15 1.5" />
                                            </svg>
                                        </span>
                                    @elseif ($item->status == 'rejected' && $limitDateRequest <= \Carbon\Carbon::now())
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-red-800 rounded-full -start-4 ring-4 ring-red-800 dark:ring-gray-900 dark:bg-red-900">
                                            <svg class="w-3.5 h-3.5 text-white dark:text-gray-400 font-bold"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18 17.94 6M18 18 6.06 6" />
                                            </svg>

                                        </span>
                                    @else
                                        <span
                                            class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-gray-400 dark:ring-gray-900 dark:bg-gray-700">
                                            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 18 20">
                                                <path
                                                    d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                                            </svg>
                                        </span>
                                    @endif
                                    <h2 class="font-medium leading-tight">Konfirmasi</h3>
                                        <p class="text-sm">
                                            @if (
                                                $item->status !== 'pending' &&
                                                    $item->status !== 'process' &&
                                                    $item->status !== 'accepted_unconditional' &&
                                                    $limitDateRequest <= \Carbon\Carbon::now())
                                                @if ($item->status == 'accepted' && $limitDateRequest <= \Carbon\Carbon::now())
                                                    <span class="text-green-500">Diterima</span>
                                                @else
                                                    <span class="text-red-600">Ditolak</span>
                                                @endif
                                            @else
                                                Menunggu konfirmasi
                                            @endif
                                        </p>
                                </li>
                            </ol>
                            
                            @if ($item->status == 'rejected' && !$limitDateRequest <= \Carbon\Carbon::now())
                                <div class="mt-4">
                                    <button type="button"
                                        wire:click="$dispatch('relist-request', { id: {{ $item->id }} })"
                                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:ring-green-300 sm:w-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Ulangi Permohonan
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
            @endforeach
                </div>
        @endif
        <x-modal name="request" title="Ajukan PKL" height="h-[380px]">
            <x-slot:body>
                <form wire:submit.prevent="request_pkl" class="p-4 md:p-5">
                    @if (!empty($selectedIndustry))
                        <table class="table">
                            <tr class="align-text-top">
                                <td class="w-32 ">
                                    <p class="font-semibold text-gray-900 dark:text-white">Nama Industri
                                </td>
                                <td class="w-3 ">:</td>
                                <td><span class="font-normal">{{ $selectedIndustry->name }}</span> </p>
                                </td>
                            </tr>
                            <tr class="align-text-top">
                                <td class="w-32 ">
                                    <p class="font-semibold text-gray-900 dark:text-white">Nama Pimpinan
                                </td>
                                <td class="w-3 ">:</td>
                                <td><span class="font-normal">{{ $selectedIndustry->leader }}</span> </p>
                                </td>
                            </tr>
                            <tr class="align-text-top">
                                <td class="w-32 ">
                                    <p class="font-semibold text-gray-900 dark:text-white">Alamat Industri
                                </td>
                                <td class="w-3 ">:</td>
                                <td><span class="font-normal">{{ $selectedIndustry->address }}</span> </p>
                                </td>
                            </tr>
                            <tr class="align-text-top">
                                <td class="w-32 ">
                                    <p class="font-semibold text-gray-900 dark:text-white">Jam Kerja
                                </td>
                                <td class="w-3 ">:</td>
                                <td><span
                                        class="font-normal">{{ \Carbon\Carbon::parse($selectedIndustry->entry_time)->format('H:i') }}
                                        - {{ \Carbon\Carbon::parse($selectedIndustry->exit_time)->format('H:i') }}</span> </p>
                                </td>
                            </tr>
                        </table>
                    @endif

                    <div class="flex pt-2 pb-2 mt-2">
                        <div class="flex items-center h-5">
                            <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox"
                                value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600"
                                required>
                        </div>
                        <div class="text-sm ms-2">
                            <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-300">Saya
                                menyetujui</label>
                            <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">For
                                Saya menyetujui segala ketentuan untuk mendaftar di tempat PKL ini</p>
                        </div>
                    </div>

                    <button type="submit"
                        class="mb-2 me-2 mt-3 flex rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="mr-1">Ajukan</span>
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>



            </form>
        </x-slot>
    </x-modal>

    <x-modal name="industry" title="Industri" height="h-[820px]">
        <x-slot:body>
            <form wire:submit.prevent="saveIndustries" class="p-4 md:p-5">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium
                                @if ($errors->has('form.name')) text-red-700 dark:text-red-500
                                @else
                                    text-gray-900 dark:text-white @endif">
                            Nama Industri
                        </label>
                        <input wire:model.live="form.name" type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Industri">
                        @error('form.name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="leader"
                            class="block mb-2 text-sm font-medium
                                @if ($errors->has('form.leader')) text-red-700 dark:text-red-500
                                @else
                                    text-gray-900 dark:text-white @endif">
                            Nama Pimpinan
                        </label>
                        <input wire:model.live="form.leader" type="text" name="leader" id="leader"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Pimpinan">
                        @error('form.leader')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="phone"
                            class="block mb-2 text-sm font-medium
                                @if ($errors->has('form.phone')) text-red-700 dark:text-red-500
                                @else
                                    text-gray-900 dark:text-white @endif">
                            Telepon
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                    <path
                                        d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                </svg>
                            </div>
                            <input wire:model.live="form.phone" name="phone" type="text" id="phone"
                                aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 ps-10 p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="123-456-7890" />
                        </div>
                        @error('form.phone')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="major"
                            class="block mb-2 text-sm font-medium
                                @if ($errors->has('form.major_id')) text-red-700 dark:text-red-500
                                @else
                                    text-gray-900 dark:text-white @endif">
                            Jurusan
                        </label>
                        <select id="major" wire:model.live="form.major_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if (!$industryId)
                                <option selected>Pilih Jurusan</option>
                            @endif
                            @foreach ($majors as $major)
                                <option value="{{ $major->id }}" @if ($major->id == $form->major_id) selected @endif>
                                    {{ $major->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('form.major_id')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    @hasrole('teacher|k3|coordinator|admin')
                    <div class="col-span-2">
                        <label for="quota"
                            class="block mb-2 text-sm font-medium
                                @if ($errors->has('form.quota')) text-red-700 dark:text-red-500
                                @else
                                    text-gray-900 dark:text-white @endif">
                            Kuota
                        </label>
                        <input wire:model.live="form.quota" type="number" name="quota" id="quota"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="kuota">
                        @error('form.quota')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                    @endhasrole
                    <div class="col-span-2">
                        <label for="quota"
                            class="block mb-2 text-sm font-medium
                                @if ($errors->has('form.address')) text-red-700 dark:text-red-500
                                @else
                                    text-gray-900 dark:text-white @endif">
                            Alamat
                        </label>
                        <textarea wire:model.live="form.address" id="address" rows="4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Alamat industri..."></textarea>
                        @error('form.address')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                </span>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center {{ $industryId ? 'bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 dark:bg-green-400 dark:hover:bg-green-500 dark:focus:ring-green-600' : 'bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800' }} focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="w-5 h-5 me-1 -ms-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{ $industryId ? 'Update' : 'Tambah' }} Industri
                    {{-- <div wire:loading>
                            <div role="status">
                                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div> --}}
                </button>


            </form>
        </x-slot>
    </x-modal>
@endhasrole
@hasrole('admin|superadmin')
    <div>
        <main>
            <div
                class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full mb-1">
                    <div class="mb-4">
                        <nav class="flex mb-5" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                            </path>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#"
                                            class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Permohonan
                                            siswa</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                            aria-current="page">List permohonan</span>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Permohonan Siswa
                        </h1>
                    </div>
                    <div class="sm:flex">
                        <div
                            class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                            <label for="users-search" class="sr-only">Search</label>
                            <div class="relative mt-1 lg:w-64 xl:w-96">
                                <input type="text" wire:model.live.debounce.300ms="search" name="search"
                                    id="users-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search for users">
                            </div>
                            </form>
                            <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                                    class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Nama Pemohon
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Kelas Pemohon
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Industri Dimohon
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Guru Pendamping
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @foreach ($requests as $requestItem)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox"
                                                        class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $requestItem->user->students->first()->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($requestItem->user->students->isNotEmpty())
                                                    @foreach ($requestItem->user->students as $student)
                                                        {{ $student->major->acronym }} {{ $student->group }} @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                @else
                                                    -
                                                @endif
                                            </td>

                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $requestItem->industry->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if (!empty($requestItem->teacher))
                                                    {{ $requestItem->teacher->name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td
                                                class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($requestItem->status == 'process')
                                                    <div class="flex items-center">
                                                        <div class="h-2.5 w-2.5 rounded-full bg-yellow-300 mr-2"></div>
                                                        Diproses
                                                    </div>
                                                @elseif ($requestItem->status == 'accepted_unconditional')
                                                    <div class="flex items-center">
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
                                                        <p>Mendapat Balasan <b> DITERIMA</b></p>
                                                    </div>
                                                @elseif ($requestItem->status == 'accepted')
                                                    <div class="flex items-center">
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
                                                        Diterima
                                                    </div>
                                                @elseif ($requestItem->status == 'rejected' || $requestItem->status == 'relisted')
                                                    <div class="flex items-center">
                                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                        <p>Mendapat Balasan <b> DITOLAK</b></p>
                                                    </div>
                                                @else
                                                    <div class="flex items-center">
                                                        <div class="h-2.5 w-2.5 rounded-full bg-gray-400 mr-2"></div>
                                                        Ditunggu untuk dievaluasi
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="p-4 space-x-2 whitespace-nowrap">
                                                <button x-data @click="$dispatch('open-modal',{name:'process-request'})"
                                                    wire:click="$dispatch('process-request', { id: {{ $requestItem->id }} })"
                                                    type="button"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    {{-- Edit industri --}}
                                                </button>


                                                <button
                                                    wire:click="$dispatch('process-request', { id: {{ $requestItem->id }} })"
                                                    type="button"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    setujui pengajuan
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @if ($requests->lastPage() > 1)
                {{ $requests->links('vendor.livewire.custom') }}
            @else
                <div
                    class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Memperlihatkan
                        <span class="font-semibold text-gray-900 dark:text-white">
                            @if ($requests->total() == 0)
                                0
                            @else
                                {{ $requests->firstItem() }}-{{ $requests->lastItem() }}
                            @endif
                        </span> dari <span class="font-semibold text-gray-900 dark:text-white">
                            {{ $requests->total() }}
                        </span>
                    </span>
                    <div class="flex items-center space-x-3">
                        <button
                            class="flex px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg cursor-not-allowed dark:bg-blue-500"
                            disabled>
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Sebelumnya
                        </button>
                        <button
                            class="flex px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg cursor-not-allowed dark:bg-blue-500"
                            disabled>
                            Selanjutnya
                            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif



            {{-- Add and Edit User Modal --}}
            <x-modal name="process-request" title="Proses Pengajuan" height="h-[620px]">
                <x-slot:body>
                    <form wire:submit.prevent="accept" class="p-4 md:p-5">
                        @if (!empty($selectedRequest))
                            <h5 class="text-xl font-semibold text-gray-900 dark:text-white">Data Industri</h5>

                            <p class="font-semibold text-gray-900 dark:text-white">Nama Industri : <span
                                    class="font-normal">{{ $selectedRequest->industry->name }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Nama Pimpinan : <span
                                    class="font-normal">{{ $selectedRequest->industry->leader }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Jam Kerja : <span
                                    class="font-normal">{{ \Carbon\Carbon::parse($selectedRequest->industry->entry_time)->format('H:i') }}
                                    -
                                    {{ \Carbon\Carbon::parse($selectedRequest->industry->entry_time)->format('H:i') }}</span>
                            </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Telepon : <span
                                    class="font-normal">{{ $selectedRequest->industry->phone }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Alamat : <span
                                    class="font-normal">{{ $selectedRequest->industry->address }}</span> </p>

                            <h5 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white">Data Pemohon</h5>

                            <p class="font-semibold text-gray-900 dark:text-white">Nama pemohon : <span
                                    class="font-normal">{{$selectedRequest->user->students->first()->name}}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Kelas Pemohon : <span
                                    class="font-normal">{{ $selectedRequest->user->students->first()->group }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Jurusan : <span
                                    class="font-normal">{{ $selectedRequest->user->students->first()->major->name }}</span>
                            </p>
                            <p class="font-semibold text-gray-900 dark:text-white">Gender : <span class="font-normal">
                                    @if ($selectedRequest->user->students->first()->gender == 'male')
                                        Laki-laki
                                    @else
                                        Perempuan
                                    @endif
                                </span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">NIS : <span
                                    class="font-normal">{{ $selectedRequest->user->students->first()->NIS }}</span> </p>
                            <p class="font-semibold text-gray-900 dark:text-white">NISN : <span
                                    class="font-normal">{{ $selectedRequest->user->students->first()->NISN }}</span> </p>
                        @endif

                        <div class="grid grid-cols-2 gap-4 mt-3 mb-4">
                            @if ($selectedRequest)
                                @if ($selectedRequest->status == 'rejected')
                                @else
                                    <div class="col-span-2">
                                        <label for="teacher"
                                            class="block mb-2 text-sm font-medium
                                                @if ($errors->has('teacher')) text-red-700 dark:text-red-500
                                                @else
                                                    text-gray-900 dark:text-white @endif">
                                            Guru pendamping
                                            
                                        </label>
                                        <select id="teacher" wire:model.live="teacher"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Pilih Guru pendamping</option>
                                            @foreach ($teachers as $teacher)
                                                <option value="{{ $teacher->teachers->first()->id }}">
                                                    {{ $teacher->teachers->first()->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('teacher')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                    class="font-medium">Oops!
                                                </span>{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endif
                            @endif
                        </div>
                        {{-- {{$selectedRequest->status}} --}}
                        @if ($selectedRequest)
                            @if ($selectedRequest->status == 'accepted')
                                <button type="accept"
                                    class="text-white inline-flex items-center bg-yellow-500 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Ubah guru pendamping
                                </button>
                            @elseif ($selectedRequest->status == 'process' || $selectedRequest->status == 'accepted_unconditional')
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Terima
                                </button>
                                <button wire:click="reject"
                                    class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Tolak
                                </button>
                            @endif
                        @else
                            <p class="text-red-500">Request not found.</p>
                        @endif



                    </form>

                </x-slot>
            </x-modal>

            {{-- Delete User Modal --}}
            {{-- <x-delete-modal name="delete-industry" /> --}}

        </main>
    </div>
@endhasrole
@hasrole('teacher')
    <div>
        <main>
            <div
                class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full mb-1">
                    <div class="mb-4">
                        <nav class="flex mb-5" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                <li class="inline-flex items-center">
                                    <a href="#"
                                        class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-300 dark:hover:text-white">
                                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                            </path>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <a href="#"
                                            class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Siswa</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                            aria-current="page">Siswa Yang didampingi</span>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Siswa Yang
                            didampingi</h1>
                    </div>
                    <div class="sm:flex">
                        <div
                            class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                            <label for="users-search" class="sr-only">Search</label>
                            <div class="relative mt-1 lg:w-64 xl:w-96">
                                <input type="text" wire:model.live.debounce.300ms="search" name="search"
                                    id="users-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search for users">
                            </div>
                            </form>
                            <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                            {{-- <button type="button" x-data @click="$dispatch('open-modal',{name:'industry'})" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    Tambah Industri
                                </button> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>

                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Nama Siswa
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Kelas Siswa
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Jurusan Siswa
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Tempat PKL
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @foreach ($teacherStudentCompanions as $requestItem)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $requestItem->user->name }}
                                            </td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($requestItem->user->students->isNotEmpty())
                                                    @foreach ($requestItem->user->students as $student)
                                                        {{ $student->group }}@if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($requestItem->user->students->isNotEmpty())
                                                    @foreach ($requestItem->user->students as $student)
                                                        {{ $student->major->abbreviation }}@if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                @else
                                                    -
                                                @endif
                                            </td>

                                            <td
                                                class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $requestItem->industry->name }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @if ($teacherStudentCompanions->lastPage() > 1)
                {{ $teacherStudentCompanions->links('vendor.livewire.custom') }}
            @else
                <div
                    class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Memperlihatkan
                        <span class="font-semibold text-gray-900 dark:text-white">
                            @if ($teacherStudentCompanions->total() == 0)
                                0
                            @else
                                {{ $teacherStudentCompanions->firstItem() }}-{{ $teacherStudentCompanions->lastItem() }}
                            @endif
                        </span> dari <span class="font-semibold text-gray-900 dark:text-white">
                            {{ $teacherStudentCompanions->total() }}
                        </span>
                    </span>
                    <div class="flex items-center space-x-3">
                        <button
                            class="flex px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg cursor-not-allowed dark:bg-blue-500"
                            disabled>
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Sebelumnya
                        </button>
                        <button
                            class="flex px-3 py-2 text-sm font-medium text-center text-white bg-blue-400 rounded-lg cursor-not-allowed dark:bg-blue-500"
                            disabled>
                            Selanjutnya
                            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif



            {{-- Add and Edit User Modal --}}

            {{-- Delete User Modal --}}
            {{-- <x-delete-modal name="delete-industry" /> --}}

        </main>
    </div>
@endhasrole
</div>  