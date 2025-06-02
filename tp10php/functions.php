<?php
/**
 * Redirection vers une URL spécifiée
 */
function redirect($url) {
    header("Location: {$url}");
    exit;
}

/**
 * Affiche une erreur et redirige après quelques secondes vers une autre page
 */
function displayErrorAndRedirect($message, $url, $seconds = 3) {
    echo "<h1>{$message}</h1>";
    echo "Vous allez être redirigé vers <a href=\"{$url}\">cette page</a>. Si ce n'est pas le cas, cliquez <a href=\"{$url}\">ici</a>.";
    header("Refresh: {$seconds}; url={$url}");
    exit;
}
?>