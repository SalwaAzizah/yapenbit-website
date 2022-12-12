<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir Siswa</title>
</head>
<style>
    *{
        background-color:#9E7676;
        margin: 0;
        padding: 0;
    }

    h1{
        text-align:center;
        background-color:#FFF8EA;
        height: 70px;
        font-size: 40px;
    }

    label{
        text-align:center;
    }

    form{
        align-items: center;
        font-size: 40px;
        flex-direction: column;
        text-align: center;
        color:white;
    }

    input{
        width: 550px;
        /* margin-left:10px; */
        /* text-align: center; */
        height: 25px;
        /* align-items: center; */
        /* margin: 10px; */
        /* display:flex; */
        /* flex-wrap:wrap; */
        border-radius: 70px;
        background-color: #815B5B                                                                                               ;
    }

    .sumbit input{
        width:50px;
        height:50px;
        background-color:#594545;
        color:white;
    }
    
</style>
<body>
    <h1>Nilai Akhir Siswa Smkn 1 Lhokseumawe</h1>
    <form action="" method = "post">
        <label for="Nama">Nama</label><br>
        <input type="text" name = "Nama" id = "Nama">
        <br>
        <label for="Nilai_UAS">UAS</label><br>
        <input type="text" name = "Nilai_UAS" id = "Nilai_UAS">
        <br>
        <label for="Nilai_UTS">UTS</label><br>
        <input type="text" name = "Nilai_UTS" id = "Nilai_UTS">
        <br>
        <label for="nama">Praktik</label><br>
        <input type="text" name = "Nilai_PRAKTIK" id = "Nilai_PRAKTIK">
        <div class="sumbit">
        <input type="submit" name = "sumbit" value = "sumbit" style = "margin 5px">
        </div>

    </form>

    <?php
    if (isset($_POST["sumbit"])){
        $Nama = $_POST["Nama"];
        $UAS = $_POST["Nilai_UAS"];
        $UTS = $_POST["Nilai_UTS"];
        $PRAKTIK = $_POST["Nilai_PRAKTIK"];

        $UAS = $UAS * 0.3;
        $UTS = $UTS  * 0.4;
        $PRAKTIK = $PRAKTIK * 0.3;
        $total = $UAS + $UTS + $PRAKTIK;
        if($total >= 90){
        $nilai  = "A";
        }
        else if ($total >= 80){
            $nilai = "B";   
        }
         else if ($total >= 70){
            $nilai = "c";
         }
         else if ($total >= 60){
            $nilai  = "D";
         }
         else{
            $nilai  = "E";
         }

         echo "Nama: $Nama<br/>";
         echo "Nilai_UAS: $UAS<br/>";
         echo "Nilai_UTS: $UTS<br/>";
         echo "PRAKTIK: $PRAKTIK<br/>";
                

            echo "perolehan nilai <b> $total </b><br/>";
            echo  "grade $nilai<br/>";

    }
    ?>
</body>
</html>