
<?php

$page = $_GET['page'];
$action = $_GET['action'];

if ($page == "masuk") {
  if ($action == "") {
    include "page/masuk/masuk.php";
  } elseif ($action == "add") {
    include "page/masuk/add.php";
  } elseif ($action == "edit") {
    include "page/masuk/edit.php";
  } elseif ($action == "delete") {
    include "page/masuk/delete.php";
  }
} elseif ($page == "arsip") {
  if ($action == "") {
    include "page/arsip/arsip.php";
  } elseif ($action == "add") {
    include "page/arsip/add.php";
  } elseif ($action == "edit") {
    include "page/arsip/edit.php";
  } elseif ($action == "delete") {
    include "page/arsip/delete.php";
  }
} elseif ($page == "verif") {
  if ($action == "") {
    include "page/masuk/verif.php";
  }
} elseif ($page == "user") {
  if ($action == "") {
    include "page/user/user.php";
  } elseif ($action == "add") {
    include "page/user/add.php";
  }
} elseif ($page == "pass") {
  if ($action == "") {
    include "page/user/pass.php";
  }
} else {
  include "layout/dashboard.php";
}

?>