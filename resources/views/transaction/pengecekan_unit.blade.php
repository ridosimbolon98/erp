@extends('layouts.app')

@section('title', 'Pengecekan Unit')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Tanda Terima Unit - Perbaikan Baru</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-4 bg-white">
            <form id="form-entry-ttu" action="{{ route('admin.ttu.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-12 gap-2 items-center">
                    <label for="no_ttu" class="col-span-4 text-md font-medium text-gray-800">No. Tanda Terima</label>
                    <div class="col-span-8 grid grid-cols-12 gap-2">
                        <input type="text" name="no_ttu" value="{{ $next_id }}" id="no_ttu"
                            class="col-span-9 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                        <button type="button" data-modal-target="cari-ttu-modal" data-modal-toggle="cari-ttu-modal"
                            class="col-span-3 bg-sky-500 hover:opacity:75 px-2 py-1 rounded-md shadow-md font-semibold text-white">Cari</button>
                    </div>
                </div>

                {{-- Informasi Pelanggan --}}
                <div class="mt-3 border border-gray-200 rounded-md">
                    <div
                        class="bg-zinc-400 mb-1 py-1 px-2 rounded-tr-sm rounded-tl-sm text-white flex justify-center items-center">
                        INFORMASI PELANGGAN</div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="pelanggan" class="col-span-4 text-md font-medium text-gray-800">Nama Pelanggan</label>
                        <input type="text" name="id_pelanggan" id="id_pelanggan" class="hidden" required>
                        <input type="text" name="pelanggan" id="pelanggan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="alamat" class="col-span-4 text-md font-medium text-gray-800">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="url_gmaps" class="col-span-4 text-md font-medium text-gray-800">URL GMaps</label>
                        <input type="url" name="url_gmaps" id="url_gmaps"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="no_telp" class="col-span-4 text-md font-medium text-gray-800">No. Telp</label>
                        <input type="text" name="no_telp" id="no_telp"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 pt-1 pb-2">
                        <label for="reg_pelanggan" class="col-span-4 text-md font-medium text-gray-800">Registrasi
                            Pelanggan</label>
                        <input type="text" name="reg_pelanggan" id="id_reg_pelanggan" class="hidden" required readonly>
                        <input type="text" id="reg_pelanggan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>
                </div>
                {{-- Informasi Pelanggan --}}

                {{-- Identitas Barang --}}
                <div class="mt-3 border border-gray-200 rounded-md">
                    <div
                        class="bg-zinc-400 mb-1 py-1 px-2 rounded-tr-sm rounded-tl-sm text-white flex justify-center items-center">
                        IDENTITAS BARANG</div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="lokasi_unit" class="col-span-4 text-md font-medium text-gray-800">Lokasi Unit</label>
                        <input type="text" name="lokasi_unit" id="lokasi_unit" value="{{ $user_unit->id }}"
                            class="hidden" required>
                        <input type="text" value="{{ $user_unit->name }}"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="merk" class="col-span-4 text-md font-medium text-gray-800">Merk</label>
                        <input type="text" name="merk" id="merk"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="model" class="col-span-4 text-md font-medium text-gray-800">Model</label>
                        <input type="url" name="model" id="model"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="no_seri" class="col-span-4 text-md font-medium text-gray-800">Nomor Seri</label>
                        <input type="text" name="nomor_seri" id="no_seri"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="kelengkapan" class="col-span-4 text-md font-medium text-gray-800">Kelengkapan</label>
                        <div class="col-span-8 flex flex-wrap items-center gap-6">
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="kelengkapan[]" value="Kaki TV"
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="text-gray-700">Kaki TV</span>
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="kelengkapan[]" value="Kabel"
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="text-gray-700">Kabel</span>
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="kelengkapan[]" value="TV"
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="text-gray-700">TV</span>
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="kelengkapan[]" value="Bracket"
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="text-gray-700">Bracket</span>
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="kelengkapan[]" value="Remote"
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="text-gray-700">Remote</span>
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" name="kelengkapan[]" value="Adaptor"
                                    class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="text-gray-700">Adaptor</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 pt-1 pb-2">
                        <label for="keluhan" class="col-span-4 text-md font-medium text-gray-800">Keluhan</label>
                        <textarea type="text" name="keluhan" id="keluhan" rows="3"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required></textarea>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="tgl_masuk" class="col-span-4 text-md font-medium text-gray-800">Hari/Tgl Masuk</label>
                        <input type="date" name="tgl_masuk" id="tgl_masuk"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            readonly>
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="tgl_pengecekan" class="col-span-4 text-md font-medium text-gray-800">Hari/Tgl Selesai
                            Pengecekan</label>
                        <input type="date" name="tgl_pengecekan" id="tgl_pengecekan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="tgl_pengerjaan" class="col-span-4 text-md font-medium text-gray-800">Hari/Tgl Selesai
                            Dikerjakan</label>
                        <input type="date" name="tgl_pengerjaan" id="tgl_pengerjaan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="tgl_delivery" class="col-span-4 text-md font-medium text-gray-800">Hari/Tgl
                            Diambil/Dikirim</label>
                        <input type="date" name="tgl_delivery" id="tgl_delivery"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="tgl_akhir_garansi" class="col-span-4 text-md font-medium text-gray-800">Hari/Tgl
                            Akhir Garansi</label>
                        <input type="date" name="tgl_akhir_garansi" id="tgl_akhir_garansi"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="perbaikan" class="col-span-4 text-md font-medium text-gray-800">Perbaikan</label>
                        <input type="text" name="perbaikan" id="perbaikan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="total_biaya_perbaikan" class="col-span-4 text-md font-medium text-gray-800">Total
                            Biaya Perbaikan</label>
                        <input type="number" name="total_biaya_perbaikan" id="total_biaya_perbaikan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="biaya_transport" class="col-span-4 text-md font-medium text-gray-800">Biaya
                            Transport</label>
                        <input type="number" name="biaya_transport" id="biaya_transport"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="total_biaya" class="col-span-4 text-md font-medium text-gray-800">Total Biaya</label>
                        <input type="number" name="total_biaya" id="total_biaya"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="no_resi_sparepart" class="col-span-4 text-md font-medium text-gray-800">No. Resi
                            Sparepart</label>
                        <div class="col-span-8 grid grid-cols-12 gap-2">
                            <input type="text" name="no_resi_sparepart" id="no_resi_sparepart"
                                class="col-span-6 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                            <button type="button" data-modal-target="edit-resi-modal"
                                data-modal-toggle="edit-resi-modal"
                                class="col-span-3 bg-zinc-500 hover:opacity:75 px-2 py-1 rounded-md shadow-md font-semibold text-white">Edit
                            </button>
                            <button type="button" data-modal-target="cari-resi-modal"
                                data-modal-toggle="cari-resi-modal"
                                class="col-span-3 bg-sky-500 hover:opacity:75 px-2 py-1 rounded-md shadow-md font-semibold text-white">Cari
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="status_perbaikan" class="col-span-4 text-md font-medium text-gray-800">Status
                            Perbaikan</label>
                        <select name="status_perbaikan" id="status_perbaikan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                            <option value="Dalam Antrian">Dalam Antrian</option>
                            <option value="Proses Pengecekan">Proses Pengecekan</option>
                            <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                            <option value="Proses Pengerjaan">Proses Pengerjaan</option>
                            <option value="Selesai Dikerjakan">Selesai Dikerjakan</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-center px-2 pt-1 pb-2">
                        <label for="keterangan" class="col-span-4 text-md font-medium text-gray-800">Keterangan</label>
                        <textarea type="text" name="keterangan" id="keterangan" rows="3"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required></textarea>
                    </div>
                </div>
                {{-- Identitas Barang --}}


                <div class="mt-3 flex items-center justify-end gap-2">
                    <button type="button" onclick="confirmSubmit()"
                        class="bg-orange-500 hover:opacity:75 px-3 py-1 rounded-md shadow-md font-semibold text-white">Cetak
                        Ulang Tanda Terima</button>
                    <button type="button" onclick="confirmSubmit()"
                        class="bg-emerald-500 hover:opacity:75 px-3 py-1 rounded-md shadow-md font-semibold text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Cari Tanda Terima Unit --}}
    <div id="cari-ttu-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Pilih Data Tanda Terima Unit
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="cari-ttu-modal">
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
                    <table id="ttuTable" class="display compact hover"
                        style="width:100%; padding-top: 1em; padding-bottom: 1em;">
                        <thead class="bg-gray-100 border border-gray-200">
                            <tr class="text-gray-700 text-left">
                                <th scope="col">
                                    Pilih
                                </th>
                                <th scope="col">
                                    No. Ttu
                                </th>
                                <th scope="col">
                                    Pelanggan
                                </th>
                                <th scope="col">
                                    Cabang
                                </th>
                                <th scope="col">
                                    Merk
                                </th>
                                <th scope="col">
                                    Model
                                </th>
                                <th scope="col">
                                    Tgl Masuk
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tanda_terima as $item)
                                <tr class="text-gray-700 text-sm border-r border-l border-b border-gray-300">
                                    <td class="flex items-center justify-center gap-2">
                                        <a href="#" data-item-id="{{ $item->id }}"
                                            data-item-no-ttu="{{ $item->no_ttu }}"
                                            data-item-pelanggan="{{ $item->detail_pelanggan }}"
                                            data-item-cabang="{{ $item->detail_cabang }}"
                                            data-item-merk="{{ $item->merk }}" data-item-model="{{ $item->model }}"
                                            data-item-nomor_seri="{{ $item->nomor_seri }}"
                                            data-item-jenis_perbaikan="{{ $item->jenis_perbaikan }}"
                                            data-item-kelengkapan="{{ $item->kelengkapan }}"
                                            data-item-keluhan="{{ $item->keluhan }}"
                                            class="select-btn bg-blue-500 hover:opacity-75 p-1 text-sm rounded-md shadow-sm text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td scope="row">
                                        {{ $item->no_ttu }}
                                    </td>
                                    <td>
                                        {{ $item->detail_pelanggan->nama }}
                                    </td>
                                    <td>
                                        {{ $item->detail_cabang->name }}
                                    </td>
                                    <td>
                                        {{ $item->merk }}
                                    </td>
                                    <td>
                                        {{ $item->model }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Modal Body --}}
            </div>
        </div>
    </div>
    {{-- Modal Cari Tanda Terima Unit --}}
