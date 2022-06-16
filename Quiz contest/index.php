
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz Contest</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="main-header">Quiz Contest</header>
    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Service</a></li>
                <li"><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>


    <section id="showcase">
        <div class="container">
            <h1>
                QUIZ TIME
            </h1>
        </div>
    </section>
    <div class="container">
        <section id="main">
            <h1>Welcome To Your First Quiz !</h1>
            <p> Here are the questions :</p>
            <form action="index.php" method="post">
                <label>1. What is the only thing that computers understand? </label></br>
                <input type="text" name="language"><br />

                <label>2. What does HTML stands for : </label><br />
                <input type="text" name="html"><br />

                <label>3.When writing a computer programmers most program use : </label>
                <input type="text" name="writing"><br />

                <label>4. Resolving errors in a program is known as : </label>
                <input type="text" name="error"><br />

                <label>5. What is not a high level programming langauge? </label></br>
                <input type="text" name="level"><br />

                <label>6. Assembly language is : </label>
                <input type="text" name="what"><br />

                <label>7. PHP,Java,C++,Python are examples of: </label></br>
                <input type="text" name="example"><br />

                <label>8. How many bits make up one letter in a binary code? </label>
                <input type="text" name="bits"><br />

                <label>9. Binary uses how many digit(s)? </label>
                <input type="text" name="binary"><br />

                <label>10. JavaScript is the same laguage as Java. </label></br>
                <input type="text" name="java"><br />
                <input type="submit" name="submit">

            </form>


        </section>
        <aside id="sidebar">
            <p> Marks:
                <?php
                $counter = 0;
                if (isset($_POST['submit'])) {
                    if (strtolower($_POST['language']) == "machine learning") {
                        $counter += 1;
                    }
                    //2
                    if (strtolower($_POST['html']) == "hyper text markup language") {
                        $counter += 1;
                    }
                    //3
                    if (strtolower($_POST['writing']) == "machine code") {
                        $counter += 1;
                    }
                    //4
                    if (strtolower($_POST['error']) == "debug") {
                        $counter += 1;
                    }
                    //5
                    if (strtolower($_POST['level']) == "assembly") {
                        $counter += 1;
                    }
                    //6
                    if (strtolower($_POST['what']) == "machine code") {
                        $counter += 1;
                    }
                    //7
                    if (strtolower($_POST['example']) == "high level language") {
                        $counter += 1;
                    }
                    //8
                    if (strtolower($_POST['bits']) == "8") {
                        $counter += 1;
                    }
                    //9
                    if (strtolower($_POST['binary']) == "2") {
                        $counter += 1;
                    }
                    //10
                    if (strtolower($_POST['java']) == "false") {
                        $counter += 1;
                    }
                }


                echo $counter;

                ?>

            </p>

        </aside>
    </div>
</body>
<footer id="main-footer">
    <p>Copyright@2021 My Website <a href="https://www.facebook.com/kukkuu.21">Facebook: Sanjida Alam </a></p>
</footer>
</body>

</html>