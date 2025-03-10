<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Berkas Permohonan PKL</title>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>@include('pdf.components.header')
    <div style="line-height: 1.2">
        <table>
            <tr>
                <td>Nomor</td>
                <td style="width:25px;text-align: center;">:</td>
                <td colspan="3">421.4/670/2024</td>
            </tr>
            <tr>
                <td>Lamp</td>
                <td style="width:25px;text-align: center;">:</td>
                <td colspan="3">-</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td style="width:25px;text-align: center;">:</td>
                <td colspan="3">Permohonan Tempat Praktik Kerja Lapangan (PKL)</td>
            </tr>
            <tr>
                <td style="width: 80px"></td>
                <td colspan="4">
                    <p>Kepada <br>Yth. Pimpinan/Kepala <br><b>{{ $user->first()->industry_leader }}</b><br>{{ $user->first()->industry_address }}<br></p>
                    <p><br>Dengan hormat,
                        <br>
                    </p>
                    <p style="text-align: justify;">Untuk memantapkan kemampuan siswa siswi Sekolah Menengah Kejuruan,
                        khususnya di SMK Negeri 2 Karanganyar,
                        siswa siswi diwajibkan mengikuti praktik kerja lapangan. Adapun kegiatan tersebut dilaksanakan
                        selama kurang lebih 6 bulan. Untuk menunjang kegiatan tersebut kami mohon bantuan Bapak/Ibu
                        untuk memberikan kesempatan kepada siswa kami guna melaksanakan praktik kerja lapangan di tempat
                        yang Bapak/Ibu pimpin pada tanggal <b>02 Oktober 2024 sampai dengan 28 Maret 2025</b>. Adapun
                        data siswa yang kami kirim adalah sebagai berikut : </p>
                    <table border="1" style="margin-left: 20px;">
                        <tr>
                            <th style="width: 15px;">No.</th>
                            <th style="width: 230px;">Nama Siswa</th>
                            <th style="width: 50px;">NIS</th>
                            <th style="width: 80px;">Kelas</th>
                            <th style="width: 150px;">Konsentrasi Keahlian</th>
                        </tr>
                        @foreach ($user as $item)
                            <tr style="text-align: center;">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->NIS }}</td>
                                <td>{{ $item->class }}</td>
                                <td>{{ $item->major_name }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <p>Demikian permohonan yang kami buat atas peran serta dan kerjasama yang baik kami mengucapkan
                        terima kasih </p>
                </td>
            </tr><br>
            <tr>
                <td colspan="4"></td>
                <td>
                    <p>Karanganyar, {{\Carbon\Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');}} <br>
                        Kepala SMK Negeri 2 Karanganyar <br>
                        Kabupaten Karanganyar <br>
                        <br><br><br><br>
                        <b>Drs. Soetanto,M.T</b><br>
                        Pembina Tk. I <br>
                        NIP. 19661029 199802 1 002<br>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>
    <div style="margin-right: 40px; margin-left: 30px">
        <h3 style="text-align: center;">SURAT BALASAN DARI DU/DI</h3>
        <br>
        <p>
            Kepada <br>
            Yth. <b>Kepala SMK Negeri 2 Karanganyar</b> <br>
            Jl. Yos Sudarso Jengglong Bejen Telp. (0271) 494549 <br>
            Karanganyar <br>
        </p>
        <p>
            Dengan hormat,<br>
        </p>
        <p style="text-align: justify">
            Sehubungan dengan Surat Permohonan Tempat Praktik Kerja Lapangan (PKL) dengan nomor 421.4/ 670/2024
            tertanggal {{\Carbon\Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');}}  maka kami dari pihak <b>{{ $user->first()->industry_name}}, {{ $user->first()->industry_address }}</b>
            menyatakan :

        <h4 style="text-align: center;"><b>( Menerima / Tidak Menerima )</b></h4>

        <p>
            Siswa/siswi tersebut untuk melaksanakan PKL pada tanggal <b>02 Oktober 2024 sampai dengan 28 Maret 2025</b>,
            dengan ketentuan siswa/siswi tersebut harus mentaati segala peraturan atau tatatertib yang berlaku di
            Perusahaan/Bengkel/Instansi. <br>
            Adapun siswa/siswi yang kami terima sebagai berikut:
        </p>
        <table border="1" style="margin-left: 20px;">
            <tr>
                <th style="width: 15px;">No.</th>
                <th style="width: 230px;">Nama Siswa</th>
                <th style="width: 50px;">NIS</th>
                <th style="width: 80px;">Kelas</th>
                <th style="width: 150px;">Konsentrasi Keahlian</th>
            </tr>
            @foreach ($user as $item)
                <tr style="text-align: center;">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->NIS }}</td>
                    <td>{{ $item->class }}</td>
                    <td>{{ $item->major_name }}</td>
                </tr>
            @endforeach
        </table>
        </p>
        <br>
        <p>
            Demikian surat keterangan ini kami buat semoga dapat dimaklumi dan dapat dipergunakan sebagaimana mestinya.
            <br>
            NB. : <br>
            *) coret yang tidak perlu

        </p>
        <p style="margin-left: 400px">...................., ....................... 2024 <br> <br>
            Pimpinan DU/DI <br><br>
            {{$user->first()->industry_name}} <br>
            <br><br><br><br>
            <br>
            {{$user->first()->industry_leader}} <br>
        </p>

        <div>

        </div>
    </div>
</body>

</html>