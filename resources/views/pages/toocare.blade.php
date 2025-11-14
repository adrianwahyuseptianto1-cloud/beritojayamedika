@extends('layouts.public')

@section('title', 'Too Care - Brand Inovasi PT. Berito Jaya Medika')

@section('content')

<div class="relative bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/2 w-72 h-72 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-5xl mx-auto text-center">

            <div class="mb-6" data-aos="fade-down" data-aos-duration="800"> <!-- ✅ jarak ditambah -->
                <div class="inline-block relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-[2rem] blur-3xl opacity-40 animate-pulse"></div>

                    <div class="relative bg-gradient-to-br from-emerald-100 via-teal-100 to-cyan-100 rounded-[2rem] p-2 shadow-2xl transform hover:scale-105 transition-all duration-500 border-4 border-emerald-200">

                        <img src="{{ asset('image/toocare.png') }}"
                            alt="Too Care Logo"
                            class="w-40 h-36 object-contain mx-auto">
                    </div>
                </div>
            </div>

            <h1 class="text-3xl md:text-5xl font-black bg-clip-text bg-gradient-to-r from-emerald-600 via-teal-600 to-cyan-600 mb-4" data-aos="fade-up" data-aos-delay="100">
                
                Too Care
            </h1>

            <div class="inline-block mb-6" data-aos="fade-up" data-aos-delay="200">
                <p class="text-lg md:text-xl text-emerald-600 font-bold px-6 py-2 bg-white/60 backdrop-blur-sm rounded-full shadow-lg border-2 border-emerald-200">
                    Caring for Your Health
                </p>
            </div>

            <p class="text-base text-gray-700 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="300">
                Too Care adalah brand terbaru dari PT. Berito Jaya Medika yang menghadirkan produk-produk kesehatan inovatif dan berkualitas tinggi untuk meningkatkan kualitas hidup masyarakat Indonesia.
            </p>
        </div>
    </div>
</div>


