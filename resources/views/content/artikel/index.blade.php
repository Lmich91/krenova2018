@extends('content.template.app')
@include('content.template.slider')
@section('content')
<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Berita
          <small></small>
        </h1>
    
    <div class="card mb-4">
          <img class="card-img-top" src="{{url('front_end/img/isi1.jpeg')}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Fasilitasi Pendampingan Pengenalan Produk Mesin PAGRAK (Panen Garam Rakyat) pada PT. GARAM (Persero).</h2>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Postingan Tanggal 12 Februari 2018 by
            <a href="#">Teguh</a>
          </div>
        </div>
    
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{url('front_end/img/isi.jpeg')}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Fasilitasi Pengenalan Produk Mesin PAGRAK pada Kegiatan Pengembangan Teknologi (BANGTEK)</h2>
            <p class="card-text">Mewujudkan kecukupan garam di Jawa Tengah, sekaligus me-manis-kan garam bagi para petambak garam Jawa Tengah.
Dengan Inovasi kini para petambak garam bisa memanen garam kapanpun siang ataupun malam</p>
            <a href="artikelmore.html" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Postingan Tanggal 12 Februari 2018 by
            <a href="#">Teguh</a>
          </div>
        </div>

        <!-- Blog Post -->
        

        <!-- Blog Post -->
        

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Kategori</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Pangan</a>
                  </li>
                  
                </ul>
              </div>
              <div class="col-lg-6">
                
              </div>
            </div>
          </div>
        </div>

        

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection