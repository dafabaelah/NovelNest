@extends('dashboard.layout.main')

@section('container')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-6 text-center">Daftar Kategori</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($kategoris as $category)
                <div class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <a href="{{ route('kategoriIndexSlug', ['categorySlug' => $category->slug_kategori]) }}">
                        <img class="w-full h-40 object-cover object-center" src="{{ $category->gambar_kategori ? asset($category->gambar_kategori) : 'https://via.placeholder.com/800x400' }}" alt="Category Image">
                    </a>
                    <div class="p-4">
                        <a href="{{ route('kategoriIndexSlug', ['categorySlug' => $category->slug_kategori]) }}" class="text-lg font-semibold text-gray-800 dark:text-white hover:underline">{{ $category->nama_kategori }}</a>
                        <!-- Tambahkan informasi tambahan jika diperlukan -->
                    </div>
                </div>
            @empty
                <p class="text-gray-600 dark:text-gray-400">Belum ada kategori.</p>
            @endforelse
        </div>
    </div>
@endsection