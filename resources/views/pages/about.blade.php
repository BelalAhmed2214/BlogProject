@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Portfolio Page</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/belal.jpg') }}" alt="Belal Ahmed" class="img-fluid rounded" width="300">

                <br>
                <br>

                <h4>Contact Information</h4>
                <p>Phone: 01203376449</p>
                <p>Email: <a href="mailto:belalahmed2214@gmail.com">belalahmed2214@gmail.com</a> </p>
                <p>Linkedin Account: <a href="https://www.linkedin.com/in/belal-ahmed-241910207/">https://www.linkedin.com/in/belal-ahmed-241910207/</a> </p>
                <p>GitHub Account: <a href="https://github.com/BelalAhmed2214">https://github.com/BelalAhmed2214</a> </p>


            </div>
            <div class="col-md-6">
                <h4>Professional Summary</h4>
                <p>Belal Ahmed is a proficient junior PHP-Laravel developer with 1 year of experience. He has proven expertise in easing development pains like routing, authentication, sessions and caching, and web app development through Laravel Framework.</p>
                <h4>Skills</h4>
                <ul>
                    <li>Knowledge of programming languages like HTML, CSS, JQuery, and JavaScript.</li>
                    <li>API design skills with expertise in RESTful web services and design.</li>
                    <li>Expertise in MVC and OOP.</li>
                    <li>PHP programming skills, with experience in Laravel Framework, MySQL database.</li>
                    <li>Expertise in DBMS.</li>
                    <li>Experience with project management frameworks.</li>
                    <li>Understanding of iOS and Android latest updates.</li>
                    <li>Strong communication, leadership, organizational, and teamwork skills.</li>
                    <li>Self-discipline and motivation with adherence to professionalism and work ethics.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        hr {
            border-top: 2px solid #ccc;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        h4 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        ul {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
@endsection
