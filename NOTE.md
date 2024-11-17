15 Nov 2024
## User Student 
> 1. add industry -> Only input name, leader, phone, major, address -> 👌sudak tp blm fungsi
> 2. Request blm mau di kirim -> 👌 sudah
> 3. Gnerate surat permohonan blm tertampil ->  👌sydah
> 4. permohonan diambil dari pengajuan terawal dengan status prosess -> 👌 sudah dengan penambahan field baru di table request


## User Admin
> 1. exp , mou is optional -> 👌 sudah
> 2. 


## User Guru
> 1. mengubah dari status pending ke acc pengajuan -> 👌 sudah oke


## Cetak Serifikat
> 1. nomor suray apakah selalu sama? -> 🗣️ harus konfirmasi dul
> 2. Periode waktunya apakah bisa di set ? -> 🗣️ konfirmasi dulu


## Permasalahan
> 1. jika dalam 1 gerombolan anak sudah mendapatkan format surat permohonan pkl dan telah mendapatkan surat balasan. Permasalahan terjadi saat ada anak yang mengupload bukti diterima dengan kondisi dia yang mengajukan paling awal, maka batasan cetak akan berubah. solusinya ada ada data tanggal pengajuan  -> 👌 sudah oke
    -- blm masuk ke database cek ulang -> 👌 sudah oke

> 2. tinggal dicoba dulu -> dev sudah di merge ke main ->👌 sudah oke

> 3. Baik industry di user dan di teacher yang bisa terlihat adalah yang sejurusan dengan user -> blm di cek mendetail 
> 4. Kalau request sudah accept harusnya progress permohonan hijau semua
> 5. Verifikasi industri masuk tetapi untuk verificator_id belum masuk
> 6. masih terdapat pilihan guru pendamping di luar kompetensi

## URGET
> 1. upload file harus 2x baru bisa valid
> 2. tambahkan industri dari student blm bisa -> mungkin karena antara industry dan user berkaitan. blm saaya cek

## noted
untuk mengeluarkan nilai di live wire
$this->js("console.log($this->requestId)");