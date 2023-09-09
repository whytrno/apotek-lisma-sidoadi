@extends('layouts.main')

@section('content')
    <div class="px-5 space-y-10">
        <div class="flex justify-between py-5">
            <div class="flex gap-2 bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                          d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                          clip-rule="evenodd"/>
                </svg>

                <p class="text-lg">Manajemen User</p>
            </div>
            <a href="/dashboard/input-obat-masuk" class="flex gap-2 bg-blue-600 items-center px-2 text-white">
                <div class="py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z"/>
                    </svg>
                </div>
                <p class="text-lg">Cetak</p>
            </a>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>Username</th>
                <th>Nama User</th>
                <th>Hak Akses</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {{--            <tr>--}}
            {{--                <td>1</td>--}}
            {{--                <td>B000360</td>--}}
            {{--                <td>Actived</td>--}}
            {{--                <td>Rp. 33.000</td>--}}
            {{--                <td>Rp. 44.000</td>--}}
            {{--                <td>100</td>--}}
            {{--                <td>Botol</td>--}}
            {{--            </tr>--}}
            </tbody>
            <tfoot>
            <tr>
                <th>No.</th>
                <th>Foto</th>
                <th>Username</th>
                <th>Nama User</th>
                <th>Hak Akses</th>
                <th>Status</th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
