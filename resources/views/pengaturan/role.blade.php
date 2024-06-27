@extends('layouts.app')

@section('title', 'Pengaturan Role')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-xl font-medium text-gray-700">Pengaturan Roles</h3>

        <div class="my-3 border border-gray-200 rounded-md shadow-md p-2 bg-white">
            <div class="bg-white">
                <button type="button" data-modal-target="new-role-modal" data-modal-toggle="new-role-modal"
                    class="bg-green-500 hover:opacity-70 text-sm text-white rounded-md shadow-md px-4 py-2">Tambah
                    Role</button>
            </div>
        </div>

        {{-- Table --}}
        <div class="bg-white p-2 rounded-md shadow-md border border-gray-200">
            <table id="roleTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr class="text-gray-700">
                        <th class="border-r border-b border-l border-t border-gray-300" data-priority="1">ID</th>
                        <th class="border-r border-b border-l border-t border-gray-300" data-priority="1">Role Name</th>
                        <th class="border-r border-b border-l border-t border-gray-300" data-priority="1">Guard</th>
                        <th class="border-r border-b border-t border-gray-300" data-priority="5">Created At</th>
                        <th class="border-r border-b border-t border-gray-300" data-priority="6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr class="text-gray-700 text-sm ">
                            <td class="border-r border-b border-l border-gray-300 text-center">{{ $role->id }}</td>
                            <td class="border-r border-b border-gray-300 text-center">{{ $role->name }}</td>
                            <td class="border-r border-b border-gray-300 text-center ">{{ $role->guard_name }}</td>
                            <td class="border-r border-b border-gray-300 text-center ">{{ $role->created_at }}</td>
                            <td class="border-r border-b border-gray-300 flex items-center justify-center gap-2">
                                <form id="delete-form-{{ $role->id }}"
                                    action="{{ route('admin.pengaturan.role.delete', ['id' => $role->id]) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button"
                                    class="rounded-md font-medium text-sm text-white bg-red-500 hover:opacity-75 px-2 py-1"
                                    onclick="confirmDeletion({{ $role->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Table --}}

    </div>

    <!-- Modal Add New Role -->
    <div id="new-role-modal" tabindex="-1" aria-hidden="true"
        class="z-50 fixed inset-0 bg-gray-600 bg-opacity-50 flex items-start justify-center hidden">
        <div class="relative p-4 w-full md:w-8/12 max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Tambah Role Baru
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="new-role-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="role-form" class="p-4 md:p-5 shadow-md rounded-md"
                    action="{{ route('admin.pengaturan.role.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Role</label>
                            <input type="text" name="nama" id="nama"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Input nama role" required>
                        </div>
                        <div class="">
                            <label for="guard" class="block mb-2 text-sm font-medium text-gray-900 ">Guard</label>
                            <select id="guard" name="guard"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                                required>
                                <option selected="">Pilih Guard</option>
                                <option value="web">WEB</option>
                                <option value="api">API</option>
                            </select>
                        </div>
                    </div>
                    <button id="submit-btn" type="button"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Submit Data Role
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Add New Role -->

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            var table = $('#roleTable').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });

        // new role modal
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('new-role-modal');
            const openModalButton = document.querySelector('[data-modal-target="new-role-modal"]');
            const closeModalButton = modal.querySelector('[data-modal-toggle="new-role-modal"]');

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

    <script>
        // new role submit corfirmation
        document.getElementById('submit-btn').addEventListener('click', function() {
            Swal.fire({
                text: 'Apakah anda yakin submit role baru?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Submit!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('role-form').submit();
                }
            })
        });

        // delete role confirmation
        function confirmDeletion(roleId) {
            Swal.fire({
                text: 'Apakah anda yakin hapus role tersebut?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + roleId).submit();
                }
            })
        }
    </script>

@endsection
