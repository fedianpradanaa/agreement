<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>
        Dokumen Agreement
    </title>

           <link rel="icon"
             type="image/png"
             href="{{ asset('favicon.png') }}">

</head>

<body style="
    margin:0;
    padding:40px;
    background:#F4F7FA;
    font-family:Arial,sans-serif;
    color:#1F2937;
">

<div style="
    max-width:700px;
    margin:auto;
    background:#FFFFFF;
    border-radius:24px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
">

    <!-- HEADER -->

    <div style="
        background:linear-gradient(135deg,#0176A4,#1B75A1);
        padding:50px 40px;
        text-align:center;
        color:white;
    ">

        <h1 style="
            margin:0;
            font-size:28px;
            font-weight:800;
            letter-spacing:.3px;
        ">

            Agreement Digital

        </h1>

        <p style="
            margin-top:14px;
            font-size:16px;
            opacity:.92;
            line-height:1.8;
        ">

            Perjanjian kerja sama penerbitan buku
            antara penulis dan
            PT Elementa Media Literasi.

        </p>

    </div>

    <!-- CONTENT -->

    <div style="padding:45px;">

        <p style="
            font-size:16px;
            line-height:1.8;
            margin-top:0;
        ">

            Halo
            <strong>
                {{ $agreement->author_name }}
            </strong>,
        </p>

        <p style="
            font-size:15px;
            line-height:1.9;
            color:#4B5563;
        ">

            Dokumen perjanjian kerja sama penerbitan buku
            telah berhasil dibuat dan tervalidasi
            melalui sistem digital
            PT Elementa Media Literasi.

        </p>

        <!-- DETAIL -->

        <div style="
            margin-top:35px;
            border:1px solid #E5E7EB;
            border-radius:20px;
            overflow:hidden;
        ">

            <div style="
                background:#F9FAFB;
                padding:18px 24px;
                border-bottom:1px solid #E5E7EB;
                font-weight:700;
                font-size:16px;
            ">

                Detail Agreement

            </div>

            <div style="padding:24px;">

                <table width="100%"
                       cellpadding="0"
                       cellspacing="0">

                    <tr>

                        <td style="
                            padding:12px 0;
                            color:#6B7280;
                            width:220px;
                        ">

                            Nomor Agreement

                        </td>

                        <td style="
                            padding:12px 0;
                            font-weight:700;
                        ">

                            {{ $agreement->agreement_number }}

                        </td>

                    </tr>

                    <tr>

                        <td style="
                            padding:12px 0;
                            color:#6B7280;
                        ">

                            Nama Penulis

                        </td>

                        <td style="
                            padding:12px 0;
                            font-weight:600;
                        ">

                            {{ $agreement->author_name }}

                        </td>

                    </tr>

                    <tr>

                        <td style="
                            padding:12px 0;
                            color:#6B7280;
                        ">

                            Judul Buku

                        </td>

                        <td style="
                            padding:12px 0;
                            font-weight:600;
                        ">

                            {{ $agreement->book_title }}

                        </td>

                    </tr>

                    <tr>

                        <td style="
                            padding:12px 0;
                            color:#6B7280;
                        ">

                            Tanggal Agreement

                        </td>

                        <td style="
                            padding:12px 0;
                            font-weight:600;
                        ">

                            {{ \Carbon\Carbon::parse($agreement->agreement_date)->translatedFormat('d F Y • H:i') }} WIB

                        </td>

                    </tr>

                </table>

            </div>

        </div>

        <!-- INFO -->

        <div style="
            margin-top:35px;
            padding:22px;
            border-radius:18px;
            background:#FFF8E7;
            border:1px solid #FFE3A3;
            color:#8A6100;
            line-height:1.8;
            font-size:14px;
        ">

            Dokumen PDF agreement telah terlampir
            pada email ini dan dapat digunakan
            sebagai dokumen resmi kerja sama penerbitan buku.

        </div>

        <!-- FOOTER -->

        <div style="
            margin-top:45px;
            padding-top:30px;
            border-top:1px solid #E5E7EB;
            text-align:center;
            color:#9CA3AF;
            font-size:13px;
            line-height:1.8;
        ">

            © {{ date('Y') }}
            PT Elementa Media Literasi
            <br>

            Digital Publishing Agreement System

        </div>

    </div>

</div>

</body>
</html>