@extends('layoutsSign.master')

@section('login')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-login">
                    <img src="{{ asset('admin/img/back.jpg') }}" class="img-fluid rounded-top" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="{{ route('register') }}" method="POST" class="user">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control form-control-user" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Name">
                                        @error('name')
                                            <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                                        @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email Address">
                                    @error('email')
                                        <div class="alert alert_danger" style="margin-top: 10px">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control form-control-user" name="password" required autocomplete="new-password"
                                        placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

