<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>
        Agreement PDF
    </title>

    <style>

        @page {

            margin: 120px 50px 90px 50px;

        }

        header {

            position: fixed;

            top: -90px;

            left: 0;

            right: 0;

            text-align: center;

            font-size: 12px;

            border-bottom: 1px solid #999;

            padding-bottom: 15px;

        }

        footer {

            position: fixed;

            bottom: -60px;

            left: 0;

            right: 0;

            text-align: center;

            font-size: 12px;

            border-top: 1px solid #999;

            padding-top: 10px;

            color: #666;

        }

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

    <header>
        PT. ELEMENTA MEDIA LITERASI
    </header>

    <footer>
        Perjanjian Kerja Sama Penerbitan Buku
    </footer>

@php

$hari = [
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => "Jum'at",
    'Saturday' => 'Sabtu',
];

$bulan = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember',
];

@endphp

<div class="title">

    PT. ELEMENTA MEDIA LITERASI
    <br>

    PERJANJIAN KERJA SAMA PENERBITAN BUKU
    <br>

    PT. ELEMENTA MEDIA LITERASI

</div>

    <p>

        Pada hari ini,
        {{ $hari[now()->format('l')] }}
        tanggal {{ now()->format('d') }}
        bulan {{ $bulan[now()->format('F')] }}
        tahun {{ now()->format('Y') }},
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

<div class="pasal">

    PASAL 4
    <br>
    PDF FINAL DAN FILE MASTER

</div>

<ol>

    <li>
        Demi menjaga keamanan hak cipta bersama, file PDF final siap cetak, file master layout, file cover, dan file produksi lainnya tidak diberikan kepada PIHAK KEDUA.
    </li>

    <li>
        PIHAK KEDUA dapat memperoleh PDF preview untuk kebutuhan pengecekan, revisi, promosi, atau arsip pribadi.
    </li>

    <li>
        PDF preview tidak boleh dijual, dicetak massal, diunggah bebas, atau disebarkan kepada pihak lain tanpa izin tertulis dari PIHAK PERTAMA.
    </li>

</ol>

<div class="pasal">

    PASAL 5
    <br>
    DISKON PEMBELIAN BUKU UNTUK PENULIS

</div>

<ol>

    <li>
        PIHAK KEDUA berhak membeli buku kepada PIHAK PERTAMA dengan diskon khusus.
    </li>

    <li>
        Pembelian di bawah 100 eksemplar mendapatkan diskon 35% dari harga jual buku.
    </li>

    <li>
        Pembelian 100 eksemplar atau lebih mendapatkan diskon 40% dari harga jual buku.
    </li>

    <li>
        Simulasi harga jual buku Rp100.000: pembelian di bawah 100 eksemplar menjadi Rp65.000 per buku; pembelian 100 eksemplar atau lebih menjadi Rp60.000 per buku.
    </li>

    <li>
        Buku yang dibeli PIHAK KEDUA dapat digunakan untuk pribadi, promosi, seminar, hadiah, komunitas, atau dijual kembali secara mandiri.
    </li>

</ol>

<div class="pasal">

    PASAL 6
    <br>
    MARGIN PENJUALAN MELALUI MARKETPLACE

</div>

<ol>

    <li>
        Apabila buku terjual melalui marketplace resmi yang digunakan PIHAK PERTAMA, PIHAK KEDUA berhak mendapatkan margin penjualan.
    </li>

    <li>
        Penjualan di bawah 100 eksemplar: penulis mendapat margin 20% dari harga jual buku.
    </li>

    <li>
        Penjualan 100 eksemplar atau lebih: penulis mendapat margin 25% dari harga jual buku.
    </li>

    <li>
        Simulasi harga jual buku Rp100.000: di bawah 100 eksemplar penulis menerima Rp20.000 per buku; 100 eksemplar atau lebih penulis menerima Rp25.000 per buku.
    </li>

</ol>

<div class="pasal">

    PASAL 7
    <br>
    MARGIN PENJUALAN MELALUI WEBSITE

</div>

