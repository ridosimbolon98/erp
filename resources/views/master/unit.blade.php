@extends('layouts.app')

@section('title', 'Data Cabang')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Data Cabang</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white">
            <div class="relative overflow-x-auto shadow-md sm:rounded-md">
                <div class="pb-4 bg-white">
                    <button type="button" data-modal-target="new-cabang-modal" data-modal-toggle="new-cabang-modal"
                        class="bg-green-500 hover:opacity-70 text-white rounded-md shadow-md px-4 py-2">Tambah
                        Cabang</button>
                </div>
                <table class="w-full border boder-gray-200 rounded-md text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Cabang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Url Gmaps
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bank
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. Rek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Atas Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($units as $item)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $item->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->no_telp }}
                                </td>
                                <td class="px-6 py-4 text-sky-500">
                                    <a href="{{ $item->url_gmaps }}" class="text-sky-500" target="_blank"
                                        rel="noopener noreferrer">{{ $item->url_gmaps }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->bank }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->no_rek }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->atas_nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->status == '1' ? 'Aktif' : 'Non Aktif' }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" data-item-id="{{ $item->id }}"
                                        data-item-name="{{ $item->name }}" data-item-alamat="{{ $item->alamat }}"
                                        data-item-url-gmaps="{{ $item->url_gmaps }}"
                                        data-item-no-telp="{{ $item->no_telp }}" data-item-bank="{{ $item->bank }}"
                                        data-item-no-rek="{{ $item->no_rek }}"
                                        data-item-atas-nama="{{ $item->atas_nama }}"
                                        data-item-status="{{ $item->status }}"
                                        class="edit-btn rounded-md font-medium text-sm text-white bg-blue-500 hover:opacity-75 px-2 py-1">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add New Unit -->
    <div id="new-cabang-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Tambah Cabang Baru
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="new-cabang-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5 shadow-md rounded-md" action="{{ route('admin.master.unit') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input nama cabang" required="">
                        </div>
                        <div class="">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input alamat cabang" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="url_gmaps" class="block mb-2 text-sm font-medium text-gray-900">URL Google
                                Maps</label>
                            <input type="url" name="url_gmaps" id="url_gmaps"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="https://map.google.com" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                            <input type="text" name="no_telp" id="no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="08**********" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="bank" class="block mb-2 text-sm font-medium text-gray-900 ">Bank</label>
                            <select id="bank" name="bank"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                                <option selected="">Pilih Bank Cabang</option>
                                <option value="BCA">BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="BSI">BSI</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="MEGA">MEGA</option>
                                <option value="PERMATA">PERMATA</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="no_rek" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                Rekening</label>
                            <input type="text" name="no_rek" id="no_rek"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="input no. rekening" required="">
                        </div>
                        <div class="">
                            <label for="atas_nama" class="block mb-2 text-sm font-medium text-gray-900 ">Atsa Nama</label>
                            <input type="text" name="atas_nama" id="atas_nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="input atas nama pemilik rek" required="">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Submit Data Cabang
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Add New Unit -->

    <!-- Modal Edit Data Unit -->
    <div id="edit-cabang-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Edit Data Cabang
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="edit-cabang-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5 shadow-md rounded-md" action="{{ route('admin.master.unit.update') }}"
                    method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="">
                            <label for="edit_name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="id" id="edit_id" hidden required="">
                            <input type="text" name="name" id="edit_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input nama cabang" required="">
                        </div>
                        <div class="">
                            <label for="edit_alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="alamat" id="edit_alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input alamat cabang" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="edit_url_gmaps" class="block mb-2 text-sm font-medium text-gray-900">URL Google
                                Maps</label>
                            <input type="url" name="url_gmaps" id="edit_url_gmaps"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="https://map.google.com" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit_no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                            <input type="text" name="no_telp" id="edit_no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="08**********" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit_bank" class="block mb-2 text-sm font-medium text-gray-900 ">Bank</label>
                            <select id="edit_bank" name="bank"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                                <option selected="">Pilih Bank Cabang</option>
                                <option value="BCA">BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="BSI">BSI</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="MEGA">MEGA</option>
                                <option value="PERMATA">PERMATA</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="edit_no_rek" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                Rekening</label>
                            <input type="text" name="no_rek" id="edit_no_rek"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="input no. rekening" required="">
                        </div>
                        <div class="">
                            <label for="edit_atas_nama" class="block mb-2 text-sm font-medium text-gray-900 ">Atas
                                Nama</label>
                            <input type="text" name="atas_nama" id="edit_atas_nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="input atas nama pemilik rek" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="edit_status1" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
                            <div class="flex items-center">
                                <div class="flex items-center me-4">
                                    <input id="edit_status1" type="radio" value="1" name="status"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="edit_status1" class="ms-2 text-sm font-medium text-gray-900">Aktif</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="edit_status2" type="radio" value="2" name="status"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="edit_status2" class="ms-2 text-sm font-medium text-gray-900">Non
                                        Aktif</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Update Data Cabang
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit Data Unit -->

@endsection

@section('scripts')
    <script>
        // new unit modal
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('new-cabang-modal');
            const openModalButton = document.querySelector('[data-modal-target="new-cabang-modal"]');
            const closeModalButton = modal.querySelector('[data-modal-toggle="new-cabang-modal"]');

            openModalButton.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });

            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            // Close the modal when clicking outside of it
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });

        // edit data unit
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-btn');
            const modal = document.getElementById('edit-cabang-modal');
            const idInput = document.getElementById('edit_id');
            const nameInput = document.getElementById('edit_name');
            const alamatInput = document.getElementById('edit_alamat');
            const urlGmapsInput = document.getElementById('edit_url_gmaps');
            const noTelpInput = document.getElementById('edit_no_telp');
            const bankSelect = document.getElementById('edit_bank');
            const noRekInput = document.getElementById('edit_no_rek');
            const atasNamaInput = document.getElementById('edit_atas_nama');
            const statusInput1 = document.getElementById('edit_status1');
            const statusInput2 = document.getElementById('edit_status2');

            editButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Ambil data dari atribut data-item-*
                    const id = button.getAttribute('data-item-id');
                    const name = button.getAttribute('data-item-name');
                    const alamat = button.getAttribute('data-item-alamat');
                    const urlGmaps = button.getAttribute('data-item-url-gmaps');
                    const noTelp = button.getAttribute('data-item-no-telp');
                    const bank = button.getAttribute('data-item-bank');
                    const noRek = button.getAttribute('data-item-no-rek');
                    const atasNama = button.getAttribute('data-item-atas-nama');
                    const status = button.getAttribute('data-item-status');

                    // Isi form modal dengan data
                    idInput.value = id;
                    nameInput.value = name;
                    alamatInput.value = alamat;
                    urlGmapsInput.value = urlGmaps;
                    noTelpInput.value = noTelp;
                    bankSelect.value = bank;
                    noRekInput.value = noRek;
                    atasNamaInput.value = atasNama;

                    // Isi status radio button
                    if (status == 1) {
                        statusInput1.checked = true;
                    } else {
                        statusInput2.checked = true;
                    }

                    // Tampilkan modal
                    modal.classList.remove('hidden');
                });
            });

            // Close modal when the close button is clicked
            const closeButton = modal.querySelector('[data-modal-toggle="edit-cabang-modal"]');
            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
        });
    </script>
@endsection
