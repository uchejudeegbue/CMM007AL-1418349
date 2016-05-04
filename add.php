<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Start of header-->
<header>

    <h2>myBlog</h2>

    <p>because the internet needs to know what I think</p>


    <div class="nav">
        <nav>
            <ul>
                <li><a href="blog.html">All Blog Items</a></li>
                <li><a href="blog.html">Work items</a></li>
                <li><a href="blog.html">University Items</a></li>
                <li><a href="blog.html">Family Items</a></li>
                <li><a href="add.html">Insert a Blog Item</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--End of header-->


<!--Start of main-->
<main>
    <div class="article">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        ?>

        <form action="<? $_SERVER["PHP_SELF"] ?>" method="post">
            <label>Entry Title:</label>
            <label>
                <input type="text" name="entryTitle" required/>
            </label><br><br>
            <label>Entry Summary:</label>
            <label>
                <textarea row="5px" col="50px" required></textarea>
            </label><br><br>
            <label>Category:</label>
            <label>
                <select name="blogs" required>

                    <option value="work">politics</option>
                    <option value="university">sport</option>
                    <option value="family">technology</option>
                </select>

            </label><br><br>
            <label>Submitted By:</label>
            <label>
                <input type="text" name="submitter"/>
            </label><br><br>

            <label>
                <input type="submit" value="submit" required/>
            </label>

        </form>
            <?php
        }



        ?>

    </div>

</main>
<!--End of main-->


<!--Start of footer-->
<footer>
    <p>Designed by [Uche Jude Egbue], [2016]</p>
</footer>
<!--End of footer-->


</body>
</html>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {


            ?>
            <form action="<? $_SERVER["PHP_SELF"] ?>" method="post">
                <label>Bug Name</label>
                <label>
                    <input type="text" name="bugname" required/>
                </label><br><br>
                <label>Bug Summary</label>
                <label>
                    <textarea row="5px" col="50px" required name="summary"></textarea>
                </label><br><br>
                <label>Bug Category</label>
                <label>
                    <select name="bugs" required>

                        <option value="Android">Android</option>
                        <option value="Windows">Windows</option>
                        <option value="iOS">iOS</option>
                    </select>

                </label><br><br>

                <label>
                    <input type="submit" value="submit" required/>
                </label>

            </form>
            <?php
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include('connect.php');
            if (isset($_POST['bugname']) && isset($_POST['bugs']) && isset($_POST['summary'])) {
                $bugname = $_POST['bugname'];
                $bugs = $_POST['bugs'];
                $summary = $_POST['summary'];
                $sql = "INSERT INTO blogview (entryTitle, entrySummary, category, submitter)
                        VALUES ('$bugname', '$summary', '$bugs')";
                if ($push = mysqli_query($db, $sql)) {
                    header("Location: blog.php");
                } else {
                    header("Location: index.php");
                }
            }
        } else {
            header("Location: index.php");
        }
        ?>
