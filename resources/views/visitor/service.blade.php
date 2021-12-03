@extends('app.base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-image">
                    <div class="hero-text">
                        <h1 style="font-size:50px">Création de site internet</h1>
                        <p>And I'm a Photographer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('visitor.starter')

    @include('visitor.footer')

    <style>
        /*body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }*/

        .hero-image {
        background-color: #2db6fa;
        height: 25rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        }

        .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
        }

        .hero-text button:hover {
        background-color: #555;
        color: white;
        }
    </style>
@endsection
