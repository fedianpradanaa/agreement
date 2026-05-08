<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Perjanjian Digital | PT Elementa Media Literasi
    </title>

    <!-- GOOGLE FONT -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

       <link rel="icon"
             type="image/png"
             href="{{ asset('favicon.png') }}">

    <!-- TAILWIND -->

    <script src="https://cdn.tailwindcss.com"></script>

    @if(!app()->environment('local'))

    <script
    src="https://www.google.com/recaptcha/api.js"
    async
    defer>
    </script>

    @endif

</head>

<body class="bg-[#F4F7FA] text-gray-800 overflow-x-hidden"
      style="font-family: 'Inter', sans-serif;">

<!-- MODAL PERSETUJUAN -->

<div id="agreementModal"
     class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm flex items-center justify-center p-4">

    <div class="bg-white w-full max-w-5xl rounded-[30px] shadow-2xl overflow-hidden animate-fadeIn">

        <!-- HEADER -->

        <div class="bg-gradient-to-r from-[#0176A4] to-[#1B75A1] px-8 py-6 text-white">

            <div class="flex items-center gap-4">

                <img src="{{ asset('images/logo-elementa.png') }}"
                     class="w-14 h-14 object-contain bg-white rounded-2xl p-2 shadow-lg">

                <div>

                    <h2 class="text-2xl font-bold">
                        Persetujuan Kerja Sama Penerbitan Buku
                    </h2>

                    <p class="text-white/80 text-sm mt-1">
                        PT Elementa Media Literasi
                    </p>

                </div>

            </div>

        </div>

        <!-- CONTENT -->

        <div class="p-8 max-h-[70vh] overflow-y-auto">

            <div class="space-y-6 text-gray-700 leading-relaxed text-[15px]">

                <p>
                    Dengan mengklik tombol
                    <strong>“Setuju & Lanjutkan”</strong>,
                    Penulis menyatakan telah membaca,
                    memahami, dan menyetujui seluruh
                    ketentuan kerja sama penerbitan buku
                    dengan PT Elementa Media Literasi.
                </p>

                <!-- PASAL -->

                <div class="space-y-5">

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 1 — Objek Kerja Sama
                        </h3>

                        <p class="mt-1">
                            Penulis menyerahkan naskah kepada
                            PT Elementa Media Literasi untuk
                            diproses dan diterbitkan menjadi buku,
                            baik cetak maupun digital/ebook.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 2 — Ruang Lingkup Penerbitan
                        </h3>

                        <p class="mt-1">
                            Penerbit membantu proses penerbitan,
                            ISBN/barcode, editing, layout,
                            desain cover, cetak/digital,
                            hingga distribusi dan penjualan buku.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 3 — Hak Cipta & Hak Terbit
                        </h3>

                        <p class="mt-1">
                            Hak cipta tetap milik Penulis,
                            namun Penulis memberikan hak kepada
                            Penerbit untuk menerbitkan,
                            memasarkan, dan menjual buku
                            selama masa kerja sama berlaku.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 4 — Larangan Penerbitan Ganda
                        </h3>

                        <p class="mt-1">
                            Penulis tidak diperkenankan
                            menerbitkan naskah yang sama
                            ke penerbit lain tanpa persetujuan tertulis.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 5 — File PDF & Master
                        </h3>

                        <p class="mt-1">
                            File final produksi dan master layout
                            tidak diberikan kepada Penulis
                            demi menjaga keamanan hak cipta
                            dan hak terbit bersama.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 6 — Margin & Bonus Penjualan
                        </h3>

                        <p class="mt-1">
                            Penulis berhak memperoleh margin
                            penjualan buku, ebook,
                            serta bonus penjualan tahunan
                            sesuai ketentuan kerja sama.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 7 — Masa Berlaku
                        </h3>

                        <p class="mt-1">
                            Kerja sama berlaku selama 5 tahun
                            dan dapat diperpanjang otomatis
                            apabila tidak ada penghentian tertulis.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#0176A4]">
                            PASAL 8 — Persetujuan Digital
                        </h3>

                        <p class="mt-1">
                            Persetujuan ini sah secara digital
                            setelah Penulis menekan tombol
                            “Setuju & Lanjutkan”.
                        </p>
                    </div>

                </div>

                <!-- CHECKBOX -->

                <div class="mt-8 bg-[#F4F7FA] border border-gray-200 rounded-2xl p-5">

                    <label class="flex items-start gap-4 cursor-pointer">

                        <input type="checkbox"
                               id="agreeCheckbox"
                               class="mt-1 w-5 h-5 rounded border-gray-300 text-[#0176A4] focus:ring-[#0176A4]">

                        <span class="text-sm leading-relaxed">

                            Saya menyatakan telah membaca,
                            memahami, dan menyetujui seluruh
                            ketentuan kerja sama penerbitan buku
                            dengan PT Elementa Media Literasi.

                        </span>

                    </label>

                </div>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="px-8 py-6 border-t bg-gray-50 flex flex-col md:flex-row gap-4 justify-end">

            <button type="button"
                    onclick="window.location.href='https://elementamedia.id'"
                    class="px-6 py-3 rounded-2xl border border-gray-300 text-gray-600 hover:bg-gray-100 transition">

                Tidak Setuju

            </button>

            <button type="button"
                    id="agreeButton"
                    disabled
                    class="px-8 py-3 rounded-2xl bg-gradient-to-r from-[#0176A4] to-[#1B75A1] text-white font-semibold shadow-lg opacity-50 cursor-not-allowed transition">

                Setuju & Lanjutkan

            </button>

        </div>

    </div>

