@extends('layouts.app')

@section('title', 'Pembelian Sparepart')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Pembelian Sparepart</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white flex items-center justify-between">
            <button type="button" data-modal-target="entry-pembelian-sparepart-modal"
                data-modal-toggle="entry-pembelian-sparepart-modal"
                class="bg-emerald-500 hover:opacity-70 text-white rounded-md shadow-md px-3 py-[6px]">Tambah</button>
            <div class="flex items-center justify-end gap-2">
                <select id="filter_cabang" name="filter_cabang"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5"
                    required>
                    <option selected="">Pilih Cabang</option>
                    <option selected="ALL">Semua Cabang</option>
                    @foreach ($units as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
                <div class="flex items-center justify-end gap-1">
                    <input type="date" name="filter_start_date" id="filter_start_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2"
                        placeholder="https://map.google.com" required="" />
                    <span class="w-[5rem] text-center">s/d</span>
                    <input type="date" name="filter_end_date" id="filter_end_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2"
                        placeholder="https://map.google.com" required="" />
                </div>
                <button type="button"
                    class="bg-sky-500 hover:opacity-70 text-white rounded-md shadow-md px-3 py-[6px]">Filter</button>
            </div>
        </div>

        <div class="bg-white mt-2 p-2 rounded-md shadow-md border border-gray-200">
            <table id="responsiveDataTable" class="display compact hover"
                style="width:100%; padding-top: 1em; padding-bottom: 1em;">
                <thead class="bg-gray-100 border border-gray-200">
                    <tr class="text-gray-700 text-left">
                        <th scope="col">
                            No.
                        </th>
                        <th scope="col">
                            Hari/ Tgl Pembelian
                        </th>
                        <th scope="col">
                            Jenis Pembelian
                        </th>
                        <th scope="col">
                            Nama Sparepart
                        </th>
                        <th scope="col">
                            Toko
                        </th>
                        <th scope="col">
                            No. Telp
                        </th>
                        <th scope="col">
                            Harga
                        </th>
                        <th scope="col">
                            Bank
                        </th>
                        <th scope="col">
                            No. Rek
                        </th>
                        <th scope="col">
                            Atas Nama
                        </th>
                        <th scope="col">
                            No TTU
                        </th>
                        <th scope="col">
                            No. Resi
                        </th>
                        <th scope="col">
                            Status Pembayaran
                        </th>
                        <th scope="col">
                            Status Pengiriman
                        </th>
                        <th scope="col">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-gray-700 text-sm border-r border-l border-b border-gray-300">
                        <td>1</td>
                        <td>Senin, 08/07/2024</td>
                        <td>Baru</td>
                        <td>Motherboard</td>
                        <td>Agus Shop</td>
                        <td>085385731242</td>
                        <td>2.500.000</td>
                        <td>BCA</td>
                        <td>21234532568</td>
                        <td>Agus Suprianto</td>
                        <td>
                            <a href="" class="text-blue-500 hover:opacity-75" target="_blank"
                                rel="noopener noreferrer">1230001</a>
                        </td>
                        <td>TRX012314</td>
                        <td>Sudah Dibayar</td>
                        <td>Sudah Dikirim</td>
                        <td class="flex items-center justify-center gap-2 py-3">
                            <button type="button"
                                class="rounded-md font-medium text-sm text-white bg-zinc-500 hover:opacity-75 px-2 py-1">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal Entry Pembelian Sparepart --}}
    <div id="entry-pembelian-sparepart-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Tambah Pembelian Sparepart
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="entry-pembelian-sparepart-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal header -->

                {{-- Modal Body --}}
                <div class="border border-gray-300 p-2 rounded-md">
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="jenis_pembelian" class="col-span-4 text-md font-medium text-gray-800">Jenis
                            Pembelian</label>
                        <select name="jenis_pembelian" id="jenis_pembelian"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                            <option value="" disabled-selected>--Pilih Jenis Pembelian--</option>
                            <option value="Baru">Baru</option>
                            <option value="Return">Return</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="nama_sparepart" class="col-span-4 text-md font-medium text-gray-800">Nama
                            Sparepart</label>
                        <input type="text" name="nama_sparepart" id="nama_sparepart"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input nama sparepart">
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="toko" class="col-span-4 text-md font-medium text-gray-800">Toko</label>
                        <input type="text" name="toko" id="toko"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input nama toko">
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="no_telp" class="col-span-4 text-md font-medium text-gray-800">No. Telp</label>
                        <input type="text" name="no_telp" id="no_telp"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input nomor telp">
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="harga" class="col-span-4 text-md font-medium text-gray-800">Harga</label>
                        <input type="text" name="harga" id="harga"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input harga sparepart">
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="harga" class="col-span-4 text-md font-medium text-gray-800">No. Rek</label>
                        <input type="text" name="harga" id="harga"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input harga sparepart">
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="harga" class="col-span-4 text-md font-medium text-gray-800">Atas Nama</label>
                        <input type="text" name="atas_nama" id="atas_nama"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input atas nama">
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="harga" class="col-span-4 text-md font-medium text-gray-800">No. Resi</label>
                        <input type="text" name="nomor_resi" id="nomor_resi"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="input nomor resi">
                    </div>
                </div>
                {{-- Modal Body --}}
            </div>
            {{-- Modal Content --}}
        </div>
    </div>
    {{-- Modal Entry Pembelian Sparepart --}}
@endsection

@section('scripts')
    <script>
        // datatable
        $(document).ready(function() {

            var table = $('#responsiveDataTable').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });

        // entry pembelian sparepart modal
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('entry-pembelian-sparepart-modal');
            const openModalButton = document.querySelector('[data-modal-target="entry-pembelian-sparepart-modal"]');
            const closeModalButton = modal.querySelector('[data-modal-toggle="entry-pembelian-sparepart-modal"]');

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
    </script>
@endsection
