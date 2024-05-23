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
                <h5 class="m-0 text-light">2/5</h5>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div>
                        <label for="f_name"><strong>First Name</strong></label><br>
                        <input placeholder="First Name" type="text" name="f_name" id="f_name" class="form-control mt-1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for="l_name"><strong>Last Name</strong></label><br>
                        <input placeholder="Last Name" type="text" name="l_name" id="l_name"
                            class="form-control mt-1">
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div>
                        <label for="phone"><strong>Phone</strong></label><br>
                        <input class="form-control" type="tel" id="demo" placeholder="Phone" id="telephone">
                    </div>
                </div>
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input mt-2" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    <p class="text-dark">
                        &nbsp;I agree to receive text messages from Docudash.
                    </p>
                </label>
            </div>
            <div class="col-md-6">
                <div class="form-group border_bottom">
                    <div class="d-flex">
                        <input type="text" class="signatureInput first" value="" readonly="">
                        <input type="text" class="signatureInput last" value="" readonly="">
                    </div>
                </div>
            </div>
            <small>Signature</small>
            <div class="mt-3">
                <button class="get_started">Get Started</button>
            </div>
        </div>
    </section>


    <script>
        const input = document.querySelector("#telephone");
        const output = document.querySelector("#mobile_output");

        const iti = window.intlTelInput(input, {
            // initialCountry: "auto",
            // separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        });


        // Add an event listener for the 'countrychange' event
        const handleChange = () => {
            let text;
           // intlTelInputUtils.formatNumber(my_number_var, null, intlTelInputUtils.numberFormat.INTERNATIONAL);

            if (input.value) {

                console.log("input.value " + input.value);
                console.log("iti.isValidNumber " + iti.isValidNumber);

                text = iti.isValidNumber()
                    ? "Valid number! Full international format: " + iti.getNumber()
                    : "Invalid number - please try again";

                iti.isValidNumber() ? $("#createForm button[type='submit']").attr("disabled", false) : $("#createForm button[type='submit']").attr("disabled", true);

            } else {
                text = "Please enter a valid number below";
            }
            const textNode = document.createTextNode(text);
            output.innerHTML = "";
            output.appendChild(textNode);


        };

        input.addEventListener('countrychange', function () {
            console.log("countrychange called");
            // // Get the selected country data
            const selectedCountryData = iti.getSelectedCountryData();
            //
            // // Get the selected phone code
            const selectedPhoneCode = selectedCountryData.dialCode;
            //
            // // Log the selected phone code
            if (selectedPhoneCode) {
                input.value = "+" + selectedPhoneCode;
            }


        });

        input.addEventListener('change', handleChange);
        input.addEventListener('keyup', handleChange);



        
    </script>

@endsection
