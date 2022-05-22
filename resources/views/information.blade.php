@extends('template')
@section('judul', 'information')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- css custom --}}
        <link rel="stylesheet" href="style/information.css">
        <link rel="shortcut icon" href="images/blue.png" type="image/x-icon">

        <title>information</title>
    </head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="card" style="width: 45rem;">
                <div class="card-body">
                <h2 class="card text-center">DEPARTEMEN BEM</h2>
                    <h5 class="card-title text-center">Sosial Masyarakat (SOSMAS)</h5>
                    <p class="card-text">Departemen yang bertugas untuk menjadi wadah kegiatan yang terkhusus berfokus pada bidang sosial dan kesejahteraan dalam masyarakat dan lingkungan.</p>
                </div>
                <div class="card" style="width: 45rem;">
                    <div class="card-body">
                    <h5 class="card-title text-center">Kesejahteraan Masyarakat (KESMA)</h5>
                    <p class="card-text text-center">Merupakan departemen yang berfungsi sebagai ranah kerja di bidang kesejahteraan mahasiswa, serta menampung aspirasi dari mahasiswa.</p>
                </div>
                <div class="card" style="width: 45rem;">
                    <div class="card-body">
                    <h5 class="card-title text-center">Hubungan Antar Lembaga (HUAL)</h5>
                    <p class="card-text text-center">Departemen ini menjadi sarana memperkuat atau mempererat ikatan dengan lembaga-lembaga  internal maupun lembaga-lembaga eksternal.</p>
                </div>
                <div class="card" style="width: 45rem;">
                    <div class="card-body">
                    <h5 class="card-title text-center">Pemberdayaan Perempuant (PP)</h5>
                    <p class="card-text text-center">Membahas permasalahan maupun isu terkait perempuan dan anak yang ada di Indonesia, mengangkat isu tentang perempuan dan anak baik dalam kasus asusila, pelecehan seksual, masyarakat dan lain sebagainya.</p>
                </div>
                <div class="card" style="width: 45rem;">
                    <div class="card-body">
                    <h5 class="card-title text-center">Kesekretaritan BEM (KESBEM)</h5>
                    <p class="card-text text-center">Mengurus hal administratif organisasi dan Mengelola fasilitas-fasilitas organisasi. Seperti Surat yang masuk ataupun surat keluar.</p>
                </div>
                <div class="card" style="width: 45rem;">
                    <div class="card-body">
                    <h5 class="card-title text-center">Pengembangan Sumber Daya Mahasiswa(PSDM)</h5>
                    <p class="card-text text-center">Merupakan divisi yang berfungsi sebagai ranah kerja di bidang kesejahteraan mahasiswa, serta menampung aspirasi dari mahasiswa.</p>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
@endsection