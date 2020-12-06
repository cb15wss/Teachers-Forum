<!--About us page view-->

@extends('layouts.master') <!--Load up the nav bar and styles files-->
@section('title','About Page') <!--page title-->
@section('content')
    <section>
            <div class="container">
                <div class="text">

                   <div><h1>About Us</h1></div>
                     <div class="jumbotron">
                           <div><img class="thumbnail center-block" src="{{ asset('images/magister_about.png')}}" alt="teachers"></div>
                           <div><h2>Magister Teachers Forum</h2></div>
                            <p>Magister Teaching Forum helps teaching Professionals improve their teaching skills through feed-back. Not anyone is allowed to
                            have an account on Magister. It was developed for teaching professionals only</p>
                            <p>As a teaching profession, you can register on Magister and upload your teaching videos for other professionals to comment and rate your teaching skills.</p>
                    </div>
                </div>
            </div>
    </section>
@endsection
