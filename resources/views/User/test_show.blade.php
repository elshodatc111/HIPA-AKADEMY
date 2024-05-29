@extends('User.layout.app')
@section('title',"Guruh")
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Guruh</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('User') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('Guruhlar') }}">Guruhlarim</a></li>
                <li class="breadcrumb-item active">Guruh</li>
            </ol>
        </nav>
    </div> 
    <section class="section dashboard"> 
        <form action="{{ route('GuruhShowTestCheck') }}" method="post">
            @csrf 
            <input type="hidden" name="guruh_id" value="{{ $guruh_id }}">
            <input type="hidden" name="TestCount" value="{{ $TestCount }}">
            <div class="row">
                @forelse($Testlar as $key => $item)
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['Savol'] }}</h5>
                            @switch($key%4)
                                @case(0)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="D11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="D11{{ $key }}">{{ $item['NJavob1'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="C11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="C11{{ $key }}">{{ $item['NJavob2'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="B22{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="B22{{ $key }}">{{ $item['NJavob3'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="A11{{ $key }}" value="true" required>
                                        <label class="form-check-label" for="A11{{ $key }}">{{ $item['TJavob'] }}</label>
                                    </div>
                                    @break
                                @case(1)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="D11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="D11{{ $key }}">{{ $item['NJavob1'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="A11{{ $key }}" value="true" required>
                                        <label class="form-check-label" for="A11{{ $key }}">{{ $item['TJavob'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="C11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="C11{{ $key }}">{{ $item['NJavob2'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="B22{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="B22{{ $key }}">{{ $item['NJavob3'] }}</label>
                                    </div>
                                    @break
                                @case(2)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="D11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="D11{{ $key }}">{{ $item['NJavob1'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="C11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="C11{{ $key }}">{{ $item['NJavob2'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="B22{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="B22{{ $key }}">{{ $item['NJavob3'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="A11{{ $key }}" value="true" required>
                                        <label class="form-check-label" for="A11{{ $key }}">{{ $item['TJavob'] }}</label>
                                    </div>
                                    @break
                                @case(3)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="A11{{ $key }}" value="true" required>
                                        <label class="form-check-label" for="A11{{ $key }}">{{ $item['TJavob'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="D11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="D11{{ $key }}">{{ $item['NJavob1'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="C11{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="C11{{ $key }}">{{ $item['NJavob2'] }}</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="test_id{{ $key }}" id="B22{{ $key }}" value="false" required>
                                        <label class="form-check-label" for="B22{{ $key }}">{{ $item['NJavob3'] }}</label>
                                    </div>
                                    @break
                            @endswitch
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"><h5 class="card-title">Testlar mavjud emas.</h5></div>
                        </div>
                    </div>
                @endforelse

                @if($TestCount!=0)
                <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary w-50">Tekshirish</button>
                </div>
                @endif
            </div>
        </form>
    </section>
</main>
@endsection