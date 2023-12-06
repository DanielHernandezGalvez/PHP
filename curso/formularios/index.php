<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="recibe.php" method="post" name="">
        <input type="text" placeholder="Nombre: " name="nombre" />
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">

        <select name="year" id="">
           <?php 
           $year = 1990;

           while ($year <= date("Y")) {
             echo "<option value=\"$year\">$year</option>";
             $year++;
           }
           ?>
          
            
        </select>

        <label for="terminos">Aceptar los términos</label>
        <input type="checkbox" name="terminos" id="terminos">
       
        <input type="submit" value="Enviar">
    </form>
</body>

</html>