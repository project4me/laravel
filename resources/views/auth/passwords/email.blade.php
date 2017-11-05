@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Reset Password
                    </p>
                </header>
                <div class="card-content">
                    @if (session('status'))
                    <div class="notification is-success">
                        <button class="delete"></button>
                        {{ session('status') }}
                    </div>
                    @endif
                    <template>
                        <section>
                            <form method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <b-field
                                @if ($errors->has('email'))
                                type="is-danger"
                                message="{{ $errors->first('email') }}"
                                @endif>
                                    <b-input type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        icon-pack="fa"
                                        icon="envelope"
                                        placeholder="Email"
                                        required>
                                    </b-input>
                                </b-field>

                                <b-field>
                                    <div class="control">
                                        <button class="button is-primary is-outlined is-fullwidth">Send Password Reset Link</button>
                                    </div>
                                </b-field>
                            </form>
                        </section>
                    </template>
                </div> <!-- end of .card-content -->
            </div> <!-- end of .card -->

            <h5 class="has-text-centered m-t-10"><a href="{{ route('login') }}" class="is-muted">Back to Login</a></h5>
        </div>
    </div>
</div>
@endsection
