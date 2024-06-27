@extends('layouts.app')

@section('title', 'Data Customer')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Data Customer</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white">
            <div class="bg-white">
                <button type="button" data-modal-target="new-customer-modal" data-modal-toggle="new-customer-modal"
                    class="bg-green-500 hover:opacity-70 text-white rounded-md shadow-md px-4 py-2">Tambah Customer</button>
            </div>
        </div>
        <div class="bg-white p-2 rounded-md shadow-md border border-gray-200">
            <table id="customerTable" class="display compact hover"
                style="width:100%; padding-top: 1em; padding-bottom: 1em;">
                <thead class="bg-gray-100 border border-gray-200">
                    <tr class="text-gray-700 text-left">
                        <th scope="col">
                            Nama
                        </th>
                        <th scope="col">
                            Alamat
                        </th>
                        <th scope="col">
                            No Telp
                        </th>
                        <th scope="col">
                            Url Gmaps
                        </th>
                        <th scope="col">
                            Reg. Cabang
                        </th>
                        <th scope="col">
                            Tgl Registrasi
                        </th>
                        <th scope="col">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $item)
                        <tr class="text-gray-700 text-sm border-r border-l border-b border-gray-300">
                            <td scope="row">
                                {{ $item->nama }}
                            </td>
                            <td>
                                {{ $item->alamat }}
                            </td>
                            <td>
                                {{ $item->no_telp }}
                            </td>
                            <td>
                                <a href="{{ $item->url_gmaps }}" class="text-sky-500" target="_blank"
                                    rel="noopener noreferrer">{{ $item->url_gmaps }}</a>
                            </td>
                            <td>
                                {{ $item->cabang->name }}
                            </td>
                            <td>
                                {{ $item->tanggal_registrasi }}
                            </td>
                            <td class="flex items-center justify-center gap-2 py-3">
                                <form id="disabled-form-{{ $item->id }}"
                                    action="{{ route('admin.master.pelanggan.disabled', ['id' => $item->id]) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <button type="button"
                                    class="rounded-md font-medium text-sm text-white bg-red-500 hover:opacity-75 px-2 py-1"
                                    onclick="confirmDisabled({{ $item->id }})">Disabled</button>
                                <a href="#" data-item-id="{{ $item->id }}" data-item-nama="{{ $item->nama }}"
                                    data-item-alamat="{{ $item->alamat }}" data-item-url-gmaps="{{ $item->url_gmaps }}"
                                    data-item-no-telp="{{ $item->no_telp }}" data-item-email="{{ $item->email }}"
                                    data-item-cabang="{{ $item->id_unit }}"
                                    data-item-tanggal-registrasi="{{ $item->tanggal_registrasi }}"
                                    class="edit-btn bg-blue-500 hover:opacity-75 px-2 py-1 text-sm rounded-md shadow-sm text-white">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Add New Customer -->
    <div id="new-customer-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Tambah Pelanggan Baru
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="new-customer-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5 shadow-md rounded-md" action="{{ route('admin.master.pelanggan') }}"
                    method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input nama customer" required="">
                        </div>
                        <div class="">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input alamat customer" required="">
                        </div>
                        <div class="">
                            <label for="url_gmaps" class="block mb-2 text-sm font-medium text-gray-900">URL Google
                                Maps</label>
                            <input type="url" name="url_gmaps" id="url_gmaps"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="https://map.google.com" required="">
                        </div>
                        <div class="">
                            <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                            <input type="text" name="no_telp" id="no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="08**********" required="">
                        </div>
                        <div class="">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="email customer" required="">
                        </div>
                        <div class="">
                            <label for="cabang" class="block mb-2 text-sm font-medium text-gray-900 ">Cabang</label>
                            <select id="cabang" name="cabang"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                                <option selected="">Pilih Cabang</option>
                                @foreach ($units as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
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
                        Submit Data Customer
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Add New Customer -->

    <!-- Modal Edit Data Customer -->
    <div id="edit-customer-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Edit Data Customer
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="edit-customer-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5 shadow-md rounded-md" action="{{ route('admin.master.pelanggan.update') }}"
                    method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="">
                            <label for="edit_nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" id="edit_id" name="id" hidden required>
                            <input type="text" name="nama" id="edit_nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input nama customer" required="">
                        </div>
                        <div class="">
                            <label for="edit_alamat" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat</label>
                            <input type="text" name="alamat" id="edit_alamat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input alamat customer" required="">
                        </div>
                        <div class="">
                            <label for="edit_url_gmaps" class="block mb-2 text-sm font-medium text-gray-900">URL Google
                                Maps</label>
                            <input type="url" name="url_gmaps" id="edit_url_gmaps"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="https://map.google.com" required="">
                        </div>
                        <div class="">
                            <label for="edit_no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                            <input type="text" name="no_telp" id="edit_no_telp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="08**********" required="">
                        </div>
                        <div class="">
                            <label for="edit_email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="edit_email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="email customer" required="">
                        </div>
                        <div class="">
                            <label for="edit_cabang" class="block mb-2 text-sm font-medium text-gray-900 ">Cabang</label>
                            <select id="edit_cabang" name="cabang"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                                <option selected="">Pilih Cabang</option>
                                @foreach ($units as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">
                            <label for="edit_tanggal_registrasi"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal Reistrasi</label>
                            <input type="text" name="tanggal_registrasi" id="edit_tanggal_registrasi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 cursor-not-allowed"
                                readonly>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>

                        Update Data Customer
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit Data Customer -->

@endsection

@section('scripts')
    <script>
        // datatable
        $(document).ready(function() {

            var table = $('#customerTable').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });

        // new customer modal
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('new-customer-modal');
            const openModalButton = document.querySelector('[data-modal-target="new-customer-modal"]');
            const closeModalButton = modal.querySelector('[data-modal-toggle="new-customer-modal"]');

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

        // edit data customer
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-btn');
            const modal = document.getElementById('edit-customer-modal');
            const idInput = document.getElementById('edit_id');
            const namaInput = document.getElementById('edit_nama');
            const alamatInput = document.getElementById('edit_alamat');
            const urlGmapsInput = document.getElementById('edit_url_gmaps');
            const noTelpInput = document.getElementById('edit_no_telp');
            const emailInput = document.getElementById('edit_email');
            const cabangSelect = document.getElementById('edit_cabang');
            const tanggalResgistrasiInput = document.getElementById('edit_tanggal_registrasi');

            editButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Ambil data dari atribut data-item-*
                    const id = button.getAttribute('data-item-id');
                    const nama = button.getAttribute('data-item-nama');
                    const alamat = button.getAttribute('data-item-alamat');
                    const urlGmaps = button.getAttribute('data-item-url-gmaps');
                    const noTelp = button.getAttribute('data-item-no-telp');
                    const email = button.getAttribute('data-item-email');
                    const cabang = button.getAttribute('data-item-cabang');
                    const tanggalRegistrasi = button.getAttribute('data-item-tanggal-registrasi');

                    // Isi form modal dengan data
                    idInput.value = id;
                    namaInput.value = nama;
                    alamatInput.value = alamat;
                    urlGmapsInput.value = urlGmaps;
                    noTelpInput.value = noTelp;
                    emailInput.value = email;
                    cabangSelect.value = cabang;
                    tanggalResgistrasiInput.value = tanggalRegistrasi;

                    // Tampilkan modal
                    modal.classList.remove('hidden');
                });
            });

            // Close modal when the close button is clicked
            const closeButton = modal.querySelector('[data-modal-toggle="edit-customer-modal"]');
            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
        });


        // delete customer confirmation
        function confirmDisabled(custId) {
            Swal.fire({
                text: 'Apakah anda yakin disabled data pelanggan tersebut?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Disabled!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('disabled-form-' + custId).submit();
                }
            })
        }
    </script>
@endsection
