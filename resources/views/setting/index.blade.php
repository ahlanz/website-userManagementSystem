@extends('layouts.master')

@section('body')
<h3 class="text-gray-700 text-3xl font-semibold">Pengaturan Akun</h3>

<div class="mt-8">
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Edit Profil</h2>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-4">
                    <div class="sm:col-span-1 flex flex-col items-start">
                        <label class="text-gray-700" for="profile_image">Upload Foto Profil</label>
                        <input name="profile_image" id="profile_image"
                            class="form-input w-full mt-4 rounded-md focus:border-indigo-600" type="file">
                        <small class="text-gray-500 mt-2">Format gambar: JPG, PNG. Maksimal 2MB.</small>
                    </div>

                    <div class="sm:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="text-gray-700" for="name">Nama</label>
                            <input name="name" id="name"
                                class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text"
                                value="user old"
                                placeholder="Masukkan nama lengkap">
                        </div>

                        <div>
                            <label class="text-gray-700" for="email">Email</label>
                            <input name="email" id="email"
                                class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email"
                                value="email lama"
                                placeholder="Masukkan email">
                        </div>

                        <div>
                            <label class="text-gray-700" for="password">Password Baru</label>
                            <input name="password" id="password"
                                class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password"
                                placeholder="Masukkan password baru">
                        </div>

                        <div>
                            <label class="text-gray-700" for="password_confirmation">Konfirmasi Password</label>
                            <input name="password_confirmation" id="password_confirmation"
                                class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password"
                                placeholder="Konfirmasi password baru">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 focus:outline-none focus:bg-yellow-500">Update Profil</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