<!-- Current Products Section -->
<div class="bg-white py-24 relative overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 float-animation"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 float-animation" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up">

           <h2 class="text-5xl md:text-6xl font-black mb-6">
            <span class="tag-badge text-white px-6 py-2.5 rounded-full text-sm font-bold tracking-wider uppercase shadow-lg">
                    ✨Produk Kami 
                </span>
            </h2>
        </div>

        <!-- Products Grid -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            
            <!-- Product 1: Alcohol -->
            <div class="gradient-border group rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3" data-aos="fade-up" data-aos-delay="400">
                <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-blue-100 via-blue-50 to-white">
                    <img src="{{ asset('image/product1.png') }}" alt="Alcohol 70%" 
                         class="w-full h-full object-contain p-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                            HYGIENE
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">
                        ALCOHOL 70%
                    </h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p class="font-semibold text-blue-600">✓ Alcohol 70%</p>
                        <p class="font-semibold text-blue-600">✓ Mudah dibuka & ditutup</p>
                        <p class="font-semibold text-blue-600">✓ Aman untuk kulit</p>
                        <div class="pt-3 mt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-500 italic">Antiseptik pembersih luka yang efektif</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2: Celana Khitan -->
            <div class="gradient-border group rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3" data-aos="fade-up" data-aos-delay="400">
                <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-blue-100 via-blue-50 to-white">
                    <img src="{{ asset('image/product2.png') }}" alt="Celana Khitan" 
                         class="w-full h-full object-contain p-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                            PROTECTION
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">
                        CELANA KHITAN
                    </h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p class="font-semibold text-blue-600">✓ Spon kuat & elastis</p>
                        <p class="font-semibold text-blue-600">✓ 100% cotton</p>
                        <p class="font-semibold text-blue-600">✓ Anti panas</p>
                        <p class="font-semibold text-blue-600">✓ Ukuran S, M, L, XL</p>
                        <div class="pt-3 mt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-500 italic">Melindungi luka pasca sunat</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3: Povidone Iodine -->
            <div class="gradient-border group rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3" data-aos="fade-up" data-aos-delay="400">
                <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-blue-100 via-blue-50 to-white">
                    <img src="{{ asset('image/product3.png') }}" alt="Povidone Iodine" 
                         class="w-full h-full object-contain p-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                            HYGIENE
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">
                        POVIDONE IODINE
                    </h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p class="font-semibold text-blue-600">✓ Povidone iodine 10%</p>
                        <p class="font-semibold text-blue-600">✓ pH balance</p>
                        <p class="font-semibold text-blue-600">✓ Tidak pedih</p>
                        <p class="font-semibold text-blue-600">✓ Berbagai ukuran</p>
                        <div class="pt-3 mt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-500 italic">Mengobati & mencegah infeksi luka</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4: Spalk Gip Infus -->
            <div class="gradient-border group rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3" data-aos="fade-up" data-aos-delay="400">
                <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-blue-100 via-blue-50 to-white">
                    <img src="{{ asset('image/product4.png') }}" alt="Spalk Gip Infus" 
                         class="w-full h-full object-contain p-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                            MEDICAL SUPPLY
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">
                        SPALK GIP INFUS
                    </h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p class="font-semibold text-blue-600">✓ Kain busa + papan</p>
                        <p class="font-semibold text-blue-600">✓ 1 Pack isi 20 pcs</p>
                        <p class="font-semibold text-blue-600">✓ Kuat & nyaman</p>
                        <div class="pt-3 mt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-500 italic">Penahan infus agar tidak bergeser</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 5: Spalk Bidai -->
            <div class="gradient-border group rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3" data-aos="fade-up" data-aos-delay="400">
                <div class="relative aspect-square overflow-hidden bg-gradient-to-br from-blue-100 via-blue-50 to-white">
                    <img src="{{ asset('image/product5.png') }}" alt="Spalk Bidai Patah Tulang" 
                         class="w-full h-full object-contain p-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-700">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                            MEDICAL SUPPL5
                        </span>
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-black text-gray-900 mb-3 group-hover:text-teal-600 transition-colors">
                        SPALK BIDAI KAKI
                    </h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p class="font-semibold text-indigo-600">✓ Spons empuk</p>
                        <p class="font-semibold text-indigo-600">✓ Kuat & ringan</p>
                        <p class="font-semibold text-indigo-600">✓ Panjang 110 cm</p>
                        <div class="pt-3 mt-3 border-t border-gray-100">
                            <p class="text-xs text-gray-500 italic">Immobilisasi tulang patah</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Coming Soon Products Section -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20 lg:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-5 py-2 bg-gradient-to-r from-purple-100 to-pink-100 text-purple-700 rounded-full text-sm font-bold mb-4">SEGERA HADIR</span>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Produk Mendatang</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Inovasi terbaru yang sedang kami kembangkan untuk kesehatan Anda</p>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            <!-- Coming Soon Products -->
            @foreach([
                ['img' => 'comingsoon1.png', 'title' => 'Pasien Monitor', 'desc' => 'Pemantauan tanda vital pasien (EKG, SpO2, NIBP) secara real-time dan akurat.'],
                ['img' => 'comingsoon2.webp', 'title' => 'Video Laryngoscope 4.5"', 'desc' => 'Visualisasi jalan napas jernih di layar 4.5 inci untuk intubasi yang lebih mudah dan aman.'],
                ['img' => 'comingsoon3.png', 'title' => 'Syringe Pump', 'desc' => 'Presisi tinggi untuk pemberian obat (dosis kecil) secara terkontrol dan otomatis.'],
                ['img' => 'comingsoon4.png', 'title' => 'Infus Pump', 'desc' => 'Kontrol aliran cairan infus (volume besar) secara otomatis, aman, dan konsisten.'],
                ['img' => 'comingsoon5.webp', 'title' => 'ECG 12 Channel', 'desc' => 'Rekam dan analisis aktivitas listrik jantung 12-lead untuk diagnosis komprehensif.']
            ] as $product)
            <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border-2 border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="relative aspect-square bg-gradient-to-br from-blue-100 to-blue-200 overflow-hidden">
                    <img src="{{ asset('image/' . $product['img']) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 opacity-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 to-transparent"></div>
                    <div class="absolute top-3 right-3 bg-blue-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg">Coming Soon</div>
                    <div class="absolute bottom-3 left-3 right-3">
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $product['title'] }}</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $product['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Contact Section - Elegant & Simple -->
<div class="relative bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-24 lg:py-28 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-60">
        <div class="absolute top-0 left-0 w-[450px] h-[450px] bg-emerald-300 rounded-full blur-3xl mix-blend-multiply"></div>
        <div class="absolute bottom-0 right-0 w-[450px] h-[450px] bg-teal-300 rounded-full blur-3xl mix-blend-multiply"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            
            <div class="inline-block mb-8">
                <div class="bg-blue/20 backdrop-blur-sm border-2 border-blue/30 rounded-full px-6 py-3">
                    <span class="text-blue font-bold text-sm tracking-wider">PARTNERSHIP OPPORTUNITY</span>
                </div>
            </div>
            
            <h2 class="text-5xl md:text-6xl font-black text-blue mb-6">
                Tertarik Bekerja Sama?
            </h2>
            <p class="text-xl md:text-2xl font-black text-blue mb-6 leading-relaxed max-w-2xl mx-auto">
                Jika Anda tertarik untuk menjadi mitra distribusi atau ingin mengetahui lebih lanjut tentang produk Too Care, silakan hubungi kami.
            </p>
            
            <div class="mb-12">
                <a href="#" @click.prevent="contactModalOpen = true" 
                   class="group inline-flex items-center gap-3 bg-blue hover:bg-gray-50 text-emerald-600 font-bold py-5 px-12 rounded-2xl text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Hubungi Kami
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
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

.float-animation {
    animation: float 6s ease-in-out infinite;
}

.gradient-border {
    position: relative;
    background: white;
}

.gradient-border::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 1.5rem;
    padding: 2px;
    background: linear-gradient(135deg, #10b981, #14b8a6, #06b6d4);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0;
    transition: opacity 0.3s;
}

.gradient-border:hover::before {
    opacity: 1;
}

.tag-badge {
    background: linear-gradient(135deg, #10b981 0%, #14b8a6 100%);
    box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
}
</style>

@endsection