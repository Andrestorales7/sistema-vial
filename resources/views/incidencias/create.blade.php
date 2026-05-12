<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Incidencia</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto py-10 px-4">

    <div class="bg-white shadow rounded-lg p-6">

        <h1 class="text-3xl font-bold mb-6">
            Nueva Incidencia
        </h1>

        <form action="{{ route('incidencias.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block mb-2 font-semibold">
                    Título
                </label>

                <input
                    type="text"
                    name="titulo"
                    class="w-full border rounded-lg p-3"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    rows="4"
                    class="w-full border rounded-lg p-3"
                    required
                ></textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">
                    Tipo
                </label>

                <select
                    name="tipo"
                    class="w-full border rounded-lg p-3"
                >
                    <option value="bache">Bache</option>
                    <option value="senalizacion">Señalización</option>
                    <option value="semaforo">Semáforo</option>
                    <option value="iluminacion">Iluminación</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-semibold">
                    Ubicación
                </label>

                <input
                    type="text"
                    name="ubicacion"
                    class="w-full border rounded-lg p-3"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block mb-2 font-semibold">
                    Prioridad
                </label>

                <select
                    name="prioridad"
                    class="w-full border rounded-lg p-3"
                >
                    <option value="baja">Baja</option>
                    <option value="media">Media</option>
                    <option value="alta">Alta</option>
                </select>
            </div>

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg"
            >
                Guardar Incidencia
            </button>

        </form>

    </div>

</div>

</body>
</html>