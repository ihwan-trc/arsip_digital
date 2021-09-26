
<?php

$page = $_GET['page'];
$action = $_GET['action'];

if ($page == "keluar") {
  if ($action == "") {
    include "page/keluar/keluar.php";
  } elseif ($action == "add") {
    include "page/keluar/add.php";
  } elseif ($action == "edit") {
    include "page/keluar/edit.php";
  } elseif ($action == "delete") {
    include "page/keluar/delete.php";
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
} else {
  include "layout/dashboard.php";
}

?>