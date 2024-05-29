@extends('User.layout.app')
@section('title',"Kabinet")
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Kabinet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('User') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active">Kabinet</li>
            </ol>
        </nav>
    </div>
        @if (Session::has('success'))
            <div class="alert alert-success">{{Session::get('success') }}</div>
        @elseif (Session::has('error'))
            <div class="alert alert-danger">{{Session::get('error') }}</div>
        @endif
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title w-100 text-center">{{ Auth::user()->name }}</h4>
                        <form action="{{ route('KabinetUpdate') }}" method="post">
                            @csrf
                            <div class="row ">
                                <div class="col-lg-6">
                                    <label for="">FIO</label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control mb-2" required>
                                    <label for="">Manzil</label>
                                    <input type="text" value="{{ Auth::user()->addres }}" disabled class="form-control mb-2" required>
                                    <label for="">Telefon raqam</label>
                                    <input type="text" value="{{ Auth::user()->phone }}" class="form-control mb-2" disabled required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Login</label>
                                    <input type="text" value="{{ Auth::user()->email }}" class="form-control mb-2" disabled required>
                                    <label for="">Tugilgan kun</label>
                                    <input type="text" value="{{ Auth::user()->tkun }}" class="form-control mb-2" disabled required>
                                    <label for="">Ishga olindi</label>
                                    <input type="text" value="{{ Auth::user()->created_at }}" class="form-control mb-2" disabled required>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary w-50 mt-2">Ozgarishlarni saqlash</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title w-100 text-center">Parolni Yangilash</h4>
                        <form action="{{ route('KabinetUpdatePassw') }}" method="post">
                            @csrf
                            <label for="pass">Joriy parol (min:8)</label>
                            <input type="password" name="pass" class="form-control mb-2" required>
                            <label for="pass1">Yangi parol (min:8)</label>
                            <input type="password" name="pass1" class="form-control mb-2" required>
                            <label for="pass2">Parolni takrorlang (min:8)</label>
                            <input type="password" name="pass2" class="form-control mb-2" required>
                            <button type="submit" class="btn btn-primary w-100 mt-2">Parolni yangilash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
                
    </section>
</main>
@endsection