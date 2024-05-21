<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividir Select en Columnas con Select2</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-results__options {
            display: flex;
            flex-wrap: wrap;
        }
        .select2-results__option {
            flex: 1 1 30%; /* Ajusta el tamaño de las columnas */
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <select class="select2" style="width: 100%">
        <option>Opción 1</option>
        <option>Opción 2</option>
        <option>Opción 3</option>
        <option>Opción 4</option>
        <option>Opción 5</option>
        <option>Opción 6</option>
        <option>Opción 7</option>
        <option>Opción 8</option>
        <option>Opción 9</option>
    </select>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>
</html>