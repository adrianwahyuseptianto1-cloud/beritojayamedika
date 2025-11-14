@extends('layouts.public')

@section('title', 'Artikel - PT. BERITO JAYA MEDIKA')

@push('styles')
<style>
    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }

    .marquee-content {
        display: inline-block;
        animation: marquee-left-to-right 30s linear infinite;
    }

    @keyframes marquee-left-to-right {
        0%   { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Animated gradient background */
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient-shift 8s ease infinite;
    }

    /* Blob animation */
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Article card hover effect */
    .article-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .article-card:hover {
        transform: translateY(-12px);
    }

    /* Modal content styling */
    .modal-content img {
        transition: transform 0.5s ease;
    }

    .modal-content:hover img {
        transform: scale(1.05);
    }
</style>
@endpush

@section('content')

<!-- Hero Section with Enhanced Design -->
<div class="relative bg-gradient-to-br from-blue-50 via-white to-blue-50 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 text-center relative z-10">
        <span class="inline-block py-2 px-6 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 text-sm font-bold mb-6 shadow-lg" data-aos="fade-up">
            📰 Update Terbaru
        </span>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900" data-aos="fade-up" data-aos-delay="100">
            Artikel & Berita
        </h1>
        <p class="mt-6 text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Baca wawasan terbaru, berita perusahaan, dan info produk dari kami.
        </p>
    </div>
</div>

<!-- Marquee Section with Enhanced Design -->
<div class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 text-white py-6 border-t-4 border-b-4 border-yellow-400 overflow-hidden animate-gradient">
    <!-- Decorative pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute transform rotate-45 -left-10 top-0 w-40 h-40 bg-yellow-400 rounded-full"></div>
        <div class="absolute transform -rotate-45 -right-10 bottom-0 w-40 h-40 bg-red-500 rounded-full"></div>
    </div>
    
    <div class="marquee-container container mx-auto relative z-10" data-aos="fade-up">
        <div class="marquee-content">
            @foreach ($articles as $article)
                <span class="inline-flex items-center mx-8 text-base font-bold cursor-pointer hover:text-yellow-400 transition-colors duration-300 group"
                      @click.prevent="selectedArticle = {{ json_encode($article) }}; articleModalOpen = true">
                    <svg class="w-5 h-5 mr-2 text-yellow-400 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                    {{ $article->title }}
                </span>
                <span class="text-yellow-400 mx-4 text-2xl animate-pulse">&#x25CF;</span>
            @endforeach
        </div>
    </div>
</div>

<!-- Articles Grid Section -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-base font-semibold text-red-600 uppercase tracking-wider">Informasi Terkini</h2>
            <h3 class="mt-3 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Eksplorasi Artikel Kami
            </h3>
            <p class="mt-5 max-w-2xl mx-auto text-xl text-gray-600">
                Temukan insight dan update terbaru seputar industri kesehatan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($articles as $article)
                <div class="article-card group flex flex-col bg-white rounded-3xl shadow-xl overflow-hidden cursor-pointer border-2 border-transparent hover:border-yellow-400"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}"
                     @click.prevent="selectedArticle = {{ json_encode($article) }}; articleModalOpen = true"
                >
                    <!-- Image Container -->
                    <div class="relative h-64 overflow-hidden">
                        <img 
                            src="{{ $article->image ? asset('storage/' . $article->image) : 'https://via.placeholder.com/400x250' }}" 
                            alt="{{ $article->title }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        >
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        <!-- Badge -->
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 text-xs font-bold px-4 py-2 rounded-full shadow-lg">
                            TERBARU
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 flex flex-col flex-grow bg-gradient-to-br from-white to-blue-50/30">
                        <!-- Date Badge -->
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sm font-semibold text-gray-600">
                                {{ $article->created_at->format('d M Y') }}
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-bold text-blue-900 group-hover:text-red-600 transition-colors duration-300 flex-grow line-clamp-3 leading-tight">
                            {{ $article->title }}
                        </h3>

                        <!-- Divider -->
                        <div class="my-6 h-1 w-16 bg-gradient-to-r from-yellow-400 to-red-600 rounded-full transform origin-left group-hover:scale-x-150 transition-transform duration-300"></div>

                        <!-- Read More Button -->
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center text-red-600 font-bold group-hover:text-blue-900 transition-colors">
                                Baca Artikel
                                <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </span>
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-blue-800 rounded-full flex items-center justify-center transform group-hover:rotate-90 transition-transform duration-300">
                                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-3 text-center py-20">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full mb-6">
                        <svg class="w-12 h-12 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800">Belum Ada Artikel</h2>
                    <p class="mt-3 text-lg text-gray-500">Silakan cek kembali nanti untuk update terbaru.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Enhanced Article Modal -->
