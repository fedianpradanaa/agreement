<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Verifikasi Dokumen
    </title>

    <!-- FONT -->

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

</head>

<body class="bg-[#F4F7FA] min-h-screen flex items-center justify-center p-6"
      style="font-family: 'Inter', sans-serif;">

<div class="max-w-2xl w-full bg-white rounded-[35px] shadow-2xl overflow-hidden">

    <!-- HEADER -->

    <div class="bg-gradient-to-r from-[#0176A4] to-[#1B75A1] px-10 py-12 text-center text-white relative overflow-hidden">

        <!-- DECORATION -->

        <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full"></div>

        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-[#FFB401]/20 rounded-full"></div>

        <!-- ICON -->

        <div class="relative z-10 w-24 h-24 rounded-full bg-white mx-auto flex items-center justify-center shadow-2xl">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-12 h-12 text-[#0176A4]"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12l2 2l4-4m5 2a9 9 0 11-18 0a9 9 0 0118 0z"/>

            </svg>

        </div>

        <h1 class="relative z-10 mt-8 text-4xl font-extrabold">

            Dokumen Terverifikasi

        </h1>

        <p class="relative z-10 mt-4 text-white/90 text-lg leading-relaxed">

            Dokumen perjanjian kerja sama ini
            telah diverifikasi dan dinyatakan valid
            oleh PT Elementa Media Literasi.

        </p>

    </div>

    <!-- CONTENT -->

    <div class="p-10">

        <!-- STATUS -->

        <div class="flex items-center justify-center gap-3 bg-green-50 border border-green-200 rounded-2xl py-4 px-6 text-green-700 font-semibold shadow-sm">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 13l4 4L19 7"/>

            </svg>

            Status Dokumen Valid

        </div>

        <!-- DETAIL -->

        <div class="mt-8 space-y-5">

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5">

                <div class="text-sm text-gray-500">
                    Nomor Agreement
                </div>

                <div class="mt-1 text-lg font-bold text-gray-800">
                    {{ $agreement->agreement_number }}
                </div>

            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5">

                <div class="text-sm text-gray-500">
                    Nama Penulis
                </div>

                <div class="mt-1 text-lg font-semibold text-gray-800">
                    {{ $agreement->author_name }}
                </div>

            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5">

                <div class="text-sm text-gray-500">
                    Judul Buku
                </div>

                <div class="mt-1 text-lg font-semibold text-gray-800">
                    {{ $agreement->book_title }}
                </div>

            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5">

                <div class="text-sm text-gray-500">
                    Tanggal Verifikasi
                </div>

                <div class="mt-1 text-lg font-semibold text-gray-800">
                    {{ now()->format('d F Y H:i') }}
                </div>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="mt-10 text-center text-sm text-gray-400 leading-relaxed">

            © {{ date('Y') }} PT Elementa Media Literasi<br>

            Digital Publishing Agreement System

        </div>

    </div>

</div>

</body>
</html>