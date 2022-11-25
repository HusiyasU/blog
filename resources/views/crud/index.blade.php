@extends('layout')
@section('content')
<div class="py-10 max-w-5xl mx-auto bg-white rounded-t-md divide-y">
        <div class="px-10 pb-2">
            <h1 class="text-xl font-bold">Tabel</h1>
        </div>
        <div class="flex-1 px-10 py-10">
            <table class="min-w-full shadow-md">
                <thead class="">
                <tr class="bg-gray-50">
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm" width="30">No</th>
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">Judul</th>
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">Konten</th>
                    <th class="border text-center px-3 py-2 leading-4 tracking-wider text-sm">Aksi</th>
                </tr>
                </thead>
                @forelse ($konten as $index => $item)
                <tr>
                    <th colspan="12" class="px-4 py-2 border">{{ $index + 1 }}</th>
                    <th colspan="12" class="px-4 py-2 border">{{ $index->judul }}</th>
                    <th colspan="12" class="px-4 py-2 border">{{ $index->konten }}</th>
                    <th class="px-4 py-2 border">
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </th>
                    @empty
                    <tr>
                    <th colspan="12" class="px-4 py-2 border">Tidak Ada Konten</th>
                    </tr>
                    @endforelse
                </tr>
            </table>

        </div>
    </div>
    @endsection