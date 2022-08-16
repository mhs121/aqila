<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
           $a = @$_GET['a1'];
           $b = @$_GET['a2'];
           $hasil = @$_GET['hasil'];
           $total = @$_GET['total'];
    
           if(isset($_GET['bt']))
           {
               $hasil = $a*$b;
           }
           ?>
       <h2>Gaya (F)</h2>
       <form  method="get">
           <div class="mb-3 row">
             <label for="statictotal" class="col-sm-2 col-form-label">Masa</label>
             <div class="col-sm-10">
               <input type="number"  class="form-control"   name="a1" value="{{$a}}">
             </div>
           <div class="mb-3 row">
             <label for="statictotal" class="col-sm-2 col-form-label">pecempatan</label>
             <div class="col-sm-10">
               <input type="number" class="form-control"  name="a2" value="{{$b}}">
             </div>
             <em>untuk mecari gaya menggunakan rumus massa(m) X percepatan(a)</em>
           <div class="mb-3 row">
             <label for="statictotal" class="col-sm-2 col-form-label">hasil</label>
             <div class="col-sm-10">
               <input type="number" class="form-control"  name="hasil" value="{{$hasil}}">
             </div>
             <hr>
             <button type="submit" name="bt">Gaya</button>
       </form>
</body>
</html>