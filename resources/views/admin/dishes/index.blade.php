@extends('layouts.admin')
@section('content')
    <div class="text-center">
        <h2>Piatti di {{ $restaurant->name }}</h2>
        <h3>Ciao {{ $user->name }}</h3>
    </div>


    @if (session('message'))
        <div class="alert alert-success w-25">
            {{ session('message') }}
        </div>
    @endif

    <a class="btn btn-warning my-2" href="{{ route('admin.dishes.create') }}">Aggiungi Nuovo Piatto</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Immagine</th>
                <th scope="col">Visibile</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dishes as $dish)
                <tr>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->price }}</td>
                    <td>{{ $dish->ingredients }}</td>
                    <td>
                        @if ($dish->description)
                            "{{ $dish->description }}"
                        @endif
                    </td>
                    @if (str_contains($dish->img, 'http'))
                        <td><img class="w-25" src="{{ $dish->img }}"
                                onerror="this.src='http://sulaindianrestaurant.com/wp-content/uploads/2013/07/menu-placeholder.gif'"
                                alt=""></td>
                    @elseif(!isset($dish->img))
                        <td><img class="w-25"
                                src="http://sulaindianrestaurant.com/wp-content/uploads/2013/07/menu-placeholder.gif"
                                alt="placeholder"></td>
                    @else
                        <td><img class="w-25" src="{{ asset("storage/$dish->img") }}" alt=""></td>
                    @endif
                    <td><?php if ($dish->visible == 1) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    } ?></td>
                    <td><a class="btn btn-warning" href="{{ route('admin.dishes.edit', $dish->slug) }}">Modifica</a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#ModalDelete{{ $dish->id }}" data-bs-toggle="popover"
                            title="Clicca qui per i cancellare" data-bs-trigger="hover">Cancella</a>
                    </td>
                    <!-- Delete Warning Modal -->

                    <div class="modal fade" id="ModalDelete{{ $dish->id }}" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="text-center">Sei sicuro di cancellare
                                        {{ $dish->name }}?
                                    </h5>
                                    <form action="{{ route('admin.dishes.destroy', $dish->slug) }}" method="POST"
                                        class="d-flex justify-content-center">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>
                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Delete Modal -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
