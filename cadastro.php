<?php include 'dbconnect.php' ?>

<?php 
$idAluno = $_POST["idAluno"];
$nomeAluno = $_POST["NomeAluno"];

$sql = "INSERT INTO aluno (idAluno, nomeAluno) 
VALUES ($idAluno, '$nomeAluno')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


