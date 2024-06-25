document.getElementById('corretorForm').addEventListener('submit', function(event) {
    var cpf = document.getElementById('cpf').value;
    var creci = document.getElementById('creci').value;
    var name = document.getElementById('name').value;

    if (cpf.length !== 11) {
        alert('CPF deve ter 11 caracteres');
        event.preventDefault();
    }

    if (creci.length < 2 || name.length < 2) {
        alert('Creci e Nome devem ter pelo menos 2 caracteres');
        event.preventDefault();
    }
});
