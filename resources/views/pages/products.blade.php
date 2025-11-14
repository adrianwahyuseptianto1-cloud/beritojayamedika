@extends('layouts.public')
@section('title', 'Produk Kami - PT. BERITO JAYA MEDIKA')
@section('content')
<div 
    x-data="{
        searchQuery: '{{ request('search') ?? '' }}',
        selectedCategory: 'all',
        allProducts: @js($products),
        allCategories: @js($categories),
        detailModalOpen: false,
        selectedProduct: null,
        // marketplaceModalOpen: false, // Kita hapus ini karena tidak digunakan lagi
        viewMode: 'grid',
        // sortBy: 'name', // Kita hapus sort by harga karena tidak relevan
        get filteredProducts() {
            let products = this.allProducts.filter(product => {
                const categoryMatch = (this.selectedCategory === 'all' || product.category_id == this.selectedCategory);
                const searchLower = this.searchQuery.trim().toLowerCase();
                if (searchLower === '') {
                    return categoryMatch;
                }
                const nameMatch = product.name.toLowerCase().includes(searchLower);
                const descMatch = product.description && product.description.toLowerCase().includes(searchLower);
                return categoryMatch && (nameMatch || descMatch);
            });
            // Sort products by name only now
            if (this.sortBy === 'name') {
                products.sort((a, b) => a.name.localeCompare(b.name));
            }
            return products;
        }
    }"
