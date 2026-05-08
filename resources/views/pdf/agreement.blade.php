<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>
        Agreement PDF
    </title>

    <style>

        body {

            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            line-height: 1.7;
            color: #000;

        }

        .text-center {

            text-align: center;

        }

        .title {

            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;

        }

        .section {

            margin-top: 20px;

        }

        .pasal {

            text-align: center;
            font-weight: bold;
            margin-top: 25px;

        }

        table {

            width: 100%;
            border-collapse: collapse;

        }

        td {

            vertical-align: top;
            padding: 3px;

        }

        .signature-table {

            width: 100%;
            margin-top: 70px;

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

    PT. ELEMENTA MEDIA LITERASI
    <br>

    PERJANJIAN KERJA SAMA PENERBITAN BUKU
    <br>

    PT. ELEMENTA MEDIA LITERASI

</div>

<p>

    Pada hari ini,
    {{ $agreement->agreement_date->translatedFormat('d') }}
    tanggal
    {{ $agreement->agreement_date->translatedFormat('d') }}
    bulan
    {{ $agreement->agreement_date->translatedFormat('F') }}
    tahun
    {{ $agreement->agreement_date->translatedFormat('Y') }},
    telah dibuat Perjanjian Kerja Sama Penerbitan Buku antara:

</p>

<div class="section">

    <strong>
        PIHAK PERTAMA / PENERBIT
    </strong>

</div>

<table>

    <tr>

        <td width="30%">
            Nama Lembaga
        </td>

        <td width="5%">
            :
        </td>

        <td>
            PT. Elementa Media Literasi
        </td>

    </tr>

    <tr>

        <td>
            Diwakili oleh
        </td>

        <td>
            :
        </td>

        <td>
            Irfan Hilmi
        </td>

    </tr>

    <tr>

        <td>
            Jabatan
        </td>

        <td>
            :
        </td>

        <td>
            Direktur
        </td>

    </tr>

    <tr>

        <td>
            NIK
        </td>

        <td>
            :
        </td>

        <td>
            3321051911910001
        </td>

    </tr>

    <tr>

        <td>
            Alamat
        </td>

        <td>
            :
        </td>

        <td>
            Jl. Glondong Gg. Nakula, Pandeyan, Bangunharjo,
            Kec. Sewon, Kabupaten Bantul,
            Daerah Istimewa Yogyakarta 55188
        </td>

    </tr>

</table>

<div class="section">

    <strong>
        PIHAK KEDUA / PENULIS
    </strong>

</div>

<table>

    <tr>

        <td width="30%">
            Nama
        </td>

        <td width="5%">
            :
        </td>

        <td>
            {{ $agreement->author_name }}
        </td>

    </tr>

    <tr>

        <td>
            NIK
        </td>

        <td>
            :
        </td>

        <td>
            {{ $agreement->author_nik }}
        </td>

    </tr>

    <tr>

        <td>
            Alamat
        </td>

        <td>
            :
        </td>

        <td>
            {{ $agreement->author_address }}
        </td>

    </tr>

    <tr>

        <td>
            No. HP/WA
        </td>

        <td>
            :
        </td>

        <td>
            {{ $agreement->author_phone }}
        </td>

    </tr>

    <tr>

        <td>
            Email
        </td>

        <td>
            :
        </td>

        <td>
            {{ $agreement->author_email }}
        </td>

    </tr>

</table>

<p class="section">

    Kedua belah pihak sepakat mengadakan kerja sama penerbitan buku
    dengan ketentuan sebagai berikut.

</p>

<div class="pasal">

    PASAL 1
    <br>
    OBJEK KERJA SAMA

</div>

<ol>

    <li>
        PIHAK KEDUA menyerahkan naskah kepada PIHAK PERTAMA untuk diterbitkan menjadi buku.
    </li>

    <li>
        Judul buku yang diterbitkan adalah:
        <strong>
            "{{ $agreement->book_title }}"
        </strong>
    </li>

    <li>
        Penerbitan dapat dilakukan dalam bentuk buku cetak dan/atau ebook sesuai kebutuhan penerbitan.
    </li>

</ol>

<div class="pasal">

    PASAL 2
    <br>
    RUANG LINGKUP PENERBITAN

</div>

<ol>

    <li>
        PIHAK PERTAMA membantu proses penerbitan buku yang meliputi pengurusan administrasi penerbitan, ISBN, dan barcode apabila memenuhi ketentuan; editing, layout, desain cover; penerbitan buku cetak dan/atau digital; penyediaan buku bukti terbit; sertifikat atau surat keterangan terbit; serta link penjualan melalui marketplace, website, atau kanal penjualan lain milik/mitra PIHAK PERTAMA.
    </li>

</ol>

<div class="pasal">

    PASAL 3
    <br>
    HAK CIPTA, HAK TERBIT, DAN HAK JUAL

</div>

<ol>

    <li>
        Hak cipta atas buku menjadi hak bersama antara PIHAK PERTAMA dan PIHAK KEDUA sesuai ruang lingkup masing-masing.
    </li>

    <li>
        PIHAK KEDUA memiliki hak sebagai penulis dan pemilik naskah.
    </li>

    <li>
        PIHAK PERTAMA memiliki hak terbit, hak produksi, hak distribusi, hak promosi, dan hak jual atas buku yang diterbitkan.
    </li>

    <li>
        Selama perjanjian berlaku, PIHAK KEDUA tidak diperkenankan menerbitkan, mencetak, menjual, atau menyerahkan naskah yang sama kepada penerbit lain tanpa persetujuan tertulis dari PIHAK PERTAMA.
    </li>

</ol>

<!-- LANJUTKAN PASAL 4 - PASAL 19 PERSIS DARI DOKUMEN -->

<div class="section">

    Demikian perjanjian ini dibuat atas dasar kerja sama yang saling
    menguntungkan, saling menjaga hak, dan saling menghormati
    antara penerbit dan penulis.

</div>

<table class="signature-table">

    <tr>

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