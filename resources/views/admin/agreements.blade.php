<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Data Agreement
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

        <div class="mt-10 space-y-3">

            <a href="/admin"
               class="block px-5 py-4 rounded-2xl bg-white/10 hover:bg-white/20 transition">

                Dashboard

            </a>

            <a href="/admin/agreements"
               class="block px-5 py-4 rounded-2xl bg-white/20 transition">

                Data Agreement

            </a>

        </div>

    </aside>

    <!-- CONTENT -->

    <main class="flex-1 p-10">

        <h1 class="text-4xl font-bold text-gray-800">
            Data Agreement
        </h1>

        <div class="mt-10 bg-white rounded-3xl shadow-lg overflow-hidden">

            <table class="w-full text-sm">

                <thead class="bg-gray-100">

                    <tr>

                        <th class="p-5 text-left">
                            Agreement
                        </th>

                        <th class="p-5 text-left">
                            Penulis
                        </th>

                        <th class="p-5 text-left">
                            Buku
                        </th>

                        <th class="p-5 text-left">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($agreements as $agreement)

                    <tr class="border-t">

                        <td class="p-5">
                            {{ $agreement->agreement_number }}
                        </td>

                        <td class="p-5">
                            {{ $agreement->author_name }}
                        </td>

                        <td class="p-5">
                            {{ $agreement->book_title }}
                        </td>

                        <td class="p-5">

                            <button
                                onclick="openModal(
                                    '{{ $agreement->agreement_number }}',
                                    '{{ $agreement->author_name }}',
                                    '{{ $agreement->author_email }}',
                                    '{{ $agreement->author_phone }}',
                                    '{{ $agreement->book_title }}',
                                    '{{ url('/download/' . $agreement->verification_token) }}'
                                )"
                                class="px-5 py-2 rounded-xl bg-[#0176A4] text-white">

                                Detail

                            </button>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

        <div class="mt-6">

            {{ $agreements->links() }}

        </div>

    </main>

</div>

<!-- MODAL -->

<div id="detailModal"
     class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm items-center justify-center p-5">

    <div class="bg-white w-full max-w-3xl rounded-[30px] shadow-2xl overflow-hidden">

        <!-- HEADER -->

        <div class="bg-gradient-to-r from-[#0176A4] to-[#1B75A1] text-white px-8 py-6 flex items-center justify-between">

            <h2 class="text-2xl font-bold">
                Detail Agreement
            </h2>

            <button onclick="closeModal()"
                    class="text-3xl leading-none">

                &times;

            </button>

        </div>

        <!-- CONTENT -->

        <div class="p-8 space-y-6">

            <div>

                <div class="text-sm text-gray-500">
                    Agreement Number
                </div>

                <div id="modalAgreement"
                     class="mt-1 text-xl font-semibold">
                </div>

            </div>

            <div>

                <div class="text-sm text-gray-500">
                    Nama Penulis
                </div>

                <div id="modalName"
                     class="mt-1 text-xl font-semibold">
                </div>

            </div>

            <div>

                <div class="text-sm text-gray-500">
                    Email
                </div>

                <div id="modalEmail"
                     class="mt-1 text-xl font-semibold">
                </div>

            </div>

            <div>

                <div class="text-sm text-gray-500">
                    Telepon
                </div>

                <div id="modalPhone"
                     class="mt-1 text-xl font-semibold">
                </div>

            </div>

            <div>

                <div class="text-sm text-gray-500">
                    Judul Buku
                </div>

                <div id="modalBook"
                     class="mt-1 text-xl font-semibold">
                </div>

            </div>

            <!-- BUTTON -->

            <div class="pt-4">

                <a id="modalPdf"
                   href="#"
                   target="_blank"
                   class="inline-flex items-center px-8 py-4 rounded-2xl bg-[#0176A4] text-white font-semibold shadow-lg">

                    Download PDF

                </a>

            </div>

        </div>

    </div>

</div>

<script>

function openModal(
    agreement,
    name,
    email,
    phone,
    book,
    pdf
) {

    document.getElementById('modalAgreement').innerText = agreement;

    document.getElementById('modalName').innerText = name;

    document.getElementById('modalEmail').innerText = email;

    document.getElementById('modalPhone').innerText = phone;

    document.getElementById('modalBook').innerText = book;

    document.getElementById('modalPdf').href = pdf;

    document.getElementById('detailModal')
        .classList.remove('hidden');

    document.getElementById('detailModal')
        .classList.add('flex');

}

function closeModal() {

    document.getElementById('detailModal')
        .classList.add('hidden');

    document.getElementById('detailModal')
        .classList.remove('flex');

}

</script>

</body>
</html>