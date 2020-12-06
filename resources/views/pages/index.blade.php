<!--This is the Landing page view-->
@extends('layouts.master') <!--This contains the header navigation and bootstrap styling sources-->
<title>Index</title> <!--Page title-->
    @section('content') <!--All page contents-->
        <section>
            <div class="container">
                <h1>Welcome to Magister</h1>
                <header class="box box-primary">
                    <div class="box-body">
                        <p>Magister is a video interactive website that help teaching professionals improve their teaching skills.
                        </p>

                        <p>As a teaching profession, you can register on Magister and upload your teaching videos for other
                            professionals to comment and rate your teaching skills.
                        </p>

                        <p>If you do not have an account register today through the Register button at the top on this page.
                        </p>
                        <p>If you already have an account please log in.
                        </p>
                        <p><a href="/register" class="btn btn-primary btn-large">Register to Visit The Forum</a> <!--Link to the registration page-->

                        <p><a href="/login" class="btn btn-primary btn-large">Already Registered? LOGIN </a> <!--Link to the Login page-->
                        </p>
                    </div>
                </header>
                <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Education News</h3>
                            </div>
                        </div>
                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="{{ asset('images/christine.jpg')}}" alt="christine">
                        <div class="caption">
                            <h3>UNIVERSITY OF BOLTON STUDENT’S ‘OUTSTANDING’ HONOUR</h3>
                            <p>She was one of five students from universities in the UK to be named as a
                                finalist in the Worshipful Company of Information Technologists
                                (WCIT) Outstanding Information Technology Student Awards.</p>
                            <p>
                                <a href="https://www.theboltonnews.co.uk/news/17591365.first-class-result-
                                    for-single-mum-of-four-who-came-to-bolton-to-start-a-new-life/" class="btn btn-primary">More Info</a>
                            </p>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="{{ asset('images/news1.jpg')}}" alt="teacher news">
                            <div class="caption">
                                <h3>Teacher Shortage Crisis</h3>
                                <p>A new report examines the multipronged problem of teacher supply and demand</p>
                                <p>
                                    <a href="https://www.usnews.com/news/articles/2016-09-14/the-teacher-shortage-crisis-is-here" class="btn btn-primary">More
                                        Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="{{ asset('images/news2.jpg')}}" alt="teacher news">
                            <div class="caption">
                                <h3>Troubling patterns of teacher assignments</h3>
                                <p>A study reveals how high-achieving
                                    students tend to get the most experienced teachers.</p>
                                <p>
                                    <a href="https://news.stanford.edu/news/2013/april/school-teacher-assignment-042313.html" class="btn btn-primary">More
                                        Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="{{ asset('images/news3.jpg')}}" alt="teacher news">
                            <div class="caption">
                                <h3>Maths Standard Failed by Students</h3>
                                <p>
                                    Half of Grade 6 students failed to meet provincial math standard, Research shows.</p>
                                <p>
                                    <a href="https://www.680news.com/2016/08/31/half-of-ontario-grade-6-students-failed-to-meet-provincial-math-standard/"
                                       class="btn btn-primary">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    @endsection