>
    <!-- Hero Section with Enhanced Design -->
    <div class="relative bg-gradient-to-br from-blue-50 via-white to-blue-50 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 relative">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-block py-2 px-6 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 text-sm font-bold mb-6 shadow-lg animate-pulse" data-aos="fade-up">
                    🏥 Lebih dari 100+ Produk Berkualitas
                </span>
                <h1 class="text-5xl md:text-6xl lg:text-6xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                    Katalog  Produk Medis
                </h1>
                <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed mb-10" data-aos="fade-up" data-aos-delay="200">
                    Temukan solusi alat kesehatan terbaik untuk meningkatkan kualitas layanan fasilitas medis Anda
                </p>
                <!-- Enhanced Search & Filter Section -->
                <div class="max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-2xl p-6 border border-blue-100">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                            <!-- Search Bar -->
                            <div class="md:col-span-6 relative">
                                <div class="absolute left-5 top-1/2 -translate-y-1/2 text-blue-600">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <input 
                                    type="text" 
                                    placeholder="Cari produk..." 
                                    class="w-full pl-14 pr-12 py-4 rounded-2xl border-2 border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white text-gray-800 text-base placeholder-gray-400 transition-all"
                                    x-model.debounce.300ms="searchQuery" 
                                >
                                <button
                                    x-show="searchQuery.length > 0"
                                    @click="searchQuery = ''"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-red-600 transition-colors"
                                >
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Category Filter -->
                            <div class="md:col-span-4 relative">
                                <select x-model="selectedCategory" class="w-full bg-white rounded-2xl border-2 border-gray-200 py-4 px-5 text-gray-700 text-base focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer transition-all appearance-none">
                                    <option value="all">📋 Semua Brand</option>
                                    <template x-for="category in allCategories" :key="category.id">
                                        <option :value="category.id" x-text="category.name"></option>
                                    </template>
                                </select>
                                <div class="absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none text-blue-600">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            <!-- Sort Dropdown - Removed price options -->
                            <div class="md:col-span-2 relative">
                                <select x-model="sortBy" class="w-full bg-blue-600 text-white rounded-2xl border-2 border-blue-600 py-4 px-5 text-base font-semibold cursor-pointer transition-all appearance-none hover:bg-blue-700">
                                    <option value="name">A-Z</option>
                                    <!-- Removed price options -->
                                </select>
                                <div class="absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none text-white">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Results Counter & View Toggle -->
                        <div class="mt-4 flex items-center justify-between flex-wrap gap-4">
                            <div x-show="filteredProducts.length > 0" class="text-gray-600 text-base">
                                Menampilkan <span class="font-bold text-blue-900" x-text="filteredProducts.length"></span> produk
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-gray-600 mr-2">Tampilan:</span>
                                <button 
                                    @click="viewMode = 'grid'"
                                    :class="viewMode === 'grid' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                                    class="p-2.5 rounded-lg transition-all duration-300"
                                    title="Grid View"
                                >
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </button>
                                <button 
                                    @click="viewMode = 'list'"
                                    :class="viewMode === 'list' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                                    class="p-2.5 rounded-lg transition-all duration-300"
                                    title="List View"
                                >
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Section -->
    <div class="bg-gradient-to-b from-white to-gray-50 py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div x-show="allProducts.length > 0">
                <!-- Grid View -->
                <div 
                    x-show="viewMode === 'grid'"
                    class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3 md:gap-4"
                >
                    <template x-for="(product, index) in filteredProducts" :key="product.id">
                        <div 
                            x-transition
                            class="group bg-white rounded-3xl shadow-lg overflow-hidden cursor-pointer transform hover:-translate-y-3 hover:shadow-2xl transition-all duration-500 border border-gray-100"
                            data-aos="fade-up" 
                            :data-aos-delay="Math.min(index * 50, 400)"
                            @click.prevent="selectedProduct = product; detailModalOpen = true"
                        >
                            <!-- Product Image with Badge -->
                            <div class="relative overflow-hidden aspect-square bg-gradient-to-br from-gray-50 to-gray-100">
                                <img 
                                    :src="product.image ? '/storage/' + product.image : 'https://via.placeholder.com/500x500'" 
                                    :alt="product.name" 
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                >
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <!-- Stock Badge -->
                                <div class="absolute top-4 left-4">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                </div>
                                <!-- Quick View Button -->
                                <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <button class="bg-white/90 backdrop-blur-sm text-blue-600 p-3 rounded-full hover:bg-white hover:scale-110 transition-all shadow-lg">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Hover Action - Updated -->
                                <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    <button class="w-full font-semibold py-3 px-4 rounded-xl transition-all shadow-lg flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                        <span>Hubungi Sales</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Product Info -->
                            <div class="p-5">
                                <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors min-h-[56px]" x-text="product.name"></h3>
                                <!-- Removed Price Display -->
                                <div class="flex items-center justify-between mt-4">
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1"></p>
                                        <p class="text-lg font-bold text-blue-600">Detail Produk</p>
                                    </div>
                                    <div class="bg-blue-50 p-3 rounded-xl group-hover:bg-blue-100 transition-colors">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <!-- List View -->
                <div 
                    x-show="viewMode === 'list'"
                    class="space-y-4"
                >
                    <template x-for="(product, index) in filteredProducts" :key="product.id">
                        <div 
                            x-transition
                            class="group bg-white rounded-2xl shadow-lg overflow-hidden cursor-pointer hover:shadow-2xl transition-all duration-500 border border-gray-100"
                            data-aos="fade-up" 
                            :data-aos-delay="Math.min(index * 50, 400)"
                            @click.prevent="selectedProduct = product; detailModalOpen = true"
                        >
                            <div class="grid grid-cols-1 md:grid-cols-12 gap-0">
                                <!-- Product Image -->
                                <div class="md:col-span-3 relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                                    <div class="aspect-square md:aspect-auto md:h-full">
                                        <img 
                                            :src="product.image ? '/storage/' + product.image : 'https://via.placeholder.com/400x400'" 
                                            :alt="product.name" 
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                        >
                                    </div>
                                    <!-- Stock Badge 2 -->
                                    <div class="absolute top-4 left-4">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <!-- Product Details -->
                                <div class="md:col-span-6 p-6 flex flex-col justify-center">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors" x-text="product.name"></h3>
                                    <p class="text-gray-600 line-clamp-2 mb-4" x-text="product.description || 'Produk berkualitas tinggi untuk kebutuhan medis profesional'"></p>
                                    <div class="flex items-center gap-6 text-sm text-gray-500">
                                        <!-- <div class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Garansi Resmi</span>
                                        </div> -->
                                        <div class="flex items-center gap-2">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                            </svg>
                                            <span>Original 100%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price & Action - Updated -->
                                <div class="md:col-span-3 bg-gradient-to-br from-blue-50 to-gray-50 p-6 flex flex-col justify-center items-center text-center border-l border-gray-100">
                                    <p class="text-sm text-gray-500 mb-2"></p>
                                    <p class="text-2xl font-bold mb-6 text-blue-600">Detail Produk</p>
                                    <button class="w-full font-bold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2 group-hover:scale-105 duration-300 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                        <span>Detail Produk</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <!-- Empty State -->
                <div x-show="filteredProducts.length === 0" class="text-center py-20" x-cloak>
                    <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-blue-100 to-blue-50 rounded-full mb-6">
                        <svg class="w-16 h-16 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-3">Produk Tidak Ditemukan</h2>
                    <p class="text-xl text-gray-500 mb-8">Coba kata kunci lain atau ubah filter brand</p>
                    <button 
                        @click="searchQuery = ''; selectedCategory = 'all'"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg"
                    >
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Reset Pencarian
                    </button>
                </div>
            </div>
            <!-- No Products State -->
            <div x-show="allProducts.length === 0" class="text-center py-20" x-cloak>
                <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-50 rounded-full mb-6">
                    <svg class="w-16 h-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-3">Belum Ada Produk</h2>
                <p class="text-xl text-gray-500">Silakan tambahkan produk di panel admin</p>
            </div>
        </div>
    </div>
    <!-- Product Detail Modal -->
    <div 
        x-show="detailModalOpen" 
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center p-4" 
        style="display: none;"
    >
        <div x-show="detailModalOpen" @click="detailModalOpen = false" class="fixed inset-0 bg-blue-900/60 backdrop-blur-md"></div>
        <div 
            x-show="detailModalOpen"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            @click.outside="detailModalOpen = false"
            class="relative z-10 w-full max-w-6xl bg-white rounded-3xl shadow-2xl overflow-hidden"
            style="max-height: 90vh; overflow-y: auto;"
        >
            <!-- Close Button -->
            <button @click="detailModalOpen = false" class="absolute top-6 right-6 z-30 bg-white/95 backdrop-blur-sm text-gray-600 hover:text-red-600 hover:bg-white hover:rotate-90 transition-all duration-300 rounded-full p-3 shadow-xl">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0" x-if="selectedProduct">
                <!-- Product Image Gallery -->
                <div class="relative bg-gradient-to-br from-gray-50 to-gray-100 p-8 lg:p-12">
                    <div class="sticky top-8">
                        <!-- Main Image -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl mb-6 group">
                            <img 
                                :src="selectedProduct.image ? '/storage/' + selectedProduct.image : 'https://via.placeholder.com/800'" 
                                :alt="selectedProduct.name" 
                                class="w-full h-[450px] object-cover transform group-hover:scale-105 transition-transform duration-700"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 via-transparent to-transparent"></div>
                        </div>
                        <!-- Product Features -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="bg-white rounded-2xl p-4 shadow-md hover:shadow-lg transition-shadow">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Status</p>
                                        <p class="text-sm font-bold text-gray-900">Ready Stock</p>
                                    </div>
                                </div>
                            </div>
