<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColaboratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colaborators')->insert([
            'surname' => 'Петров',
            'name' => 'Хусейн',
            'patronymic' => 'Альбертович',
            'department' => 'ДИИ',
            'position' => 'Инженер',
            'status' => 1,
            'contract' => '1/12 от 25.11.12',
            'clearance' => 0,
            'address' => 'Москва',
            'telefone' => '8264589632',
            'characteristic' => 'Хороший работник',
        ]);

        DB::table('colaborators')->insert([
            'surname' => 'Петрова',
            'name' => 'Ирина',
            'patronymic' => 'Альбертовна',
            'department' => 'ДИИ',
            'position' => 'Инженер',
            'status' => 1,
            'contract' => '2/12 от 25.12.12',
            'clearance' => 0,
            'address' => 'Москва',
            'telefone' => '8264589633',
            'characteristic' => 'Красивая',
        ]);

        DB::table('colaborators')->insert([
            'surname' => 'Джексон',
            'name' => 'Питер',
            'patronymic' => 'Иванович',
            'department' => 'ДПР ТЭК',
            'position' => 'ГИП',
            'status' => 1,
            'contract' => '1/13 от 12.01.13',
            'clearance' => 0,
            'address' => 'Москва',
            'telefone' => '8263589633',
            'characteristic' => 'Добросовестный',
        ]);
    }
}
