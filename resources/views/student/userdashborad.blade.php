<!doctype html>
<html lang="en">

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALUD 360</title>
    <!-- Agregar el enlace al archivo de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Agregar el enlace al archivo de la biblioteca FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="bg-gray-100">


<!-- Navegación lateral -->
<aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
    <nav>
        <ul class="space-y-2">
            <li class="opcion-con-desplegable">
                <!-- Logo  -->
                <div id="logo" class="flex items-center">
                    <img src="image/cplogo2.png"/><br>
                </div>
            </li>
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Home</span>
                    </div>
                    <!-- <i class="fas fa-chevron-down text-xs"></i> -->
                </div>
            </li>
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-money-bill-wave mr-2"></i>
                        <span>Manage Account</span>
                    </div>
                    <!-- <i class="fas fa-chevron-down text-xs"></i> -->
                </div>

            </li>
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-chart-bar mr-2"></i>
                        <span>Career</span>
                    </div>
                    <!-- <i class="fas fa-chevron-down text-xs"></i> -->
                </div>
            </li>
            <li class="opcion-con-desplegable">
                <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-chart-bar mr-2"></i>
                        <span>Skill</span>
                    </div>
                    <!-- <i class="fas fa-chevron-down text-xs"></i> -->
                </div>

                <!-- Contenido principal -->
                <main class="container mx-auto p-4">

                    <!-- Aquí puedes agregar el contenido principal de tu página CRM -->
                    <!--

                     -->
                </main>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Obtener todas las opciones principales con desplegables
                        const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

                        // Agregar evento de clic a cada opción principal
                        opcionesConDesplegable.forEach(function (opcion) {
                            opcion.addEventListener("click", function () {
                                // Obtener el desplegable asociado a la opción
                                const desplegable = opcion.querySelector(".desplegable");

                                // Alternar la clase "hidden" para mostrar u ocultar el desplegable
                                desplegable.classList.toggle("hidden");
                            });
                        });
                    });
                </script>
</body>
</html>
<!-- Con estos cambios, hemos agregado iconos del lado izquierdo del texto en la navegación lateral y del lado derecho en las opciones desplegables. Además, se muestra un icono de flecha hacia abajo indicando que hay opciones ocultas que se desplegarán al hacer clic en el icono. ¡Espero que esto sea lo que buscas! Si tienes más preguntas o necesitas más asistencia, no dudes en preguntar. ¡Buena suerte con tu página CRM! -->
</body>
</html>
