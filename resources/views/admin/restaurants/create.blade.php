@extends('layouts.app')
@section('content')
    <?php 
    if($user && $restaurant) {
        ?>
    <script type="text/javascript">
        window.history.go(-1);
    </script>
    <?php
        return redirect('');
    }
    ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inserisci il tuo ristorante') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.restaurants.store') }}" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="mb-4 row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nome del ristorante*') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo*') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Descrizione') }}</label>
                                <label for="description" class="form-label"></label>
                                <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descrizione ristorante">{{ old('description') }}</textarea>
                            </div>

                            <img id="output" width="100" class="mb-2" />
                            <div class="mb-3">
                                <label for="img" class="form-label">Immagine del ristorante</label>
                                <input type="file" class="form-control @error('img') is-invalid @enderror" id="img"
                                    name="img" value="{{ old('img') }}" onchange="loadFile(event)">
                            </div>
                            @error('img')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror

                            <div class="mb-4 row">
                                <label for="vat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Partita Iva*') }}</label>

                                <div class="col-md-6">
                                    <input id="vat" type="text"
                                        class="form-control @error('vat') is-invalid @enderror" name="vat"
                                        value="{{ old('vat') }}" required autocomplete="vat" autofocus>

                                    @error('vat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="opening_time"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Orario di apertura*') }}</label>

                                <div class="col-md-6">
                                    <input id="opening_time" type="time"
                                        class="form-control @error('opening_time') is-invalid @enderror" name="opening_time"
                                        value="{{ old('opening_time') }}" required autocomplete="opening_time" autofocus>

                                    @error('opening_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="closing_time"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Orario di chiusura*') }}</label>

                                <div class="col-md-6">
                                    <input id="closing_time" type="time"
                                        class="form-control @error('closing_time') is-invalid @enderror" name="closing_time"
                                        value="{{ old('closing_time') }}" required autocomplete="opening_time" autofocus>

                                    @error('closing_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="phone_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono*') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text"
                                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                        value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="price_shipping"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Costo di spedizione*') }}</label>

                                <div class="col-md-6">
                                    <input id="price_shipping" type="number" step=".01"
                                        class="form-control @error('price_shipping') is-invalid @enderror"
                                        name="price_shipping" value="{{ old('price_shipping') }}" required
                                        autocomplete="price_shipping" autofocus>

                                    @error('price_shipping')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    </div>


                    <div class="mb-3">
                        <label for="categories[]"
                            class="col-md-4 col-form-label text-md-right d-block">{{ __('Seleziona una o più categorie*') }}</label>
                        @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="{{ $category->slug }}"
                                    name="categories[]" value="{{ $category->id }}"
                                    {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                                <label for="{{ $category->slug }}"
                                    class="form-check-label">{{ $category->name }}</label>
                            </div>
                        @endforeach
                        {{-- <label for="category_id" class="form-label">Categoria</label> --}}
                        {{-- <input type="checkbox" value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}>  --}}
                        {{-- <select class="form-select" name="category_id" id="category_id">
                            <option value="">Senza Categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select> --}}
                    </div>


                    <div class="mb-4 row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Crea ristorante') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
