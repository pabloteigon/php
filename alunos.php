<?php include 'dbconnect.php' ?>

<h3> Alunos </h3>

<?php 
$sql = "SELECT * FROM aluno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["idAluno"]. " - Name: " . $row["nomeAluno"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>