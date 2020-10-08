<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'letra', 'preco', 'avaliacao', 'usabilidade'
    ];

    protected static function booted()
    {
    	static::deleting(function (Jogo $jogo){
    		Log::channel('stderr')->info('Evento JogoDeleted'.$jogo->id);
    		Storage::disk('public')->delete($jogo->image->path);
    	});
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function image()
    {
    	return $this->hasOne('App\Models\Image');
    }
}
