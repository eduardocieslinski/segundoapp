<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //caso queira utilizar uma nomenclatura diferente para a tabela
    //procted $table = 'db_postagens';
    protected $fillable =[
        'title',
        'description',
        'content',
        'slug',
        'is_active',
        'user_id'

    ];
//criando a funçao para especificar o relacionamento entre os models "users" e 'posts'
    public function user(){
            return $this->belongsTo(User::class);


    }

    //criar uma nova funçao para especificar o relacionamento entre os models 'Category e 'Posts'
    public function categories(){
            return $this->belongsToMany(Category::class,'posts_categories');

    }

}
