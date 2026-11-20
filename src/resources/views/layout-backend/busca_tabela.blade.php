<div class="js-busca-wrapper" style="width: 50%; margin-bottom: 8px;">
  <div class="form-group" style="margin-bottom: 0;">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-search"></i></span>
      <input type="text" class="form-control js-busca-dinamica" placeholder="Digite para filtrar a lista...">
      <span class="input-group-btn">
        <button type="button" class="btn btn-default js-busca-limpar" title="Limpar filtro">&times;</button>
      </span>
    </div>
    <span class="help-block js-busca-contador" style="margin: 5px 0 0;"></span>
  </div>
</div>

<script>
(function () {
  'use strict';

  function normalizar(valor) {
    var texto = String(valor).toLowerCase();
    if (texto.normalize) {
      texto = texto.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }
    return texto.trim();
  }

  function iniciarBusca(input) {
    var box = input.closest('.box');
    if (!box) { return; }

    var tabela = box.querySelector('table');
    if (!tabela) { return; }

    var corpo = tabela.tBodies[0];
    if (!corpo) { return; }

    var contador = box.querySelector('.js-busca-contador');
    var botaoLimpar = box.querySelector('.js-busca-limpar');

    function filtrar() {
      var termo = normalizar(input.value);
      var total = corpo.rows.length;
      var visiveis = 0;

      for (var i = 0; i < total; i++) {
        var linha = corpo.rows[i];
        var clone = linha.cloneNode(true);
        var modais = clone.querySelectorAll('.modal');
        for (var j = 0; j < modais.length; j++) {
          modais[j].parentNode.removeChild(modais[j]);
        }

        var texto = normalizar(clone.textContent);
        var mostrar = (termo === '') || (texto.indexOf(termo) !== -1);

        linha.style.display = mostrar ? '' : 'none';
        if (mostrar) { visiveis++; }
      }

      if (contador) {
        contador.textContent = (termo === '') ? '' : visiveis + ' de ' + total + ' registro(s) encontrado(s)';
      }
    }

    input.addEventListener('input', filtrar);

    if (botaoLimpar) {
      botaoLimpar.addEventListener('click', function () {
        input.value = '';
        filtrar();
        input.focus();
      });
    }
  }

  function iniciar() {
    var campos = document.querySelectorAll('.js-busca-dinamica');
    for (var i = 0; i < campos.length; i++) {
      iniciarBusca(campos[i]);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', iniciar);
  } else {
    iniciar();
  }
})();
</script>
