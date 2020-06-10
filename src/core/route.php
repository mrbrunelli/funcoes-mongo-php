<?php

$route[] = ['/', 'dashController'];

$route[] = ['usuarios', 'usuarios/tableview'];
$route[] = ['usuarios_add', 'usuarios/add'];
$route[] = ['usuarios_save', 'usuarios/save'];

$route[] = ['produtos', 'produtos/tableview'];
$route[] = ['produtos_add', 'produtos/add'];

$route[] = ['marcas', 'marcas/tableview'];
$route[] = ['marcas_add', 'marcas/add'];
$route[] = ['marcas_save', 'marcas/save'];







//return $route;