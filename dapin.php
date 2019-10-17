<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Davin Anugraha P</title>
</head>
<body>

<p>Nama : Davin Anugraha P</p>
<p>Kelas : X-RPL 1</p>
	
<?php 

            $bmbg = "Bambang";
            $a = 98;
            
            $p = 7;
            $l = 7;
            $t = 2;

            $v = $p*$l*$t;
        ?>

        <p>Pak <?= $bmbg ?> mempunyai air dengan volume <?= $a ?></p>

        <p>jika volume wadah 98 maka keluar tulisan "pas"</p>

        <p>jika kurang dari 98 maka keluar tulisan "tumpah"</p>

        <p>jika lebih dari 98 maka keluar tulisan "sisa"</p>

        <h5 class="judul">Hasil :</h5>
        
        <?php
            if($v > 98) {
                echo "Sisa";
            } else if($v == 98) {
                echo "Pas"; 
            } else {
                echo "Tumpah";
            }
        ?>

</body>
</html>
