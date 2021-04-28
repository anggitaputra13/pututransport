<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2>Jenis<strong>Mobil</strong></h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb mb-2">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-dark">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Jenis Mobil</li>
                </ol>
            </nav> 
        </div>
    </div>
    <section class="mobil">
        <div class="row mb-4">
            @foreach ($mobils as $mobil)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/mobil/'.$mobil->gambar)}}" class="img-fluid">
                      <div class="row mt-2">
                          <div class="col-md-12">
                            <h5><strong>{{$mobil->nama}}</strong></h5>
                            <h5>Rp.{{ number_format($mobil->harga)}}</h5>
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
        <div class="row">
            <div class="col">
                {{ $mobils->links() }}
            </div>
        </div>
    </section>
</div>
