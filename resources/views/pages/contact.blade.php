<!--Contact page view-->
@extends('layouts.master')
@section('title','Contact')
@section('content')
    <section>

        <!-- Contact page-->
            <div class="container">
                <header class="mb-5">
                    <h1 class="heading-line">Contacting Magister</h1>
                </header>

                    <div class="col-md-4">
                        <div class="contact-icon">
                            <div class="icon icon-051-message"></div>
                        </div>
                        <h3>Send an Email to:</h3>
                        <div class="container">
                           <p><strong><a href="mailto:">support@boltonbling.com</a></strong></p>
                        </div>

                        <p>Fill and Send the contact form below:</p>
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <form id="contact-form" method="post" action="#" class="custom-form form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Your firstname *</label>
                                            <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="surname">Your lastname *</label>
                                            <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Your email *</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="message">Your message for us *</label>
                                    <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                                </div>
                                <input type="submit" value="Send message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
