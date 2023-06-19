<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `usuario` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Dados excluídos com sucesso");
} else {
  echo "Failed: " . mysqli_error($conn);
}
