<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <h1><a href="index.php">Guowei's Portal Page</a></h1>
    <h2>The navigation below represents our BIG Assignments.</h2>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>

        <div id = "hero">
            <h2>About Guowei</h2>
            <img class="right" src="images/guowei.jpg" alt="guowei">
            <p>Hello! I'm Guowei Kong, currently enrolled in the Web Development program at Seattle Central College. My educational journey has introduced me to HTML, CSS, JavaScript, and I'm currently diving into PHP. My enthusiasm for technology drives me to explore web design, programming, and the creation of user-friendly websites. Outside of class, I enjoy exploring the scenic Seattle area with friends. I'm also a tennis enthusiast, even though I don't consider myself a pro on the court.</p>
            

        </div>


        <main>
            <h2>MAMP Setup</h2>
            <img src="images/mamp.png" alt="MAMP set up">
            <h2>PHP Errors Displaying</h2>
            <img src="images/display_error.png" alt="display errors">
        </main>

        <aside>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
                <ol>
                    <li><a href="weeks/week2/var.php">var.php</a></li>
                    <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
                    <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                    <li><a href="weeks/week2/currency.php">currency.php</a></li>
                </ol>

                <h3>Week 3</h3>
                <ol>
                    <li><a href="weeks/week3/about.php">about.php</a></li>
                    <li><a href="weeks/week3/date.php">date.php</a></li>
                    <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
                    <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
                    <li><a href="weeks/week3/if.php">if.php</a></li>
                    <li><a href="weeks/week3/index.php">index.php</a></li>
                    <li><a href="weeks/week3/switch.php">switch.php</a></li>
                </ol>
                <h3>Week 4</h3>
                <ol>
                    <li><a href="weeks/week4/adder.php">adder.php</a></li>
                    <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                    <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
                    <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                    <li><a href="weeks/week4/form1.php">form1.php</a></li>
                    <li><a href="weeks/week4/form2.php">form2.php</a></li>
                    <li><a href="weeks/week4/form3.php">form3.php</a></li>
                </ol>
                <h3>Week 5</h3>
                <ol>
                    <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
                    <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                    <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
                    <li><a href="weeks/week5/currency4.php">currency4.php</a></li>
                    <li><a href="weeks/week5/calculator.php">calculator.php</a></li>
                    <li><a href="weeks/week5/calculator2.php">calculator2.php</a></li>
                    <li><a href="weeks/week5/calculator3.php">calculator3.php</a></li>
                    <li><a href="weeks/week5/null.php">null.php</a></li>
                </ol>
                <h3>Week 6</h3>
                <ol>
                    <li><a href="weeks/week6/form.php">form.php</a></li>
                    <li><a href="weeks/week6/form2.php">form2.php</a></li>
                    <li><a href="weeks/week6/functions.php">functions.php</a></li>
                </ol>
                <h3>Week 7</h3>
                <ol>
                    <li><a href="weeks/week7/form3.php">form3.php</a></li>
                    <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
                    <li><a href="weeks/week7/rand.php">rand.php</a></li>
                    <li><a href="weeks/week7/strings.php">strings.php</a></li>
                </ol>
                <h3>Week 8</h3>
                <ol>
                    <li><a href="weeks/week8/config.php">config.php</a></li>
                    <li><a href="weeks/week8/credentials.php">credentials.php</a></li>
                    <li><a href="weeks/week8/people.php">people.php</a></li>
                    <li><a href="weeks/week8/people-view.php">people-view.php</a></li>
                </ol>
        </aside>

        <footer>
        <ul>
            <li>Copyright &copy;2022</li>
            <li>All Rights Reserved</li>
            <li><a href="index.php">Web Design by Guowei Kong</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>

        </footer>
    </div>
    <!-- close wrapper -->

</body>
</html>