<div 
    x-show="articleModalOpen" 
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 flex items-center justify-center p-4" 
    style="display: none;"
>
    <!-- Backdrop with blur -->
    <div x-show="articleModalOpen" @click="articleModalOpen = false" class="fixed inset-0 bg-gradient-to-br from-blue-900/70 via-blue-800/60 to-blue-900/70 backdrop-blur-md"></div>

    <!-- Modal Container -->
    <div 
        x-show="articleModalOpen"
        @click.outside="articleModalOpen = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="relative z-10 w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden"
        style="max-height: 90vh;"
    >
        <!-- Close Button -->
        <button @click="articleModalOpen = false" class="absolute top-6 right-6 z-30 text-white hover:text-yellow-400 transition-colors duration-300 bg-blue-900/80 hover:bg-blue-900 rounded-full p-3 shadow-lg backdrop-blur-sm group">
            <span class="sr-only">Tutup</span>
            <svg class="w-6 h-6 transform group-hover:rotate-90 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Scrollable Content -->
        <div class="overflow-y-auto modal-content" style="max-height: 90vh;" x-if="selectedArticle">
            <!-- Header Image with Overlay -->
            <div class="relative h-96 overflow-hidden">
                <img 
                    :src="selectedArticle.image ? '/storage/' + selectedArticle.image : 'https://via.placeholder.com/800x400'" 
                    :alt="selectedArticle.title" 
                    class="w-full h-full object-cover"
                >
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/50 to-transparent"></div>
                
                <!-- Floating Badge -->
                <div class="absolute top-6 left-6 bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 text-sm font-bold px-6 py-3 rounded-full shadow-xl">
                    📰 ARTIKEL TERBARU
                </div>

                <!-- Title Overlay -->
                <div class="absolute bottom-0 left-0 right-0 p-8 lg:p-12">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight drop-shadow-2xl" x-text="selectedArticle.title">
                    </h1>
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-8 lg:p-12 bg-gradient-to-b from-white to-blue-50/30">
                <!-- Meta Information -->
                <div class="flex flex-wrap items-center gap-6 mb-8 pb-8 border-b-2 border-blue-100">
                    <!-- Date -->
                    <div class="flex items-center gap-3 bg-blue-50 px-5 py-3 rounded-xl">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-900 to-blue-800 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-semibold">Dipublikasikan</p>
                            <p class="text-sm font-bold text-blue-900" x-text="new Date(selectedArticle.created_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })"></p>
                        </div>
                    </div>

                    <!-- Category Badge -->
                    <div class="flex items-center gap-2 bg-gradient-to-r from-red-500 to-red-600 text-white px-5 py-3 rounded-xl shadow-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-bold">Berita & Artikel</span>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="prose prose-lg max-w-none">
                    <div class="text-gray-700 leading-relaxed space-y-4" x-html="selectedArticle.content ? selectedArticle.content.replace(/\n/g, '<br><br>') : 'Konten tidak tersedia.'">
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="mt-12 pt-8 border-t-2 border-blue-100 flex flex-wrap gap-4 justify-between items-center">
                    <div class="flex gap-3">
                        <!-- Share Buttons -->
                        <button class="group flex items-center gap-2 bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            Bagikan
                        </button>
                    </div>

                    <button @click="articleModalOpen = false" class="group flex items-center gap-2 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Tutup
                        <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="relative bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-400 overflow-hidden animate-gradient">
    <!-- Decorative Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute transform rotate-45 -left-20 -top-20 w-96 h-96 bg-blue-900 rounded-full"></div>
        <div class="absolute transform -rotate-45 -right-20 -bottom-20 w-96 h-96 bg-blue-900 rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 relative">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="800">
            <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight mb-6">
                Ingin Update Terbaru?
            </h2>
            <p class="mt-4 text-xl text-blue-800 max-w-2xl mx-auto leading-relaxed">
                Ikuti berita dan artikel terbaru dari kami untuk mendapatkan informasi seputar industri kesehatan.
            </p>
            <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('products') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-4 px-10 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    Lihat Produk Kami
                    <svg class="w-6 h-6 ml-2 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="#" @click.prevent="contactModalOpen = true" class="group inline-flex items-center justify-center bg-white hover:bg-gray-50 text-blue-900 font-bold py-4 px-10 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                    Hubungi Kami
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection