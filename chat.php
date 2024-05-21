<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sumar números desde un select</title>

    <link rel="stylesheet" href="./Estilos/normaliza.css">
</head>
<body>
    <h1>Sumar números desde un select</h1>

    <label for="numeros">Selecciona números:</label>
    <select id="numeros" multiple>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br><br>

    <button onclick="sumarNumeros()">Sumar</button><br><br>

    <label for="resultado">Resultado:</label>
    <input type="text" id="resultadoInput" readonly>

    <script>
        function sumarNumeros() {
            var select = document.getElementById("numeros");
            var selectedOptions = Array.from(select.selectedOptions);
            var suma = selectedOptions.reduce((total, option) => total + parseInt(option.value), 0);
            document.getElementById("resultadoInput").value = suma;
        }
    </script>
</body>
</html>
