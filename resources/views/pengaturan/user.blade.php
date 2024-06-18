@extends('layouts.app')

@section('title', 'Pengaturan')

@section('content')
  <div class="container px-6 py-4 mx-auto">
    <h3 class="text-3xl font-medium text-gray-700">Pengaturan</h3>
    
    <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white">
      <div class="relative overflow-x-auto shadow-md sm:rounded-md">
        <div class="pb-4 bg-white">
          <button type="button" data-modal-target="new-user-modal" data-modal-toggle="new-user-modal" class="bg-green-500 hover:opacity-70 text-white rounded-md shadow-md px-4 py-2">Tambah User</button>
        </div>
    </div>
  </div>
@endsection