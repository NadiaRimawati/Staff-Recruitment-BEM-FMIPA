@extends('template')
@section('judul', 'About')
@section('content')

<div class="card-group">
  <div class="card">
  <img src="images/1.png">
    <div class="card-body">
      <h5  align="center" class="card-title">Staff Recruitment (S.R. BEM FMIPA)</h5>
      <p align="justify" class="card-text justify " >Merupakan suatu website yang menjadi wadah  bagi  mahasiswa informatika  mendaftar dirinya sebagai bagian dari Staff BEM dengan lebih mudah dan terarah karena memiliki beberapa fitur. Mulai dari tersedianya informasi yang cukup untuk memberikan pemahaman mengenai apa itu BEM dan juga tupoksi dari setiap bidang yang ada pada BEM tersebut. Selain itu admin juga akan lebih mudah memilah para pendaftar yang sudah tersusun berdasarkan tempatnya masing-masing serta tampilan web yang di desain dengan sedemikian rupa menambahkan ketertarikan akan minat para mahasiswa. </p>
    </div>
  </div>
  <div class="card">
  <img src="images/logo bem.png">
    <div class="card-body">
      <h5 align="center" class="card-title">Badan eksekutif mahasiswa (BEM)</h5>
      <p align="justify" class="card-text">Merupakan organisasi mahasiswa intra kampus yang merupakan lembaga eksekutif di tingkat pendidikan tinggi yang dipimpin oleh seorang Presiden Mahasiswa atau Ketua BEM. Dalam melaksanakan program-programnya, umumnya BEM memiliki beberapa kementerian dan departemen atau bidang Keberadaan BEM haruslah berdasarkan prinsip Dari, Oleh dan Untuk Mahasiswa. Seperti hal nya pada Badan Eksekutif Mahasiswa  Fakultas Matematika dan Ilmu Pengetahuan Alam, dimana merupakan Badan yang berisi mahasiswa FMIPA sebagai Staff atau pengurusnya. </p>
    </div>
  </div>
</div>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">

      <!-- Google -->

      <a class="btn btn-outline-light btn-floating m-1" href="mailto: bongafk@gmail.com" role="button"
        ><img src="images/R.png" style=" width: 35px; height: 30px; "><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/bongs.set" role="button"
        ><img src="Images/instagram.png" style=" width: 36px; height: 30px; "><i class="fab fa-instagram"></i
      ></a>
    

    </section>
    <br>
    <p class="text-center">Copyright &copy;  nadiarimawati </p>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
</footer>

@endsection