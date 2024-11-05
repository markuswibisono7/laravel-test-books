<!DOCTYPE html>
<html lang="en">
<head>
  <title>Produk Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script>
    




    function bataltambahbuku()
    {
      
        window.location.href = "{{ route('tampilbuku') }}";

    }


    

 </script>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Produk Buku</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Daftar Buku</a></li>
    </ul>
  </div>
</nav>
  

<div class="container">

  <a href="{{route('tampilbuku')}}">Kembali</a>

    <h2>Form Edit Buku</h2>   

  <form  method="post" action="{{route('ubahbuku')}}">

  @csrf
  @foreach($buku as $row2) 

    <div class="form-group">
      <label for="textjudulbuku">Judul Buku</label>
      <input type="text" class="form-control" id="textjudulbuku" name="textjudulbuku" value="{{$row2->title}}">
    </div>

    <div class="form-group">
      <label for="textserialnumber">Serial Number</label>
      <input type="text" class="form-control" id="textserialnumber" name="textserialnumber" value="{{$row2->serial_number}}">
    </div>

    <div class="form-group">
      <label for="textpenulis">Penerbit</label>
      <input type="text" class="form-control" id="textpenerbit" name="textpenerbit" value="{{$row2->published_at}}">
    </div>

    <input type="hidden" class="form-control" id="ideditbuku" name="ideditbuku" value="{{$row2->id}}">


    <div class="form-group">
      <label for="textpenulis">Penulis</label>
      <input type="text" class="form-control" id="textpenulis" name="textpenulis" value="{{$row2->penulis}}">
    </div>


    <div class="form-group">
      <label for="textemailpenulis">Email Penulis</label>
      <input type="email" class="form-control" id="textemailpenulis" name="textemailpenulis"  value="{{$row2->emailpenulis}}" placeholder="test1@gmail.com">
    </div>

    @endforeach


    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan Data</button>


  </form>

  <br>

  <button type="submit" onclick="bataltambahbuku();" class="btn btn-outline-danger btn-lg btn-block">Batal</button>

</div>

</body>
</html>
