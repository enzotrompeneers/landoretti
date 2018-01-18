@extends('layouts.master')

@section('content')
    @include('includes.navigation')
    @include('includes.spotlight')

    <section class="request">
        <div class="container">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('lander') }}">Home</a></li>
                    <li><a href="#">Auctions</a></li>
                    <li><a href="#">Salvador Dali</a></li>
                    <li><span class="show-for-sr">Current: </span>Dance of Time III</li>
                </ul>
            </nav>

            <h1>Register</h1>

            <form method="POST" action="{{ route('register') }}" data-abide novalidate>
            {{ csrf_field() }}

                <div data-abide-error class="alert callout" style="display: none;">
                    <ul class=error-list>
                        <li class="form-error" data-form-error-for="name">Please fill in the company or name</li>
                        <li class="form-error" data-form-error-for="email">Please fill in an existing Email Address</li>
                        <li class="form-error" data-form-error-for="unhashed-password">Please fill in a password</li>
                        <li class="form-error" data-form-error-for="confirmation">Please re-enter the password</li>
                        <li class="form-error" data-form-error-for="zip-code">Please fill in the zip code</li>
                        <li class="form-error" data-form-error-for="city">Please fill in the city</li>
                        <li class="form-error" data-form-error-for="address">Please fill in the address</li>
                        <li class="form-error" data-form-error-for="country-code">Please fill in the country code of your phone number</li>
                        <li class="form-error" data-form-error-for="phone-number">Please fill in the phone number</li>
                        <li class="form-error" data-form-error-for="account-number">Please fill in the account number</li>
                        <li class="form-error" data-form-error-for="vat-number">Please fill in the VAT-Number</li>
                    </ul>
                </div>

                <div class="grid-container">
                    <div class="grid-x ">
                        <div class="medium-6 cell gutter">
                            <label for="name">Company or name?</label>
                            <input type="text" name="name" id="name" placeholder="Studio 6" required pattern="[a-zA-Z\s]+">
                        </div>

                        <div class="medium-6 cell">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="name@provider.com" required pattern="email">
                        </div>

                         <div class="medium-6 cell gutter">
                            <label for="unhashed-password">Password</label>
                            <input type="password" name="unhashed-password" id="unhashed-password" placeholder="password" required pattern="^(?=.*[0-9])(?=.*[a-z]).{6,}$">
                        </div>

                         <div class="medium-6 cell">
                            <label for="confirmation">Password Confirmation</label>
                            <input type="password" name="confirmation" id="confirmation" placeholder="password" required pattern="^(?=.*[0-9])(?=.*[a-z]).{6,}$" data-equalto="unhashed-password">
                        </div>

                        <div class="medium-6 cell gutter">
                            <label for="country">Country</label>
                                <select>
                                    <option value="belgium">Belgium</option>
                                    <option value="uk">UK</option>
                                    <option value="usa">USA</option>
                                    <option value="germany">Germany</option>
                                    <option value="france">France</option>
                                </select>
                            </label>
                        </div>

                        <div class="medium-3 cell gutter">
                            <label for="zip-code">Zip Code</label>
                            <input type="text" name="zip-code" id="zip-code" placeholder="8400" required pattern="number">
                        </div>

                        <div class="medium-3 cell">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" placeholder="Oostende" required pattern="[a-zA-Z\s]+">
                        </div>

                        <div class="medium-6 cell gutter">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Zuidstraat 15 C4" required pattern="[a-zA-Z\s]+">
                        </div>

                        <div class="medium-6 cell">
                            <label for="country-code">Phone Number</label>
                            <input type="text" class="country-code" name="country-code" id="country-code" placeholder="+ 32" required>
                            <input type="text" class="phone-number" name="phone-number" id="phone-number" placeholder="XX XXX XX XX" required patterm="number">
                        </div>

                        <div class="medium-6 cell gutter">
                            <label for="account-number">Account Number</label>
                            <input type="text" name="account-number" id="account-number" placeholder="XX XXX XX XX" required pattern="number">
                        </div>

                        <div class="medium-6 cell">
                            <label for="vat-number">VAT-Number</label>
                            <input type="text" name="vat-number" id="vat-number" placeholder="XX XXX XX XX" required pattern="number">
                        </div>

                        <div class="cell">
                            <label for="payment">Alternative payment methods</label>
                            <input type="text" name="payment" id="payment" placeholder="Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim">
                        </div>

                        <div class="cell terms">
                              <input id="terms-accepted" type="checkbox" name="terms">
                              <p for="terms-accepted" required>I Agree to <span>The Terms & Conditions</span></p>
                        </div>

                        <div class="cell">
                            <button type="submit" class="btn-register" name="submit" id="submit" value="submit">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop