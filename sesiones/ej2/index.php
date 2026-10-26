<?php
    session_start();
    require "usuarios.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=htmlspecialchars(trim($_POST['email']));
        $password=htmlspecialchars(trim($_POST['password']));
        foreach($usuariosValidos as $usuario){
            if($usuario[0]==$email AND $usuario[1]==$usuario[1]){
                // Todo bien email y password correctos
                $_SESSION['email']=$email;
                $_SESSION['perfil']=$usuario[2];
                header("Location:sitio.php");
                exit;
            }
        }
        //si he llegado hasta aqui es por que algo ha ido mal
        $_SESSION['mensaje']="Email o password incorrectos!!!";

    }
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

<body>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-950 via-indigo-950 to-slate-900 px-4 py-10">

        <div class="w-full max-w-md rounded-2xl border border-white/10 bg-white/10 p-8 shadow-2xl backdrop-blur-xl sm:p-10">

            <!-- Cabecera -->
            <div class="mb-8 text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-indigo-500 shadow-lg shadow-indigo-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-8 w-8 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.1a7.5 7.5 0 0 1 15 0A17.9 17.9 0 0 1 12 21.75c-2.7 0-5.25-.6-7.5-1.65Z" />
                    </svg>
                </div>

                <h1 class="text-3xl font-bold tracking-tight text-white">
                    ¡Bienvenido!
                </h1>
                <p class="mt-2 text-sm text-slate-300">
                    Introduce tus credenciales para acceder
                </p>
            </div>

            <!-- Formulario -->
            <form action="index.php" method="post" class="space-y-5">

                <!-- Email -->
                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-slate-200">
                        Correo electrónico
                    </label>

                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15A2.25 2.25 0 0 0 2.25 6.75m19.5 0-9.75 6.75L2.25 6.75" />
                        </svg>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="nombre@ejemplo.com"
                            autocomplete="email"
                            required
                            class="w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-white outline-none transition placeholder:text-slate-500 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500/30" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="mb-2 block text-sm font-medium text-slate-200">
                        Contraseña
                    </label>

                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 0 0-9 0v3.75m-.75 0h10.5A2.25 2.25 0 0 1 19.5 12.75v6A2.25 2.25 0 0 1 17.25 21h-10.5A2.25 2.25 0 0 1 4.5 18.75v-6A2.25 2.25 0 0 1 6.75 10.5Z" />
                        </svg>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            autocomplete="current-password"
                            required
                            class="w-full rounded-xl border border-white/10 bg-slate-950/40 py-3.5 pl-12 pr-4 text-white outline-none transition placeholder:text-slate-500 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500/30" />
                    </div>
                </div>

                <!-- Botones -->
                <div class="flex gap-3 pt-3">
                    <button
                        type="submit"
                        class="flex-1 rounded-xl bg-indigo-500 px-5 py-3.5 font-semibold text-white shadow-lg shadow-indigo-500/25 transition hover:bg-indigo-400 hover:shadow-indigo-500/40 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-slate-900 active:scale-[0.98]">
                        Iniciar sesión
                    </button>

                    <button
                        type="reset"
                        class="rounded-xl border border-white/15 bg-white/5 px-5 py-3.5 font-semibold text-slate-200 transition hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-slate-400 active:scale-[0.98]">
                        Reset
                    </button>
                </div>

            </form>

            <!-- Pie -->
             <?php if(isset($_SESSION['mensaje'])){ 
                echo "<p class='text-red-600 italic tetx-sm'>".$_SESSION['mensaje']."</p>";
                unset($_SESSION['mensaje']); //para crear una variable de sesion de un solo uso
                // la usamos y la destruimos
             }
             ?>

        </div>
    </div>

</body>

</html>