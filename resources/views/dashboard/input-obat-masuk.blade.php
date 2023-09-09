@extends('layouts.main')

@section('content')
    <div class="p-5">
        <div class="flex justify-between py-5">
            <div class="flex gap-2 bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                </svg>

                <p class="text-lg">Input Obat</p>
            </div>
            <div class="flex gap-2 bg-blue-600 items-center px-2 text-white">
                <div class="py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 stroke-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>
                </div>
                <a href="/obat-masuk" class="text-lg block">Tambah</a>
            </div>
        </div>

        <form action="" class="space-y-5">
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-2">
                    <p>Kode Obat</p>
                </div>
                <input type="text" readonly class="col-span-10 border border-gray-500 bg-gray-400 w-full p-2"
                       value="B000361">
            </div>
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-2">
                    <p>Nama obat</p>
                </div>
                <input type="text" class="col-span-10 border border-gray-500 w-full p-2" value="B000361">
            </div>
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-2">
                    <p>Harga Beli</p>
                </div>
                <div class="col-span-10 flex">
                    <p class="p-2 border border-gray-500">Rp.</p>
                    <input type="text" class="border border-gray-500 w-full p-2" value="B000361">
                </div>
            </div>
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-2">
                    <p>Harga Jual</p>
                </div>
                <div class="col-span-10 flex">
                    <p class="p-2 border border-gray-500">Rp.</p>
                    <input type="text" class="border border-gray-500 w-full p-2" value="B000361">
                </div>
            </div>
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-2">
                    <p>Satuan</p>
                </div>
                <select name="" id="" class="border border-gray-500 col-span-10 w-full p-2">
                    <option selected disabled>-- Pilih --</option>
                </select>
            </div>

            <div class="pl-24">
                <a href="#" class="py-2 px-7 rounded-lg bg-blue-600 text-white">Simpan</a>
                <a href="#" class="py-2 px-7 rounded-lg border border-gray-400">Batal</a>
            </div>
        </form>
    </div>
@endsection
