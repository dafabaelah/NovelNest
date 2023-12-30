@extends('dashboard.layout.main')

@section('container')
<div class="container mx-auto p-4">
    <div>
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <img class="w-full h-64 object-cover object-center" src="{{ $novel->gambar_novel ? asset($novel->gambar_novel) : 'https://via.placeholder.com/800x400' }}" alt="{{ $novel->nama_novel }}">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $novel->nama_novel }}</h2>
    
                {{-- Progres bar
                <div class="mt-4">
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-teal-600 bg-teal-200">
                                    Progres Membaca
                                </span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-teal-600">
                                    {{ $progresMembaca }}%
                                </span>
                            </div>
                        </div>
                        <div class="flex h-2 mb-4 overflow-hidden">
                            <div style="width:{{ $progresMembaca }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500"></div>
                        </div>
                    </div>
                </div> --}}
    
                {{-- Konten novel --}}
                <div class="mt-4">
                    <div id="novel-content">
                        {!! $novel->deskripsi_novel !!}
                    </div>
                
                    {{-- <div class="mt-4 flex justify-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="prevBtn" onclick="changeParagraph(-1)">Back</button>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="nextBtn" onclick="changeParagraph(1)">Next</button>
                    </div> --}}
                </div>
            
                {{-- Tombol "Kembali" --}}
                <a href="{{ route('home', ['id_novel' => $novel->id_novel]) }}" class="text-gray-600 hover:text-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection