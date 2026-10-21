<?php
    $provincias=['Almería', 'Cádiz', 'Málaga', 'Sevilla', 'Granada', 'Huelva', 'Jaen', 'Pamplona'];
    sort($provincias);
    if($_SERVER['REQUEST_METHOD']=='POST'){
            //Venimos de un formulario procesamos los datose
            $nombre=htmlspecialchars(trim($_POST['nombre']));
            $email=htmlspecialchars(trim($_POST['email']));
            $password=htmlspecialchars(trim($_POST['password']));
            $provincia=htmlspecialchars(trim($_POST['provincia']));
            $administrador=(isset($_POST['administrador'])) ? $_POST['administrador'] : "No seleccionado";
            $administrador=htmlspecialchars(trim($administrador));
            $aficiones=(isset($_POST['aficiones'])) ? $_POST['aficiones'] : [];
            //var_dump($aficiones);
            if(count($aficiones)>0){
                foreach($aficiones as $indice=>$aficion){
                    $aficiones[$indice]=htmlspecialchars(trim($aficion));
                }
            }
            //var_dump($aficiones);

            echo "<b>Los datos son:</b><br>";
            echo "1.- Nombre=$nombre caracteres: ".strlen($nombre)."<br>";
            echo "2.- Email=$email <br>";
            echo "3.- Password=$password <br>";
            echo "4.- Provincia=$provincia caracteres: ".strlen($provincia)."<br>";
            echo "5.- Eres Administrador: $administrador <br>";
            echo "6.- Tus aficiones son: <br>";
            if(count($aficiones)==0){
                echo "NO seleccionaste ninguna afición :-(";
            }else{
                echo "<ol>";
                foreach($aficiones as $aficion){
                    echo "<li>$aficion</li>";
                }
                echo "</ol>";
            }            

    }else{
        //Pinto el form, es decir cargo la pagina
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Tailwind css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <form action="form1.php" method="POST"
        class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-5">

        <h2 class="text-2xl font-bold text-center text-gray-800">
            Formulario de registro
        </h2>

        <!-- Nombre -->
        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                Nombre
            </label>
            <input type="text" id="nombre" name="nombre"
                placeholder="Introduce tu nombre"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
                          focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                Email
            </label>
            <input type="email" id="email" name="email"
                placeholder="ejemplo@correo.com"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
                          focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                Password
            </label>
            <input type="password" id="password" name="password"
                placeholder="Introduce tu contraseña"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
                          focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Provincia -->
        <div>
            <label for="provincia" class="block text-sm font-medium text-gray-700 mb-1">
                Provincia
            </label>
            <select id="provincia" name="provincia"
                class="w-full border border-gray-300 rounded-lg px-3 py-2
                           focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Selecciona una provincia</option>
                <?php
                    foreach($provincias as $provincia){
                        echo "<option>$provincia</option>";
                    }
                ?>
            </select>
        </div>

        <!-- Administrador -->
        <fieldset>
            <legend class="block text-sm font-medium text-gray-700 mb-2">
                ¿Administrador?
            </legend>

            <div class="flex gap-6">
                <label class="flex items-center gap-2">
                    <input type="radio" name="administrador" value="SI"
                        class="text-blue-600 focus:ring-blue-500">
                    SI
                </label>

                <label class="flex items-center gap-2">
                    <input type="radio" name="administrador" value="NO"
                        class="text-blue-600 focus:ring-blue-500">
                    NO
                </label>
            </div>
        </fieldset>

        <!-- Aficiones -->
        <fieldset>
            <legend class="block text-sm font-medium text-gray-700 mb-2">
                Aficiones
            </legend>

            <div class="space-y-2">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="aficiones[]" value="Futbol"
                        class="rounded text-blue-600 focus:ring-blue-500">
                    Futbol
                </label>

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="aficiones[]" value="Tenis"
                        class="rounded text-blue-600 focus:ring-blue-500">
                    Tenis
                </label>

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="aficiones[]" value="Ping-Pong"
                        class="rounded text-blue-600 focus:ring-blue-500">
                    Pin-Pong
                </label>

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="aficiones[]" value="Natacion"
                        class="rounded text-blue-600 focus:ring-blue-500">
                    Natacion
                </label>
            </div>
        </fieldset>

        <!-- Botones -->
        <div class="flex gap-4 pt-2">
            <button type="submit"
                class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg
                           hover:bg-blue-700 transition">
                Enviar
            </button>

            <button type="reset"
                class="flex-1 bg-gray-500 text-white py-2 px-4 rounded-lg
                           hover:bg-gray-600 transition">
                Reset
            </button>
        </div>

    </form>

</body>

</html>
<?php } ?>