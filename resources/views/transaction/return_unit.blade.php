@extends('layouts.app')

@section('title', 'Return Unit')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Return Unit</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-4 bg-white">
            <form id="form-entry-ttu" action="{{ route('admin.ttu.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-12 gap-2 items-start">
                    <label for="no_ttu" class="col-span-4 text-md font-medium text-gray-800">No. Tanda Terima</label>
                    <div class="col-span-8 grid grid-cols-12 gap-2">
                        <input type="text" name="no_ttu" id="no_ttu"
                            class="col-span-9 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required placeholder="No. Tanda terima">
                        <button id="btnCariTtu" type="button" class="col-span-3 bg-sky-500 hover:opacity:75 px-2 py-1 rounded-md shadow-md font-semibold text-white">Cari</button>
                    </div>
                </div>

                {{-- Informasi Pelanggan --}}
                <div class="mt-3 border border-gray-200 rounded-md">
                    <div
                        class="bg-zinc-400 mb-1 py-1 px-2 rounded-tr-sm rounded-tl-sm text-white flex justify-center items-center">
                        INFORMASI PELANGGAN</div>
                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="pelanggan" class="col-span-4 text-md font-medium text-gray-800">Nama Pelanggan</label>
                        <input type="text" name="id_pelanggan" id="id_pelanggan" class="hidden" required>
                        <input type="text" name="pelanggan" id="pelanggan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="alamat" class="col-span-4 text-md font-medium text-gray-800">Alamat</label>
                        <input type="text" name="alamat" id="alamat"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="url_gmaps" class="col-span-4 text-md font-medium text-gray-800">URL GMaps</label>
                        <input type="url" name="url_gmaps" id="url_gmaps"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="no_telp" class="col-span-4 text-md font-medium text-gray-800">No. Telp</label>
                        <input type="text" name="no_telp" id="no_telp"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 pt-1 pb-2">
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
                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="lokasi_unit" class="col-span-4 text-md font-medium text-gray-800">Lokasi Unit</label>
                        <input type="text" name="lokasi_unit" id="lokasi_unit"
                            class="hidden" required>
                        <input id="lokasi_unit_name" type="text" 
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            readonly>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="merk" class="col-span-4 text-md font-medium text-gray-800">Merk</label>
                        <input type="text" name="merk" id="merk"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="model" class="col-span-4 text-md font-medium text-gray-800">Model</label>
                        <input type="url" name="model" id="model"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
                        <label for="no_seri" class="col-span-4 text-md font-medium text-gray-800">Nomor Seri</label>
                        <input type="text" name="nomor_seri" id="no_seri"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required>
                    </div>

                    <div class="grid grid-cols-12 gap-2 items-start px-2 py-1">
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

                    <div class="grid grid-cols-12 gap-2 items-start px-2 pt-1 pb-2">
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
                        <label for="riwayat_perbaikan" class="col-span-4 text-md font-medium text-gray-800">Riwayat Perbaikan</label>
                        <input type="text" name="riwayat_perbaikan" id="riwayat_perbaikan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="total_biaya" class="col-span-4 text-md font-medium text-gray-800">Total
                            Biaya</label>
                        <input type="number" name="total_biaya" id="total_biaya"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-start px-2 pt-1 pb-2">
                        <label for="keterangan" class="col-span-4 text-md font-medium text-gray-800">Keterangan</label>
                        <textarea type="text" name="keterangan" id="keterangan" rows="3"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"
                            required></textarea>
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="total_pengembalian_biaya" class="col-span-4 text-md font-medium text-gray-800">Total
                            Pengembalian Biaya</label>
                        <input type="number" name="total_pengembalian_biaya" id="total_pengembalian_biaya"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                    <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                        <label for="keuntungan" class="col-span-4 text-md font-medium text-gray-800">Keuntungan</label>
                        <input type="number" name="keuntungan" id="keuntungan"
                            class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1">
                    </div>
                </div>
                {{-- Identitas Barang --}}

                <div class="mt-3 flex items-center justify-end gap-2">
                    <button type="button" onclick="confirmSubmit()"
                        class="bg-emerald-500 hover:opacity:75 px-3 py-1 rounded-md shadow-md font-semibold text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>


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

        // Cari tanda terima by no ttu
        $(document).ready(function() {
            $('#btnCariTtu').click(function() {
                var no_ttu = $('#no_ttu').val();
                $.ajax({
                    url: '{{ route("admin.ttu.cari") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        no_ttu: no_ttu
                    },
                    success: function(response) {
                        if (response.success) {
                            console.log(response.data);
                            // Masukkan data ke dalam form
                            document.getElementById('id_pelanggan').value = response.data.id_pelanggan;
                            document.getElementById('pelanggan').value = response.data.detail_pelanggan.nama;
                            document.getElementById('alamat').value = response.data.detail_pelanggan.alamat;
                            document.getElementById('url_gmaps').value = response.data.detail_pelanggan.url_gmaps;
                            document.getElementById('no_telp').value = response.data.detail_pelanggan.no_telp;
                            document.getElementById('id_reg_pelanggan').value = response.data.detail_cabang.id;
                            document.getElementById('reg_pelanggan').value = response.data.detail_cabang.name;
                            
                            // identitas barang
                            document.getElementById('lokasi_unit').value = response.data.detail_cabang.id;
                            document.getElementById('lokasi_unit_name').value = response.data.detail_cabang.name;
                            document.getElementById('merk').value = response.data.merk;
                            document.getElementById('model').value = response.data.model;
                            document.getElementById('no_seri').value = response.data.nomor_seri;
                            var kelengkapan = JSON.parse(response.data.kelengkapan);
                            // Loop melalui setiap input checkbox
                            document.querySelectorAll('input[name="kelengkapan[]"]').forEach(function(checkbox) {
                                if (kelengkapan.includes(checkbox.value)) {
                                    checkbox.checked = true;
                                }
                            });
                            document.getElementById('keluhan').value = response.data.keluhan;
                            document.getElementById('keluhan').value = response.data.keluhan;
                        } else {
                            Swal.fire({
                                title: "Data Tidak Ditemukan!",
                                html: response.message,
                                timer: 2500,
                                timerProgressBar: true,
                            });
                        }
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat mencari data.');
                    }
                });
            });
        });
    </script>
@endsection
