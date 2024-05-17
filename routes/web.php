<?php

use Illuminate\Support\Facades\Route;

/*
Registra as rotas para o web
Cookies e sessão

Route = Cuida dos roteamentos da aplicação, direciona as requisições para os controladores
definimos os metodos no route. ( podemos adicinonar os verbos http ( CRUD ) )

Passamos 2 metodos para o route ( 1º parametro = URL, 2º parametro = Ação ou função quando a URL for acessada )

*/

// Rotas individuais
Route::get('/', "PrincipalController@principal")->name('site.principal');

Route::get('/sobre-nos', "SobreNosController@sobreNos")->name('site.sobrenos');

Route::get('/contato', "ContatoController@contato")->name('site.contato');
Route::post('/contato', "ContatoController@contato")->name('site.contato');


Route::get('/login', function(){return "Login";})->name('site.login');

// Agrupar rotas em uma só
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return "Clientes";});
    Route::get('/fornecedores', 'FornecedorController@index');
    Route::get('/produtos', function(){return "produtos";});
});

Route::get('/teste/{p1}/{p2}', 'testeController@teste')->name('teste');

// Redirecionamento de rotas.
Route::get('/rota1', function(){
    echo "rota1";
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
// Route::redirect('/rota2', '/rota1');

// Rota de fallback
Route::fallback(function(){
    echo "A rota acessada não existe. <a href='".route('site.index')."'>Clique aqui para ir para a página inicial</a>";
});


// Rotas com varios parametros
Route::get('/contato/{nome}/{categoria_id}', function(
    string $nome = "teste nome",
    int $categoria_id = 1
    ){
        echo "estamos aqui: .$nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
// ROTA COM PARAMETRO. ( {nome} ), é correto adicionar os valores opcionais da esquerda para a direita.
// as rotas vao ser processadas quando os parametros enviadas forem compativeis com as condições da rota.


// passagem do controlador para a view ( Array associativo, Compact, With)
