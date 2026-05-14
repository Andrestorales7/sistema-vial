<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias Viales</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
@endif
</head>
<body class="bg-gray-100">

    <div class="max-w-7xl mx-auto py-10 px-4">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">
                Incidencias Viales
            </h1>

            <a href="{{ route('incidencias.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                Nueva Incidencia
            </a>
        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-4 text-left">Título</th>
                        <th class="p-4 text-left">Tipo</th>
                        <th class="p-4 text-left">Prioridad</th>
                        <th class="p-4 text-left">Estado</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($incidencias as $incidencia)
                        <tr class="border-t">
                            <td class="p-4">
                                {{ $incidencia->titulo }}
                            </td>

                            <td class="p-4">
                                {{ $incidencia->tipo }}
                            </td>

                            <td class="p-4">
                                {{ $incidencia->prioridad }}
                            </td>

                            <td class="p-4">
                                {{ $incidencia->estado }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-4 text-center text-gray-500">
                                No hay incidencias registradas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>