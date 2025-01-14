@extends('layouts.master')

@section('body')
<h3 class="text-gray-700 text-3xl font-semibold">Tambah User</h3>

<div class="mt-8">
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Form Tambah User</h2>

            <form action="#" method="POST">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="name">Nama</label>
                        <input name="name" id="name"
                            class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text"
                            placeholder="Masukkan nama user">
                    </div>

                    <div>
                        <label class="text-gray-700" for="email">Email</label>
                        <input name="email" id="email"
                            class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email"
                            placeholder="Masukkan email user">
                    </div>

                    <div>
                        <label class="text-gray-700" for="password">Password</label>
                        <input name="password" id="password"
                            class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password"
                            placeholder="Masukkan password">
                    </div>

                    <div>
                        <label class="text-gray-700" for="title">Title</label>
                        <input name="title" id="title"
                            class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text"
                            placeholder="Masukkan title user">
                    </div>

                    <div>
                        <label class="text-gray-700" for="status">Status</label>
                        <select name="status" id="status" class="form-input w-full mt-2 rounded-md focus:border-indigo-600">
                            <option value="active">Aktif</option>
                            <option value="inactive">Tidak Aktif</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-700" for="role">Role</label>
                        <select name="role" id="role" class="form-input w-full mt-2 rounded-md focus:border-indigo-600">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Simpan
                        User</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
