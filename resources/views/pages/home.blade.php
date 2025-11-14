@extends('layouts.public')

@section('title', 'PT. BERITO JAYA MEDIKA - Distributor Alat Kesehatan Inovatif')

@section('content')

<!-- Hero Section with Enhanced Design -->
<div class="relative bg-gradient-to-br from-blue-50 via-white to-blue-50 py-24 sm:py-32 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="z-10">
                <span class="inline-block py-2 px-4 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 text-sm font-bold mb-6 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    🏥 Distributor Medis Terpercaya
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900" data-aos="fade-up" data-aos-delay="300">
                    Partner Anda untuk Teknologi Medis Terdepan
                </h1>
                <p class="mt-6 text-xl text-gray-700 max-w-lg leading-relaxed" data-aos="fade-up" data-aos-delay="400">
                    Sebagai distributor alkes terpercaya, kami menjembatani fasilitas kesehatan Anda dengan inovasi dan kualitas terbaik di industri.
                </p>
                
                <!-- Stats Bar -->
                <div class="mt-8 grid grid-cols-3 gap-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-900">500+</div>
                        <div class="text-sm text-gray-600">Klien</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-900">800+</div>
                        <div class="text-sm text-gray-600">Produk</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-900">20+</div>
                        <div class="text-sm text-gray-600">Tahun</div>
                    </div>
                </div>
                
                <div class="mt-10 flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="500">
                    <a href="{{ route('products') }}" class="group inline-flex items-center bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-4 px-8 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        Lihat Produk
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <a href="#" @click.prevent="contactModalOpen = true" class="group inline-flex items-center bg-white hover:bg-gray-50 text-blue-900 font-bold py-4 px-8 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl border-2 border-blue-900">
                        Konsultasi Gratis
                        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Enhanced Hero Image -->
            <div class="relative h-[500px] lg:h-[600px] flex items-center justify-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <!-- Geometric Background -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="absolute w-80 h-80 md:w-96 md:h-96 bg-gradient-to-br from-blue-900 to-blue-800 rounded-[4rem] transform rotate-12 opacity-90 shadow-2xl"></div>
                    <div class="absolute w-72 h-72 md:w-80 md:h-80 bg-gradient-to-br from-red-500 to-red-600 rounded-[3rem] transform -rotate-12 opacity-30 blur-sm"></div>
                    <div class="absolute w-64 h-64 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full transform rotate-45 opacity-20 blur-xl"></div>
                </div>
                
                <!-- Main Image with Subtle Rounded Shape -->
                <div class="relative z-10 w-full max-w-[500px] h-[450px]">
                    <!-- Image Container with Soft Rounded Corners -->
                    <div class="absolute inset-0 overflow-hidden rounded-[3rem] shadow-2xl">
                        <img class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700" 
                             src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Medical Equipment PT Berito Jaya Medika">
                        <!-- Subtle Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/20 via-transparent to-yellow-400/10"></div>
                    </div>
                    
                    <!-- Decorative Accent Dots -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-yellow-400 rounded-full opacity-70 blur-sm"></div>
                    <div class="absolute -bottom-6 -left-6 w-28 h-28 bg-blue-900 rounded-full opacity-15 blur-md"></div>
                    <div class="absolute top-1/3 -right-8 w-16 h-16 bg-red-500 rounded-full opacity-40 blur-lg"></div>
                </div>
                
                <!-- Floating Badge -->
                <div class="absolute bottom-4 left-4 lg:bottom-8 lg:left-8 bg-white rounded-2xl shadow-2xl p-4 z-20 transform hover:scale-105 transition-transform" data-aos="fade-up" data-aos-delay="800">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-gray-900">Kualitas Terjamin</div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Stats Card -->
                <div class="absolute top-8 right-4 lg:top-12 lg:right-8 bg-white rounded-xl shadow-xl p-3 z-20 transform hover:scale-105 transition-transform" data-aos="fade-down" data-aos-delay="1000">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-900">99%</div>
                        <div class="text-xs text-gray-600">Kepuasan</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Product Categories Section -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-base font-semibold text-red-600 uppercase tracking-wider">Kategori Produk</h2>
            <h3 class="mt-3 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight">
                Solusi Lengkap Kebutuhan Medis
            </h3>
            <p class="mt-5 max-w-2xl mx-auto text-xl text-gray-600">
                Dari diagnostik hingga perlengkapan bedah, kami memiliki apa yang Anda butuhkan.
            </p>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <a href="{{ route('products') }}" class="group relative block rounded-3xl shadow-2xl overflow-hidden h-96 transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://img.freepik.com/vektor-gratis/banyak-peralatan-medis-dan-obat-obatan-dengan-latar-belakang-putih_1308-43339.jpg?semt=ais_hybrid&w=740&q=80" alt="Diagnostik">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/70 to-transparent group-hover:from-blue-800 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <div class="inline-block px-4 py-1 bg-yellow-400 text-blue-900 text-xs font-bold rounded-full mb-3">POPULER</div>
                    <h4 class="text-3xl font-bold text-white mb-2">Peralatan Diagnostik</h4>
                    <p class="text-gray-200 mb-4">Teknologi diagnostik presisi tinggi</p>
                    <span class="inline-flex items-center text-yellow-400 font-semibold">
                        Lihat Selengkapnya 
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </div>
            </a>
            
            <a href="{{ route('products') }}" class="group relative block rounded-3xl shadow-2xl overflow-hidden h-96 transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://png.pngtree.com/background/20230525/original/pngtree-some-surgical-instruments-are-displayed-on-a-white-surface-picture-image_2735075.jpg" alt="Ruang Bedah">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/70 to-transparent group-hover:from-blue-800 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <div class="inline-block px-4 py-1 bg-red-500 text-white text-xs font-bold rounded-full mb-3">PREMIUM</div>
                    <h4 class="text-3xl font-bold text-white mb-2">Perlengkapan Bedah</h4>
                    <p class="text-gray-200 mb-4">Instrumen bedah berkualitas internasional</p>
                    <span class="inline-flex items-center text-yellow-400 font-semibold">
                        Lihat Selengkapnya 
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </div>
            </a>

            <a href="{{ route('products') }}" class="group relative block rounded-3xl shadow-2xl overflow-hidden h-96 transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="500">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://png.pngtree.com/png-clipart/20210620/original/pngtree-gloves-white-clean-medical-png-image_6438715.jpg" alt="Sarung Tangan Medis">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 via-blue-900/70 to-transparent group-hover:from-blue-800 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <div class="inline-block px-4 py-1 bg-green-500 text-white text-xs font-bold rounded-full mb-3">STOK LENGKAP</div>
                    <h4 class="text-3xl font-bold text-white mb-2">Produk Habis Pakai</h4>
                    <p class="text-gray-200 mb-4">Ketersediaan stok terjamin</p>
                    <span class="inline-flex items-center text-yellow-400 font-semibold">
                        Lihat Selengkapnya 
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </div>
            </a>
            
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="bg-white py-20 lg:py-28">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Technical Support -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
            <div data-aos="fade-right" data-aos-duration="800">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-900 text-sm font-bold rounded-full mb-4">Layanan Profesional</span>
                <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight leading-tight">
                    Dukungan Teknis Profesional
                </h3>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    Tim teknisi kami tidak hanya melakukan instalasi, tetapi juga menyediakan layanan pemeliharaan berkala untuk memastikan alat Anda bekerja optimal.
                </p>
                <div class="mt-8 space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-xl" data-aos="fade-right" data-aos-delay="200">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Instalasi & Uji Fungsi</h4>
                            <p class="text-gray-600">Pengaturan profesional dengan pengujian menyeluruh</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-xl" data-aos="fade-right" data-aos-delay="400">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Perbaikan & Suku Cadang Asli</h4>
                            <p class="text-gray-600">Garansi keaslian dan kualitas komponen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="800">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-50 rounded-3xl transform rotate-3"></div>
                <img class="relative rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500" src="https://virtudigilab.com/wp-content/uploads/2022/01/patology-anatomy-copy.jpg" alt="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/09/28032936/Sp.-Patologi-Anatomi.jpg">
            </div>
        </div>
        
        <!-- Distribution Network -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative flex justify-center order-last lg:order-first" data-aos="fade-right" data-aos-duration="800">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-100 to-yellow-50 rounded-3xl transform -rotate-3"></div>
                <img class="relative rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1770&q=80" alt="Tim sedang konsultasi">
            </div>
            <div data-aos="fade-left" data-aos-duration="800">
                <span class="inline-block px-4 py-2 bg-red-100 text-red-600 text-sm font-bold rounded-full mb-4">Konsultasi & Distribusi</span>
                <h3 class="mt-2 text-4xl md:text-5xl font-extrabold text-blue-900 tracking-tight leading-tight">
                    Jaringan Distribusi Nasional
                </h3>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    Dengan pengalaman bertahun-tahun, kami siap membantu Anda menemukan solusi alat kesehatan yang paling tepat dan efisien untuk kebutuhan fasilitas Anda.
                </p>
                <div class="mt-8 space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-red-50 rounded-xl" data-aos="fade-left" data-aos-delay="200">
                        <div class="flex-shrink-0 w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Konsultasi Kebutuhan Produk</h4>
                            <p class="text-gray-600">Analisis mendalam untuk solusi optimal</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-red-50 rounded-xl" data-aos="fade-left" data-aos-delay="300">
                        <div class="flex-shrink-0 w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Jaminan Ketersediaan Stok</h4>
                            <p class="text-gray-600">Pasokan berkelanjutan tanpa gangguan</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-red-50 rounded-xl" data-aos="fade-left" data-aos-delay="400">
                        <div class="flex-shrink-0 w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-900">Pengiriman Tepat Waktu</h4>
                            <p class="text-gray-600">Jangkauan ke seluruh Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                Siap Meningkatkan Kualitas Layanan Anda?
            </h2>
            <p class="mt-4 text-xl text-blue-800 max-w-2xl mx-auto leading-relaxed">
                Mari diskusikan kebutuhan Anda. Tim ahli kami siap memberikan solusi terbaik untuk fasilitas kesehatan Anda.
            </p>
            <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" @click.prevent="contactModalOpen = true" class="group inline-flex items-center justify-center bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-4 px-10 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-3xl">
                    Hubungi Tim Sales
                    <svg class="w-6 h-6 ml-2 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="{{ route('products') }}" class="group inline-flex items-center justify-center bg-white hover:bg-gray-50 text-blue-900 font-bold py-4 px-10 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                    Jelajahi Produk
                    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
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

.animation-delay-4000 {
    animation-delay: 4s;
}
</style>

@endsection