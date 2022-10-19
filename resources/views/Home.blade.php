<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--CSS Bootstaps-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-success fixed-top">
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href"/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href"/Dago">Dago Finance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href"/Ganesha">Ganesha Leasing</a>
        </li>
    </ul>

</nav>

@php
    $Promo =
    [['Merek & Tipe Motor'=>'Suzuki All New Satria Predator',
    'Harga'=>'Rp 25.200.000',
    'Tenor'=>'12 Bulan',
    'Leasing Opsi #1'=> 'Dago Finance',
    'Leasing Opsi #2'=>'Ganesha Leasing'
    ]];
    @endphp

    <div class="container-fluid" style="margin-top:80px">
        <p class="h2"><b>Promo Kredit Special</b></p>

        <table class="table table-striped table-hover table-dark">
            <tbody class="table ">
                @foreach ($Promo as $item)
                <tr>
                    <td>Merek & Tipe Motor</td> 
                    <td>{{$item['Merek & Tipe Motor']}}</`td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>{{$item['Harga']}}</td>
                </tr>
                <tr>
                    <td>Tenor</td>
                    <td>{{$item['Tenor']}}</td>
                </tr>
                <tr>
                    <td>Leasing Opsi #1</td>
                    <td>{{$item['Leasing Opsi #1']}}</td>
                </tr>
                <tr>
                    <td>Leasing Opsi #2</td>
                    <td>{{$item['Leasing Opsi #2']}}</td>
                </tr>
                  @endforeach
            </tbody>
        </table>
    </div>



</body>
<!--Script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>