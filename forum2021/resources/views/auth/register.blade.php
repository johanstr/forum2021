@extends('layouts.main')

@section('content')
<!-- BEGIN REGISTRATIE FORMULIER -->
<div class="col s6 push-s3">
    <div class="card">
        <div class="card-content">
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="title">Registreren</h1>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Username" name="name" type="text" class="validate" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="Username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Email" name="email" type="text" class="validate" value="{{ old('email') }}" required autocomplete="email">
                            <label for="Email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Password" type="password" name="password" class="validate"  required autocomplete="new-password">
                            <label for="Password">Wachtwoord</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Passwordconfirm" type="password" name="password_confirmation" class="validate"  required autocomplete="new-password">
                            <label for="Passwordconfirm">Wachtwoord bevestiging</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light right" type="submit" name="action">
                              Registreren
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- EINDE REGISTRATIE FORMULIER -->
@endsection