<ol>

    <li>
        Apabila buku terjual melalui website resmi atau kanal penjualan langsung PIHAK PERTAMA, PIHAK KEDUA berhak mendapatkan margin penjualan.
    </li>

    <li>
        Penjualan di bawah 100 eksemplar: penulis mendapat margin 35% dari harga jual buku.
    </li>

    <li>
        Penjualan 100 eksemplar atau lebih: penulis mendapat margin 40% dari harga jual buku.
    </li>

    <li>
        Simulasi harga jual buku Rp100.000: di bawah 100 eksemplar penulis menerima Rp35.000 per buku; 100 eksemplar atau lebih penulis menerima Rp40.000 per buku.
    </li>

</ol>

<div class="pasal">

    PASAL 8
    <br>
    MARGIN EBOOK

</div>

<ol>

    <li>
        Apabila buku diterbitkan dan terjual dalam format ebook, PIHAK KEDUA mendapatkan margin sebesar 20% dari total nett revenue.
    </li>

    <li>
        Nett revenue adalah pendapatan bersih yang diterima PIHAK PERTAMA setelah dikurangi biaya platform, biaya admin, pajak, diskon, promo, biaya transaksi, atau potongan lain dari platform penjualan ebook.
    </li>

    <li>
        Simulasi: jika harga jual ebook Rp100.000 dan total potongan platform/biaya lain Rp30.000, maka nett revenue Rp70.000. Margin PIHAK KEDUA adalah 20% × Rp70.000 = Rp14.000 per ebook terjual.
    </li>

    <li>
        Margin ebook dihitung berdasarkan penjualan yang tercatat pada sistem atau platform digital yang digunakan PIHAK PERTAMA.
    </li>

</ol>

<div class="pasal">

    PASAL 9
    <br>
    PENGALIHMEDIAAN BUKU

</div>

<ol>

    <li>
        Apabila buku dialihmediakan ke bentuk lain, seperti audiobook, audio, video, film, dokumenter, siniar/podcast, animasi, serial, atau bentuk karya turunan lainnya, PIHAK KEDUA berhak mendapatkan bagian sebesar 30% dari total nett revenue.
    </li>

    <li>
        Nett revenue adalah pendapatan bersih yang diterima PIHAK PERTAMA dari hasil pengalihmediaan setelah dikurangi biaya platform, biaya produksi, biaya distribusi, pajak, komisi pihak ketiga, biaya promosi, atau biaya lain yang berkaitan langsung dengan pengalihmediaan.
    </li>

    <li>
        Simulasi: jika pengalihmediaan menghasilkan pendapatan kotor Rp10.000.000 dan biaya terkait Rp4.000.000, maka nett revenue Rp6.000.000. Bagian PIHAK KEDUA adalah 30% × Rp6.000.000 = Rp1.800.000.
    </li>

    <li>
        Pengalihmediaan buku dapat dilakukan oleh PIHAK PERTAMA sendiri atau melalui kerja sama dengan pihak ketiga.
    </li>

    <li>
        Setiap pengalihmediaan buku tetap mencantumkan nama PIHAK KEDUA sebagai penulis/pencipta naskah, sepanjang tidak bertentangan dengan ketentuan platform atau bentuk kerja sama yang digunakan.
    </li>

</ol>

<div class="pasal">

    PASAL 10
    <br>
    PEMBAYARAN MARGIN DAN BONUS

</div>

<ol>

    <li>
        Margin penjualan buku cetak dari marketplace dan website dibayarkan kepada PIHAK KEDUA 1 bulan sekali berdasarkan rekap penjualan yang tercatat oleh PIHAK PERTAMA.
    </li>

    <li>
        Margin ebook sebesar 20% dari total nett revenue dibayarkan kepada PIHAK KEDUA 1 bulan sekali berdasarkan rekap penjualan yang tercatat pada sistem atau platform digital yang digunakan PIHAK PERTAMA.
    </li>

    <li>
        Pendapatan dari pengalihmediaan buku dibayarkan kepada PIHAK KEDUA sesuai periode pembayaran yang disepakati atau menyesuaikan jadwal pembayaran dari pihak ketiga/platform terkait.
    </li>

    <li>
        Bonus penjualan tahunan dibayarkan 1 tahun sekali pada akhir tahun, apabila total penjualan dari seluruh channel telah memenuhi ketentuan minimal.
    </li>

    <li>
        Pembayaran margin, bonus, dan bagian pendapatan lainnya dilakukan melalui rekening atau metode pembayaran lain yang disepakati oleh kedua belah pihak.
    </li>

