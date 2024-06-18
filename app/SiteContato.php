<?php

// Models = Classes que representam os objeto da aplicação
// Atraves dele podemos trazes os beneficios da orientação a objetos.
//
namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contatos_id', 'mensagem'];
}
