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
    


    $(document).ready(function() {

      $.ajax({
         url: "{{route('getindexbuku')}}",
        type : "GET",
        dataType : "json",
        success : function(data) {


          
          for (var i=0; i<data.length; i++) {

            var numbertotal = data[i];

            var totaldata = (parseInt(numbertotal.totaldata)+1);
            
            
            document.getElementById("tempidcreatebuku").innerHTML = "<input type='hidden' id='idautors' name='idautors' value='"+totaldata+"'>"; 

          }
    
          
        },
          error : function(data) {
               console.log(data);
           }
       });



    });



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

    <h2>Form Tambah Buku</h2>   

  <form  method="post" action="{{route('simpanbuku')}}">

  @csrf


    <div class="form-group">
      <label for="textjudulbuku">Judul Buku</label>
      <input type="text" class="form-control" id="textjudulbuku" name="textjudulbuku">
    </div>

    <div class="form-group">
      <label for="textserialnumber">Serial Number</label>
      <input type="text" class="form-control" id="textserialnumber" name="textserialnumber">
    </div>

    <div class="form-group">
      <label for="textpenulis">Penerbit</label>
      <input type="text" class="form-control" id="textpenerbit" name="textpenerbit">
    </div>

    <div class="form-group">
      <label for="textpenulis">Penulis</label>
      <input type="text" class="form-control" id="textpenulis" name="textpenulis">
    </div>


    <div class="form-group">
      <label for="textemailpenulis">Email Penulis</label>
      <input type="email" class="form-control" id="textemailpenulis" name="textemailpenulis" placeholder="test1@gmail.com">
    </div>

    <div id="tempidcreatebuku">

    </div>



    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan Data</button>


  </form>

  <br>

  <button type="submit" onclick="bataltambahbuku();" class="btn btn-outline-danger btn-lg btn-block">Batal</button>

</div>

</body>
</html>
