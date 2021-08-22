<?php require_once("../partial/header.php") ?>
<br>
<div class="container mt-3">
    <form action="create_social_model.php" method="POST" enctype="multipart/form-data">
        <div class="form-group ">
            <input type="text" class="form-control" name="title" placeholder="Title" required>
        </div>
        
        <div class="form-group ">
        <input id="input-b2" name="file" type="file" class="file" data-show-preview="false">
        </div>
        <div class="form-group ">
            <textarea type="text" rows="5" class="form-control" name="description" placeholder="Text" required></textarea>
        </div>
        <div class="form-group ">
            <input type="number" class="form-control" name="price" placeholder="Price" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-danger form-control">Submit</button>
        </div>
    </form>
</div>
<?php include_once("../partial/footer.php") ?>