</ol>

<div class="pasal">

    PASAL 11
    <br>
    PENJUALAN MELALUI CHANNEL PENERBIT

</div>

<ol>

    <li>
        Selain marketplace dan website, PIHAK PERTAMA dapat menjual buku melalui jaringan penerbit, proyek, instansi, komunitas, seminar, pelatihan, kerja sama khusus, atau kanal penjualan lainnya.
    </li>

    <li>
        Penjualan melalui channel tersebut digunakan untuk kepentingan distribusi, promosi, pengembangan pasar, dan operasional penerbit.
    </li>

    <li>
        Skema penjualan melalui channel penerbit dipahami seperti ketika penulis membeli buku dengan diskon khusus lalu menjualnya sendiri. Artinya, PIHAK PERTAMA juga dapat memperoleh margin operasional dari penjualan melalui jaringan penerbit.
    </li>

    <li>
        Meskipun demikian, seluruh penjualan dari channel penerbit tetap dihitung sebagai bagian dari total penjualan buku.
    </li>

</ol>

<div class="pasal">

    PASAL 12
    <br>
    BONUS PENJUALAN 5%

</div>

<ol>

    <li>
        PIHAK KEDUA berhak mendapatkan bonus tambahan sebesar 5% dari total harga jual buku apabila total penjualan buku mencapai minimal 500 eksemplar dalam 1 tahun.
    </li>

    <li>
        Total penjualan dihitung dari semua channel, termasuk marketplace, website, pembelian penulis, jaringan penerbit, proyek penerbit, instansi, komunitas, seminar, pelatihan, dan kanal penjualan lainnya.
    </li>

    <li>
        Simulasi: jika harga jual buku Rp100.000 dan total penjualan mencapai 500 eksemplar, maka total harga jual adalah Rp50.000.000 dan bonus 5% untuk penulis adalah Rp2.500.000.
    </li>

    <li>
        Bonus ini diberikan sebagai tambahan di luar margin penjualan yang sudah menjadi hak PIHAK KEDUA.
    </li>

</ol>

<div class="pasal">

    PASAL 13
    <br>
    KEWAJIBAN PIHAK PERTAMA

</div>

<ol>

    <li>
        PIHAK PERTAMA berkewajiban memproses penerbitan buku sesuai standar penerbit, mencantumkan nama PIHAK KEDUA sebagai penulis, mengelola produksi, distribusi, promosi, dan penjualan buku, memberikan margin dan bonus sesuai ketentuan perjanjian, serta menjaga nama baik PIHAK KEDUA sebagai penulis.
    </li>

</ol>

<div class="pasal">

    PASAL 14
    <br>
    KEWAJIBAN PIHAK KEDUA

</div>

<ol>

    <li>
        PIHAK KEDUA berkewajiban menyerahkan naskah yang asli, sah, dan tidak melanggar hak cipta pihak lain.
    </li>

    <li>
        PIHAK KEDUA bertanggung jawab penuh atas isi naskah, kutipan, data, gambar, tabel, referensi, dan seluruh materi yang diserahkan.
    </li>

    <li>
        PIHAK KEDUA wajib menjaga nama baik PIHAK PERTAMA sebagai penerbit, tidak menyebarluaskan PDF preview atau materi buku untuk kepentingan komersial tanpa izin tertulis, dan tidak menerbitkan naskah yang sama di penerbit lain selama perjanjian berlaku kecuali atas persetujuan tertulis PIHAK PERTAMA.
    </li>

</ol>

<div class="pasal">

    PASAL 15
    <br>
    JAMINAN KEASLIAN NASKAH

</div>

