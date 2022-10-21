<!DOCTYPE html>
<html>
<body>
<h3>Cadastro Aluno</h3>
<form action="/cadastro.php" method="post">
  <label for="idAluno">ID Aluno:</label><br>
  <input type="text" id="idAluno" name="idAluno"><br>
  <label for="NomeAluno">Nome Aluno:</label><br>
  <input type="text" id="NomeAluno" name="NomeAluno"><br>
  <input type="submit" value="Cadastrar Aluno">
</form>

<h3>Cadastro Professor</h3>
<form action="/cadastro_professor.php" method="post">
  <label for="idProfessor">ID Professor:</label><br>
  <input type="text" id="idProfessor" name="idProfessor"><br>
  <label for="NomeProfessor">Nome Professor:</label><br>
  <input type="text" id="NomeProfessor" name="NomeProfessor"><br>
  <input type="submit" value="Cadastrar Professor">
</form>

<br>
<br>
<a href="alunos.php">Alunos</a>
<br>
<br>
<a href="professores.php">Professores</a>
<br>
<?php 

?>

</body>
</html>