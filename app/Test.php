<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['text', 'is_enabled', 'created_at', 'updated_at'];

    protected $casts = [
        'is_enabled' => 'boolean',
    ];

    //Опишите в модели Test публичный статический метод,
    // который найдёт в таблице tests строку с максимальным id,
    // обновит значение text на ‘So what about pepito?’ и значение is_enabled на 1.
    // Метод должен возвращать модель со значениями до изменения.
    public static function pepito() {
        $request = Test::whereRaw('id = (select max(`id`) from tests)');
        $before = $request->get();
        $request->update(['text' => 'So what about pepito?', 'is_enabled' => 1]);
        return $before;
    }

    //Опишите в модели Test публичный статический метод,
    // который принимает на вход параметр типа int
    // и ищет в таблице tests строку с id равным этому параметру.
    // Если строка нашлась, метод должен вернуть модель.
    // Если строка не нашлась, метод должен вернуть null.
    public static function findById($id) {
        return Test::find($id)->get();
    }
}
