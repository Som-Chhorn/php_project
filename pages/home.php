
<br>
<?php
include_once("partial/header.php");
require_once("inc/database.php");
// Condition research else diplay item
$project = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $project = research($_POST);
} else {
  $project = selectAll();
}
if ($project->num_rows > 0) :
  foreach ($project as $myData) :
?>
    <div class="contain">
      <div class="card" style="width: 30rem;  ">
        <h2 style="margin-left:20px"><?= $myData['title']; ?></h2>
        <!-- upload image -->
        <img class="card-img-top" src="assets/images/<?= $myData['img_url']; ?>" alt="Card image cap">

        <div class="card-body">
          <p class="card-text"><?= $myData['description']; ?>
          </p>
          <h4><?= $myData['price']; ?>$</h4>
          <div class="d-flex justify-content-end">
            <div class="d-flex flex-column">
              <div class="d-flex justify-content-around">
                <a href="process/delete.php?id=<?= $myData['postid'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                <a href="process/edit_social_html.php?id=<?= $myData['postid'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
              </div>
              <div class="m-2">
                <p><?= $myData['date']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;
 else : ?>
  <h1>No result</h1>
<?php endif; ?>

<!-- Pagination -->
<div class="d-flex justify-content-center">
  <ul class="pagination">
    <?php $pages = getTotalPage();
    for ($i = 1; $i <= $pages + 1; $i++) : ?>
      <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
    <?php endfor ?>
  </ul>
</div>

<div class="text-center p-3" style="background-color: yellow;">
    Address: #20B, Street 371, Sangkat Tek Thla, 
    Khan Sen Sok, Phnom Penh, Cambodia 
    Email: som.chhorn@student.passerellesnumeriques.org   
    Tel: 0882271855
    <a class="text-white" href="https://mdbootstrap.com/"></a>
  </div>
<?php require_once("partial/footer.php"); ?>