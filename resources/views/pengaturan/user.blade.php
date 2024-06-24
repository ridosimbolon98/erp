@extends('layouts.app')

@section('title', 'Pengaturan')

@section('content')
  <div class="container px-6 py-4 mx-auto">
    <h3 class="text-3xl font-medium text-gray-700">Pengaturan User</h3>
    
    <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white">
      <div class="bg-white">
        <button type="button" data-modal-target="new-user-modal" data-modal-toggle="new-user-modal" class="bg-green-500 hover:opacity-70 text-sm text-white rounded-md shadow-md px-4 py-2">Tambah User</button>
      </div>
    </div>

    {{-- Table --}}
    <div class="bg-white p-2 rounded-md shadow-md border border-gray-200">
      <table id="userTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
          <tr class="text-gray-700">
            <th class="border-r border-b border-l border-t border-gray-300" data-priority="1">Name</th>
            <th class="border-r border-b border-t border-gray-300" data-priority="2">Email</th>
            <th class="border-r border-b border-t border-gray-300" data-priority="3">Role</th>
            <th class="border-r border-b border-t border-gray-300" data-priority="4">Cabang</th>
            <th class="border-r border-b border-t border-gray-300" data-priority="5">Status</th>
            <th class="border-r border-b border-t border-gray-300" data-priority="6">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr class="text-gray-700 text-sm">
              <td class="border-r border-b border-l border-gray-300">{{ $user->name }}</td>
              <td class="border-r border-b border-gray-300">{{ $user->email }}</td>
              <td class="border-r border-b border-gray-300 text-center ">{{ $user->detail_role->name }}</td>
              <td class="border-r border-b border-gray-300">{{ $user->detail_cabang->name }}</td>
              <td class="border-r border-b border-gray-300 text-center {{ $user->status === 1 ? 'text-green-500' : 'text-red-500' }}">{{ $user->status === 1 ? 'active' : 'inactive' }}</td>
              <td class="border-r border-b border-gray-300 flex items-center justify-center gap-2">
                <a href="#" 
                  data-id="{{ $user->id }}"
                  data-name="{{ $user->name }}"
                  data-email="{{ $user->email }}"
                  data-role="{{ $user->role }}"
                  data-unit="{{ $user->unit }}"
                  data-status="{{ $user->status }}"
                  class="btn-edit bg-blue-500 hover:opacity-75 px-2 py-1 text-sm rounded-md shadow-sm text-white">Edit</a>
                <a href="" class="bg-red-500 hover:opacity-75 px-2 py-1 text-sm rounded-md shadow-sm text-white">Disable</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- Table --}}

  </div>

  <!-- Modal Add New User -->
  <div id="new-user-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 z-50 justify-center items-center w-full max-h-full">
    <div class="relative p-4 w-full md:w-8/12 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    Tambah User Baru
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="new-user-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <form id="new-user-form" class="p-4 md:p-5 shadow-md rounded-md" action="{{ route('admin.pengaturan.user') }}" method="POST">
            @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Input nama customer" required="">
                    </div>
                    <div class="">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Input email user" required="">
                    </div>
                    <div class="">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="password user" required="">
                    </div>
                    <div class="">
                        <label for="konf_password" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password</label>
                        <input type="password" name="konf_password" id="konf_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="konfirmasi password user" required="">
                    </div>
                    <div class="">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                        <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected="">Pilih Role</option>
                            @foreach ($roles as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="cabang" class="block mb-2 text-sm font-medium text-gray-900 ">Cabang</label>
                        <select id="cabang" name="cabang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected="">Pilih Cabang</option>
                            @foreach ($units as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="button" onclick="confirmSubmitUser()" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Submit Data User
                </button>
            </form>
        </div>
    </div>
  </div>
  <!-- Modal Add New User -->

  <!-- Modal Edit Data User -->
  <div id="edit-user-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 z-50 justify-center items-center w-full max-h-full">
    <div class="relative p-4 w-full md:w-8/12 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    Edit Data User
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="edit-user-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <form id="edit-user-form" class="p-4 md:p-5 shadow-md rounded-md" action="{{ route('admin.pengaturan.user.update') }}" method="POST">
            @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="">
                        <label for="edit_nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" name="id" id="edit_id" hidden required="">
                        <input type="text" name="nama" id="edit_nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Input nama customer" required="">
                    </div>
                    <div class="">
                        <label for="edit_email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="email" name="email" id="edit_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Input email user" readonly>
                    </div>
                    <div class="">
                        <label for="edit_role" class="block mb-2 text-sm font-medium text-gray-900 ">Role</label>
                        <select id="edit_role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected="">Pilih Role</option>
                            @foreach ($roles as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="edit_cabang" class="block mb-2 text-sm font-medium text-gray-900 ">Cabang</label>
                        <select id="edit_cabang" name="cabang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected="">Pilih Cabang</option>
                            @foreach ($units as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-2">
                      <label for="edit_status1" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
                      <div class="flex items-center">
                          <div class="flex items-center me-4">
                              <input id="edit_status1" type="radio" value="1" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                              <label for="edit_status1" class="ms-2 text-sm font-medium text-gray-900">Aktif</label>
                          </div>
                          <div class="flex items-center me-4">
                              <input id="edit_status2" type="radio" value="2" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                              <label for="edit_status2" class="ms-2 text-sm font-medium text-gray-900">Non Aktif</label>
                          </div>               
                      </div>               
                  </div>
                </div>
                <button type="button" onclick="confirmUpdateUser()" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
  </div>
  <!-- Modal Edit Data User -->
@endsection

@section('scripts')
  <script>
    $(document).ready(function() {

      var table = $('#userTable').DataTable({
          responsive: true
        })
        .columns.adjust()
        .responsive.recalc();
    });

    // new user modal
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('new-user-modal');
        const openModalButton = document.querySelector('[data-modal-target="new-user-modal"]');
        const closeModalButton = modal.querySelector('[data-modal-toggle="new-user-modal"]');

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

    // edit data user modal
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.btn-edit');
        const modal = document.getElementById('edit-user-modal');
        const idInput = document.getElementById('edit_id');
        const nameInput = document.getElementById('edit_nama');
        const emailInput = document.getElementById('edit_email');
        const roleInput = document.getElementById('edit_role');
        const unitInput = document.getElementById('edit_cabang');
        const statusInput = document.getElementById('edit_status');

        editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Ambil data dari atribut data-*
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const email = button.getAttribute('data-email');
                const role = button.getAttribute('data-role');
                const unit = button.getAttribute('data-unit');
                const status = button.getAttribute('data-status');

                // Isi form modal dengan data
                idInput.value = id;
                nameInput.value = name;
                emailInput.value = email;
                roleInput.value = role;
                unitInput.value = unit;
                statusInput.value = status;

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
        const closeButton = modal.querySelector('[data-modal-toggle="edit-user-modal"]');
        closeButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });
    });

    // submit new user confirmation
    function confirmSubmitUser() {
        Swal.fire({
            text: 'Apakah anda yakin submit user tersebut?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Submit!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('new-user-form').submit();
            }
        })
    }
    
    // update user confirmation
    function confirmUpdateUser() {
        Swal.fire({
            text: 'Apakah anda yakin simpan perubahan data user tersebut?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Simpan!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('edit-user-form').submit();
            }
        })
    }
  </script>
@endsection