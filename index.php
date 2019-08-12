<!doctype html>
<html lang="en">

<head>
    <title>
        The Virtual Chair | Home
    </title>
    <?php include("includes/head-tag-contents.php"); ?>

    <style>
        /* Imports font */
        @import url('https://fonts.googleapis.com/css?family=Julius+Sans+One|Montserrat&display=swap');

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

        #impact {
            font-size: 2.5rem;
        }

        .tanchair {
            border-radius: 15px !important;
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

        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {}

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            #stripe p {
                font-size: 33rem !important;
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            ...
        }

    </style>



</head>

<body>


    <!--Navigation-->
    <?php include("includes/navigation.php"); ?>


    <main class="">

        <div class="container constrained pb-5 text-center">

            <h1 class="pb-5 text-uppercase font-weight-normal">Do you have the skills to secure your Dental future?</h1>
            <p class="lead">
                The Virtual Chair is headquartered in Athens, GA and will be opening locations across North America to help Pre-Dental Students test, verify and build confidence in their hand skills, prior to the applying for Dental School.
            </p>
            <p class="lead">
                We provide proven training required to help develop the psychomotor skills or hand skills required to become a Dentist. Our training courses provide students with the realistic experience of being a Dentist with our <strong>Virtual Dental Training Simulators</strong>, while preparing students for Dental School through a curriculum of e-learning courses, interactive video and evaluations, provided by our <strong>Virtual Preparation Center</strong>.</p>
        </div>

        <!--Delete this when discount is over-->
        <div id="myModal" class="modal fade mx-auto ">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content rounded-0" id="modal-content">
                    <div class="modal-header">

                        <p class="modal-title display-5 text-center lead"><strong>Athens Location Open!</strong> <br><br>
                            We have extended the discounted price of $800 for the The Virtual Chair Course and The Virtual Preparation Center bundle.</p>

                        <button type="button" class="close left" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Black stripe with image and text-->
        <div class="container-fluid text-center bg-dark text-white" id=" stripe">
            <div class="row constrained p-3">
                <div class="col-md-6 col-lg-5 order-sm-0 order-md-1 tanchair">
                    <img src="//hmowilliams.com/the_virtual_chair/img/tan-chair.png" class="img-fluid p-3 tanchair" alt="Dentist's chair">
                </div>
                <div class="card-body d-flex col-md-6 col-lg-7 order-sm-1 md-0 order-md-0 pt-3 my-auto">
                    <div class="my-auto">
                        <p class="lead font-weight-bold" id="impact">
                            Up to 9% of
                            <br>dental school students
                            <br>have performance problems...

                        </p>
                        <p>
                            Most have never worked from a Dental position or developed adequate hand skills before they began Dental School.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="constrained p-4">
            <ul>

                <li>
                    <p>Becoming a Dentist is challenging. Working with hand tools and mastering indirect vision is difficult. The ratio of applications to accepted students is nearly 20 to 1. On paper many applicants look very similar, based on the criteria evaluated such as academic history and DAT score. </p>
                </li>
                <li>

                    <p>By the time you apply for dental school you have already accumulated debt from your undergraduate degree. You will likely pay up to $3,500 to ensure you are prepared for the DAT, which is taken multiple times by most successful applicants. If you apply for dental school and you are accepted, you can expect to pay between $40,000 and $150,000 a year, depending on the school you attend.</p>
                </li>
                <li>
                    <p>Most dental students pay for dental school with loans. These loans are paid back when the students become dentists. Any delay in graduation increases the size of the loan balance. Students who graduate with underdeveloped hand skills face significant career challenges. Practice production is directly tied to hand skills. Those with weak skills face production challenges which impair their ability to repay these substantial loans.</p>
                </li>
                <li>
                    <p>For students with strong natural hand skills, psychomotor skill development before enrollment in dental school will provide an enhanced educational experience. Your skills will be developed further in school which will allow higher practice production after graduation.</p>
                </li>
                <li>
                    <p>Do you <strong>know</strong> if you have the psychomotor skills to become a Dentist? If not, the process of preparation, application, and even acceptance to Dental School is a risky choice, considering the amount of the investment.</p>
                </li>
            </ul>
        </div>

        <div class="container mx-auto text-center" id="testimonials">
            <h2 class="pb-3 mx-auto">
                <hr>
                Dental Student Testimonials
                <hr>
            </h2>
            <div class="card-deck m-1 ">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img class="card-img-top" src="//hmowilliams.com/the_virtual_chair/img/IMG_Davis.png" alt="Ian Davis">

                        <blockquote class="blockquote pt-3">
                            <p>
                                "Practicing on the virtual training simulator before entering dental school significantly helped in developing precise psychomotor skills that are necessary to excel in school and the profession. It was also beneficial to be exposed to indirect vision prior to dental school as it is a difficult skill to acquire. I’m grateful to have had the opportunity to practice on the virtual training simulator before dental school and think it would be a great benefit to any pre-dental student that uses it."
                            </p>
                            <footer class="blockquote-footer">
                                Ian Davis
                                <br>
                                1st Year Dental Student
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <!--Student Quote-->

                <div class="card shadow-sm">
                    <div class="card-body">
                        <img class="card-img-top" src="//hmowilliams.com/the_virtual_chair/img/IMG_Chyan.png" alt="David Chyan">

                        <blockquote class="blockquote pt-3">
                            <p>
                                "The virtual training simulator was a great experience for me as a pre-dental student to pick up a hand piece and actually try my hand (literally) at removing 'cavities.' When my first operative course came around, I was positioned for success because I was exposed to the virtual training simulator beforehand."
                            </p>
                            <footer class="blockquote-footer">
                                David Chyan <br>
                                1st Year Dental Student
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </main>
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
</body>

</html>
