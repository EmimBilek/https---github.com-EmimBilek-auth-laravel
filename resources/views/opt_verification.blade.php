@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h3 class="mt-5 text-center text-info">Email Verification</h3>

                <div class="alert alert-info" role="alert">
                    We just sent OTP code to your email, please check your email to see your OTP code!
                    <div class="text-danger mt-2">Don't receive email?
                        <span>
                            <a href="{{ route('resendotp') }}" class="btn btn-link px-1 mb-1">Re-send email</a>
                        </span>
                    </div>
                </div>

                @if (session('activated'))
                    <div class="alert alert-success" role="alert">
                        {{ session('activated') }}
                    </div>
                @endif
                @if (session('incorrect'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('incorrect') }}
                    </div>
                @endif
                @if (session('resend'))
                    <div class="alert alert-info" role="alert">
                        {{ session('resend') }}
                    </div>
                @endif


                <form action="{{ route('verifyotp') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Enter OTP</label>
                        <input type="text" autocomplete="off" id="token" name="token" class="form-control"
                            placeholder="Enter Token">
                    </div>
                    <button type="submit" class="btn btn-info mt-3 offset-md-10">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
