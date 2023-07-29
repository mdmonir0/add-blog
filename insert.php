<?php 
require "Blog.php";
$blog = new Blog;
$result = ''; 

$result = $blog->blogAdd();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Blogs</span>
                    <a href="add-blog.php" class="btn btn-outline-primary float-end ">+</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Si</th>
                            <th>Blog title</th>
                            <th>Blog description</th>
                            <th>Blog author</th>
                            <th>Blog Image</th>
                            <th>Blog Publication status</th>
                        </tr>
                        <?php while($blogs = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td>1 </td>
                            <td><?php echo $blogs['title'] ?></td>
                            <td><?php echo $blogs['description'] ?></td>
                            <td><?php echo $blogs['author'] ?></td>
                            <td><img src="<?php echo $blogs['image'] ?>" alt="" width="100"></td>
                            <td><?php echo $blogs['status'] == 1 ? 'Publish' : 'Unpublish' ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>