@extends('layouts.app')

@section('title', 'Dashboard')

@section('script_tambahan')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">Dashboard</h3>

        {{-- Boxes --}}
        <div class="mt-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                <a href="" class="w-full">
                    <div class="flex items-center px-3 py-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-indigo-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                            </svg>

                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">12</h4>
                            <div class="text-md text-gray-500">Dalam Antrian</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-yellow-600 bg-opacity-75 rounded-md">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                            </svg>


                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">8</h4>
                            <div class="text-md text-gray-500">Proses Pengecekan</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-zinc-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                            </svg>

                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">5</h4>
                            <div class="text-md text-gray-500">Menunggu Konfirmasi</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-green-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">12</h4>
                            <div class="text-md text-gray-500">Proses Pengerjaan</div>
                        </div>
                    </div>
                </a>

                {{-- Pemisah Line Box --}}
                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-indigo-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">9</h4>
                            <div class="text-md text-gray-500">Selesai Dikerjakan</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-yellow-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                            <div class="text-md text-gray-500">Dibatalkan</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-zinc-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28" stroke="currentColor"
                                class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">22</h4>
                            <div class="text-md text-gray-500">Total Perbaikan</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-green-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                            <div class="text-md text-gray-500">Pembelian Sparepart</div>
                        </div>
                    </div>
                </a>

                {{-- Pemisah Line Box --}}

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-indigo-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">15</h4>
                            <div class="text-md text-gray-500">Total Pelanggan</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-yellow-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">13</h4>
                            <div class="text-md text-gray-500">Total Anggota</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-zinc-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                            <div class="text-md text-gray-500">Stock Unit</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-green-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                            <div class="text-md text-gray-500">Jadwal Penjemputan</div>
                        </div>
                    </div>
                </a>

                {{-- Pemisah Line Box --}}

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-indigo-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">15</h4>
                            <div class="text-md text-gray-500">Jadwal Pengiriman</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-yellow-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">13</h4>
                            <div class="text-md text-gray-500">Total Penjemputan</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-zinc-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                            <div class="text-md text-gray-500">Total Pengiriman</div>
                        </div>
                    </div>
                </a>

                <a href="" class="w-full">
                    <div class="flex items-center p-3 bg-white hover:opacity-80 rounded-md shadow-sm">
                        <div class="p-2 bg-green-600 bg-opacity-75 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 28 28"
                                stroke="currentColor" class="w-8 h-8 text-white pt-1 pl-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                        </div>

                        <div class="mx-2">
                            <h4 class="text-2xl font-semibold text-gray-700">2</h4>
                            <div class="text-md text-gray-500">Pendapatan Bulan Ini</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        {{-- Boxes --}}

        {{-- Chart Pendapatan --}}
        <div class="mt-3 bg-white border border-gray-300 p-2 rounded-md shadow-md">
            <h3 class="text-center mb-2 text-lg text-gray-700 font-bold">Trend Pendatapan Bulanan</h3>

            {{-- canvas chart --}}
            <canvas id="pendapatanChart"></canvas>
            {{-- canvas chart --}}
        </div>
        {{-- Chart Pendapatan --}}

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Contoh data bulan dan pendapatan dalam Rupiah
            var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ];
            var pendapatan = [10000000, 15000000, 12000000, 20000000, 18000000, 22000000, 24000000, 25000000,
                21000000, 23000000, 27000000, 30000000
            ];

            // Konfigurasi Chart.js
            var ctx = document.getElementById('pendapatanChart').getContext('2d');
            var pendapatanChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: bulan,
                    datasets: [{
                        label: 'Pendapatan Bulanan (Rp)',
                        data: pendapatan,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return 'Rp ' + value.toLocaleString();
                                }
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return 'Pendapatan: Rp ' + tooltipItem.raw.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
