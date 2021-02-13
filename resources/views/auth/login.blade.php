@extends('layouts.app')
@section('content')

<script>
    document.title = document.title + " | Login";
</script>

    <body class="gr-background">
        <div class="app-container body-tabs-shadow">
            <div class="app-container">
                <div class="h-100 bg-animation">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <div class="mx-auto app-login-box col-md-8">
                            <div class="app-logo-inverse mx-auto mb-3"></div>
                            <div class="modal-dialog w-100 mx-auto">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('login') }}">
                                        <div class="modal-body">
                                            <div class="h5 modal-title text-center">
                                                <h4 class="mt-2">
                                                    <div>Willkommen zurück</div>
                                                </h4>
                                            </div>
                                                @csrf
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail..." autofocus>
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" Placeholder="Passwort...">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="position-relative form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">angemeldet bleiben</label>
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer clearfix">
                                                <div class="float-left">
                                                    <a href="{{ route('password.request') }}" class="btn-lg btn btn-link">Passwort vergessen</a>
                                                </div>
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-primary btn-lg">anmelden</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <div class="text-center text-white opacity-8 mt-3">Copyright © Gemüsering 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection 