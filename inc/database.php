<?php
// connect to database 
function database()
{
    return new mysqli("localhost", "root", "", "shopping_db");
}
// fr display all item
function selectAll()
{
    return database()->query("SELECT * FROM posts ORDER BY postid DESC");
}
// delete function
function deleteData($id)
{
    return database()->query("DELETE FROM posts WHERE postid ='$id' ");
}
// Create item
function createItem($data)
{
    $title = $data['title'];
    // $userid = $data['userid'];
    $img_url = $data['img_url'];
    $description = $data['description'];
    $price = $data['price'];
    return database()->query("INSERT INTO posts(title, userid, img_url, description, price) VALUES('$title','1', '$img_url', '$description', '$price')");
}

// Update item
function updateData($data)
{
    $id = $data['id'];
    $title = $data['title'];
    // $userid = $data['userid'];
    // $img_url = $data['img_url'];
    $description = $data['description'];
    $price = $data['price'];
    return database()->query("UPDATE posts SET title='$title', description='$description', price='$price' WHERE postid = '$id'");
}
// Select item for update
function selectData($id)
{
    return database()->query("SELECT * FROM posts WHERE postid = '$id'");
}

// Funtion research

function research($value){

    $title = $value['search_bar'];
    
    return database()->query("SELECT * FROM posts WHERE title LIKE '%$title%'");
}


function getTotalPage() {
    // Result per pages
    $result = 5;

    // Check for set pages
    $page = 0;
    isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

    // check for page 1

    if($page > 1) {
        $start = ($page * $result) - $result;
    }else {
        $start = 0;
    }
    
  $data = database()->query("SELECT postid FROM posts");
  // Get total page 
  $numRow = $data->num_rows;

  $totalPage = $numRow / $result;
  return $totalPage;
}

