<?php

use Illuminate\Support\Facades\Request;

function page_title()
{
    $slug = str_replace('-', ' ', Request::path());
    $routes = [
        'dashboard' => 'Dashboard',
        'usuarios' => 'Usuários',
        'imobiliarias' => 'Imobiliárias',
        'clientes' => 'Clientes',
        'imoveis' => 'Imóveis',
        'propostas' => 'Propostas',
        'contratos' => 'Contratos',
    ];

    return isset($routes[$slug]) ? $routes[$slug] : env('APP_TITLE');
}
