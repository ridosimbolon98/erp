@extends('layouts.app')

@section('title', 'Tanda Terima Unit')

@section('content')
<div class="container px-6 py-4 mx-auto">
    <h3 class="text-xl font-medium text-gray-700">Tanda Terima Unit - Perbaikan Baru</h3>

    <div class="my-3 border border-gray-200 rounded-md shadow-md p-4 bg-white">
        <form action="{{ route('admin.ttu.store') }}" method="POST">
        @csrf
            <div class="grid grid-cols-12 gap-2 items-center">
                <label for="no_ttu" class="col-span-4 text-md font-medium text-gray-800">No. Tanda Terima</label>
                <input type="text" name="no_ttu" value="{{ $next_id }}" id="no_ttu" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
            </div>

            {{-- Informasi Pelanggan --}}
            <div class="mt-3 border border-gray-200 rounded-md">
              <div class="bg-zinc-400 mb-1 py-1 px-2 rounded-tr-sm rounded-tl-sm text-white flex justify-center items-center">INFORMASI PELANGGAN</div>
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="pelanggan" class="col-span-4 text-md font-medium text-gray-800">Nama Pelanggan</label>
                <div class="col-span-8 grid grid-cols-12 gap-2">
                  <input type="text" name="pelanggan" id="pelanggan" class="col-span-9 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
                  <button class="col-span-3 bg-sky-500 hover:opacity:75 px-2 py-1 rounded-md shadow-md font-semibold text-white">Cari Data</button>
                </div>
              </div>

              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="alamat" class="col-span-4 text-md font-medium text-gray-800">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
              
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="url_gmaps" class="col-span-4 text-md font-medium text-gray-800">URL GMaps</label>
                <input type="url" name="url_gmaps" id="url_gmaps" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
              
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="no_telp" class="col-span-4 text-md font-medium text-gray-800">No. Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
              
              <div class="grid grid-cols-12 gap-2 items-center px-2 pt-1 pb-2">
                <label for="reg_pelanggan" class="col-span-4 text-md font-medium text-gray-800">Registrasi Pelanggan</label>
                <input type="text" name="reg_pelanggan" id="reg_pelanggan" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
            </div>
            {{-- Informasi Pelanggan --}}
            
            {{-- Identitas Barang --}}
            <div class="mt-3 border border-gray-200 rounded-md">
              <div class="bg-zinc-400 mb-1 py-1 px-2 rounded-tr-sm rounded-tl-sm text-white flex justify-center items-center">IDENTITAS BARANG</div>
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="lokasi_unit" class="col-span-4 text-md font-medium text-gray-800">Lokasi Unit</label>
                <input type="text" name="lokasi_unit" id="lokasi_unit" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>

              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="merk" class="col-span-4 text-md font-medium text-gray-800">Merk</label>
                <input type="text" name="merk" id="merk" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
              
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="model" class="col-span-4 text-md font-medium text-gray-800">Model</label>
                <input type="url" name="model" id="model" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
              
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="no_seri" class="col-span-4 text-md font-medium text-gray-800">Nomor Seri</label>
                <input type="text" name="no_seri" id="no_seri" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required>
              </div>
              
              <div class="grid grid-cols-12 gap-2 items-center px-2 py-1">
                <label for="kelengkapan" class="col-span-4 text-md font-medium text-gray-800">Kelengkapan</label>
                <div class="col-span-8 flex flex-wrap items-center gap-6">
                  <label class="flex items-center gap-1">
                      <input type="checkbox" name="kelengkapan" value="Kaki TV" class="form-checkbox h-5 w-5 text-blue-600">
                      <span class="text-gray-700">Kaki TV</span>
                  </label>
                  <label class="flex items-center gap-1">
                      <input type="checkbox" name="kelengkapan" value="Kabel" class="form-checkbox h-5 w-5 text-blue-600">
                      <span class="text-gray-700">Kabel</span>
                  </label>
                  <label class="flex items-center gap-1">
                      <input type="checkbox" name="kelengkapan" value="TV" class="form-checkbox h-5 w-5 text-blue-600">
                      <span class="text-gray-700">TV</span>
                  </label>
                  <label class="flex items-center gap-1">
                      <input type="checkbox" name="kelengkapan" value="Bracket" class="form-checkbox h-5 w-5 text-blue-600">
                      <span class="text-gray-700">Bracket</span>
                  </label>
                  <label class="flex items-center gap-1">
                      <input type="checkbox" name="kelengkapan" value="Remote" class="form-checkbox h-5 w-5 text-blue-600">
                      <span class="text-gray-700">Remote</span>
                  </label>
                  <label class="flex items-center gap-1">
                      <input type="checkbox" name="kelengkapan" value="Adaptor" class="form-checkbox h-5 w-5 text-blue-600">
                      <span class="text-gray-700">Adaptor</span>
                  </label>
                </div>
              </div>

              <div class="grid grid-cols-12 gap-2 items-center px-2 pt-1 pb-2">
                <label for="keluhan" class="col-span-4 text-md font-medium text-gray-800">Keluhan</label>
                <textarea type="text" name="keluhan" id="keluhan" rows="3" class="col-span-8 border border-gray-300 text-gray-900 text-md rounded-md focus:ring-primary-600 focus:border-primary-600 focus:outline-none block w-full px-2 py-1"  required></textarea>
              </div>
            </div>
            {{-- Identitas Barang --}}

            <div class="mt-3 flex items-center justify-end">
              <button type="button" onclick="confirmSubmit()" class="bg-emerald-500 hover:opacity:75 px-3 py-1 rounded-md shadow-md font-semibold text-white">Submit</button>
            </div>
        </form>
    </div>
  </div>
@endsection