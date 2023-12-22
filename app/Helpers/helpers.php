<?php
function page_title($slug)
{
    $routes = [
        'dashboard' => 'Dashboard',
        'usuarios' => 'Usuários',
        'imobiliarias' => 'Imobiliária',
        'clientes' => 'Clientes',
        'imoveis' => 'Imóveis',
        'propostas' => 'Propostas',
        'contratos' => 'Contratos',
    ];

    return isset($routes[$slug]) ? $routes[$slug] : env('APP_TITLE');
}
