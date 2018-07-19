<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// Nom de la class = nom de la table au singulier
class Post extends Model
{
	public $timestamps = false;
	public $fillable = ['title', 'body'];
}