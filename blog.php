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



<main>



    <div class="article">

        <?php
        include('connect.php');
        if(isset($_GET['category']) && $_GET['category'] == 'all'){
            $sql = "SELECT bugName, bugSummary, bugCategory
            FROM bugtracas ";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>bugName </th>
                    <th>bugSummary</th>
                    <th>bugCategory</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['bugName']."</td>
                    <td>".$row['bugSummary']."</td>
                    <td>".$row['bugCategory']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }elseif(isset($_GET['category']) && $_GET['category'] == 'android'){
            $sql = "SELECT bugName, bugSummary, bugCategory
            FROM bugtracas WHERE bugCategory='Android'";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>bugName </th>
                    <th>bugSummary</th>
                    <th>bugCategory</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['bugName']."</td>
                    <td>".$row['bugSummary']."</td>
                    <td>".$row['bugCategory']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }elseif(isset($_GET['category']) && $_GET['category'] == 'iOS'){
            $sql = "SELECT bugName, bugSummary, bugCategory
            FROM bugtracas WHERE bugCategory='iOS'";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>bugName </th>
                    <th>bugSummary</th>
                    <th>bugCategory</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['bugName']."</td>
                    <td>".$row['bugSummary']."</td>
                    <td>".$row['bugCategory']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }elseif(isset($_GET['category']) && $_GET['category'] == 'windows'){
            $sql = "SELECT bugName, bugSummary, bugCategory
            FROM bugtracas WHERE bugCategory='Windows'";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>bugName </th>
                    <th>bugSummary</th>
                    <th>bugCategory</th>

                </tr> ";

            if(mysqli_num_rows($result)>0){

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['bugName']."</td>
                    <td>".$row['bugSummary']."</td>
                    <td>".$row['bugCategory']."</td>

                </tr>";
                }
            }
            echo "</table>";
        }





        ?>


    </div>
</main>
<!--end of main-->

<!--Start of footer-->
<footer>
    Designed by [Uche Jude Egbue, 2016]
</footer>
<!--end of footer-->
</body>
</html>