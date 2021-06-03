@extends('layouts.main_layout')
@section('content')
    <div id="create">
        <div class="container flex_col align_cen">
            <h1>Crea Nuova Auto</h1>

            <form class="form_container flex_col" action="{{ route('store') }}" method="post">

                @csrf
                @method('POST')

                <div class="label_row flex">
                    <label for="name">Nome: </label>
                    <input type="text" name="name" id="name" placeholder="Inserisci il nuovo Nome" required>
                </div>

                <div class="label_row flex">
                    <label for="model">Modello: </label>
                    <input type="text" name="model" id="model" placeholder="Inserisci il nuovo Modello" required>
                </div>

                <div class="label_row flex">
                    <label for="kw">Potenza: </label>
                    <input type="number" name="kw" id="kw" placeholder="Inserisci la Potenza" required>
                </div>

                <div class="label_row flex">
                    <label for="brand_id">Brand: </label>
                    <select name="brand_id" id="brand_id" required>
                        <option selected disabled>- Scegli un Brand -</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }} ({{ $brand->nation }})</option>
                        @endforeach
                    </select>
                </div>
                <input class="new" type="submit" value="INSERISCI">
            </form>
        </div>
    </div>
    </div>
@endsection
