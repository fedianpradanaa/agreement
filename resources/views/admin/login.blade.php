<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Admin Login | Elementa Media
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon"
          type="image/png"
          href="{{ asset('favicon.png') }}">

</head>

<body class="min-h-screen bg-gradient-to-br from-[#0176A4] via-[#1B75A1] to-[#44A5C5] flex items-center justify-center p-5">

    <div class="w-full max-w-md bg-white rounded-[30px] shadow-2xl overflow-hidden">

        <!-- HEADER -->

        <div class="px-10 py-10 text-center bg-gradient-to-r from-[#0176A4] to-[#1B75A1] text-white">

            <img src="{{ asset('images/logo-elementa.png') }}"
                 class="w-20 h-20 mx-auto bg-white rounded-2xl p-3 shadow-xl">

            <h1 class="mt-6 text-3xl font-bold">
                Admin Panel
            </h1>

            <p class="mt-2 text-white/80 text-sm">
                PT Elementa Media Literasi
            </p>

        </div>

        <!-- FORM -->

        <div class="p-10">

            @if($errors->has('login'))

                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl">

                    {{ $errors->first('login') }}

                </div>

            @endif

            <form method="POST"
                  action="/admin/login">

                @csrf

                <!-- EMAIL -->

                <div>

                    <label class="block mb-2 text-sm font-semibold text-gray-700">

                        Email Admin

                    </label>

                    <input type="email"
                           name="email"
                           required
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30">

                </div>

                <!-- PASSWORD -->

                <div class="mt-6">

                    <label class="block mb-2 text-sm font-semibold text-gray-700">

                        Password

                    </label>

                    <input type="password"
                           name="password"
                           required
                           class="w-full border border-gray-300 rounded-2xl px-5 py-4 focus:outline-none focus:ring-4 focus:ring-[#44A5C5]/30">

                </div>

                <!-- BUTTON -->

                <button type="submit"
                        class="mt-8 w-full bg-gradient-to-r from-[#0176A4] to-[#1B75A1] hover:opacity-90 text-white font-semibold py-4 rounded-2xl shadow-xl transition">

                    Login Admin

                </button>

            </form>

        </div>

    </div>

</body>
</html>