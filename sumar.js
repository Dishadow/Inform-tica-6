document.getElementById('sumButton').addEventListener('click', function() {
    var caja = parseFloat(document.getElementById('caja').value);
    var bancos = parseFloat(document.getElementById('bancos').value);
    
    if (!isNaN(caja) && !isNaN(bancos)) {
      var resultado = caja + bancos;
      document.getElementById('resultado').value = resultado;
    } else {
      alert('Por favor, ingresa números válidos en los campos.');
    }
  });


  