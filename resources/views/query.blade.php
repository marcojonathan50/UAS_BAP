
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
        <a href="querypdf" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Cetak PDF</a>
    </body>
</html>