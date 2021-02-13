@extends('layouts.app')
@section('content')

<script>
    document.title = document.title + " | Passwort zurücksetzen";
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
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="modal-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <div class="h5 modal-title text-center">
                                                <h4 class="mt-2">
                                                    <div>neues Passwort anfordern</div>
                                                </h4>
                                            </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ihre E-Mail">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="modal-footer clearfix">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-primary btn-lg">anfordern</button>
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
