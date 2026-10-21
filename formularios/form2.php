<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="green">
    <form method="POST" action="action2.php">
        <label>1.- Nombre:</label>
        <input type="text" name="nombre" placeholder="Tu nombre..." value="" size="50" />
        <br>
        <label>2.- Email:</label>
        <input type="email" name="email" placeholder="Tu correo..." value="" />
        <br>
        <label>3.- Password:</label>
        <input type="password" name="password" placeholder="Tu password..." value="" />
        <br><br>
        <label>4.- Provincia</label>
        <select name="provincia">
            <option>Elige una provincia...</option>
            <option>Almeria</option>
            <option>Cadiz</option>
            <option>Malaga</option>   
            
        </select>
        <br>
        <!-- Tipo radio -->
         <label>5.- Administrador</label>
         <br>
         <input type='radio' name='admin' value='SI' />&nbsp;<label>SI</label><br>
         <input type='radio' name='admin' value='NO' />&nbsp;<label>NO</label>
         <br>
         <!-- Checkbox --> <label>6.- Aficiones</label>
         <br>
         <input type='checkbox' name='aficiones[]' value='Futbol' />&nbsp;<label>Futbol</label><br>
         <input type='checkbox' name='aficiones[]' value='Tenis' />&nbsp;<label>Tenis</label><br>
         <input type='checkbox' name='aficiones[]' value='Natación' />&nbsp;<label>Natación</label><br>
         <input type='checkbox' name='aficiones[]' value='Ping Pong' />&nbsp;<label>Ping Pong</label>

        <!-- Botones -->
         <br><br>
         <input type='submit' />&nbsp;&nbsp;&nbsp;
         <input type='reset' />

    </form>
</body>
</html>