<?php
// Recibe la página actual y el número de elementos por página
$paginaActual = $_POST['paginaActual'];
$elementosPorPagina = $_POST['elementosPorPagina'];

// Calcula el total de páginas (deberías obtener esto de tu base de datos)
// Aquí proporciono un valor arbitrario para propósitos de demostración
$totalResultados = 14; // Este valor debe ser calculado en base al total de resultados
$totalPaginas = ceil($totalResultados / $elementosPorPagina);

// Construye el paginador
$paginacionHtml = "";
for ($i = 1; $i <= $totalPaginas; $i++) {
    $paginacionHtml .= '<a class="' . ($i == $paginaActual ? 'active' : '') . '" onclick="cambiarPagina(' . $i . ')">' . $i . '</a>';
}

echo $paginacionHtml;
?>
