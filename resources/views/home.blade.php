@extends('layouts.app')

@section('title', 'Trains')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Trains</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Azienda</th>
                        <th>Stazione Di Partenza</th>
                        <th>Stazione Di Arrivo</th>
                        <th>Orario Di Arrivo</th>
                        <th>Orario Di Partenza</th>
                        <th>Numero Vagoni</th>
                        <th>In Orario</th>
                        <th>Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->wagons_number }}</td>
                            <td>{{ $train->on_time }}</td>
                            <td>{{ $train->cancelled }}</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {{ $trains->links() }}
        </div>
    </section>
@endsection
