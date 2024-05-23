<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    @php
        $path = asset('/');
    @endphp

    <link href="../../fonts.googleapis.com/css0afb.css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ $path }}newfront/vendors/font-awesome/css/fontawesome.css" />
    <link rel="stylesheet" href="{{ $path }}newfront/vendors/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="{{ $path }}newfront/vendors/slick/slick.css" />
    <link rel="stylesheet" href="{{ $path }}newfront/vendors/animate.css" />

    <!-- <link rel="stylesheet" href="style.css?version=2" /> -->
    {{-- <link rel="stylesheet" href="{{ $path }}newfront/style.css" /> --}}
    <link rel="stylesheet" href="{{ asset('newfront/style.css') }}" />


    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

</head>

<body>


@include('frontend.layouts.header')



        @yield('content')


@include('frontend.layouts.footer')



<script>
    // Initialize EmailJS
    emailjs.init("fDTSKmqGUkGXfzZEY"); // Replace YOUR_USER_ID with your actual EmailJS user ID

    // Function to send email
    function sendEmail() {
        // Get the email input value
        var email = document.getElementsByName("isEmail")[0].value.trim();
        var errorMessage = document.getElementById("errorMessage");
        var successText = document.getElementById("successText");

        // Check if the email field is empty
        if (email === "") {
            errorMessage.textContent = "Please enter a valid email address.";
            errorMessage.style.display = "block";
            return; // Exit the function if email field is empty
        } else {
            errorMessage.style.display = "none";
        }

        // Send the email if the email field is not empty
        emailjs.sendForm("service_85xavlt", "template_syfuda1", "#myForm2")
            .then(
                function(response) {
                    console.log("SUCCESS!", response.status, response.text);
                    document.getElementById("myForm2").reset();
                    successText.textContent = "Email sent successfully!";
                    successText.style.display = "block";
                    setTimeout(function() {
                        successText.style.display = "none";
                    }, 3000); // Hide after 3 seconds
                },
                function(error) {
                    console.log("FAILED...", error);
                    alert("Mail sending failed. Please try again.");
                }
            );
    }

    // Event listener for the Next button
    document.getElementById("submitButton").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        // Call the function to send email
        sendEmail();
    });
    </script>

    <script>
    document.getElementById('myForm2').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        // You can add your form validation or submission logic here
    });
    </script>


    </body>


    </html>