@endsection

@section('scripts')
    <script>
        // datatable
        $(document).ready(function() {

            var table = $('#ttuTable').DataTable({
                    responsive: true
                })
                .columns.adjust();
        });

        // cari customer modal
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('cari-ttu-modal');
            const openModalButton = document.querySelector('[data-modal-target="cari-ttu-modal"]');
            const closeModalButton = modal.querySelector('[data-modal-toggle="cari-ttu-modal"]');

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

        // pilih tanda terima
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('cari-ttu-modal');
            document.querySelectorAll('.select-btn').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Ambil data dari atribut data-item-*
                    const id = this.getAttribute('data-item-id');
                    const nama = this.getAttribute('data-item-nama');
                    const alamat = this.getAttribute('data-item-alamat');
                    const urlGmaps = this.getAttribute('data-item-url-gmaps');
                    const noTelp = this.getAttribute('data-item-no-telp');
                    const regPelanggan = this.getAttribute('data-item-cabang');
                    const idUnit = this.getAttribute('data-item-id-unit');
                    // Parse JSON dari regPelanggan
                    const parsedRegPelanggan = JSON.parse(regPelanggan);

                    // Masukkan data ke dalam form
                    document.getElementById('id_pelanggan').value = id;
                    document.getElementById('pelanggan').value = nama;
                    document.getElementById('alamat').value = alamat;
                    document.getElementById('url_gmaps').value = urlGmaps;
                    document.getElementById('no_telp').value = noTelp;
                    document.getElementById('id_reg_pelanggan').value = idUnit;
                    document.getElementById('reg_pelanggan').value = parsedRegPelanggan.name;

                    modal.classList.add('hidden');
                });
            });
        });

        // submit tanda terima confirmation
        function confirmSubmit() {
            Swal.fire({
                title: 'PENGECEKAN UNIT',
                text: 'Apakah data sudah sesuai dan ingin cetak tanda terima?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Cetak!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-entry-ttu').submit();
                }
            })
        }
    </script>
@endsection
