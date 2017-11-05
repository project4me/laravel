@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Login
                    </p>
                </header>
                <div class="card-content">
                    <template>
                        <section>
                            <form method="POST" action="{{ route('login') }}">
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
                                        placeholder="E-mail Address"
                                        required>
                                    </b-input>
                                </b-field>

                                <b-field
                                @if ($errors->has('password'))
                                type="is-danger"
                                message="{{ $errors->first('password') }}"
                                @endif>
                                    <b-input type="password"
                                        name="password"
                                        icon-pack="fa"
                                        icon="key"
                                        placeholder="Password"
                                        password-reveal
                                        required>
                                    </b-input>
                                </b-field>

                                <b-field>
                                    <div class="control">
                                        <b-checkbox name="remember">Remember Me</b-checkbox>
                                    </div>
                                </b-field>

                                <b-field>
                                    <div class="control">
                                        <button class="button is-primary is-outlined is-fullwidth">Login</button>
                                    </div>
                                </b-field>
                            </form>
                        </section>
                    </template>
                </div> <!-- end of .card-content -->
            </div> <!-- end of .card -->

            <h5 class="has-text-centered m-t-10"><a href="{{ route('password.request') }}" class="is-muted">Forgot Your Password?</a></h5>
        </div>
    </div>
</div>
@endsection
