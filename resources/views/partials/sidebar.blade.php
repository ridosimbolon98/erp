<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-4">
        <div class="flex items-center">
            <svg class="w-10 h-10" viewBox="0 0 510 510" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                    fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                    d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                    fill="white"></path>
            </svg>

            <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
        </div>
    </div>

    <nav class="mt-4">
        <a class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('admin.dashboard') }}" data-path="/admin/dashboard">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>

        <a class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('admin.ttu') }}" data-path="/admin/ttu">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                </path>
            </svg>

            <span class="mx-3">Tanda Terima Unit</span>
        </a>

        <a class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('admin.pengecekan') }}" data-path="/admin/pengecekan">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>

            <span class="mx-3">Pengecekan</span>
        </a>

        <a class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('admin.pengambilan') }}" data-path="/admin/pengambilan">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
            </svg>

            <span class="mx-3">Pengambilan</span>
        </a>

        <a class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="#" data-path="/admin/return/unit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
            </svg>


            <span class="mx-3">Return Unit</span>
        </a>

        <div x-data="{ menuStatusOpen: false }" class="relative">
            <button @click="menuStatusOpen = ! menuStatusOpen"
                class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 w-full"
                data-path="/admin/status/perbaikan">

                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>

                <span class="mx-3">Status Perbaikan</span>

            </button>
            <!-- Submenu -->
            <div x-cloak x-show="menuStatusOpen" @click.away="menuStatusOpen = false"
                class="origin-top-right mt-2 w-full rounded-md shadow-lg focus:outline-none" role="menu"
                aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="pl-12 pr-2">
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Dalam Antrian</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Proses Pengecekan</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Menunggu Konfirmasi</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Proses Pengerjaan</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Selesai Dikerjakan</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Dibatalkan</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Riwayat Perbaikan</a>
                </div>
            </div>
            <!-- Submenu -->
        </div>

        <div x-data="{ menuDeliveryOpen: false }" class="relative">
            <button @click="menuDeliveryOpen = ! menuDeliveryOpen"
                class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 w-full"
                data-path="/admin/delivery">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>

                <span class="mx-3">Delivery</span>

            </button>
            <!-- Submenu -->
            <div x-cloak x-show="menuDeliveryOpen" @click.away="menuDeliveryOpen = false"
                class="origin-top-right mt-2 w-full rounded-md shadow-lg focus:outline-none" role="menu"
                aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="pl-12 pr-2">
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Jadwal</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Sedang Berlangsung</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Riwayat</a>
                </div>
            </div>
            <!-- Submenu -->
        </div>

        <div x-data="{ menuDeliveryOpen: false }" class="relative">
            <button @click="menuDeliveryOpen = ! menuDeliveryOpen"
                class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 w-full"
                data-path="/admin/master">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                </svg>

                <span class="mx-3">Master Data</span>
            </button>
            <!-- Submenu -->
            <div x-cloak x-show="menuDeliveryOpen" @click.away="menuDeliveryOpen = false"
                class="origin-top-right mt-2 w-full rounded-md shadow-lg focus:outline-none" role="menu"
                aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="pl-12 pr-2">
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Barang</a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Merk</a>
                    <a href="{{ route('admin.master.pelanggan') }}"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Pelanggan</a>
                    <a href="{{ route('admin.master.unit') }}"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Unit</a>
                </div>
            </div>
            <!-- Submenu -->
        </div>

        <a class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="#" data-path="/admin/penjualan">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>

            <span class="mx-3">Penjualan</span>
        </a>

        <div x-data="{ menuSettingOpen: false }" class="relative">
            <button @click="menuSettingOpen = ! menuSettingOpen"
                class="sidebar-link flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 w-full"
                data-path="/admin/pengaturan">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>

                <span class="mx-3">Pengaturan</span>
            </button>
            <!-- Submenu -->
            <div x-cloak x-show="menuSettingOpen" @click.away="menuSettingOpen = false"
                class="origin-top-right mt-2 w-full rounded-md shadow-lg focus:outline-none" role="menu"
                aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="pl-12 pr-2">
                    <a href="{{ route('admin.pengaturan.user') }}"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">User</a>
                    <a href="{{ route('admin.pengaturan.role') }}"
                        class="flex items-center px-2 py-2 text-gray-500 text-md hover:bg-gray-600 hover:text-gray-900 rounded-md"
                        role="menuitem">Roles</a>
                </div>
            </div>
            <!-- Submenu -->
        </div>

    </nav>
</div>
