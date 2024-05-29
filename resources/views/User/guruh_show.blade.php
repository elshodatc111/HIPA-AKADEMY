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
        <div class="row">
            <div class="col-lg-4"> 
                <div class="card">
                    <img src="https://atko.tech/NiceAdmin/assets/img/cours.jpg" class="card-img-top">
                    <div class="card-body p-0">
                        <ul class="list-group" style="border-radius:0">
                            <h5 class="card-title w-100 text-center py-2 mb-0">{{ $Guruhs['guruh_name'] }}</h5>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kurs narxi:<span class="badge bg-primary rounded-pill">{{ $Guruhs['guruh_price'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dars vaqti:<span class="badge bg-primary rounded-pill">{{ $Guruhs['guruh_vaqt'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                O'qituvchi:<span class="badge bg-primary rounded-pill">{{ $Guruhs['techer'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Dars kunlari</h5>
                        @if($CountDates==13)
                            <table class="table table-bordered">
                                <tr>
                                    <td>{{ $GuruhTime[0]['dates'] }}</td>
                                    <td>{{ $GuruhTime[6]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[1]['dates'] }}</td>
                                    <td>{{ $GuruhTime[7]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[2]['dates'] }}</td>
                                    <td>{{ $GuruhTime[8]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[3]['dates'] }}</td>
                                    <td>{{ $GuruhTime[9]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[4]['dates'] }}</td>
                                    <td>{{ $GuruhTime[10]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[5]['dates'] }}</td>
                                    <td>{{ $GuruhTime[11]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td colspan=2>{{ $GuruhTime[12]['dates'] }}</td>
                                </tr>
                            </table>
                        @elseif($CountDates==24)
                            <table class="table table-bordered" style="font-size:14px">
                                <tr>
                                    <td>{{ $GuruhTime[0]['dates'] }}</td>
                                    <td>{{ $GuruhTime[8]['dates'] }}</td>
                                    <td>{{ $GuruhTime[16]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[1]['dates'] }}</td>
                                    <td>{{ $GuruhTime[9]['dates'] }}</td>
                                    <td>{{ $GuruhTime[17]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[2]['dates'] }}</td>
                                    <td>{{ $GuruhTime[10]['dates'] }}</td>
                                    <td>{{ $GuruhTime[18]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[3]['dates'] }}</td>
                                    <td>{{ $GuruhTime[11]['dates'] }}</td>
                                    <td>{{ $GuruhTime[19]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[4]['dates'] }}</td>
                                    <td>{{ $GuruhTime[12]['dates'] }}</td>
                                    <td>{{ $GuruhTime[20]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[5]['dates'] }}</td>
                                    <td>{{ $GuruhTime[13]['dates'] }}</td>
                                    <td>{{ $GuruhTime[21]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[6]['dates'] }}</td>
                                    <td>{{ $GuruhTime[14]['dates'] }}</td>
                                    <td>{{ $GuruhTime[22]['dates'] }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $GuruhTime[7]['dates'] }}</td>
                                    <td>{{ $GuruhTime[15]['dates'] }}</td>
                                    <td>{{ $GuruhTime[23]['dates'] }}</td>
                                </tr>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success') }}</div>
            @elseif (Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error') }}</div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Test Natijalari</h5>
                        @if($Tests=='true')
                            <a href="{{ route('GuruhShowTest',$id) }}" class="btn btn-success">Testni boshlash</a>
                        @elseif($Tests=='Natija')
                            <table class="table table-bordered text-center">
                                <tr>
                                    <th>Testlar Soni</th>
                                    <th>To'gri javob</th>
                                    <th>Noto'g'ri javob</th>
                                    <th>Ball</th>
                                    <th>Test vaqti</th>
                                </tr>
                                <tr>
                                    <td>{{ $Natija['savol_count'] }}</td>
                                    <td>{{ $Natija['tugri_count'] }}</td>
                                    <td>{{ $Natija['notugri_count'] }}</td>
                                    <td>{{ $Natija['ball'] }}</td>
                                    <td>{{ $Natija['created_at'] }}</td>
                                </tr>
                            </table>
                        @else
                            <p class="text-danger">{{ $Tests }} testni kundan boshlab yechish mumkun.</p>
                        @endif
                    </div>
                </div>
            </div>
          
        </div>
    </section>
</main>
@endsection