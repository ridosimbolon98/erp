@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container px-6 py-4 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">Profile</h3>

        {{-- Main Container --}}
        <div class="my-3 flex items-center justify-center">
            <!-- Author: FormBold Team -->
            <div class="w-full bg-gray-50 rounded-md shadow-md border border-gray-200 p-6">
                <form action="{{ route('admin.update.profile') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="mb-5">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Nama
                            </label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                placeholder="Nama user"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                Email
                            </label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}"
                                placeholder="admin@mail.com"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="mb-5">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Role
                            </label>
                            <select id="role" name="role" value="{{ $user->role }}"
                                class="rounded-md border border-[#e0e0e0] bg-white py-3 px-6 w-full text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="" disabled-selected>Pilih Role User</option>
                                <option value="1">Admin</option>
                                <option value="2">Teknisi</option>
                                <option value="0">Owner</option>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                Unit/Cabang
                            </label>
                            <select id="unit" name="unit" value="{{ $user->unit }}"
                                class="rounded-md border border-[#e0e0e0] bg-white py-3 px-6 w-full text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                required>
                                <option value="" disabled-selected>Pilih Unit/Cabang</option>
                                <option value="1">Cabang 1</option>
                                <option value="2">Cabang 2</option>
                                <option value="3">Cabang 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="mb-5">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Ubah Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="password"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                                Konfirmasi Password
                            </label>
                            <input type="password" name="konfirmasi_password" id="konfirmasi_password"
                                placeholder="konfirmasi password"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
        {{-- Main Container --}}
    </div>
@endsection

@section('scripts')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
@endsection
