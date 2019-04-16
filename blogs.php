<?php require_once ('config.php');?>
<!Doctype html>
<html>
<html lang="en">
<head>
<title> Blogs</title>
<link rel=stylesheet type="text/css" href="Living.css">
<meta charset="UTF-8">
<meta name="viewport"
content="width=device=width,inital=scale=1">

<body>
        <center>  <img class="Rooted" src="CHRI LY-4-cutout.png" alt="Logo">
            <div class ="LI">
            <p>
                Living Christly Rooted.<br>Colossians 2:6-7
            </p>
        </div></center>

    <div class="topnav">
            <a href="Profile.php">Profile</a>
            <a href="Home.php">Home</a>
            <a href="TakeWhatYouNeed.php">Take What You Need</a>
            <a href="Bible.php">Bible</a>
            <a href="Podcast.php">Podcast</a>
            <a href="Sermons.php">Sermons</a>
    </div>
    <center><a href="addblog.php">Post New Blog</a></center>
    <?php


$title = "";
        if (isset($_GET['post']) && $_GET['post'] != ''){
  
            $blogs = $_GET['blogs'];
            debug_to_console( $blogs);
            switch($blogs){
                case 'add new blog';
                    include 'addblog.php';
                    break;
                case 'insertblog';
                    $title = $_blogs['title'];
                    $content = $_blogs['content'];
                    $active = $_blogs['active'];

                    mysqli_query("insert into blogs (btitle, bcontent, bactive) values ('$title', '$content', '$active')");
                    break;

            }
        } else {
            echo 'Admin area';
           
            $title = isset($_POST['title']) ? $_POST['title'] : 'NA';
            debug_to_console( $title );
            $content = isset($_POST['content']) ? $_POST['content'] : 'NA';
            $active = isset($_POST['active']) ? $_POST['active'] : 'NA';
           
            mysqli_query($conn,"insert into blogs (btitle, bcontent, bactive) values ('$title', '$content', '$active')" );



            
        

        $sql = "SELECT btitle, bcontent  FROM blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['btitle']}</td></tr>";
        echo "<tr><td>{$row['bcontent']}</td></tr>";
    }

exit();
 
} else {
    echo "0 results";
}
        
        }
    ?>

</body>
</html> 