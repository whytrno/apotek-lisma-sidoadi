@extends('layouts.main')

@section('content')
    <div class="p-4 flex gap-5">
        <div class="bg-[#448CF9] text-white whitespace-nowrap space-y-3 pt-5 px-3 w-40">
            <p class="font-semibold">1382</p>
            <p>Data Obat</p>
            <div class="flex justify-center">
                <img src="{{asset('icons/dashboard-1.png')}}" alt="">
            </div>
        </div>
        <div class="bg-[#14C51B] text-white whitespace-nowrap space-y-3 pt-5 px-3 w-40">
            <p class="font-semibold">5</p>
            <p>Data Obat Masuk</p>
            <div class="flex justify-center">
                <img src="{{asset('icons/dashboard-2.png')}}" alt="">
            </div>
        </div>
        <div class="bg-[#E26F1B] text-white whitespace-nowrap space-y-3 pt-5 px-3 w-40">
            <p class="font-semibold">1382</p>
            <p>Laporan Stok obat</p>
            <div class="flex justify-center">
                <img src="{{asset('icons/dashboard-3.png')}}" alt="">
            </div>
        </div>
        <div class="bg-[#D30D0D] text-white whitespace-nowrap space-y-3 pt-5 px-3 w-40">
            <p class="font-semibold">5</p>
            <p>Laporan obat masuk</p>
            <div class="flex justify-center">
                <img src="{{asset('icons/dashboard-4.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
