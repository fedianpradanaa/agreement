<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Dashboard Admin
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-[#F4F7FA]">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->

    <aside class="w-72 bg-gradient-to-b from-[#0176A4] to-[#1B75A1] text-white p-8">

        <img src="{{ asset('images/logo-elementa.png') }}"
             class="w-20 h-20 bg-white rounded-2xl p-3 shadow-xl">

        <h2 class="mt-6 text-2xl font-bold">
            Admin Panel
        </h2>

        <p class="text-white/70 text-sm mt-2">
            Elementa Media Literasi
        </p>

        <div class="mt-10 space-y-3">

            <a href="/admin"
            class="block px-5 py-4 rounded-2xl bg-white/10 hover:bg-white/20 transition">

                Dashboard

            </a>

            <a href="/admin/agreements"
            class="block px-5 py-4 rounded-2xl bg-white/10 hover:bg-white/20 transition">

                Data Agreement

            </a>

        </div>

        <form method="POST"
              action="/admin/logout"
              class="mt-10">

            @csrf

            <button class="w-full px-5 py-4 rounded-2xl bg-red-500 hover:bg-red-600 transition">

                Logout

            </button>

        </form>

    </aside>

    <!-- CONTENT -->

    <main class="flex-1 p-10">

        <h1 class="text-4xl font-bold text-gray-800">
            Dashboard Admin
        </h1>

        <p class="mt-3 text-gray-500">
            Selamat datang,
            {{ session('admin_name') }}
        </p>

        <!-- STATS -->

        <div class="grid md:grid-cols-2 gap-6 mt-10">

            <div class="bg-white rounded-3xl p-8 shadow-lg">

                <div class="text-sm text-gray-500">
                    Total Agreement
                </div>

                <div class="mt-3 text-5xl font-bold text-[#0176A4]">
                    {{ $totalAgreement }}
                </div>

            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg">

                <div class="text-sm text-gray-500">
                    Total Download PDF
                </div>

                <div class="mt-3 text-5xl font-bold text-[#0176A4]">
                    {{ $totalDownload }}
                </div>

            </div>

        </div>

        <!-- TABLE -->

        <div class="mt-10 bg-white rounded-3xl shadow-lg overflow-hidden">

            <div class="p-6 border-b font-bold text-lg">

                Agreement Terbaru

            </div>

            <table class="w-full text-sm">

                <thead class="bg-gray-100">

                    <tr>

                        <th class="p-4 text-left">
                            Agreement
                        </th>

                        <th class="p-4 text-left">
                            Penulis
                        </th>

                        <th class="p-4 text-left">
                            Buku
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($agreements as $agreement)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $agreement->agreement_number }}
                        </td>

                        <td class="p-4">
                            {{ $agreement->author_name }}
                        </td>

                        <td class="p-4">
                            {{ $agreement->book_title }}
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>
</html>