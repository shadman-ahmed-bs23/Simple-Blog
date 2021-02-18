<?php 
    include "./includes/class-autoload.inc.php";
    require_once("./templates/header.php");
?>
<div class="text-center">
    <button class="my-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">Create a new Post</button>
</div>

<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- form input -->
                <form method="POST" action="process.php">
                    <div class="form-group">
                        <label>Title: </label>
                        <input class="form-control" name="post-title" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Content: </label>
                        <textarea class="form-control"  name="post-content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Author: </label>
                        <input class="form-control" name="post-author" type="text" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
<?php 
    $posts = new Posts();
    if($posts->getPost()) {  //Get all posts
        foreach($posts->getPost() as $post) {
            echo '<div class="col-md-6">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo "<h3 class='card-title'>" . $post['title'] . "</h3>";
            echo "<p class='card-text'>" . $post['body'] . "</p>";
            echo "<h6 class='card-subtitle text-muted text-right'>Author: " . $post['author'] . "</h6>";
            echo "<a  href='editForm.php?id=" . $post['id'] . "' class='btn btn-warning mt-3'>Edit</a> ";
            echo "<a href='process.php?send=del&id=" . $post['id'] . "' class='btn btn-danger mt-3'>Delete</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }  
    else {
        echo "<p class='mt-5 mx-auto'>Post is empty...</p>";
    }
?>
</div>

<?php 
    require_once("./templates/footer.php");
?>