<?php
    include_once("koneksi.php");
    $sql = "SELECT * FROM mhs";
    $hsl = mysqli_query($cnn,$sql);

    // // $row = mysqli_query 
    $row = mysqli_fetch_all($hsl);
    echo json_encode($row);

    // while ($row = mysqli_fetch_array($hsl)){
    //     echo "NIM: ". $row["NIM"];
    //     echo "NAMA: ". $row["NAMA"];
    //     echo "JENIS KELAMIN: ". $row["JKEL"];
    //     echo "<br>";
    //  }
?>
