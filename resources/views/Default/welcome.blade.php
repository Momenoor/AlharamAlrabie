<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: radial-gradient(circle at center, #d04d4f, #ac2f2f);
            position: relative;
            overflow: hidden;
        }
        .logo-container {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 50%;
            width: 100%;
            display: inline-block;
            z-index: 2;
        }
        .triangle {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: white;
            clip-path: polygon(10% 40%, 90% 10%, 40% 90%);
            z-index: 1;
        }

        .logo {
            width: 50%;
            display: block;
            position: relative; /* Make it positioned relative to its parent */
            z-index: 2; /* Make sure the logo is on top of the triangle */
            margin: 0 auto; /* Center the logo vertically and horizontally */
        }
        .call-us-container {
            position: absolute;
            bottom: 30%;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
            border-radius: 50px; /* Pill shaped */
            background-color: rgba(0, 0, 0, 0.1); /* Slight dark background */
            padding: 5px 20px;
        }

        .call-us-container:hover {
            transform: translateX(-50%) scale(1.05);
            background-color: rgba(0, 0, 0, 0.2); /* Darken on hover */
        }

        .call-us-text {
            font-size: 1.2rem;
            font-weight: 600;
            color: white;
            margin-right: 10px;
            transition: color 0.3s ease; /* Transition for hover effect */
        }

        .phone-icon {
            color: white;
            margin-right: 8px;
        }

        .phone-number {
            background: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 1rem;
            font-weight: 600;
            color: #d04d4f;
        }

        .phone-number a{
            text-decoration: none;
            color: #d04d4f;
        }
        .watermark {
            color: white;
            opacity: 0.2;
            position: absolute;
            z-index: -1; /* to push the icons behind the triangle and logo */
        }

        .social-icons {
            position: absolute;
            bottom: 3%;  /* adjust as needed to position under the triangle */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 1rem;
        }

        .social-icons a {
            text-decoration: none;
            background-color: #FFF;
            padding: 1rem;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            color: #333;
            font-size: 1.5rem;
        }

        .social-icons a:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            font-size: 2rem;
            color: #ac2f2f;
        }

        /* Media queries for responsive design */

        @media only screen and (max-width: 768px) {
            .call-us-container {
                bottom: 30%;
                flex-direction: column;
                align-items: center;
            }

            .call-us-text {
                font-size: 0.9rem;
            }

            .phone-number {
                padding: 3px 10px;
                font-size: 0.8rem;
            }

            .logo-container {
                max-width: 80%;
            }

            .social-icons a {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }

            .watermark {
                opacity: 0.1;
            }

            .social-icon {
                font-size: 1.5rem;
            }
        }

        @media only screen and (max-width: 480px) {
            .call-us-container {
                bottom: 30%;
                flex-direction: column;
                align-items: center;
            }

            .call-us-text {
                font-size: 0.9rem;
            }

            .phone-number {
                padding: 3px 10px;
                font-size: 0.8rem;
            }

            .logo-container {
                max-width: 80%;
            }

            .social-icons {
                gap: 0.5rem;
            }

            .social-icons a {
                width: 30px;
                height: 30px;
                font-size: 1rem;
            }



            .social-icon {
                font-size: 1.2rem;
            }
        }
    </style>
    <title>Food Page</title>
</head>

<body>
<div class="logo-container">
    <img class="logo" src="{{asset('images/logo.png')}}" alt="Al Haram Al Rabie">
    <div class="triangle"></div>
</div>

<div class="call-us-container">
    <span class="call-us-text">Call for Delivery:</span>
    <i class="fas fa-phone-alt phone-icon"></i>
    <span class="phone-number"><a href="tel:+971542507357">+971 54 250 7357</a></span>
</div>

<div class="social-icons">
    <a href="https://www.facebook.com/alharam.alrabie.cafeteria" target="_blank"><i class="fab fa-facebook-f social-icon"></i></a>
    <a href="https://www.instagram.com/alharam.alrabie.cafeteria" target="_blank"><i class="fab fa-instagram social-icon"></i></a>
    <a href="https://web.whatsapp.com/send?phone=971542507357" target="_blank"><i class="fab fa-whatsapp social-icon"></i></a>
    <a href="https://goo.gl/maps/GBvaoYphrok1Gd4T9" target="_blank"><i class="fa fa-map social-icon" aria-hidden="true"></i></a>
    <a href="{{route('menu')}}" target="_blank"><i class="fas fa-utensils social-icon"></i></a>
</div>

<!-- JavaScript to generate food icons -->
<script>
    const foodIcons = ["fa-utensils", "fa-bread-slice", "fa-pizza-slice", "fa-hamburger", "fa-hotdog", "fa-bacon"];

    const positions = [
        {left: '10%', top: '10%'},
        {left: '40%', top: '10%'},
        {left: '70%', top: '10%'},
        {left: '90%', top: '35%'},
        {left: '80%', top: '60%'},
        {left: '40%', top: '75%'},
        {left: '10%', top: '75%'},
        {left: '5%', top: '35%'},
        {left: '30%', top: '50%'},
        {left: '60%', top: '50%'},
    ];

    for (let i = 0; i < positions.length; i++) {
        const icon = document.createElement('i');
        const randomIcon = foodIcons[Math.floor(Math.random() * foodIcons.length)];
        icon.classList.add("fas", randomIcon, "watermark");

        icon.style.fontSize = (Math.random() * (12 - 6) + 8) + 'vw';
        icon.style.left = positions[i].left;
        icon.style.top = positions[i].top;

        document.body.appendChild(icon);
    }
</script>
</body>

</html>
