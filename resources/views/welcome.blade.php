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
    function tambahdatabuku()
    {

        window.location.href = "{{ route('tambahbuku') }}";

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
<h2>Daftar Buku</h2>   


<div style="float:right;">
    <button onclick="tambahdatabuku();" type="button" class="btn btn-primary">Tambah Buku</button>    
</div>


<br>
<br>



  <table class="table table-condensed">
    

    <thead>
      <tr>
        <th>Judul Buku</th>
        <th>Serial Number</th>
        <th>Penerbit</th>
        <th>Penulis</th>
        <th>Action</th>
        <th></th>
      </tr>
    </thead>
    @foreach($buku as $row) 
    <tbody>
      <tr>
        <td>{{$row->title}}</td>
        <td>{{$row->serial_number}}</td>
        <td>{{$row->published_at}}</td>
        <td>{{$row->nama_penerbit}}</td>
        <td><a href="{{route('formeditbuku', ['id' => $row->id])}}">Edit</a</td>
        <td><a href="{{route('deletebuku', ['id' => $row->id])}}">Delete</a></td>
      </tr>
    </tbody>
    @endforeach
  </table>



</div>

</body>
</html>
