@extends('User.layout.app')
@section('title',"Bog'lanish")
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Bosh sahifa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('User') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Bosh sahifa</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="info-box card p-3">
                        <i class="bi bi-geo-alt"></i>
                        <h3 class="card-title p-0 m-0">Manzilimiz</h3>
                        <p class="m-0">Qarshi shahar, Mustaqillik <br>shox ko'chasi 2-uy</p>
                    </div>
                    <div class="info-box card p-3">
                        <i class="bi bi-telephone"></i>
                        <h3 class="card-title p-0 m-0">Telefon</h3>
                        <p class="m-0">+998 91 950 1101</p>
                    </div>
                    <div class="info-box card p-3">
                        <i class="bi bi-clock"></i>
                        <h3 class="card-title p-0 m-0">Ish vaqti</h3>
                        <p class="m-0">Dushanba-Shanba<br>08:00 - 20:00</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title w-100 text-center">Online Murojat</h5>
                            <div class="border">
                                <div class="list-group " style="height:300px;overflow-x: hidden;overflow-y: scroll">
                                    <div style="width: 70%;margin: 5px;border-radius: 5px;padding: 5px;" class="bg-info">
                                        <b style="text-align: left;" class="w-100">Operator</b> 
                                        <p class="p-0 m-0 text-white">
                                            Assalomu alaykum. Savollaringiz bo'lsa murojat qiling va men sizga javob beraman.
                                        </p>   
                                    </div>
                                    @foreach($Murojat as $item)
                                        @if($item['status']=='user')
                                        <div style="width: 80%;margin: 5px;border-radius: 5px;padding: 5px;margin-left: 19%;" class="bg-primary text-dark">
                                            <b style="text-align: left;" class="w-100">{{ Auth::user()->name }}</b> 
                                            <p class="p-0 m-0 text-white">
                                                {{ $item['text'] }}
                                            </p> 
                                            <div class="d-flex p-0 w-100 justify-content-between">
                                                <small class="text-white w-100" style="font-size:8px;padding-top:10px;text-align:right">
                                                    @if($item['admin_type']=='true')
                                                    <i class="bi bi-check text-success" style="font-size:12px"></i>
                                                    @else
                                                    <i class="bi bi-check-all text-success" style="font-size:12px"></i>
                                                    @endif
                                                    {{ $item['created_at'] }}
                                                </small>
                                            </div> 
                                        </div>
                                        @else
                                        <div style="width: 70%;margin: 5px;border-radius: 5px;padding: 5px;" class="bg-info">
                                            <b style="text-align: left;" class="w-100">{{ $item['name'] }}</b> 
                                            <p class="p-0 m-0 text-white">
                                                {{ $item['text'] }}
                                            </p>   
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                                
                                <form action="{{ route('ContactPost') }}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="text" class="form-control" style="border-radius: 0;" placeholder="Javob matni..." required>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary" style="border-radius: 0;"><i class="bi bi-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
</main>
@endsection