</div>

<div class="min-h-screen flex items-center justify-center p-5 lg:p-10">

    <div class="w-full max-w-7xl grid lg:grid-cols-2 bg-white rounded-[35px] shadow-2xl overflow-hidden">

        <!-- LEFT SIDE -->

        <div class="relative bg-gradient-to-br from-[#0176A4] via-[#1B75A1] to-[#44A5C5] p-10 lg:p-14 text-white overflow-hidden">

            <!-- BACKGROUND CIRCLE -->

            <div class="absolute -top-20 -right-20 w-72 h-72 bg-white/10 rounded-full"></div>

            <div class="absolute bottom-0 -left-20 w-80 h-80 bg-[#FFB401]/20 rounded-full"></div>

            <!-- LOGO -->

            <div class="relative z-10 inline-flex items-center gap-4 bg-white/10 backdrop-blur-md border border-white/20 px-5 py-4 rounded-2xl shadow-lg hover:scale-105 transition duration-300">

                <div class="w-16 h-16 rounded-2xl bg-white p-2 shadow-md flex items-center justify-center">

                  <img src="{{ asset('images/logo-elementa.png') }}"
                       alt="Elementa Media"
                       class="w-full h-full object-contain drop-shadow-lg">

                </div>

                <div>

                    <div class="text-xl font-bold tracking-wide">
                        ELEMENTA MEDIA LITERASI
                    </div>

                    <div class="text-sm text-white/80">
                        Digital Agreement System
                    </div>

                </div>

            </div>

            <!-- HERO -->

            <div class="relative z-10 mt-16">

                <div class="inline-flex items-center gap-2 bg-[#FFB401] text-black px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                    Perjanjian Digital
                </div>

                <h1 class="mt-8 text-4xl lg:text-5xl font-extrabold leading-tight">
                    Perjanjian Kerja Sama
                    Penerbitan Buku
                </h1>

                <p class="mt-6 text-lg leading-relaxed text-white/90 max-w-xl">
                    Sistem perjanjian kerja sama digital antara penulis dan PT Elementa Media Literasi dalam mendukung penerbitan buku yang profesional, aman, dan terpercaya.
                </p>

               <!-- FEATURE LIST -->

              <div class="mt-10 space-y-5">

                  <!-- FEATURE 1 -->

                  <div class="group flex items-start gap-5 bg-white/10 backdrop-blur-md border border-white/10 rounded-3xl px-6 py-5 hover:bg-white/15 hover:scale-[1.02] transition duration-300 shadow-lg">

                      <div class="w-14 h-14 rounded-2xl bg-white/15 border border-white/10 flex items-center justify-center shadow-md shrink-0">

                          <svg xmlns="http://www.w3.org/2000/svg"
                               class="w-7 h-7 text-[#FFDD83]"
                               fill="none"
                               viewBox="0 0 24 24"
                               stroke="currentColor">

                              <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/>

                          </svg>

                      </div>

                      <div>

                          <div class="font-semibold text-lg text-white">

                              Dokumen Resmi Penerbitan

                          </div>

                          <div class="text-white/75 text-sm leading-relaxed mt-1">

                              Perjanjian kerja sama dibuat secara profesional
                              sesuai kebutuhan penerbitan buku.

                          </div>

                      </div>

                  </div>

                  <!-- FEATURE 2 -->

                  <div class="group flex items-start gap-5 bg-white/10 backdrop-blur-md border border-white/10 rounded-3xl px-6 py-5 hover:bg-white/15 hover:scale-[1.02] transition duration-300 shadow-lg">

                      <div class="w-14 h-14 rounded-2xl bg-white/15 border border-white/10 flex items-center justify-center shadow-md shrink-0">

                          <svg xmlns="http://www.w3.org/2000/svg"
                               class="w-7 h-7 text-[#FFDD83]"
                               fill="none"
                               viewBox="0 0 24 24"
                               stroke="currentColor">

                              <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2V9a2 2 0 00-.59-1.41l-5-5A2 2 0 0013 3H6a2 2 0 00-2 2v14a2 2 0 002 2z"/>

                          </svg>

                      </div>

                      <div>

                          <div class="font-semibold text-lg text-white">

                              Keamanan & Validasi Digital

                          </div>

                          <div class="text-white/75 text-sm leading-relaxed mt-1">

                              Dokumen dilengkapi validasi digital untuk menjaga
                              keaslian dan keamanan data kerja sama.

                          </div>

                      </div>

                  </div>

                  <!-- FEATURE 3 -->

                  <div class="group flex items-start gap-5 bg-white/10 backdrop-blur-md border border-white/10 rounded-3xl px-6 py-5 hover:bg-white/15 hover:scale-[1.02] transition duration-300 shadow-lg">

                      <div class="w-14 h-14 rounded-2xl bg-white/15 border border-white/10 flex items-center justify-center shadow-md shrink-0">

                          <svg xmlns="http://www.w3.org/2000/svg"
                               class="w-7 h-7 text-[#FFDD83]"
                               fill="none"
                               viewBox="0 0 24 24"
                               stroke="currentColor">

                              <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 20h5V4H2v16h5m10 0v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6m10 0H7"/>

                          </svg>

                      </div>

                      <div>

                          <div class="font-semibold text-lg text-white">

                              Kerja Sama Profesional

                          </div>

                          <div class="text-white/75 text-sm leading-relaxed mt-1">

                              Mendukung proses kerja sama antara penulis dan
                              PT Elementa Media Literasi secara profesional
                              dan terpercaya.

                          </div>

                      </div>

                  </div>

              </div>

            </div>

        </div>

        <!-- RIGHT SIDE -->

        <div class="p-7 lg:p-12 bg-white">

            <div class="mb-10">

                <h2 class="text-3xl font-bold text-gray-800">
                    Formulir Perjanjian
                </h2>

                <p class="mt-3 text-gray-500 leading-relaxed">
                    Lengkapi seluruh data berikut untuk membuat
                    dokumen perjanjian kerja sama penerbitan buku.
                </p>

            </div>

            <!-- VALIDATION -->

            @if ($errors->any())

                <div class="mb-8 bg-red-50 border border-red-200 text-red-700 rounded-2xl p-5">

                    <div class="font-semibold mb-3">
                        Terjadi kesalahan:
                    </div>

                    <ul class="list-disc ml-5 space-y-1 text-sm">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form method="POST"
                  action="/generate"
                  id="agreementForm">

                @csrf

                <div class="grid md:grid-cols-2 gap-6">

                    <div>

                        <label class="block mb-2 text-sm font-semibold text-gray-700">
                            Nama Lengkap Penulis
                        </label>

                        <input type="text"
                               name="author_name"
                               value="{{ old('author_name') }}"
                               required
                               class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30 focus:border-[#0176A4] transition duration-200">

                    </div>

                    <div>

                        <label class="block mb-2 text-sm font-semibold text-gray-700">
                            Nomor Induk Kependudukan (NIK)
                        </label>

                        <input type="text"
                               name="author_nik"
                               value="{{ old('author_nik') }}"
                               required
                               class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30 focus:border-[#0176A4] transition duration-200">

                    </div>

                </div>

                <div class="mt-6">

                    <label class="block mb-2 text-sm font-semibold text-gray-700">
                        Alamat Lengkap
                    </label>

                    <textarea name="author_address"
                              rows="5"
                              required
                              class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30 focus:border-[#0176A4] transition duration-200">{{ old('author_address') }}</textarea>

                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-6">

                    <div>

                        <label class="block mb-2 text-sm font-semibold text-gray-700">
                            Nomor WhatsApp / Telepon
                        </label>

                        <input type="text"
                               name="author_phone"
                               value="{{ old('author_phone') }}"
                               required
                               class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30 focus:border-[#0176A4] transition duration-200">

                    </div>

                    <div>

                        <label class="block mb-2 text-sm font-semibold text-gray-700">
                            Alamat Email
                        </label>

                        <input type="email"
                               name="author_email"
                               value="{{ old('author_email') }}"
                               required
                               class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30 focus:border-[#0176A4] transition duration-200">

                    </div>

                </div>

                <div class="mt-6">

                    <label class="block mb-2 text-sm font-semibold text-gray-700">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="book_title"
                           value="{{ old('book_title') }}"
                           required
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30 focus:border-[#0176A4] transition duration-200">

                </div>

                <!-- INFO BOX -->

                <div class="mt-8 bg-gradient-to-r from-[#FFF7E1] to-[#FFF3D2] border border-[#FFDD83] rounded-2xl p-6 shadow-sm">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-xl bg-[#FFB401] text-black flex items-center justify-center text-xl font-bold shadow-md">
                            !
                        </div>

                        <div>

                            <div class="font-semibold text-gray-800 text-lg">
                                Persetujuan Digital
                            </div>

                            <p class="mt-2 text-gray-600 leading-relaxed text-sm">
                                Dengan mengisi formulir ini, penulis menyetujui proses
                                pembuatan dokumen perjanjian kerja sama penerbitan buku
                                secara digital bersama PT Elementa Media Literasi.
                            </p>

                        </div>

                    </div>

                </div>

                    @if(!app()->environment('local'))

                    <!-- RECAPTCHA -->

                    <div class="mt-8 flex justify-center">

                        <div class="g-recaptcha"
                            data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
                        </div>

                    </div>

                    @endif

                     <!-- CAPTCHA ERROR -->

                     @if($errors->has('captcha'))

                         <div class="mt-3 text-center text-sm text-red-500 font-medium">

                             {{ $errors->first('captcha') }}

                         </div>

                     @endif

                <!-- BUTTON -->

                <div class="mt-10">

                    <button type="submit"
                            id="submitButton"
                            class="w-full bg-gradient-to-r from-[#0176A4] to-[#1B75A1] hover:from-[#01658D] hover:to-[#145D80] text-white text-lg font-semibold py-5 rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition duration-300 flex items-center justify-center gap-3">

                        <span id="buttonText">
                            Generate Dokumen Perjanjian
                        </span>

                        <svg id="loadingIcon"
                             class="hidden animate-spin h-6 w-6 text-white"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24">

                            <circle class="opacity-25"
                                    cx="12"
                                    cy="12"
                                    r="10"
                                    stroke="currentColor"
                                    stroke-width="4"></circle>

                            <path class="opacity-75"
                                  fill="currentColor"
                                  d="M4 12a8 8 0 018-8v8H4z"></path>

                        </svg>

                    </button>

                </div>

                <!-- FOOTER -->

                <div class="mt-8 text-center text-sm text-gray-400 leading-relaxed">
                    © {{ date('Y') }} PT Elementa Media Literasi<br>
                    Digital Publishing Agreement System
                </div>

            </form>

        </div>

    </div>

</div>

<script>

    const form = document.getElementById('agreementForm');

    const submitButton = document.getElementById('submitButton');

    const buttonText = document.getElementById('buttonText');

    const loadingIcon = document.getElementById('loadingIcon');

    form.addEventListener('submit', function () {

        submitButton.disabled = true;

        submitButton.classList.add('opacity-80');

        buttonText.innerText = 'Sedang Membuat Dokumen...';

        loadingIcon.classList.remove('hidden');

    });

</script>

<script>

    const agreementModal =
        document.getElementById('agreementModal');

    const agreeCheckbox =
        document.getElementById('agreeCheckbox');

    const agreeButton =
        document.getElementById('agreeButton');

    agreeCheckbox.addEventListener('change', function () {

        if (this.checked) {

            agreeButton.disabled = false;

            agreeButton.classList.remove(
                'opacity-50',
                'cursor-not-allowed'
            );

        } else {

            agreeButton.disabled = true;

            agreeButton.classList.add(
                'opacity-50',
                'cursor-not-allowed'
            );

        }

    });

    agreeButton.addEventListener('click', function () {

        agreementModal.classList.add('hidden');

    });

</script>

</body>
</html>