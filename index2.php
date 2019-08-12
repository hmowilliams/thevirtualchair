<!doctype html>
<html lang="en">

<head>
    <!--TODO: Add title-->
    <title>
        The Virtual Chair | Home
    </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            width: 100%;
            margin: 0 auto;
        }

        .hero {
            width: 100%;
            height: 100%;
            min-width: 100%;
            min-height: 100%;
            position: relative;
        }

        .hero::before {
            background-size: cover;
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            opacity: 1;
        }

        .flex-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }

        .hero-message {
            color: #222;
            text-shadow: #999 2px 2px;
            min-width: 100%;
            min-height: 2rem;
            position: relative;
        }

        .hero-message::before {
            content: "";
            display: block;
            position: absolute;
            margin-left: 0;
            min-width: 100%;
            min-height: 12em;
            z-index: -1;
            opacity: 0.4;
        }

        .hero-title,
        .hero-sub-title {
            width: 100%;
            display: block;
            text-align: center;
        }

        .hero::after {
            content: "";
            display: block;
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 1;
        }

        @media (max-width: 575.98px) {

            /*
            .hero-message {
                min-width: 50%;
                min-height: 12em;
            }

            .hero-message::before {
                margin-left: 25%;
                min-width: 50%;
                min-height: 12em;
            }

            .hero {
                max-width: 100%;
                * Height has to be set for vertical center *
                height: 288px;
                position: relative;
                margin: 0 auto;
            }



            .flex-center {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }



            .hero::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                max-width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 1;
            }

            .hero-message {
                margin: 0 auto;
                min-width: 50%;
                min-height: 2rem;
            }


            .hero-title,
            .hero-sub-title {
                * This affects the position of the hero-title and hero-sub-title *
                width: 60%;
                margin: 0 auto;
                display: block;
                text-align: center;
            }

            .hero-title {
                margin: 0 auto;
                text-transform: uppercase;
                * Hero-title font-size *

                font-size: 1.4rem;
                margin-left: 30%;
            }
*/
            .hero::before {
                background-image: url('img/virtual_chair_white_576x288.png');
                background-size: 100%;
                content: "";
                display: block;
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                max-height: 288px;
                margin: 0 auto;
                z-index: -2;
                opacity: 1;

            }

            .hero-message {
                min-width: 100%;
                min-height: 2rem;
            }

            .hero-message::before {
                margin-left: 35%;
                min-width: 50%;
                min-height: 12em;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .hero {
                width: 576px;
                height: 288px;
                position: relative;
                margin: 0 auto;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_576x288.png');
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 576px;
                height: 288px;
                z-index: -2;
                opacity: 1;
            }

            .flex-center {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }

            .hero-message {
                color: #222;
                text-shadow: #999 2px 2px;
                min-width: 100%;
                min-height: 2rem;
                position: relative;
            }

            .hero-message::before {
                content: "";
                display: block;
                position: absolute;
                margin-left: 0;
                min-width: 100%;
                min-height: 12em;
                z-index: -1;
                opacity: 0.4;
            }

            .hero::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 1;
            }

            .hero-message {
                margin: 0 auto;
                min-width: 50%;
                min-height: 2rem;
            }

            .hero-message::before {
                margin-left: 35%;
                min-width: 50%;
            }

            .hero-title,
            .hero-sub-title {
                /* This affects the position of the hero-title and hero-sub-title */
                width: 60%;
                margin: 0 auto;
                display: block;
                text-align: center;
            }

            .hero-title {
                margin: 0 auto;
                text-transform: uppercase;
                font-size: 1.8rem;
                margin-left: 25%;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_576x288.png');
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 288px;
                z-index: -2;
                opacity: 1;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .hero {
                width: 100%;
                height: 384px;
                position: relative;
                margin: 0 auto;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_768x384.png');
                background-size: auto auto;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 768px;
                height: 384px;
                z-index: -2;
                opacity: 1;
            }

            .flex-center {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }

            .hero-message {
                color: #222;
                text-shadow: #999 2px 2px;
                min-width: 100%;
                min-height: 2rem;
                position: relative;
            }

            .hero-message::before {
                content: "";
                display: block;
                position: absolute;
                margin-left: 0;
                min-width: 100%;
                min-height: 12em;
                z-index: -1;
                opacity: 0.4;
            }

            .hero::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 1;
            }

            .hero-message {
                margin: 0 auto;
                min-width: 50%;
                min-height: 2rem;
            }

            .hero-title,
            .hero-sub-title {
                /* This affects the position of the hero-title and hero-sub-title */
                width: 60%;
                margin: 0 auto;
                display: block;
                text-align: center;
            }

            .hero-title {
                margin: 0 auto;
                text-transform: uppercase;
                font-size: 1.8rem;
                margin-left: 25%;
            }

        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .hero {
                width: 992px;
                height: 496px;
                position: relative;
                margin: 0 auto;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_1200x600.png');
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 992px;
                height: 496px;
                z-index: -2;
                opacity: 1;
            }

            .flex-center {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }

            .hero-message {
                color: #222;
                text-shadow: #999 2px 2px;
                min-width: 100%;
                min-height: 2rem;
                position: relative;
            }

            .hero-message::before {
                content: "";
                display: block;
                position: absolute;
                margin-left: 0;
                min-width: 100%;
                min-height: 12em;
                z-index: -1;
                opacity: 0.4;
            }

            .hero::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 1;
            }

            .hero-message {
                margin: 0 auto;
                min-width: 50%;
                min-height: 2rem;
            }

            .hero-message::before {
                margin-left: 25%;
                min-width: 50%;
                min-height: 2rem;
            }

            .hero-title,
            .hero-sub-title {
                width: 50%;
                margin: 0 auto;
                display: block;
                text-align: center;
            }

            .hero-title {
                margin: 0 auto;
                text-transform: uppercase;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_992x496.png');
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 992px;
                height: 496px;
                z-index: -2;
                opacity: 1;
            }
        }

        @media (min-width: 1200px) {
            .hero {
                width: 1200px;
                height: 600px;
                position: relative;
                margin: 0 auto;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_1200x600.png');
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 1200px;
                height: 600px;
                z-index: -2;
                opacity: 1;
            }

            .flex-center {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
            }

            .hero-message {
                color: #222;
                text-shadow: #999 2px 2px;
                min-width: 100%;
                min-height: 2rem;
                position: relative;
            }

            .hero-message::before {
                content: "";
                display: block;
                position: absolute;
                margin-left: 0;
                min-width: 100%;
                min-height: 12em;
                z-index: -1;
                opacity: 0.4;
            }

            .hero::after {
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                opacity: 1;
            }

            .hero-message {
                margin: 0 auto;
                min-width: 50%;
                min-height: 2rem;
            }

            .hero-message::before {
                margin-left: 25%;
                min-width: 50%;
                min-height: 2rem;
            }

            .hero-title,
            .hero-sub-title {
                width: 50%;
                margin: 0 auto;
                display: block;
                text-align: center;
            }

            .hero-title {
                margin: 0 auto;
                text-transform: uppercase;
            }

            .hero::before {
                background-image: url('img/virtual_chair_white_1200x600.png');
                background-size: cover;
                content: "";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 1200px;
                height: 600px;
                z-index: -2;
                opacity: 1;
            }
        }

    </style>

</head>

<body>


    <div class="hero flex-center">
        <div class="hero-message">
            <h1 class="hero-title">
                Do you have the skills to secure your dental future?
            </h1>
            <h2 class="hero-sub-title">
                <br>
                <br>
            </h2>
        </div>
    </div>
    <div class="not-hero flex-center bg-info">
        <div class="not-hero-message">
            <h1 class="hero-title">
                Other content here
            </h1>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
