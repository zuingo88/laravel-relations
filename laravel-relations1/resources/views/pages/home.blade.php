@extends('layouts.main_layout')
@section('content')
    <div id="home">
        <div class="container">
            <div class="list_container">
                <h1>Cars</h1>
                <ul class="flex_wrap">
                    @foreach ($cars as $car)
                        <li>
                            <div class="card flex-col">
                                <h3>nome: {{ $car->name }} | modello: {{ $car->model }} | potenza: {{ $car->kw }} kw</h3>
                                <p>Brand: {{ $car->brand->name }} ({{ $car->brand->nation }})</p>

                                <div class="tasks flex_wrap">
                                    <p><i class="fas fa-user-friends"> Piloti ({{ $car->pilots->count() }})</i></p>
                                    <div class="task_list flex_col">
                                        @foreach ($car->pilots as $pilot)
                                            <a href="{{ route('pilot', $pilot->id) }}">
                                                <p>&#160;• {{ $pilot->firstname }} {{ $pilot->lastname }}&#160;</p>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
