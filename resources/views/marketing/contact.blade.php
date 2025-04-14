@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <section class="section" id="contact">
        <div class="container">
            @include('partials.alerts')
            <div class="row mb-4 mt-5">
                <div class="col-lg-10 offset-lg-1">
                    <h5>We would love to connect with you?</h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        Tell us how <span class="font-weight-normal">we can help</span>
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5">
                        Moving can be tricky, whether is up the road or across the country it helps to have a professional by your side.
                    </p>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <!-- Contacts Form -->
                    <form class="contact_form" action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <x-honeypot/>
                        <div class="row">
                            <!-- Input -->
                            <div class="col-md-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" placeholder="John Doe" type="text" value="{{ old('name') }}">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your Current Housing Status
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" name="status" aria-label="Default select example">
                                        <option value="">-- Select Option --</option>
                                        @if(old('status'))
                                            <option value="{{ old('status') }}" selected>{{ ucfirst(old('status')) }}</option>
                                        @endif
                                        <option value="own">Own</option>
                                        <option value="rent">Rent</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-md-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" placeholder="john.doe@domain.com" type="email" value="{{ old('email') }}">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your Phone Number
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" id="phone" name="phone" placeholder="321-555-1234" type="text" value="{{ old('phone') }}">
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="w-100"></div>


                            <!-- Input -->
                            <div class="col-md-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Current Zip Code
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="current_zip_code" id="current_zip_code" placeholder="12345" type="text" value="{{ old('current_zip_code') }}">
                                    </div>
                                    @if ($errors->has('current_zip_code'))
                                        <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('current_zip_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-md-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Where are we moving to?
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="moving_to_city" id="moving_to_city" placeholder="Orlando, FL" type="text" value="{{ old('moving_to_city') }}">
                                    </div>
                                    @if ($errors->has('moving_to_city'))
                                        <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('moving_to_city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                Tell us about your relocation needs?
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="8" name="message" id="message"
                                          placeholder="Hi there, I would like to get more information about...">{{ old('message') }}</textarea>
                            </div>
                            @if ($errors->has('message'))
                                <span class="help-block small text-danger">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <!-- End Input -->

                        <div class="">
                            <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send">

                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>
            </div>
        </div>
    </section>

@endsection
