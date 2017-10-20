@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">


                    <h2>Card Registration</h2>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-xs-6 form-left">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-xs-8 col-xs-offset-2">Name*</label>

                                <div class="col-xs-5 col-xs-offset-2">
                                    <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-xs-5">
                                    <input id="lastname" type="text" class="form-control" placeholder="Lastname" name="lastname" value="{{ old('lastname') }}" required>

                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-8 col-xs-offset-2">E-Mail Address*</label>

                                <div class="col-xs-10 col-xs-offset-2">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-8 col-xs-offset-2">Password*</label>

                                <div class="col-xs-10 col-xs-offset-2">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-8 col-xs-offset-2">Confirm Password*</label>

                                <div class="col-xs-10 col-xs-offset-2">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <!--Passport number-->
                            <div class="form-group{{ $errors->has('passport') ? ' has-error' : '' }}">
                                <label for="passport" class="col-md-8 col-xs-offset-2">Passport Number*</label>

                                <div class="col-xs-10 col-xs-offset-2">
                                    <input id="passport" type="password" class="form-control" name="passport" required>

                                    @if ($errors->has('passport'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('passport') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                                <label for="durationstart" class="col-xs-8 col-xs-offset-2">Duration*</label>

                                <div class="col-xs-5 col-xs-offset-2">
                                    <input id="durationstart" type="date" class="form-control" placeholder="Start" name="durationstart" required>

                                    @if ($errors->has('durationstart'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('durationstart') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-xs-5">
                                    <input id="durationend" type="date" class="form-control" placeholder="End" name="durationend" required>

                                    @if ($errors->has('durationend'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('durationend') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>



                        <div class="col-xs-6">

                            <!--Card number-->
                            <div class="form-group{{ $errors->has('cardnumber') ? ' has-error' : '' }}">
                                <label for="cardnumber" class="col-md-8">Card Number*</label>

                                <div class="col-xs-10">
                                    <input id="cardnumber" type="text" class="form-control" name="cardnumber" required>

                                    @if ($errors->has('cardnumber'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cardnumber') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group col-xs-10 cardContainer">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- a Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors -->
                                <div id="card-errors" role="alert"></div>
                            </div>


                            <!-- Street -->
                            <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                                <label for="street" class="col-md-8">Street*</label>

                                <div class="col-xs-10">
                                    <input id="street" type="text" class="form-control" name="street" required>

                                    @if ($errors->has('street'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Country -->
                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                <label for="country" class="col-md-8">Country*</label>

                                <div class="col-xs-10">
                                    <input id="country" type="text" class="form-control" name="country" required>

                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Phone number -->
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-8">Phone number*</label>

                                <div class="col-xs-10">
                                    <input id="phone" type="text" class="form-control" name="phone" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- Additional Phone number -->
                            <div class="form-group{{ $errors->has('phonesecond') ? ' has-error' : '' }}">
                                <label for="phonesecond" class="col-md-8">Additional Phone number*</label>

                                <div class="col-xs-10">
                                    <input id="phonesecond" type="text" class="form-control" name="phonesecond" required>

                                    @if ($errors->has('phonesecond'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phonesecond') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center registerBtn">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
