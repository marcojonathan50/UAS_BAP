Marco Jonathan - 03081200050

## 1. Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin). 

Menambah tabel dengan perintah CRUD di terminal. 
`php artisan crud:generate formpromo --fields='Nama_promo#string; Deskripsi_promo#string; Diskon#integer;Tombol#string; Foto#string;'--controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html`

Tabel yang saya tambahkan adalah tabel formpromo dengan kolom Nama promo, Deskripsi promo, Diskon, Tombol, Foto. Juga menambahkan menu untuk mengakses tabel promo ini pada sidebar admin.

![Gambar CRUD](/public/images/crud1.png)

## 2. Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan queryview tersebut kedalam file queryUAS.sql(20poin)

Queryview yang dibuat menggabungkan 3 buah tabel, yaitu tabel promo, transaksi, dan tabel produk sehingga menghasilkan tabel query yang menunjukan berapa transaksi yang terjadi selama menggunakan promo.

`CREATE VIEW jlhProdukPromo AS SELECT tabel.productid as Produk_ID, product.Nama as Nama_Produk, promo.nama_promo as Nama_Promo, promo.deskripsi_promo as Deskripsi_Promo, promo.diskon as Diskon FROM form_transactions tabel LEFT JOIN formpromos promo on promo.id = tabel.Promo_ID LEFT JOIN form_products product on product.id = tabel.productid`

![Gambar View](/public/images/view.png)

## 3. Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Diperlukan beberapa langkah-langkah seperti run perintah php untuk menginstal package dompdf, konfigurasi di config app.php, run code untuk create controller di terminal, pembuatan routes, membuat views, dan menghubungkan views dengan data dan controller.

Berikut kode program dari query laporan pdf yang di cetak:

<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

<html>
    <head>
        <title>Query Soal No 2</title>
    </head>
    <body>
        
        <style>
            container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            }
        </style>
        <br>
        <div class="float">
        <img src="images/uph.png">
        </div>
        <div class = "float">
        <h3>
            Marco Jonathan
            03081200050
        </h3>
        </div>
        <hr>
        <table class="table table-hover container">
          <thead>
            <tr>
              <th scope="col">Produk_ID</th>
              <th scope="col">Nama_Produk</th>
              <th scope="col">Nama_Promo</th>
              <th scope="col">Deskripsi_Promo</th>
              <th scope="col">Diskon</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($query as $rpl)
            <tr>
              <th scope="row">{{$rpl->Produk_ID}}</th>
              <td>{{$rpl->Nama_Produk}}</td>
              <td>{{$rpl->Nama_Promo}}</td>
              <td>{{$rpl->Deskripsi_Promo}}</td>
              <td>{{$rpl->Diskon}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </body>
</html>

## 4. Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Install package di terminal `php artisan make:request StorePostRequest`
Akan muncul file di bagian Http-> Request -> StorePostRequest.php
Ubah baris ke 16 yang bagian authorize menjadi true
Kemudian isi StorePostRequest sesuai dengan validasi yang diinginkan
Selanjutnya hubungkan controller ke StorePostRequest ini agar mendapatkan validasi yang diinginkan. Berikut kode program yang dibuat untuk melakukan validasi data untuk halaman insert dan update soal nomor 1:

public function rules()
    {
        $rules = [
            'Nama Promo' => [
                'required',
                'string',
                'max:100',
            ],
            'Deskripsi Promo' => [
                'required',
                'string',
                'max:250'
            ],
            'Diskon' => [
                'required',
                'digit:2',
            ],'Tombol' => [
                'required',
                'string',
                'max:225',
            ],'Foto' => [
                'required',
                'string',
                'max:225',
            ],
        ];


## 5. Simpan kode program beserta queryUAS.sql ke public repository github, tambahkan file readme.md yang berisikan (10 Poin)

Menambahkan file readme.md dengan penjelasan dari penyelesaian soal sesuai ketentuan yang diberikan yaitu berisi nama, NIM, soal, dan penjelasan jawaban. 
Code juga sudah dipush ke akun github.