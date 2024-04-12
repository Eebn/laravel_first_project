<?php

namespace App\Http\Controllers;

use App\Models\Dream;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Mime\DraftEmail;

class DreamController extends BaseController
{
    public function show() {

//        $dream = Dream::where('percent', 100)->first();
//        dump($dream->title);

        $dreams = Dream::all();// вывод всех полей с таблицы
        dump($dreams);

//       $dream = Dream::find(1);// метод find выводит инфу с таблицы с id = 1
//       dd($dream);
////
//       $dream = Dream::find(1);
//       dd($dream->is_done);// вывод инфы с таблицы выборкой атрибута

//       $dreams = Dream::all();
//       foreach ($dreams as $dream) {
//            dump($dream->about);//вывод инфы с таблицы с выборкой атрибута исп. метод all
//       }
//       dd('end');

//       $dreams = Dream::where('percent', 100)->get();
//       foreach ($dreams as $dream) {
//
//            dump($dream->title);
//         }
//       dd('end');
}


public function create()
{
    $dreamsArr = [
        [
            'title' => 'First dream',
            'about' => 'I want to be Developer',
            'is_done' => 0,
            'percent' => 30,
        ],
        [
            'title' => 'Second dream',
            'about' => 'I want to live in Minsk',
            'is_done' => 1,
            'percent' => 100,
        ]
    ];

        foreach ($dreamsArr as $item) {
           Dream::query()->create($item);
        }
        dd('created');

//    Dream::create([
//
//        'title' => 'First dream',
//        'about' => 'I want to be Developer',
//        'is_done' => 0,
//        'percent' => 30,
//    ]);
//    dd('created');
//
    }

    public function update()
    {
        $dream = Dream::query()->find(2);

        $dream->update([
            'is_done' => 1
        ]);
        dd('updated');
    }

    public function delete()
    {
//        $dream = Dream::find(1);
//        $dream->delete();//удаление 2-й колонки
//        dd('deleted');

            $dream = Dream::withTrashed()->find(1);//найди вместе с мусоркой
            $dream->restore();//восстановление
            dd('restored');
    }
}
