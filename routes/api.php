<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Rotas da API
Responder dados para as requisiçoes feitas.
WEB E MOBILE

Questões tecnicas da aplicação ( segurança, performance, etc )

-> Parametro são fundamentais para logica da aplicação

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
