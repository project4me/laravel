@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Join the Community
                    </p>
                </header>
                <div class="card-content">
                    <template>
                        <section>
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <b-field
                                @if ($errors->has('name'))
                                type="is-danger"
                                message="{{ $errors->first('name') }}"
                                @endif>
                                    <b-input type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        icon-pack="fa"
                                        icon="user"
                                        placeholder="Name"
                                        required>
                                    </b-input>
                                </b-field>

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
                                        <b-field>
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
                                        <button class="button is-primary is-outlined is-fullwidth">Register</button>
                                    </div>
                                </b-field>
                            </form>
                        </section>
                    </template>
                </div> <!-- end of .card-content -->
            </div> <!-- end of .card -->

            <h5 class="has-text-centered m-t-10"><a href="{{ route('login') }}" class="is-muted">Already have an Account?</a></h5>
        </div>
    </div>
</div>
@endsection
