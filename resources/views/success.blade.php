<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Agreement Berhasil
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
          
           <link rel="icon"
             type="image/png"
             href="{{ asset('favicon.png') }}">

</head>

<body class="bg-[#F4F7FA] flex items-center justify-center min-h-screen p-6"
      style="font-family: 'Inter', sans-serif;">

<div class="max-w-2xl w-full bg-white rounded-[35px] shadow-2xl overflow-hidden">

    <div class="bg-gradient-to-r from-[#0176A4] to-[#1B75A1] p-10 text-center text-white">

        <div class="w-24 h-24 bg-white text-[#0176A4] rounded-full flex items-center justify-center text-5xl font-bold mx-auto shadow-xl">

            ✓

        </div>

        <h1 class="mt-8 text-4xl font-extrabold">

            Agreement Berhasil Dibuat

        </h1>

        <p class="mt-4 text-white/90 leading-relaxed text-lg">

            Dokumen perjanjian kerja sama berhasil dibuat
            dan siap untuk diunduh.

        </p>

    </div>

    <div class="p-10">

        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 space-y-4">

            <div>

                <div class="text-sm text-gray-500">
                    Nomor Agreement
                </div>

                <div class="font-bold text-lg text-gray-800">
                    {{ $agreement->agreement_number }}
                </div>

            </div>

            <div>

                <div class="text-sm text-gray-500">
                    Nama Penulis
                </div>

                <div class="font-semibold text-gray-800">
                    {{ $agreement->author_name }}
                </div>

            </div>

            <div>

                <div class="text-sm text-gray-500">
                    Judul Buku
                </div>

                <div class="font-semibold text-gray-800">
                    {{ $agreement->book_title }}
                </div>

            </div>

        </div>

        <div class="mt-8 grid md:grid-cols-2 gap-5">

            <a href="{{ asset('uploads/'.$agreement->pdf_path) }}"
               download
               class="bg-gradient-to-r from-[#0176A4] to-[#1B75A1] hover:from-[#01658D] hover:to-[#145D80] text-white text-center font-semibold py-5 rounded-2xl shadow-lg hover:-translate-y-1 transition duration-300">

                Download PDF

            </a>

            <a href="/"
               class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-center font-semibold py-5 rounded-2xl transition duration-300">

                Buat Agreement Baru

            </a>

        </div>

    </div>

</div>

</body>
</html>