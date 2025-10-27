<?php
echo "Olá, mundo!";

// Função que mostra a data e hora atuais
function mostrarDataHoraAtual(string $formato = 'd/m/Y H:i:s'): void {
    // Defina o fuso horário conforme necessário
    if (!ini_get('date.timezone')) {
        date_default_timezone_set('America/Sao_Paulo');
    }
    echo date($formato);
}

echo "\nData e hora atuais: ";
mostrarDataHoraAtual();
?>