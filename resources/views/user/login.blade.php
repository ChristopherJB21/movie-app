@extends('layouts.master')
@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 bg-white rounded">
                    <div class="col-lg-12 py-5 px-2">
                        <div class="col-lg-12 p-3 text-center">
                            <a href={{ url('/') }}><img src="images/Logo.svg"></a>
                        </div>
                        <div class="col-lg-12 text-center">
                            <p class="h5">Login to your Account</p>
                        </div>
                        <div class="col-lg-12 text-center mt-3">
                            <form action="/login" method="post">
                                @csrf
                                @if (isset($error))
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                            aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            {{ $error }}
                                        </div>
                                    </div>
                                @endif
                                <div class="input-group px-0 py-2">
                                    <span class="input-group-text bg-purple input-purple">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </span>
                                    <input type="email"
                                        class="form-control input-purple @error('txtEmailAddress') is-invalid @enderror"
                                        name="txtEmailAddress" id="txtEmailAddress" placeholder="Email Address"
                                        value={{ old('txtEmailAddress') }}>
                                    <div class="invalid-feedback">
                                        @error('txtEmailAddress')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group px-0 pt-2">
                                    <span class="input-group-text bg-purple input-purple">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                        </svg>
                                    </span>
                                    <input type="password"
                                        class="form-control input-purple @error('txtPassword') is-invalid @enderror"
                                        name="txtPassword" id="txtPassword" placeholder="Password">
                                    <div class="invalid-feedback">
                                        @error('txtPassword')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 px-5">
                                    <button type="button" class="btn btn-link-purple">Forgot password?</button>
                                </div>
                                <div class="col-lg-12 text-center mt-3">
                                    <button type="submit" class="btn btn-purple m-1 px-3">Login</button>
                                    <a href={{ url('/register') }}><button type="button"
                                            class="btn btn-purple m-1 px-3">Register</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 bg-purple rounded">
                    <h1>test2</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
