@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Flymanager Laravel 9 CRUD</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('passager/create') }}">Ajouter</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            {{-- <th>No</th> --}}
            <th>Nom</th>
            <th>Prenom</th>
            <th>Vol</th>
            <th>Numero</th>
            <th>Email</th>
            <th>Reservation</th>
            <th>Actions</th>

        </tr>

        @foreach ($passagers as $passager)

            <tr>
                {{-- <td>{{ $index }}</td> --}}
                <td>{{ $passager->nom }}</td>
                <td>{{ $passager->prenom }}</td>
                <td>{{ $passager->num }}</td>
                <td>{{ $passager->email }}</td>
                <td>{{ $passager->vol_id }}</td>
                <td>{{ $passager->reservation_id }}</td>
                <td>

                    <form action="{{ url('personnage/'. $passager->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('personnage/'. $passager->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('personnage/'. $passager->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection
