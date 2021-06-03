@extends('layouts.main_layout')
@section('content')
    <div id="show">
        <div class="container">
            <h1>Pilot's Page</h1>
            <h2>{{ $pilot->firstname }} {{ $pilot->lastname }}</h2>
            <p>Nato/a il {{ $pilot->date_of_birth }} in <b>{{ $pilot->nation }}</b></p>

            <div class="car_list">
                <h2>Le sue auto ({{ $pilot->cars->count() }}) 
                    @for ($i = 0; $i < $pilot->cars->count(); $i++)
                        <i class="fas fa-car"></i>
                    @endfor
                </h2>
                <ul class="flex_wrap">
                    @foreach ($pilot->cars as $car)
                        <li>
                            <div class="car">
                                <h4>Nome: {{ $car->name }}</h4>
                                <h5>Modello: {{ $car->model }}</h5>
                                <p>Potenza: {{ $car->kw }} KW</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    </div>
@endsection