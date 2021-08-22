<?php require_once("../partial/header.php") ?>
<?php
require_once("../inc/database.php");
$id = $_GET['id'];
$update_post = selectData($id);
foreach ($update_post as $postUpdate): ;?>
<div class= "container mt-3" >
    <form action="edit_social_model.php" method="POST">
    <input type="hidden" name="id" value="<?= $postUpdate['postid'] ?>">
        <div class="form-group ">
            <input type="text" class="form-control" name="title" placeholder="Title" required value="<?= $postUpdate['title'] ?>">
        </div>
      
        <div class="form-group ">
            <input type="text" rows="5" class="form-control" name="description" placeholder="Text" required value="<?= $postUpdate['description'] ?>">
        </div>
        <div class="form-group ">
            <input type="number" class="form-control" name="price" placeholder="Price" required value="<?= $postUpdate['price'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger form-control">Submit</button>
        </div>
    </form>

</div>
<?php endforeach; ?>
<?php include_once("../partial/footer.php") ?>