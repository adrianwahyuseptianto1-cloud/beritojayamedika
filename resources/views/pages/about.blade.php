@extends('layouts.public')

@section('title', 'Tentang Kami - PT. BERITO JAYA MEDIKA')

@section('content')

<!-- Hero Section with Enhanced Design -->
<div class="relative bg-gradient-to-br from-blue-50 via-white to-blue-50 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-64 h-64 sm:w-96 sm:h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 sm:opacity-30 animate-blob"></div>
    <div class="absolute top-0 right-0 w-64 h-64 sm:w-96 sm:h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 sm:opacity-30 animate-blob animation-delay-2000"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-20 lg:py-32 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div data-aos="fade-right" data-aos-duration="800">
                <span class="inline-block px-3 py-1.5 sm:px-4 sm:py-2 bg-gradient-to-r from-red-100 to-red-50 text-red-600 text-xs sm:text-sm font-bold rounded-full mb-3 sm:mb-4">
                    🏥 Tentang Perusahaan
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 leading-tight">
                    PT. BERITO JAYA MEDIKA
                </h1>
                <p class="mt-4 sm:mt-6 text-base sm:text-lg lg:text-xl text-gray-700 leading-relaxed">
                    Kami adalah mitra terpercaya Anda dalam penyediaan solusi alat kesehatan dan laboratorium inovatif di Indonesia.
                </p>
                
                <!-- Stats Mini -->
                <div class="mt-6 sm:mt-8 grid grid-cols-3 gap-3 sm:gap-6">
                    <div class="text-center p-3 sm:p-4 bg-white rounded-xl shadow-md">
                        <div class="text-2xl sm:text-3xl font-bold text-blue-900">20+</div>
                        <div class="text-xs sm:text-sm text-gray-600 mt-1">Tahun</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 bg-white rounded-xl shadow-md">
                        <div class="text-2xl sm:text-3xl font-bold text-blue-900">500+</div>
                        <div class="text-xs sm:text-sm text-gray-600 mt-1">Klien</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 bg-white rounded-xl shadow-md">
                        <div class="text-2xl sm:text-3xl font-bold text-blue-900">100%</div>
                        <div class="text-xs sm:text-sm text-gray-600 mt-1">Terpercaya</div>
                    </div>
                </div>
            </div>
            
            <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200" class="relative mt-8 lg:mt-0">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-50 rounded-[2rem] sm:rounded-[2.5rem] lg:rounded-[3rem] transform rotate-3"></div>
                <img class="relative rounded-2xl sm:rounded-3xl shadow-2xl w-full transform hover:scale-105 transition-transform duration-500" 
                     src="https://images.pexels.com/photos/3184639/pexels-photo-3184639.jpeg?auto=compress&cs=tinysrgb&w=800">
            </div>
        </div>
    </div>
</div>

