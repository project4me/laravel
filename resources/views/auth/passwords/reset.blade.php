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
                    <template>
                        <section>
                            <form method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">

                                <b-field
                                @if ($errors->has('email'))
                                type="is-danger"
                                message="{{ $errors->first('email') }}"
                                @endif>
                                    <b-input type="email"
                                        name="email"
                                        value="{{ $email or old('email') }}"
                                        icon-pack="fa"
                                        icon="envelope"
                                        placeholder="E-mail Address"
                                        required>
                                    </b-input>
                                </b-field>
                                <div class="columns">
                                    <div class="column">
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
                                    </div>
                                    <div class="column">
                                        <b-field
                                        @if ($errors->has('password_confirmation'))
                                        type="is-danger"
                                        message="{{ $errors->first('password_confirmation') }}"
                                        @endif>
                                            <b-input type="password"
                                                name="password_confirmation"
                                                icon-pack="fa"
                                                icon="check"
                                                placeholder="Comfirm Password"
                                                required>
                                            </b-input>
                                        </b-field>
                                    </div>
                                </div>

                                <b-field>
                                    <div class="control">
                                        <button class="button is-primary is-outlined is-fullwidth">Reset Password</button>
                                    </div>
                                </b-field>
                            </form>
                        </section>
                    </template>
                </div> <!-- end of .card-content -->
            </div> <!-- end of .card -->
        </div>
    </div>
</div>
@endsection