<ol>

    <li>
        PIHAK KEDUA menjamin bahwa naskah yang diterbitkan adalah karya asli atau karya yang sah untuk diterbitkan.
    </li>

    <li>
        Apabila di kemudian hari terdapat gugatan, klaim, plagiarisme, atau pelanggaran hak cipta atas isi naskah, maka hal tersebut menjadi tanggung jawab PIHAK KEDUA.
    </li>

    <li>
        PIHAK PERTAMA berhak menunda, menghentikan, atau menarik penerbitan apabila ditemukan masalah hukum atau pelanggaran atas naskah.
    </li>

</ol>

<div class="pasal">

    PASAL 16
    <br>
    MASA BERLAKU PERJANJIAN

</div>

<ol>

    <li>
        Perjanjian ini berlaku selama 5 tahun sejak tanggal ditandatangani oleh kedua belah pihak.
    </li>

    <li>
        Setelah masa berlaku berakhir, perjanjian ini akan otomatis diperpanjang, kecuali salah satu pihak mengajukan penghentian kerja sama secara tertulis.
    </li>

    <li>
        Permintaan penghentian kerja sama disampaikan paling lambat 30 hari kalender sebelum masa perjanjian berakhir.
    </li>

</ol>

<div class="pasal">

    PASAL 17
    <br>
    PENGHENTIAN KERJA SAMA

</div>

<ol>

    <li>
        Kerja sama dapat dihentikan apabila salah satu pihak mengajukan penghentian secara tertulis, terjadi pelanggaran perjanjian, atau terdapat permasalahan hukum atas naskah.
    </li>

    <li>
        Apabila kerja sama dihentikan, PIHAK PERTAMA tetap berhak menyelesaikan penjualan stok buku yang sudah dicetak atau sudah masuk ke sistem penjualan.
    </li>

    <li>
        Hak dan kewajiban yang sudah timbul sebelum penghentian kerja sama tetap harus diselesaikan oleh masing-masing pihak.
    </li>

</ol>

<div class="pasal">

    PASAL 18
    <br>
    PENYELESAIAN PERSELISIHAN

</div>

<ol>

    <li>
        Apabila terjadi perbedaan pendapat, kedua belah pihak sepakat menyelesaikannya terlebih dahulu secara musyawarah. Apabila musyawarah tidak mencapai kesepakatan, maka penyelesaian dapat dilakukan sesuai ketentuan hukum yang berlaku.
    </li>

</ol>

<div class="pasal">

    PASAL 19
    <br>
    PENUTUP DAN TANDA TANGAN DIGITAL

</div>

<ol>

    <li>
        Perjanjian ini dibuat dalam format digital dan disepakati oleh kedua belah pihak tanpa menggunakan materai fisik.
    </li>

    <li>
        Tanda tangan para pihak dapat dilakukan secara digital, termasuk melalui tanda tangan elektronik, barcode, QR code, atau bentuk persetujuan digital lain yang disepakati.
    </li>

    <li>
        Perjanjian ini tetap memiliki kekuatan kesepakatan bagi kedua belah pihak selama disetujui dan ditandatangani secara digital oleh PIHAK PERTAMA dan PIHAK KEDUA.
    </li>

    <li>
        Hal-hal yang belum diatur dalam perjanjian ini dapat diatur kemudian melalui kesepakatan tertulis atau digital antara kedua belah pihak.
    </li>

</ol>

<div class="section">

    Demikian perjanjian ini dibuat atas dasar kerja sama yang saling
    menguntungkan, saling menjaga hak, dan saling menghormati
    antara penerbit dan penulis.

</div>

<table class="signature-table">

    <tr>

        <!-- PIHAK PERTAMA -->

        <td class="signature-box">

            <div style="height: 110px;">

                <strong>
                    PIHAK PERTAMA
                </strong>

                <br><br>

                PT. Elementa Media Literasi

                <br>

                Direktur

            </div>

            <br>

            <img src="data:image/png;base64,{{ $publisherQr }}"
                 width="120">

            <br><br>

            <strong>
                Irfan Hilmi
            </strong>

        </td>

        <!-- PIHAK KEDUA -->

        <td class="signature-box">

            <div style="height: 110px;">

                <strong>
                    PIHAK KEDUA
                </strong>

                <br><br>

                Penulis

            </div>

            <br>

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