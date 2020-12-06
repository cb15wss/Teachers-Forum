<!--Faq page view-->

@extends('layouts.master') <!--Loads the navigation and styles-->
@section('title','Home Page')<!--page title-->
@section('content')
    <section>
        <div class="container">
            <div class="text">
                <div><h1>Documentation</h1></div>
                <div class="panel-default">
                    <div class="panel-heading"><h2>User Management System</h2></div>
                </div>
                <div class="panel-body">
                    <h3>Create New Account and Login</h3>
                    <ol>
                        <li>To create a new user account, click the Register button on the top navigation button
                            which is on the website landing page.</li>
                        <li>Enter your personal details in the form fields and press Register button at the bottom.
                        </li>
                        <li>If the registration is successful an account will be created and you will be redirected to the log in page.
                        </li>
                        <li>To log in enter the email account you used to register and password. If the details are correct
                        you will be logged in and redirected to your profile page.</li>
                    </ol>
                </div>

                <div class="panel-default">
                    <div class="panel-heading"><h2>Forum</h2></div>
                </div>
                <div class="panel-body">
                    <h3>Upload Videos</h3>
                    <ol>
                        <li>You must be logged in</li>
                        <li>To upload a video, press the button link which is found on your profile page.</li>
                   <li>Read the upload video rules carefully.</li>
                        <li>enter the required information in the form fields and press Submit.</li>
                    <li>If the information is correct and validated the video will be uploaded and you will be redirected to the forum page.</li>
                    </ol>

                </div>
                <div class="panel-body">
                    <h3>Watch a Video</h3>
                    <ol>
                        <li>You must be logged in</li>
                        <li>To watch a video, visit the forum link on the navigation bar which can be found
                            on all pages when you are logged in.</li>
                        <li>Press on the video title or press the watch video button of any video post.</li>
                        <li>Click on the video and watch the video.</li>
                    </ol>
                </div>
                <div class="panel-body">
                    <h3>Comment on a Video</h3>
                    <ol>
                        <li>You must be logged in</li>
                        <li>To watch a video, visit the forum link on the navigation bar which can be found
                            on all pages when you are logged in.</li>
                        <li>Press on the video title or press the watch video button of any video post.</li>
                        <li>Click on the video and watch the video.</li>
                        <li>Fill the add comment field with your reply and press add comment button.</li>
                    <li>You will be redirected back to the video with your comment on the video</li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
