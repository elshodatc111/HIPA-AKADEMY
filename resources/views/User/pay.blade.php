@extends('User.layout.app')
@section('title','Bosh sahifa')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Bosh sahifa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('User') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Balansni to'ldirish</li>
            </ol>
        </nav>
    </div>
        <div class="dashboard">
            <div class="col-12">
                <h4 class="card-title">To'lov turini tanlang</h4>
                <p><b>Tulov summasi: </b>{{ $summa }} so'm</p>
                <form method="POST" action="https://checkout.paycom.uz">
                    @csrf
                    <input type="hidden" name="merchant" value="65f14418a929127d44bcb5d1"/>
                    <input type="hidden" name="amount" value="{{ $summa2 }}"/>
                    <input type="hidden" name="account[onwer_id]" value="{{ Auth::user()->id }}"/>
                    <input type="hidden" name="lang" value="uz"/>
                    <input type="hidden" name="callback_timeout" value="15"/>
                    <button type="submit" class="btn btn-primary p-5 py-3"> <b>Payme</b> </button>
                </form>
            </div>
        </div>
</main>
@endsection