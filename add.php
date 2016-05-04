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
                <textarea row="5px" col="50px" name="entrySummary" required></textarea>
            </label><br><br>
            <label>Category:</label>
            <label>
                <select name="category" required>

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
                <input type="submit" value="submit" />
            </label>

        </form>
            <?php
        }elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include('connect.php');
            if (isset($_POST['entryTitle']) && isset($_POST['entrySummary']) && isset($_POST['category']) && isset($_POST['submitter'])) {
                $entryTitle = $_POST['entryTitle'];
                $entrySummary = $_POST['entrySummary'];
                $category = $_POST['category'];
                $submitter = $_POST ['submitter'];
                $sql = "INSERT INTO blogview (entryTitle, entrySummary, category, submitter)
                        VALUES ('$entryTitle', '$entrySummary', '$category', '$submitter')";
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

