@extends('layouts.admin')

@section('content')
    {{-- <?php
    dd($orders[0]->price);
    ?> --}}
    <section class="statistics">
        <?php
        $sum = 0;
        ?>
        @foreach ($orders as $order)
            <?php
            $sum += $order->price;
            ?>
        @endforeach
        <div class="cashed text-center"><span>Totale incassi: <b>{{ $sum }}€</b></span></div>
        <div class="graph text-center"><a href="{{ route('admin.chart') }}">Vai al grafico mensile</a></div>
    </section>
    <section class="info d-flex justify-content-center">

        <div class="left col-6 text-center">
            <h1>{{ $restaurant->name }}</h1>
            @if ($restaurant->img)
                @if (str_contains($restaurant->img, 'http'))
                    <img class="w-50 my-3" src="{{ $restaurant->img }}"
                        onerror="this.src='https://nagrannar.is/images/restaurant-placeholder.png'"
                        alt="{{ $restaurant->name }}">
                @else
                    <img class="w-25 my-3" src="{{ asset("storage/$restaurant->img") }}" alt="{{ $restaurant->name }}">
                @endif
            @endif
        </div>
        <div class="right col-6">
            <table class="table table-bordered w-75 mt-3">
                <tbody>
                    <tr>
                        <th scope="row">Nome</th>
                        <td>{{ $restaurant->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Indirizzo</th>
                        <td>{{ $restaurant->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Telefono</th>
                        <td>{{ $restaurant->phone_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Orario apertura e chiusura</th>
                        <td>{{ $restaurant->opening_time }} - {{ $restaurant->closing_time }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Costo di spedizione</th>
                        <td>{{ $restaurant->price_shipping }}€</td>
                    </tr>
                    @if ($restaurant->description)
                        <tr>
                            <th scope="row">Descrizione</th>
                            <td>"{{ $restaurant->description }}"</td>
                        </tr>
                    @endif
                    <tr>
                        <th scope="row">Categorie</th>
                        <td>
                            @foreach ($category_pivot as $pivot_element)
                                @if ($restaurant->id == $pivot_element->restaurant_id)
                                    @foreach ($categories as $category)
                                        @if ($category->id == $pivot_element->category_id)
                                            {{ $category->name }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="orders">
        <table class="table w-50 mt-3">
            <h2 class="ms-5">Ordini ricevuti</h2>
            <tbody>
                <?php
                end($orders);
                ?>
                @foreach ($orders->reverse() as $order)
                    <div class="card m-3 shadow">

                        <div class="card-body row">
                            <div class="col-md-6">
                                <h4>Ordine n. {{ $order->code }}</h4>
                                <hr>
                                <p class="card-title">Nome e Cognome: {{ $order->firstname }},
                                    {{ $order->lastname }}
                                </p>
                                <p class="card-title">Indirizzo: {{ $order->address }}</p>

                                <p class="card-title">Telefono: {{ $order->phone_number }}</p>
                                <p class="card-title">Email: {{ $order->email }}</p>
                                <p class="card-title">Totale: €{{ $order->price }}</p>

                                @if ($order->additiona_info)
                                    <p class="card-title">Note: {{ $order->additiona_info }}</p>
                                @else
                                    <p> Non sono state inserite note </p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h4 class="mt-md-0 mt-3">Piatti ordinati</h4>
                                <hr>
                                {{-- foreach piatti ordinati --}}
                                <div>
                                    @foreach ($order->dishes as $dish)
                                        <p class="card-title">{{ $dish->pivot->quantity }}x {{ $dish->name }} -
                                            €{{ $dish->pivot->quantity * $dish->price }}</p>
                                        <div class="md-0">
                                        </div>
                                    @endforeach
                                    <div class="col-md-6">
                                        <hr>
                                        <h4>Data dell'ordine: </h4>
                                        <p class="card-title">{{ $order->order_date }}</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
