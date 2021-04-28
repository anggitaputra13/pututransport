<div class="container" style="margin-top: -20px;">
    {{-- Slider --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('assets/slider/slider2.jpg') }}" class="d-block w-100" style="width: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1>Putu Transport Bali</h1>
                <h5>Pusat Sewa Mobil Murah dan Berkualitas di Bali</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/slider/slider1.jpg') }}" class="d-block w-100" style="width: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1>Putu Transport Bali</h1>
                <h5>Pusat Sewa Mobil Murah dan Berkualitas di Bali</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/slider/slider3.jpg') }}" class="d-block w-100" style="width: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1>Putu Transport Bali</h1>
                <h5>Pusat Sewa Mobil Murah dan Berkualitas di Bali</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('assets/slider/slider4.jpg') }}" class="d-block w-100" style="width: 100%;">
            <div class="carousel-caption d-none d-md-block">
                <h1>Putu Transport Bali</h1>
                <h5>Pusat Sewa Mobil Murah dan Berkualitas di Bali</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      {{-- About Us --}}
      <section class="aboutus">
        <div class="row mt-4 mb-4 text-center">
            <div class="col">
                <img src="{{url('assets/logo/logo.png')}}" class="img-fluid">
            </div>            
        </div>
        <div class="row text-center">
            <br>
            <p>Sewa Mobil Matic & Manual. Sewa Mobil Lepas Kunci atau Dengan Sopir</p>
            <h5>PUTU TRANSPORT BALI MENYEDIAKAN SEWA MOBIL DI BALI MURAH</h5>
            <br><br>
            <p class="tulisan">Memberikan kepuasan pelanggan yang ingin rental mobil di bali dengan supir maupun lepas kunci 24 jam. Berbekal pengalaman dalam layanan Tour & Travel di Bali, KutaRental.net telah direkomendasikan oleh sejumlah perusahaan bahkan dikalangan artis untuk penyewaan mobil tanpa supir atau anda kemudikan sendiri dengan lama sewa dihitung per 24 jam seharian penuh, Mobil rental kami lengkap dengan beragam rental mobil Bali dari tipe city car hingga armada bus pariwisata keliling Bali. Banyak pilihan armada keluaran terbaru yang memberikan rasa kepuasan tersendiri bagi para wisatawan Indonesia (Domistik) dalam berkendara ke Tujuan objek wisata favorit di Pulau Dewata Bali.</p>
        </div>
      </section>
      {{-- Pilih Jenis Mobil --}}
      <section class="pilihmobil">
          <div class="row mt-4">
              <h3>Jenis Mobil</h3>
              @foreach ($jenismobils as $jm)
              <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/jenis_mobil/'.$jm->gambar)}}" class="img-fluid">
                    </div>
                </div>
              </div>  
              @endforeach
          </div>
      </section>

      {{-- Paling Laris --}}
      <section class="mobil">
        <div class="row mt-4 mb-4">
            <h3>Paling Laris</h3>
            @foreach ($mobils as $m)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/mobil/'.$m->gambar)}}" class="img-fluid">
                      <div class="row mt-2">
                          <div class="col-md-12">
                            <h5><strong>{{$m->nama}}</strong></h5>
                            <h5>Rp.{{ number_format($m->harga)}}</h5>
                          </div>
                      </div>
                      <div class="row mt-2">
                          <div class="col-md-12">
                            <a href="" class="btn btn-dark btn-block">Detail</a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>  
            @endforeach
        </div>
    </section>
</div>


