<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traduction</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}


h1 {
  text-align: center;
  color: #333;
  background-color: #ff7f00;
  padding: 20px;
  margin: 0;
}


form {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}


label {
  display: block;
  margin-top: 10px;
  color: #333;
}


select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


input[type="text"], input[type="submit"] {
  width: 80%;
  padding: 10px;
  margin-top: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


input[type="submit"] {
  background-color: #ff7f00;
  color: #333;
  font-weight: bold;
  cursor: pointer;
}


h1.result {
  text-align: center;
  color: #333;
  background-color: #ffca28;
  padding: 20px;
  margin: 20px auto;
  max-width: 400px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}

</style>
<body>
  <h1>Traducteur Anglais-Français / Français-Anglais</h1>
  <form action="translate.php" method="post">
    <label for="source-lang">Langue source :</label>
    <select name="source-lang" id="source-lang">
      <option value="Anglais">Anglais</option>
      <option value="Français">Français</option>
    </select>
    <br>
    <label for="target-lang">Langue cible :</label>
    <select name="target-lang" id="target-lang">
      <option value="Français">Français</option>
      <option value="Anglais">Anglais</option>
    </select>
    <br>
    <input type="text" name="word" placeholder="Entrez un mot">
    <input type="submit" value="Traduire">
  </form>
</body>
</html>
