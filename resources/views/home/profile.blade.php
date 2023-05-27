@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column justify-content-center mt-5">
        <div class="container">
            <div class="col-lg-12 bg-white rounded">
                <div class="col-lg-12">
                    <div class="col-lg-12 p-3 text-center">
                        <a href={{ url('/') }}><img src="images/Logo.svg"></a>
                    </div>
                    <div class="col-lg-12 text-center">
                        <p class="h5">Update Your Profile</p>
                    </div>
                    <div class="col-lg-12 text-center mt-3">
                        <form action="/profile" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group px-5 py-3">
                                        <span class="input-group-text input-purple bg-purple">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                        </span>
                                        <input type="text"
                                            class="form-control input-purple @error('txtFirstName') is-invalid @enderror"
                                            name="txtFirstName" id="txtFirstName" placeholder="First Name"
                                            value="{{ old('txtFirstName', $user->first_name) }}">
                                        <div class="invalid-feedback">
                                            @error('txtFirstName')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-group px-5 py-3">
                                        <span class="input-group-text input-purple bg-purple">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </span>
                                        <input type="tel"
                                            class="form-control input-purple @error('txtPhoneNumber') is-invalid @enderror"
                                            name="txtPhoneNumber" id="txtPhoneNumber" placeholder="Phone Number"
                                            value="{{ old('txtPhoneNumber', $user->phone_number) }}">
                                        <div class="invalid-feedback">
                                            @error('txtPhoneNumber')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-group px-5 py-3">
                                        <span class="input-group-text input-purple bg-purple">
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
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group px-5 py-3">
                                        <span class="input-group-text input-purple bg-purple">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                        </span>
                                        <input type="text"
                                            class="form-control input-purple @error('txtLastName') is-invalid @enderror"
                                            name="txtLastName" id="txtLastName" placeholder="Last Name"
                                            value={{ old('txtLastName', $user->last_name) }}>
                                        <div class="invalid-feedback">
                                            @error('txtLastName')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-group px-5 py-3">
                                        <span class="input-group-text input-purple bg-purple">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                            </svg>
                                        </span>

                                        <input type="email"
                                            class="form-control input-purple @error('txtEmailAddress') is-invalid @enderror"
                                            name="txtEmailAddress" id="txtEmailAddress" placeholder="Email Address"
                                            value={{ old('txtEmailAddress', $user->email) }}>

                                        <div class="invalid-feedback">
                                            @error('txtEmailAddress')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-group px-5 py-3">
                                        <span class="input-group-text input-purple bg-purple">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                            </svg>
                                        </span>
                                        <input type="password"
                                            class="form-control input-purple @error('txtConfirmPassword') is-invalid @enderror"
                                            name="txtConfirmPassword" id="txtConfirmPassword"
                                            placeholder="Confirm Password">
                                        <div class="invalid-feedback">
                                            @error('txtConfirmPassword')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center my-3">
                                    <button type="submit" class="btn btn-purple m-1 px-5">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
