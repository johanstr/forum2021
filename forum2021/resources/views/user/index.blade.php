@extends('layouts.main')

@section('content')
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Gebruikerbeheer</span>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Mail</th>
                            <th>Admin?</th>
                            <th>Acties</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                {{ $user->admin ? 'Ja' : 'Nee' }}
                            </td>
                            <td>
                                Edit Delete
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
