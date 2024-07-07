@extends('layouts.app')

@section('title', 'Perbaikan | Dalam Antrian')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Status Perbaikan - Dalam Antrian</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white flex items-center justify-end gap-2">
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
                    placeholder="https://map.google.com" required=""/>
                <span class="w-[5rem] text-center">s/d</span>
                <input type="date" name="filter_end_date" id="filter_end_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2"
                    placeholder="https://map.google.com" required=""/>
            </div>
            <button type="button" 
                class="bg-sky-500 hover:opacity-70 text-white rounded-md shadow-md px-3 py-[6px]">Filter</button>
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
                            Hari/ Tgl Masuk
                        </th>
                        <th scope="col">
                            No TTU
                        </th>
                        <th scope="col">
                            Pelanggan
                        </th>
                        <th scope="col">
                            No. Telp
                        </th>
                        <th scope="col">
                            Lokasi Unit
                        </th>
                        <th scope="col">
                            Merk
                        </th>
                        <th scope="col">
                            Model
                        </th>
                        <th scope="col">
                            No. Seri
                        </th>
                        <th scope="col">
                            Kelengkapan
                        </th>
                        <th scope="col">
                            Keluhan
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
                        <td>
                            <a href="" class="text-blue-500 hover:opacity-75" target="_blank" rel="noopener noreferrer">1230001</a>
                        </td>
                        <td>Suhardi</td>
                        <td>085231678762</td>
                        <td>Cabang Fatmawati</td>
                        <td>Samsung</td>
                        <td>AAD123</td>
                        <td>0123ASD-678</td>
                        <td>Adaptor, TV</td>
                        <td>Mati Total</td>
                        <td class="flex items-center justify-center gap-2 py-3">
                            <button type="button"
                                class="rounded-md font-medium text-sm text-white bg-green-500 hover:opacity-75 px-2 py-1"
                                onclick="confirmDisabled({{ 1 }})">Lanjutkan</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
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
    </script>
@endsection