<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
    <div id="konten"></div>
     
    </div>
    <script>
        const jsondta = new XMLHttpRequest();
        setInterval(function(){

        jsondta.open("GET","http://localhost/webprog12/server/listdata.php")
        jsondta.send()
        console.log()
        },1000)
        jsondta.onload = function() {
            const mydta = JSON.parse(this.responseText);
    let tx =' <h3>Data Mahasiswa</h3>'
    tx +=' <table class="table">'
    tx +='<thead>'
    tx +='<tr>'
    tx +='<th scope="col">#</th>'
    tx +='<th scope="col">NIM</th>'
    tx +='<th scope="col">NAMA</th>'
    tx +='<th scope="col">JENIS KELAMIN</th>'
    tx +='<th scope="col">  <a class="btn btn-primary" href="formmhs">TAMBAH DATA </a></th>'
    tx +='</tr>'
    tx +='</thead>'
    tx +='<tbody>'

    let no = 1
    for(i=0; i<mydta.length;i++){
        tx +='<tr>'
    tx +='<th scope="row">'+no+'</th>'
    tx +='<td>'+mydta[i][0]+'</td>'
    tx +='<td>'+mydta[i][1]+'</td>'
    tx +='<td>'+mydta[i][2]+'</td>'
    tx +=' <td><a class="btn btn-primary" href="formmhs"> edit </a>|<a class="btn btn-primary" href="formmhs"> hapus </a></td>'
    tx +='</tr>'
    no++
    }

    tx +='</tbody>'
    tx +='</table>'

    document.getElementById("konten").innerHTML = tx
           
            // console.log
        }
    </script>
    
</body>
</html>