<!-- Company Story Section -->
<div class="bg-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative flex justify-center" data-aos="fade-right" data-aos-duration="800">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-100 to-yellow-50 rounded-[3rem] transform -rotate-3"></div>
                <img class="relative rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-500" 
                     src="https://images.pexels.com/photos/6285380/pexels-photo-6285380.jpeg?auto=compress&cs=tinysrgb&w=800" 
                     alt="Tim PT Berito Jaya Medika">
            </div>

            <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <span class="inline-block px-4 py-2 bg-red-100 text-red-600 text-sm font-bold rounded-full mb-4">Siapa Kami</span>
                <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight leading-tight">
                    Distributor Alat Kesehatan & Laboratorium
                </h3>
                
                <div class="mt-8 space-y-6">
                    <div class="flex items-start gap-4 p-6 bg-blue-50 rounded-2xl">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 leading-relaxed">
                                PT. Berito Jaya Medika adalah Perusahaan yang bergerak dibidang alat-alat kesehatan. Baik yang berupa Disposible Product (Habis Pakai), dan Equipment Product (Peralatan Kesehatan).
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-red-50 rounded-2xl">
                        <div class="flex-shrink-0 w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 leading-relaxed">
                                PT. Berito Jaya Medika didirikan pada tahun 1999 di Kota Surabaya. Berpengalaman sebagai Pemasok Alat Kesehatan yang memasok kebutuhan untuk Rumah Sakit dan Apotik.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-yellow-50 rounded-2xl">
                        <div class="flex-shrink-0 w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 leading-relaxed">
                                Perusahaan kami sudah berpengalaman lebih dari 20 Tahun dalam bidang Alat-alat Kesehatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Legalitas Section -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 text-sm font-bold rounded-full mb-4">Legalitas</span>
            <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Tersertifikasi dan Terpercaya
            </h3>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600">
                Kami beroperasi dengan izin resmi dan mematuhi standar distribusi alat kesehatan yang berlaku di Indonesia.
            </p>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl transform rotate-2 group-hover:rotate-0 transition-transform duration-300"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-600 to-blue-700 text-white mx-auto mb-6 shadow-lg">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-blue-900 text-center mb-3">Nomor Induk Berusaha</h4>
                    <p class="text-center text-gray-600 font-semibold text-lg">
                        9120406890292
                    </p>
                </div>
            </div>
            
            <div class="relative group" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-700 rounded-3xl transform rotate-2 group-hover:rotate-0 transition-transform duration-300"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-red-600 to-red-700 text-white mx-auto mb-6 shadow-lg">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.333 9-6.03 9-11.623 0-1.613-.42-3.136-1.165-4.504A11.956 11.956 0 0112 2.964z" />
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-blue-900 text-center mb-3">Izin Distribusi Alat Kesehatan</h4>
                    <p class="text-center text-gray-600 font-semibold text-lg">
                        91204068902920002
                    </p>
                </div>
            </div>

            <div class="relative group" data-aos="fade-up" data-aos-delay="500">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-3xl transform rotate-2 group-hover:rotate-0 transition-transform duration-300"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-yellow-500 to-yellow-600 text-white mx-auto mb-6 shadow-lg">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-blue-900 text-center mb-3">Sertifikat CDAKB</h4>
                    <p class="text-center text-gray-600 font-semibold text-lg">
                        912040689029200000001
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vision & Mission Section -->
<div class="bg-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div data-aos="fade-up" data-aos-duration="800" class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-100 to-blue-50 rounded-3xl transform -rotate-2"></div>
                <div class="relative bg-white p-10 rounded-3xl shadow-xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-4xl font-extrabold text-blue-900">Visi Kami</h2>
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Menjadi Perusahaan Kesehatan Terbaik Dengan Terus Memberikan Produk Kualitas Terbaik Dan Layanan yang sangat baik.
                    </p>
                </div>
            </div>
            
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-red-100 to-red-50 rounded-3xl transform rotate-2"></div>
                <div class="relative bg-white p-10 rounded-3xl shadow-xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-600 to-red-700 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h2 class="text-4xl font-extrabold text-blue-900">Misi Kami</h2>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-700">Meningkatkan kesehatan masyarakat melalui penyediaan perangkat medis dan produk yang terkait.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-700">Menyediakan akses ke teknologi dan produk medis terkini yang inovatif dan teruji.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-700">Memastikan setiap produk memenuhi standar kualitas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-700">Membangun kemitraan strategis jangka panjang dengan fasilitas kesehatan dan produsen.</span>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-red-100 text-red-600 text-sm font-bold rounded-full mb-4">Nilai-Nilai Kami</span>
            <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Fondasi Kami dalam Melayani
            </h3>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform rotate-3"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200 text-blue-700 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-blue-900 text-center mb-4">Integritas</h4>
                    <p class="text-center text-gray-600 leading-relaxed">
                        Menjalankan bisnis dengan jujur, transparan, dan etis dalam setiap interaksi.
                    </p>
                </div>
            </div>
            
            <div class="group relative" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform rotate-3"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-red-100 to-red-200 text-red-700 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-blue-900 text-center mb-4">Kualitas</h4>
                    <p class="text-center text-gray-600 leading-relaxed">
                        Hanya menyediakan produk terbaik yang telah teruji dan memenuhi standar.
                    </p>
                </div>
            </div>

            <div class="group relative" data-aos="fade-up" data-aos-delay="500">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform rotate-3"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="flex items-center justify-center w-20 h-20 rounded-2xl bg-gradient-to-br from-yellow-100 to-yellow-200 text-yellow-700 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.056 3 12s4.03 8.25 9 8.25zM12 12a3 3 0 100-6 3 3 0 000 6z" />
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-blue-900 text-center mb-4">Pelayanan</h4>
                    <p class="text-center text-gray-600 leading-relaxed">
                        Berfokus pada kepuasan pelanggan melalui respons cepat dan solusi yang efektif.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients Section -->
