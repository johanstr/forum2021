@extends('layouts.main')

@section('content')
    <!-- hier komt het contact formulier -->
        <div class="card">
            <div class="card-content">
                <span class="card-title">Profiel</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Persoonlijke gegevens</span>
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ $user->name }}"
                                    placeholder="Tik hier je gebruikersnaam in">
                                <label for="name" class="active">Gebruikersnaam</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ $user->email }}"
                                    placeholder="Tik hier je email adres in">
                                <label for="email" class="active">E-mail</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <button type="submit" class="btn right cyan darken-1">
                                    Bewaren
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Wachtwoord aanpassen</span>
                    <form method="POST" action="{{ route('profile.update.password') }}">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" placeholder="Tik hier je nieuw wachtwoord in">
                                <label for="password" class="active">Wachtwoord</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Tik hier ter controlle opnieuw het wachtwoord in">
                                <label for="password_confirmation" class="active">Wachtwoord bevestiging</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <button type="submit" class="btn right red darken-1">
                                    Bewaren
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

@endsection
