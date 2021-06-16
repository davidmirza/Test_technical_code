<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="form" method="post" action="index.php?proses=ok">
    <input type="number" name="kode" id="bilangan" placeholder="Input Angka">
    <p>
        <input type="submit" name="bSegitiga" value="Generate Segitiga">
        <input type="submit" name="bGanjil" value="Generate Bilangan Ganjil">
        <input type="submit" name="bPrima" value="Generate Bilangan Prima">
 
    <div id="hasil">

</form>
</body>

<script type="javascript">



</script>
</html>

<?php
if (@$_GET['proses']=="ok"){


if(isset($_POST['bSegitiga'])){
    $bilangan=$_POST['kode'];
    $panjang=strlen($bilangan);
  
    $akhir=0;
    for($x=0;$x<$panjang;$x++){
        $nol=0;
        $hasil=substr($bilangan,$x,1);

        for($z=0;$z<$x;$z++){
            $nol =$nol."0";
        }
        echo $hasil.$nol."<br>";

    }

}
else if(isset($_POST['bGanjil'])){
    $bilangan=$_POST['kode'];
    for($x=1;$x<=$bilangan;$x++){
        $hasilGanjil = $x % 2;
        if($hasilGanjil==1)
           { echo $x."<br>";}
       
    }
   
}

else{
    $bilangan=$_POST['kode'];
    $hasilPrima="";
    for($x=1;$x<=$bilangan;$x++){
       
        for($p=1;$p<=$x;$p++){

            $hasilPrima = ($x % $p) ;
          
            echo $x." ".$p." ". $hasilPrima."<br>";

if($x==$p){

}

            if($hasilPrima==2)
               {
                   $hasilPrima = $hasilPrima ." ".$x;
           //        echo $x;
                }
            else{
          
            }
        }
   //     echo $hasilPrima;

     
       
       
    }


}

}
else{

}
?>
