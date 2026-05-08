<!DOCTYPE html>
<html>

<head>

    <title>
        Agreement PDF
    </title>

    <style>

        body {

            font-family: sans-serif;
            font-size: 14px;
            line-height: 1.6;

        }

        .title {

            text-align: center;
            font-size: 20px;
            font-weight: bold;

        }

        .section {

            margin-top: 20px;

        }

        .signature-table {

            width: 100%;
            margin-top: 80px;

        }

        .signature-box {

            width: 50%;
            text-align: center;
            vertical-align: top;

        }

    </style>

</head>

<body>

<div class="title">

    PERJANJIAN KERJA SAMA
    <br>
    PENERBITAN BUKU

</div>

<div class="section">

    <strong>
        Nama Penulis:
    </strong>

    {{ $agreement->author_name }}

</div>

<div class="section">

    <strong>
        Judul Buku:
    </strong>

    {{ $agreement->book_title }}

</div>

<table class="signature-table">

    <tr>

        <!-- PIHAK PERTAMA -->

        <td class="signature-box">

            <strong>
                PIHAK PERTAMA
            </strong>

            <br>

            PT. Elementa Media Literasi

            <br>

            Direktur

            <br><br>

            <img src="data:image/png;base64,{{ $publisherQr }}"
                 width="120">

            <br><br>

            <strong>
                Irfan Hilmi
            </strong>

        </td>

        <!-- PIHAK KEDUA -->

        <td class="signature-box">

            <strong>
                PIHAK KEDUA
            </strong>

            <br>

            Penulis

            <br><br>

            <img src="data:image/png;base64,{{ $authorQr }}"
                 width="120">

            <br><br>

            <strong>
                {{ $agreement->author_name }}
            </strong>

        </td>

    </tr>

</table>

</body>
</html>