<div class="bg-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-blue-100 text-blue-600 text-sm font-bold rounded-full mb-4">Klien Kami</span>
            <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Dipercaya oleh Fasilitas Kesehatan
            </h3>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600">
                Kami bangga telah melayani dan menjadi mitra terpercaya bagi berbagai institusi kesehatan di Indonesia.
            </p>
        </div>

        <!-- Grid Klien Utama -->
        <div id="clients-grid" class="mt-20 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="data:image/png;base64,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" alt="Logo Klien 1" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">RSUD DR SOETOMO</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="150">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-red-50 to-red-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="data:image/jpeg;base64,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" alt="Logo Klien 2" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">UNIVERSITAS GADJAH MADA</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-yellow-50 to-yellow-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhhL6urO1hFibguayQFqa8mnv9FZ7oG7_VAYQVWIEZLlBw3w-qNLkK0-FBaM6m4YA2pbkGmTqxKtSauv7NrBPBYOuQwLJoSyIWqH87YIrurHHQRIqo1XRydESM0irKh8mcWUHeXNF5tsoYE_QVuEzfU2ZTQb5kC9q8iiiu4tg9VzWedNvdDa0pdaHXx/s320/GKL15_Kimia%20Farma%20-%20Koleksilogo.com.jpg" alt="Logo Klien 3" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">KIMIA FARMA</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="250">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3RNUscTPlkKqWXip0MIuF0n72krA3D7wydw&s" alt="Logo Klien 4" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">K24</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdboohSrywGKzUtdM2VBbO0_z4Bf-LfLX4kg&s" alt="Logo Klien 5" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">RS UNAIR</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="350">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-pink-50 to-pink-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://rs-soewandhi.surabaya.go.id/wp-content/uploads/al_opt_content/IMAGE/rs-soewandhi.surabaya.go.id/wp-content/uploads/2023/05/1200px-City_of_Surabaya_Logo.svg.png.bv_resized_mobile.png.bv.webp?bv_host=rs-soewandhi.surabaya.go.id" alt="Logo Klien 6" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">RSUD DR M SOEWANDHIE</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-indigo-50 to-indigo-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://play-lh.googleusercontent.com/wCTidN0npLoMqymCS03yH8ZWZ_hL50mLySQ96AnA75eIuarn7ZN5f817_UfSXaE1Poo" alt="Logo Klien 7" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">RSUP PROF.DR.I.G.N.G NGOERAH</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="450">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-teal-50 to-teal-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://lh5.googleusercontent.com/proxy/JNbLyyGylDoq-zZCVqNPS6-iyOrB-tHu2e1ySjpW-nmE3Xd0mkYyv4xd3asOaceX0TjXt4ZxkEGgTNTT_BqsL0J9m74ta-mlqg" alt="Logo Klien 8" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">RSUD DR WAHIDIN SUDIRO HUSODO</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="500">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="data:image/jpeg;base64,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" alt="Logo Klien 9" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">BADAN KEPENDUDUKAN DAN KELUARGA BERENCANA NASIONAL</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="550">
                <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-emerald-50 to-emerald-100 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://dinsos.bojonegorokab.go.id/uploads/link/FOTOBANNERLINK20141118121412pm.png" alt="Logo Klien 10" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300 rounded-xl">
                </div>
                <p class="text-sm font-bold text-gray-700">DINAS SOSIAL KABUPATEN BOJONEGORO</p>
            </div>
        </div>

        <!-- Tombol Selengkapnya -->
        <div class="mt-16 text-center">
            <button id="showMoreClientsBtn" class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-full shadow-lg hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105">
                Selengkapnya
            </button>
        </div>
    </div>
</div>

