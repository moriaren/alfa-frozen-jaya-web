<x-guest-layout>
    <div class="bg-[#004B93] pt-8 pb-16 text-center text-white px-4">
        <h1 class="text-2xl md:text-4xl font-black italic">Tentang Kami</h1>
        <p class="text-blue-100 mt-2 max-w-xl mx-auto text-sm md:text-base">
            Pusat Distribusi Frozen Food Terbesar di Cikarang. Mendukung ketahanan stok UMKM dan rumah tangga di seluruh wilayah Cikarang sejak 2023.
        </p>
    </div>

    {{-- FOTO STATIS BESAR (Hero Image Section) --}}
    <div class="max-w-6xl mx-auto px-4 mt-10 relative z-20">
        <div class="relative h-[300px] md:h-[500px] w-full rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white">
            {{-- Ganti 'about_hero.jpg' dengan foto toko atau gudang Anda --}}
            <img src="{{ asset('images/carousel1.webp') }}" 
                 alt="Gudang Alfa Frozen Jaya" 
                 class="w-full h-full object-cover">
            
            {{-- Overlay Gradien agar terlihat lebih sinematik --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
            
            {{-- Label kecil di pojok foto --}}
            <div class="absolute bottom-8 left-8 text-white">
                <p class="text-[10px] font-black uppercase tracking-[0.3em] opacity-80 mb-1">Established</p>
                <p class="text-2xl font-black italic uppercase tracking-tighter">Cikarang, Indonesia</p>
            </div>
        </div>
    </div>

    {{-- SEO Storytelling Section --}}
    <div class="max-w-4xl mx-auto px-6 py-12 md:py-16 text-center">
        <span class="text-[#FF2800] font-black text-xs uppercase tracking-[0.3em]">Cerita Kami</span>
        <h2 class="text-3xl md:text-4xl font-black text-slate-800 mt-4 mb-8 italic uppercase tracking-tighter">Lebih Lengkap, Lebih Hemat</h2>
        <div class="space-y-6 text-slate-600 leading-relaxed text-base md:text-lg font-medium text-justify md:text-center">
            <p>
                <strong>Alfa Frozen Jaya</strong> hadir sebagai jawaban atas kebutuhan stok makanan beku yang terus meningkat di wilayah <strong>Cikarang</strong>. Berawal dari visi untuk mendukung ekonomi lokal, kami kini tumbuh menjadi mitra utama bagi ratusan UMKM kuliner dan ribuan pelanggan setia di kawasan <strong>Cikarang Pusat, Cikarang Selatan, hingga Cikarang Utara</strong>.
            </p>
            <p>
                Kami memahami mobilitas tinggi di area industri <strong>Cikarang</strong>. Oleh karena itu, kami menyediakan <strong>ratusan varian produk</strong> mulai dari nugget, sosis, bakso, hingga kentang goreng yang disimpan dalam sistem <i>cold storage</i> standar industri untuk memastikan kesegaran produk terjaga hingga ke tangan konsumen di area <strong>Jababeka, Lippo Cikarang, Deltamas, hingga kawasan MM2100</strong>.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 pb-16 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <div class="bg-white p-8 md:p-12 rounded-[3rem] shadow-xl border border-slate-100 group hover:border-[#004B93] transition-all duration-500 flex flex-col">
            <div class="w-14 h-14 bg-blue-50 text-[#004B93] rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>
            
            <h2 class="text-2xl font-black text-slate-800 mb-6 uppercase italic tracking-tighter">Visi Kami</h2>
            
            <p class="text-slate-600 leading-relaxed text-lg font-semibold italic">
                "Menjadi mitra utama dan tulang punggung bagi UMKM kuliner di wilayah <span class="text-[#004B93]">Cikarang</span> dengan menyediakan stok makanan beku yang stabil, berkualitas, dan harga distributor yang paling kompetitif."
            </p>
            
            <div class="mt-auto pt-8">
                <div class="h-1 w-20 bg-blue-100 rounded-full group-hover:w-full transition-all duration-700"></div>
            </div>
        </div>

        <div class="bg-white p-8 md:p-12 rounded-[3rem] shadow-xl border border-slate-100 group hover:border-[#FF2800] transition-all duration-500">
            <div class="w-14 h-14 bg-red-50 text-[#FF2800] rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            
            <h2 class="text-2xl font-black text-slate-800 mb-6 uppercase italic tracking-tighter">Misi Kami</h2>
            
            <ul class="space-y-8">
                <li class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-[10px] font-black group-hover:bg-[#FF2800] transition-colors">01</div>
                    <div>
                        <p class="text-slate-900 font-black text-xs uppercase tracking-widest mb-1">Kualitas Pabrik Utama</p>
                        <p class="text-slate-500 text-sm leading-relaxed">Menyediakan produk <span class="text-slate-800 font-bold italic">Halal 100%</span> yang didatangkan langsung dari pabrik utama untuk menjamin keaslian dan harga tangan pertama.</p>
                    </div>
                </li>
                
                <li class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-[10px] font-black group-hover:bg-[#FF2800] transition-colors">02</div>
                    <div>
                        <p class="text-slate-900 font-black text-xs uppercase tracking-widest mb-1">Standar Cold Storage</p>
                        <p class="text-slate-500 text-sm leading-relaxed">Menjaga rantai dingin produk dengan standar gudang pendingin industri guna menjamin kesegaran maksimal di wilayah <span class="text-slate-800 font-bold italic">Cikarang</span>.</p>
                    </div>
                </li>
                
                <li class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-[10px] font-black group-hover:bg-[#FF2800] transition-colors">03</div>
                    <div>
                        <p class="text-slate-900 font-black text-xs uppercase tracking-widest mb-1">Kecepatan Logistik Lokal</p>
                        <p class="text-slate-500 text-sm leading-relaxed">Memberikan pelayanan pengiriman cepat dan terjadwal ke seluruh wilayah <span class="text-slate-800 font-bold italic">Cikarang</span> demi mendukung kelancaran operasional Mitra.</p>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>

    <div class="max-w-4xl mx-auto px-4 mb-12 text-center">
        <div class="bg-[#004B93] p-8 rounded-3xl shadow-2xl text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full -mr-16 -mt-16"></div>
            <h3 class="text-gray-300 font-bold uppercase tracking-widest text-xs mb-6">Jam Operasional (Semua Cabang)</h3>
            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <div class="flex items-center gap-4">
                    <div class="text-3xl">🗓️</div>
                    <div class="text-left">
                        <p class="text-blue-200 text-xs font-bold">HARI BUKA</p>
                        <p class="text-xl font-black">Senin - Minggu</p>
                    </div>
                </div>
                <div class="hidden md:block w-px h-10 bg-blue-400/30"></div>
                <div class="flex items-center gap-4">
                    <div class="text-3xl">⏰</div>
                    <div class="text-left">
                        <p class="text-blue-200 text-xs font-bold">JAM PELAYANAN</p>
                        <p class="text-xl font-black">06:00 - 21:00 WIB</p>
                    </div>
                </div>
            </div>
            <p class="mt-6 text-[10px] text-blue-200 italic font-medium uppercase tracking-widest">*Kami tetap melayani di hari libur nasional</p>
        </div>
    </div>

        <section id="lokasi" class="bg-slate-50 py-10 border-y border-slate-200">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-12">
                    <span class="text-[#FF2800] font-bold text-xs uppercase tracking-widest">Store Locator</span>
                    <h2 class="text-3xl md:text-4xl font-black text-slate-800 mt-2 italic">Daftar Cabang Kami</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition duration-300 flex flex-col group">
                        <div class="h-48 bg-slate-200 relative">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6149633486552!2d107.1663603!3d-6.3142048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699b0b23fb150f%3A0x43c939f1547c5fe5!2sALFA%20FROZEN%20JAYA%20JABABEKA!5e0!3m2!1sid!2sid!4v1766354307770!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-[#0EA5E9] text-[10px] font-black px-3 py-1 rounded-lg shadow-sm tracking-widest italic">
                                CABANG 01 • 
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-[#004B93] transition uppercase italic">Jababeka (Kantor & Gudang)</h3> 
                            <p class="text-slate-500 text-[11px] font-bold uppercase tracking-wider mb-6 leading-relaxed">PERUMAHAN SENTUL BAROKAH, Jl. Raya Rw. Sentul, Jayamukti, Kec. Cikarang Pusat, Kabupaten Bekasi, Jawa Barat 17530</p>
                            <div class="flex items-center gap-1 mb-4">
                                <div class="flex text-yellow-400">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <span class="text-xs font-black text-slate-800 ml-1">5.0</span>
                                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-widest ml-1">(Google Maps)</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition duration-300 flex flex-col group">
                        <div class="h-48 bg-slate-200 relative">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3094104848533!2d107.09606327364048!3d-6.353976962158989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69913355c43215%3A0x3ef6dde0f5129313!2sALFA%20FROZEN%20JAYA%20CIANTRA!5e0!3m2!1sid!2sid!4v1766362427221!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-[#0EA5E9] text-[10px] font-black px-3 py-1 rounded-lg shadow-sm tracking-widest italic">
                                CABANG 02
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-[#004B93] transition uppercase italic">Ciantra</h3>
                            <p class="text-slate-500 text-[11px] font-bold uppercase tracking-wider mb-6 leading-relaxed">Perum Bumi Cikarang Asri No.04 A & 04B Blok 01, Ciantra, Cikarang Sel., Kabupaten Bekasi, Jawa Barat 17530</p>
                            <div class="flex items-center gap-1 mb-4">
                                <div class="flex text-yellow-400">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <span class="text-xs font-black text-slate-800 ml-1">5.0</span>
                                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-widest ml-1">(Google Maps)</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition duration-300 flex flex-col group">
                        <div class="h-48 bg-slate-200 relative">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1157049159565!2d107.12154867364086!3d-6.379062662394746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699978824ec1a1%3A0x389cf44863b73f45!2sALFA%20FROZEN%20JAYA%20MEGA%20REGENCY!5e0!3m2!1sid!2sid!4v1766362569624!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-[#0EA5E9] text-[10px] font-black px-3 py-1 rounded-lg shadow-sm tracking-widest italic">
                                CABANG 03
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-[#004B93] transition uppercase italic">Mega Regency</h3>
                            <p class="text-slate-500 text-[11px] font-bold uppercase tracking-wider mb-6 leading-relaxed">No.4-5 Blok k, Perum Mega Regency, JL. Utama Jl. Mega Raya No.24, Sukaragam, Kec. Serang Baru, Kabupaten Bekasi, Jawa Barat 17330</p>
                            <div class="flex items-center gap-1 mb-4">
                                <div class="flex text-yellow-400">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <span class="text-xs font-black text-slate-800 ml-1">4.9</span>
                                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-widest ml-1">(Google Maps)</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition duration-300 flex flex-col group">
                        <div class="h-48 bg-slate-200 relative">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63459.814113984685!2d107.08759022167966!3d-6.232273799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69855534e06c9f%3A0x9e0f973db20f545d!2sALFA%20FROZEN%20MART%20PILAR!5e0!3m2!1sid!2sid!4v1766362669915!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-[#0EA5E9] text-[10px] font-black px-3 py-1 rounded-lg shadow-sm tracking-widest italic">
                                CABANG 04
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-black text-slate-800 mb-2 group-hover:text-[#004B93] transition uppercase italic">Pilar</h3>
                            <p class="text-slate-500 text-[11px] font-bold uppercase tracking-wider mb-6 leading-relaxed">Sukaraya, Kec. Karangbahagia, Kabupaten Bekasi, Jawa Barat 17530</p>
                            <div class="flex items-center gap-1 mb-4">
                                <div class="flex text-yellow-400">
                                    @for($i=0; $i<5; $i++)
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    @endfor
                                </div>
                                <span class="text-xs font-black text-slate-800 ml-1">4.9</span>
                                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-widest ml-1">(Google Maps)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>