<!-- 
                            <div class="bg-white rounded-2xl p-4 shadow-md hover:shadow-lg transition-shadow">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500">Garansi</p>
                                        <p class="text-sm font-bold text-gray-900">Original</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Product Details -->
                <div class="flex flex-col p-8 lg:p-12">
                    <!-- Product Badge -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white text-sm font-bold rounded-full shadow-lg">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            Produk Terpopuler
                        </span>
                        <span class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 text-green-700 text-sm font-bold rounded-full">
                            ✓ Tersedia
                        </span>
                    </div>
                    <!-- <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4" x-text="selectedProduct.name"></h1> -->
                    <!-- Info Banner for Products Without Price - Updated to always show -->
                    <!-- <div class="mb-6 p-4 bg-gradient-to-r from-blue-50 to-indigo-50 border-l-4 border-blue-500 rounded-lg">
                        <div class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <p class="font-bold text-blue-900 mb-1">Harga Khusus Tersedia</p>
                                <p class="text-sm text-blue-700">Produk ini memiliki harga khusus. Silakan hubungi tim sales kami untuk mendapatkan penawaran terbaik dan informasi lengkap mengenai produk ini.</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- Price Section - Updated -->
                    <div class="mb-8 p-6 rounded-2xl border-2 shadow-lg bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 border-blue-100">
                        <p class="text-sm font-semibold text-gray-600 mb-2 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Informasi Produk</span>
                        </p>
                        <div class="flex items-end justify-between">
                            <div>
                    <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4" x-text="selectedProduct.name"></h1>
                                <p class="text-sm text-gray-500 mt-1">Dapatkan penawaran terbaik dari tim sales kami</p>
                            </div>
                        </div>
                    </div>
                    <!-- Description Section -->
                    <div class="mb-8 flex-grow">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h2 class="text-xl font-bold text-gray-900">Deskripsi Produk</h2>
                        </div>
                        <div class="prose max-w-none text-gray-600 leading-relaxed bg-gray-50 rounded-2xl p-6" x-html="selectedProduct.description ? selectedProduct.description.replace(/\n/g, '<br>') : '<p class=\'text-gray-400 italic\'>Tidak ada deskripsi tersedia.</p>'"></div>
                    </div>
                    <!-- Key Features -->
                    <div class="mb-8 grid grid-cols-2 gap-3">
                        <!-- <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl">
                            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-700">Garansi Resmi</span>
                        </div> -->
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-xl">
                            <svg class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-700">Harga Terbaik</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-yellow-50 rounded-xl">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span class="text-sm font-semibold text-gray-700">Pengiriman Cepat</span>
                        </div>
                    </div>
                    <!-- Action Buttons - Updated -->
                    <div class="space-y-3 pt-6 border-t-2 border-gray-100">
                        <!-- Hubungi Sales Button - Always visible -->
                        <button 
                            @click="detailModalOpen = false; contactModalOpen = true"
                            class="group w-full inline-flex items-center justify-center bg-gradient-to-r from-blue-600 via-blue-600 to-blue-700 hover:from-blue-700 hover:via-blue-700 hover:to-blue-800 text-white font-bold py-5 px-8 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl"
                        >
                            <svg class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Hubungi Sales Untuk Penawaran Terbaik
                            <svg class="w-5 h-5 ml-3 transition-transform duration-300 group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                        <button 
                            @click="detailModalOpen = false; contactModalOpen = true"
                            class="w-full inline-flex items-center justify-center bg-blue-50 hover:bg-blue-100 text-blue-600 font-bold py-4 px-8 rounded-xl text-base transition-all duration-300 border-2 border-blue-200 hover:border-blue-300"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Tanya Produk
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Marketplace Modal - REMOVED AS REQUESTED -->
    <!-- The entire marketplace modal section has been deleted -->
</div>
<!-- Custom Animations & Styles -->
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
/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #1e40af, #3b82f6);
    border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #1e3a8a, #2563eb);
}
/* Line Clamp */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
/* Alpine.js x-cloak */
[x-cloak] {
    display: none !important;
}
/* Smooth Transitions */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
/* Hover Effect for Cards */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}
.hover-float:hover {
    animation: float 2s ease-in-out infinite;
}
/* Gradient Text Animation */
@keyframes gradient-shift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.animate-gradient {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
}
/* Pulse Animation for Badge */
@keyframes pulse-slow {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}
.animate-pulse {
    animation: pulse-slow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
/* Custom Focus Ring */
input:focus, select:focus, button:focus {
    outline: none;
}
/* Backdrop Blur Support */
@supports (backdrop-filter: blur(10px)) or (-webkit-backdrop-filter: blur(10px)) {
    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }
    .backdrop-blur-md {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
}
</style>
@endsection