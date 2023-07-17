<?php
require 'db-connect.php';

// Check if the table exists, create it if not
$tableName = "feedback";
$checkTableQuery = "SHOW TABLES LIKE '$tableName'";
$tableExists = mysqli_query($conn, $checkTableQuery);

if ($tableExists->num_rows === 0) {
    // Create the table
    $createTableQuery = "CREATE TABLE `$tableName` (
        `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(255),
        `email` VARCHAR(255),
        `subject` VARCHAR(255),
        `feedback` TEXT,
        `rate` INT(11)
    )";

    mysqli_query($conn, $createTableQuery);
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $feedback = $_POST["feedback"];
    $rate = $_POST["rate"];

    $query = "INSERT INTO `$tableName` (`name`, `email`, `subject`, `feedback`, `rate`) VALUES ('$name','$email','$subject','$feedback','$rate')";

    $result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>FEEDBACK FORM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&display=swap');

        :root {
            --color-body: #384547;
            --color-heading: #eef3db;
            --color-base: #033f47;
            --color-base2: #022a30;
            --color-brand: #e0f780;
            --color-brand2: #deff58;
            --sidbar-width: 240px;
            --font-base: "Bai Jamjuree";
        }

        body {
            background-color: var(--color-base2);
            color: var(--color-body);
            font-family: var(--font-base), sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--color-heading);
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: var(--color-body);
            transition: all 0.4s ease;
        }

        a:hover {
            color: var(--color-brand);
        }

        img {
            width: 100%;
        }

        .text-brand {
            color: var(--color-brand);
        }

        .bg-base {
            background-color: var(--color-base);
        }

        .full-height {
            min-height: 100vh;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-top: 80px;
            padding-bottom: 80px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .shadow-effect {
            transition: all 0.5s;
        }

        .shadow-effect:hover {
            box-shadow: -6px 6px 0 0 var(--color-brand);
        }

        .iconbox {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            background-color: var(--color-brand);
            color: white;
        }

        /* CONTACT */
        #contact .form-control {
            background-color: var(--color-base);
            border-color: var(--color-base);
            color: white;
        }

        #contact .form-control:focus {
            border-color: var(--color-brand);
            box-shadow: none;
        }

        #contact .form-control::placeholder {
            color: gray;
        }

        #contact input.form-control {
            height: 44px;
        }

        .rate {
            display: inline-block;
            width: auto;
            outline: none;
            color: #fce205;
            margin:auto;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 80px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }
        input::placeholder{
            color:gray !important;
        }
    </style>
    <script>
        function democonfirm() {
            if (confirm("Are you Sure you want to Submit this Form??")) {
                alert("You agreed to submit form, Press OK to submit the form.");
            } else {
                alert("You have not agreed to submit form, Press OK to recheck the form.");
            }
        }
    </script>
</head>

<body>
    <!-- CONTACT -->
    <section id="contact" class="full-height px-lg-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 pb-4" data-aos="fade-up">
                    <h6 class="text-brand">Feedback</h6>
                    <h1>How Was Our Service?</h1>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                    <form id="form" action="" method="post" class="row g-lg-3 gy-3">
                        <div class="form-group col-md-6">
                            <input name="name" type="text" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input name="email" type="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group col-12">
                            <input name="subject" type="text" id="designation" class="form-control" placeholder="Enter Subject" required>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="feedback" id="feedback" rows="4" class="form-control" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="form-group col-12 m-0">
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" required>
                                <label for="star5" title="5 stars">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" required>
                                <label for="star4" title="4 stars">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" required>
                                <label for="star3" title="3 stars">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" required>
                                <label for="star2" title="2 stars">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" required>
                                <label for="star1" title="1 star">1 star</label>
                            </div>
                        </div>
                        <div class="form-group col-12 d-grid">
                            <input type="submit" name="submit" value="Submit" class="btn btn-brand" onclick="democonfirm()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //CONTACT -->
</body>

</html>
