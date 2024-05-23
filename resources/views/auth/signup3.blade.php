@extends('layout.master')
@section('title', 'Sign Up')
@section('content')
    <style>
        header,
        .banner-section,
        .footer-section {
            display: none;
        }

        .login_bg {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url("./../assets/images/login1.jpg");
            background-position: center;
            background-size: cover;
        }

        .get_started {
            background: rgb(156, 104, 172);
            background: linear-gradient(90deg, rgba(156, 104, 172, 1) 0%, rgba(37, 90, 169, 1) 100%);
            font-size: 20px;
            font-weight: 600;
            border-radius: 30px;
            padding: 8px 25px 10px 25px;
            text-align: center;
            display: inline-block;
            transition: all 0.3s ease-in-out;
            border: none;
            color: #fff;
        }

        .login {
            min-width: 38%;
            border: 2px solid rgba(255, 255, 255, .25);
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.45);
            box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(15px);
            color: #242424;
        }

        input {
            border-radius: 13px !important;
            padding: 10px 10px !important;
            transition: 0.3s;
        }

        .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #8665ab;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(53 92 170) !important;
}

        .tab_count {
            background-color: #8d66abba;
            border-radius: 11px;
            padding: 4px 14px;
            color: #fff;
            display: block;
            width: fit-content;
        }

        .form-check-input {
            border-radius: 6px !important;
        }

        .form-check-input:checked {
            background-color: #9367AC;
            border-color: #9367AC;
        }

        .signatureInput {
            border: none;
            background-color: transparent;
        }

        .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #8665ab;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(53 92 170) !important;
}

        .border_bottom {
            border-bottom: 1px solid #9b9a9a;
        }
    </style>




    <section class="login_bg">
        <div class="login py-5 px-4">
            <div class="tab_count">
                <h5 class="m-0 text-light">3/5</h5>
            </div>
            <h3 class="mt-3">Check your Email</h3>
            <p><strong>A temporary confirmation code was sent to hasnain.ghazitech@gmail.com</strong></p>
            <div class="row mt-3">
                <div class="col-md-12 mt-3">
                    <div>
                        <label for="Verfication"><strong>Verfication</strong></label><br>
                        <input class="form-control" type="tel" id="Verfication" placeholder="Verfication" id="Verfication">
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <button class="get_started">Next</button>
            </div>
        </div>
    </section>


    
@endsection
