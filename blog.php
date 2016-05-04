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
                <li><a href="blog.php?category=all">All Blog Items</a></li>
                <li><a href="blog.php?category=work">Work items</a></li>
                <li><a href="blog.php?category=university">University Items</a></li>
                <li><a href="blog.php?category=family">Family Items</a></li>
                <li><a href="add.php">Insert a Blog Item</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--End of header-->


<!--Start of main-->
<main>
    <div class="article">
        <?php
        include('connect.php');
        if(isset($_GET['category']) && $_GET['category'] == 'all'){
            $sql = "SELECT entryTitle, entrySummary, category, submitter
            FROM blogview ";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>entryTitle </th>
                    <th>entrySummary</th>
                    <th>category</th>
                     <th>submitter</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['entryTitle']."</td>
                    <td>".$row['entrySummary']."</td>
                    <td>".$row['category']."</td>
                     <td>".$row['submitter']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }elseif(isset($_GET['category']) && $_GET['category'] == 'work'){
            $sql = "SELECT entryTitle, entrySummary, category, submitter
            FROM blogview WHERE category='Work'";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>entryTitle </th>
                    <th>entrySummary</th>
                    <th>category</th>
                     <th>submitter</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['entryTitle']."</td>
                    <td>".$row['entrySummary']."</td>
                    <td>".$row['category']."</td>
                     <td>".$row['submitter']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }elseif(isset($_GET['category']) && $_GET['category'] == 'university'){
            $sql = "SELECT entryTitle, entrySummary, category, submitter
            FROM blogview WHERE category='University'";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>entryTitle </th>
                    <th>entrySummary</th>
                    <th>category</th>
                     <th>submitter</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['entryTitle']."</td>
                    <td>".$row['entrySummary']."</td>
                    <td>".$row['category']."</td>
                     <td>".$row['submitter']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }elseif(isset($_GET['category']) && $_GET['category'] == 'family'){
            $sql = "SELECT entryTitle, entrySummary, category, submitter
            FROM blogview WHERE category='Family'";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>entryTitle </th>
                    <th>entrySummary</th>
                    <th>category</th>
                     <th>submitter</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['entryTitle']."</td>
                    <td>".$row['entrySummary']."</td>
                    <td>".$row['category']."</td>
                     <td>".$row['submitter']."</td>

                </tr>";
                }
            }
            echo "</table>";
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

