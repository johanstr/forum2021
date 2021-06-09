@extends('layouts.main')

@section('content')
<div class="col s6 push-s3">

    <!-- BEGIN LOGIN FORMULIER -->
    <div class="card">
        <div class="card-content">
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="title">Aanmelden</h1>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Email" name="email" type="text" class="validate" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="Email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="Password" type="password" name="password" class="validate"  required autocomplete="current-password">
                            <label for="Password">Wachtwoord</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light right" type="submit" name="action">
                              Aanmelden
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- EINDE LOGIN FORMULIER -->

</div>

@endsection