<!-- Client Feedback Section -->
<div class="bg-gradient-to-b from-white to-gray-50 py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-yellow-100 text-yellow-600 text-sm font-bold rounded-full mb-4">Testimoni</span>
            <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Apa Kata Klien Kami
            </h3>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600">
                Kepuasan klien adalah prioritas utama kami. Simak pengalaman mereka bekerja sama dengan PT. BERITO JAYA MEDIKA.
            </p>
        </div>

        @if($feedbacks->count() > 0)
        <!-- Carousel Container -->
        <div class="mt-20 relative">
            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 w-14 h-14 bg-white hover:bg-blue-600 rounded-full shadow-xl flex items-center justify-center transition-all duration-300 group">
                <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            
            <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 w-14 h-14 bg-white hover:bg-blue-600 rounded-full shadow-xl flex items-center justify-center transition-all duration-300 group">
                <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Carousel Track -->
            <div class="overflow-hidden">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-out">
                    @foreach($feedbacks as $feedback)
                    <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                        <div class="bg-white rounded-3xl shadow-xl p-8 h-full transform hover:-translate-y-2 transition-all duration-300 border-2 border-gray-100">
                            <!-- Quote Icon -->
                            <div class="flex justify-between items-start mb-6">
                                <svg class="w-12 h-12 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                                
                                <!-- Rating Stars -->
                                <div class="flex items-center gap-1">
                                    @for($i = 1; $i <= 5; $i++)
                                        <svg class="w-5 h-5 {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endfor
                                </div>
                            </div>

                            <!-- Feedback Text -->
                            <p class="text-gray-700 leading-relaxed mb-8 line-clamp-6">
                                "{{ $feedback->feedback }}"
                            </p>

                            <!-- Client Info -->
                            <div class="flex items-center gap-4 pt-6 border-t-2 border-gray-100">
                                @if($feedback->client_photo)
                                    <img src="{{ Storage::url($feedback->client_photo) }}" 
                                         alt="{{ $feedback->client_name }}" 
                                         class="w-16 h-16 rounded-full object-cover border-4 border-blue-100">
                                @else
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full flex items-center justify-center">
                                        <span class="text-white font-bold text-2xl">{{ substr($feedback->client_name, 0, 1) }}</span>
                                    </div>
                                @endif
                                
                                <div class="flex-1">
                                    <h4 class="text-lg font-bold text-blue-900">{{ $feedback->client_name }}</h4>
                                    <p class="text-sm text-gray-600">{{ $feedback->client_position }}</p>
                                    <p class="text-sm font-semibold text-blue-600">{{ $feedback->client_company }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Indicators -->
            <div class="flex justify-center gap-2 mt-8">
                @foreach($feedbacks as $index => $feedback)
                    <button class="carousel-indicator w-3 h-3 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-blue-600 w-8' : 'bg-gray-300' }}" 
                            data-index="{{ $index }}"></button>
                @endforeach
            </div>
        </div>
        @else
        <!-- Empty State -->
        <div class="mt-20 text-center py-16">
            <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Testimoni</h3>
            <p class="text-gray-600">Testimoni klien akan ditampilkan di sini.</p>
        </div>
        @endif
    </div>
</div>

<!-- Partners Section -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <span class="inline-block px-4 py-2 bg-red-100 text-red-600 text-sm font-bold rounded-full mb-4">Mitra Kami</span>
            <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Tersedia Merk / Brand
            </h3>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600">
                Kami bekerja sama dengan para pemimpin industri untuk menghadirkan teknologi medis terbaik bagi Anda.
            </p>
        </div>

        <!-- Grid Mitra Utama -->
        <div id="partners-grid" class="mt-20 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://placehold.co/150x150/E2E8F0/A0AEC0?text=BRAND+1" alt="Logo Brand 1" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">TOO CARE</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="150">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://www.remediams.com/assets/files/14495-remedi-brand-logo.jpg" alt="Logo Brand 2" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">REMEDI</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="data:image/png;base64,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" alt="Logo Brand 3" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">ONE HEALTH</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="250">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJpIURaSgCa-2LtqjsjU1C8f5uOxwgfp2ADQ&s" alt="Logo Brand 4" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">AMPM</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://smhealth.store/cdn/shop/collections/SHOPIFY_Brands_Collections_Icon_dc80a87c-4b89-4f9f-be1d-1b8f81482de3_1200x1200.png?v=1667529300" alt="Logo Brand 5" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">SINOCARE</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="350">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSigHjNnef3fKx7M8X9YPccvh4VDOW_Pm7eWA&s" alt="Logo Brand 6" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">ONE MED</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBEFcpQ1iC1_K0WIV1LUa_rboTvysnzQZ04g&s" alt="Logo Brand 7" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">GEA MEDICAL</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="450">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcB34nMLld2hu_7wbZ31AOIfESVgoEgOKO7w&s" alt="Logo Brand 8" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">TERUMO</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="500">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://denusastore.com/wp-content/uploads/2025/09/life-resources.png" alt="Logo Brand 9" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">RESOURCES</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="550">
                <div class="w-28 h-28 rounded-2xl bg-white border-2 border-gray-200 flex items-center justify-center mb-4 shadow-lg group-hover:shadow-2xl group-hover:border-blue-500 transition-all duration-300 transform group-hover:scale-110">
                    <img src="https://www.galerimedika.com/image/cache/catalog/brands/small-general-care-600x315w.jpg" alt="Logo Brand 10" class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-300">
                </div>
                <p class="text-sm font-bold text-gray-700">General Care</p>
            </div>
        </div>

        <!-- Tombol Selengkapnya -->
        <div class="mt-16 text-center">
            <button id="showMorePartnersBtn" class="px-8 py-3 bg-red-600 text-white font-semibold rounded-full shadow-lg hover:bg-red-700 transition-colors duration-300 transform hover:scale-105">
                Selengkapnya
            </button>
        </div>
    </div>
</div>

<!-- Popup Modal -->
<div id="clientsPopup" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen p-4 bg-black bg-opacity-50">
        <div class="relative bg-white rounded-2xl shadow-xl max-w-4xl w-full max-h-[90vh] flex flex-col">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white p-6 rounded-t-2xl">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold">Daftar Lengkap Klien Kami</h3>
                    <button id="closePopupBtn" class="text-white hover:text-gray-200 text-2xl font-light">&times;</button>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 overflow-y-auto flex-grow">
                <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
<li class="bg-blue-50 text-blue-800 py-2 px-4 rounded-lg text-center font-medium shadow-sm">RS PUTRI</li>
            </ul>
            </div>

            <!-- Footer -->
            <div class="p-4 bg-gray-50 rounded-b-2xl text-center">
                <p class="text-gray-600 text-sm">Terima kasih atas kepercayaan Anda.</p>
            </div>
        </div>
    </div>
</div>

<!-- Popup Modal untuk Mitra -->
<div id="partnersPopup" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen p-4 bg-black bg-opacity-50">
        <div class="relative bg-white rounded-2xl shadow-xl max-w-4xl w-full max-h-[90vh] flex flex-col">
            <!-- Header -->
            <div class="bg-gradient-to-r from-red-600 to-red-800 text-white p-6 rounded-t-2xl">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold">Daftar Lengkap Merk / Brand</h3>
                    <button id="closePopupPartnersBtn" class="text-white hover:text-gray-200 text-2xl font-light">&times;</button>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6 overflow-y-auto flex-grow">
                <ul class="grid grid-cols-2 sm:grid-cols-3   md:grid-cols-4 gap-4">
                    <li class="bg-red-50 text-red-800 py-2 px-4 rounded-lg text-center font-medium shadow-sm">TOO CARE</li>
                    
                </ul>
            </div>

            <!-- Footer -->
            <div class="p-4 bg-gray-50 rounded-b-2xl text-center">
                <p class="text-gray-600 text-sm">Inovasi kesehatan terbaik.</p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Popup Klien
    const showMoreClientsBtn = document.getElementById('showMoreClientsBtn');
    const clientsPopup = document.getElementById('clientsPopup');
    const closePopupBtn = document.getElementById('closePopupBtn');

    showMoreClientsBtn.addEventListener('click', function () {
        clientsPopup.classList.remove('hidden');
    });

    closePopupBtn.addEventListener('click', function () {
        clientsPopup.classList.add('hidden');
    });

    // Popup Mitra
    const showMorePartnersBtn = document.getElementById('showMorePartnersBtn');
    const partnersPopup = document.getElementById('partnersPopup');
    const closePopupPartnersBtn = document.getElementById('closePopupPartnersBtn');

    showMorePartnersBtn.addEventListener('click', function () {
        partnersPopup.classList.remove('hidden');
    });

    closePopupPartnersBtn.addEventListener('click', function () {
        partnersPopup.classList.add('hidden');
    });

    // Tutup popup jika klik di luar konten
    window.addEventListener('click', function(event) {
        if (event.target === clientsPopup) {
            clientsPopup.classList.add('hidden');
        }
        if (event.target === partnersPopup) {
            partnersPopup.classList.add('hidden');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.carousel-indicator');
    
    if (!track || !prevBtn || !nextBtn) return;
    
    const slides = track.children;
    const totalSlides = slides.length;
    let currentIndex = 0;
    let itemsToShow = 1;
    
    // Determine items to show based on screen size
    function updateItemsToShow() {
        if (window.innerWidth >= 1024) {
            itemsToShow = 3;
        } else if (window.innerWidth >= 768) {
            itemsToShow = 2;
        } else {
            itemsToShow = 1;
        }
        updateCarousel();
    }
    
    // Update carousel position
    function updateCarousel() {
        const slideWidth = 100 / itemsToShow;
        const maxIndex = Math.max(0, totalSlides - itemsToShow);
        
        // Ensure currentIndex is within bounds
        currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));
        
        const offset = -(currentIndex * slideWidth);
        track.style.transform = `translateX(${offset}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('bg-blue-600', 'w-8');
                indicator.classList.remove('bg-gray-300');
            } else {
                indicator.classList.remove('bg-blue-600', 'w-8');
                indicator.classList.add('bg-gray-300');
            }
        });
    }
    
    // Next button
    nextBtn.addEventListener('click', () => {
        const maxIndex = Math.max(0, totalSlides - itemsToShow);
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to start
        }
        updateCarousel();
    });
    
    // Previous button
    prevBtn.addEventListener('click', () => {
        const maxIndex = Math.max(0, totalSlides - itemsToShow);
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = maxIndex; // Loop to end
        }
        updateCarousel();
    });
    
    // Indicator clicks
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel();
        });
    });
    
    // Auto-play
    let autoPlayInterval = setInterval(() => {
        const maxIndex = Math.max(0, totalSlides - itemsToShow);
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }, 5000); // Change slide every 5 seconds
    
    // Pause auto-play on hover
    track.addEventListener('mouseenter', () => {
        clearInterval(autoPlayInterval);
    });
    
    track.addEventListener('mouseleave', () => {
        autoPlayInterval = setInterval(() => {
            const maxIndex = Math.max(0, totalSlides - itemsToShow);
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        }, 5000);
    });
    
    // Update on window resize
    window.addEventListener('resize', updateItemsToShow);
    
    // Initial setup
    updateItemsToShow();
});
</script>

<!-- CTA Section -->
<div class="relative bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-400 overflow-hidden">
    <!-- Decorative Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute transform rotate-45 -left-20 -top-20 w-96 h-96 bg-blue-900 rounded-full"></div>
        <div class="absolute transform -rotate-45 -right-20 -bottom-20 w-96 h-96 bg-blue-900 rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-24 relative">
        <div class="text-center" data-aos="zoom-in" data-aos-duration="800">
            <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight mb-6">
                Lihat Solusi yang Kami Tawarkan
            </h2>
            <p class="mt-4 text-xl text-blue-800 max-w-2xl mx-auto leading-relaxed">
                Telusuri katalog produk kami untuk menemukan alat kesehatan dan laboratorium yang Anda butuhkan.
            </p>
            <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('products') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-900 text-white font-bold py-4 px-10 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    Lihat Produk Kami
                    <svg class="w-6 h-6 ml-2 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="#" @click.prevent="contactModalOpen = true" class="group inline-flex items-center justify-center bg-white hover:bg-gray-50 text-blue-900 font-bold py-4 px-10 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-xl border-2 border-blue-900">
                    Hubungi Kami
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
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

.line-clamp-6 {
    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

#carouselTrack {
    display: flex;
}

#carouselTrack > * {
    flex: 0 0 100%;
}

@media (min-width: 768px) {
    #carouselTrack > * {
        flex: 0 0 50%;
    }
}

@media (min-width: 1024px) {
    #carouselTrack > * {
        flex: 0 0 33.333333%;
    }
}
</style>

@endsection