<?php
header('Content-Type: application/javascript');

// Pega as variáveis de ambiente da Railway ou usa os valores padrão
$pixelId = getenv('UTMIFY_PIXEL_ID') ?: "67c65ea78480a2789186da08";

echo "window.ENV_PIXEL_ID = '$pixelId';";
?>
