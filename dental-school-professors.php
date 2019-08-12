<!doctype html>
<html lang="en">

<head>
    <!--TODO: Add title-->
    <title>
        The Virtual Chair | Our Dental Experts
    </title>
    <?php include("includes/head-tag-contents.php"); ?>

    <style>
        /* Imports font */
        @import url('https://fonts.googleapis.com/css?family=Julius+Sans+One|Montserrat&display=swap');

        html {
            min-width: 300px;
        }

        /* Variables */
        :root {
            --main-color: #fff;
            /* 60% of page */
            --secondary-color: #222;
            /* 30% of page */
            --accent-color: #7BB7B7;
            /* 10% of page */
            --main-font: 'Julius Sans One', sans-serif;
            --secondary-font: 'Montserrat', sans-serif;
        }

        main {
            margin-top: 5rem;
            padding-top: 5rem;
        }



        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) {
            .constrained {
                max-width: 1200px;
                margin: 0 auto;
                padding-left: 5rem;
                padding-right: 5rem;
            }

            .card {
                min-width: 400px;
            }



            main {
                margin-top: 9rem;
                padding-top: 9rem;
            }
        }

        #faculty {
            font-weight: 500;
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            img {
                max-width: 500px;
            }




            main {
                margin-top: 9rem;
                padding-top: 9rem;
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            #stripe p {
                font-size: 33rem !important;
            }

            main {
                margin-top: 9rem;
                padding-top: 9rem;
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {


            main {
                margin-top: 9rem;
                padding-top: 9rem;
            }
        }

    </style>

</head>

<body>


    <nav>
        <?php include("includes/navigation.php"); ?>

    </nav>

    <main class="constrained">

        <?php include("includes/dental-school-professors.php"); ?>

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <footer class="footer">
        <?php include("includes/footer.php"); ?>
    </footer>
</body>

</html>
