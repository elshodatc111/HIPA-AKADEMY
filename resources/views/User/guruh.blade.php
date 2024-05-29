@extends('User.layout.app')
@section('title',"Guruhlarim")
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Guruhlarim</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('User') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Guruhlarim</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            @forelse($Guruhlar as $item)
            <div class="col-lg-4">
                <a href="{{ route('GuruhShow',$item['id'] ) }}">
                    <div class="card">
                        <img src="{{ $item['image'] }}" 
                        class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title w-100 text-center my-0 py-1">{{ $item['name'] }}</h5>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p class="p-0 m-0">Boshlanish vaqt</p>
                                    {{ $item['start'] }}
                                </div>
                                <div class="col-6">
                                    <p class="p-0 m-0">Tugash vaqt</p>
                                    {{ $item['end'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-lg-12 text-center">
                <div class="card">
                    <div class="card-body"><p class="card-title">Sizda guruhlar mavjud emas.</p></div>
                </div>
                
            </div>
            @endforelse
        </div>
    </section>
</main>
@endsection