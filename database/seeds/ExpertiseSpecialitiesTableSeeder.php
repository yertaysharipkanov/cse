<?php

use Illuminate\Database\Seeder;
use App\ExpertiseSpeciality;

class ExpertiseSpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = [
            [ 'name' => 'Судебно-экспертное исследование почерка и подписей', 'code' => '1.1', 'expertise_type_id' => 1 ],
            [ 'name' => 'Судебно-техническое исследование документов', 'code' => '1.2', 'expertise_type_id' => 1 ],
            [ 'name' => 'Судебно-автороведческое исследование', 'code' => '1.3', 'expertise_type_id' => 1 ],
            [ 'name' => 'Судебно-экспертное габитологическое исследование', 'code' => '2.1', 'expertise_type_id' => 2 ],
            [ 'name' => 'Судебно-экспертное фонографическое исследование. Спектральное (инструментальное) исследование голоса и звучащей речи', 'code' => '3.1', 'expertise_type_id' => 3 ],
            [ 'name' => 'Судебно-экспертное фонографическое исследование. Аудитивное и лингвистическое исследования голоса и звучащей речи', 'code' => '3.2', 'expertise_type_id' => 3 ],
            [ 'name' => 'Судебно-экспертное фототехническое исследование', 'code' => '4.1', 'expertise_type_id' => 4 ],
            [ 'name' => 'Судебно-экспертное трасологическое исследование', 'code' => '5.1', 'expertise_type_id' => 5 ],
            [ 'name' => 'Судебно-экспертное баллистическое исследование', 'code' => '6.1', 'expertise_type_id' => 6 ],
            [ 'name' => 'Судебно-экспертное исследование лакокрасочных материалов, покрытий и полимерных материалов', 'code' => '7.1', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование нефтепродуктов и горюче-смазочных материалов', 'code' => '7.2', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование металлов и сплавов', 'code' => '7.3', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование почв', 'code' => '7.4', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование волокнистых материалов и изделий из них', 'code' => '7.5', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование спиртосодержащих жидкостей', 'code' => '7.6', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование специальных химических веществ', 'code' => '7.7', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование изделий из стекла, керамики и силикатных строительных материалов', 'code' => '7.8', 'expertise_type_id' => 7 ],
            [ 'name' => 'Судебно-экспертное исследование обстоятельств дорожно-транспортных происшествий', 'code' => '8.1', 'expertise_type_id' => 8 ],
            [ 'name' => 'Судебно-экспертное транспортно-трасологическое исследование', 'code' => '8.2', 'expertise_type_id' => 8 ],
            [ 'name' => 'Судебно-экспертное исследование транспортных средств', 'code' => '8.3', 'expertise_type_id' => 8 ],
            [ 'name' => 'Судебно-экспертное исследование технического состояния дороги, дорожных условий на месте ДТП', 'code' => '8.4', 'expertise_type_id' => 8 ],
            [ 'name' => 'Судебно-экспертное исследование хозяйственных операций', 'code' => '9.1', 'expertise_type_id' => 9 ],
            [ 'name' => 'Судебно-экспертное бухгалтерское исследование', 'code' => '9.2', 'expertise_type_id' => 9 ],
            [ 'name' => 'Судебно-экспертное финансово-кредитное исследование', 'code' => '9.3', 'expertise_type_id' => 9 ],
            [ 'name' => 'Судебно-экспертное финансово-бюджетное исследование', 'code' => '9.4', 'expertise_type_id' => 9 ],
            [ 'name' => 'Судебно-экспертное товароведческое исследование непродовольственных товаров', 'code' => '10.1', 'expertise_type_id' => 10 ],
            [ 'name' => 'Судебно-экспертное товароведческое исследование продовольственных товаров', 'code' => '10.2', 'expertise_type_id' => 10 ],
            [ 'name' => 'Судебно-экспертное автотовароведческое исследование', 'code' => '10.3', 'expertise_type_id' => 10 ],
            [ 'name' => 'Судебно-экспертное строительно-товароведческое исследование', 'code' => '10.4', 'expertise_type_id' => 10 ],
            [ 'name' => 'Судебно-экспертное товароведческое исследование аудиовизуального и программного продукта', 'code' => '10.5', 'expertise_type_id' => 10 ],
            [ 'name' => 'Судебно-экспертное строительно-экономическое исследование зданий и сооружений', 'code' => '11.1', 'expertise_type_id' => 11 ],
            [ 'name' => 'Судебно-экспертное строительно-техническое исследование зданий и сооружений', 'code' => '11.2', 'expertise_type_id' => 11 ],
            [ 'name' => 'Судебно-экспертное технологическое исследование', 'code' => '12.1', 'expertise_type_id' => 12 ],
            [ 'name' => 'Судебно-экспертное исследование средств компьютерной технологии', 'code' => '12.2', 'expertise_type_id' => 12 ],
            [ 'name' => 'Судебно-экспертное исследование обстоятельств пожаров', 'code' => '13.1', 'expertise_type_id' => 13 ],
            [ 'name' => 'Судебно-экспертное электротехническое исследование', 'code' => '13.2', 'expertise_type_id' => 13 ],
            [ 'name' => 'Судебно-экспертное исследование обстоятельств взрывов', 'code' => '14.1', 'expertise_type_id' => 14 ],
            [ 'name' => 'Судебно-экспертное исследование наркотических средств, психотропных веществ, их аналогов и прекурсоров', 'code' => '15.1', 'expertise_type_id' => 15 ],
            [ 'name' => 'Судебно-экспертное биологическое исследование объектов растительного происхождения', 'code' => '16.1', 'expertise_type_id' => 16 ],
            [ 'name' => 'Судебно-экспертное биологическое исследование объектов животного происхождения', 'code' => '16.2', 'expertise_type_id' => 16 ],
            [ 'name' => 'Судебно-экспертное молекулярно-генетическое исследование', 'code' => '17.1', 'expertise_type_id' => 17 ],
            [ 'name' => 'Судебно-экспертное психолого-криминалистическое исследование', 'code' => '18.1', 'expertise_type_id' => 18 ],
            [ 'name' => 'Судебно-экспертное психолого-филологическое исследование', 'code' => '18.2', 'expertise_type_id' => 18 ],
            [ 'name' => 'Судебно-экспертное инженерно-психофизиологическое исследование', 'code' => '18.3', 'expertise_type_id' => 18 ],
            [ 'name' => 'Судебно-экспертное экологическое исследование', 'code' => '19.1', 'expertise_type_id' => 19 ],
            [ 'name' => 'Судебно-экспертное исследование генномодифицированных организмов', 'code' => '20.1', 'expertise_type_id' => 20 ],
            [ 'name' => 'Судебно-экспертное религиоведческое исследование', 'code' => '21.1', 'expertise_type_id' => 21 ],
            [ 'name' => 'Судебно-экспертное исследование железнодорожного транспорта', 'code' => '22.1', 'expertise_type_id' => 22 ],
            [ 'name' => 'Судебное общеэкспертное исследование трупа', 'code' => '23.1', 'expertise_type_id' => 23 ],
            [ 'name' => 'Судебно-экспертное гистологическое исследование трупного материала', 'code' => '23.2', 'expertise_type_id' => 23 ],
            [ 'name' => 'Судебно-экспертное гистохимическое исследование трупного материала', 'code' => '23.2', 'expertise_type_id' => 23 ],
            [ 'name' => 'Судебно-экспертное химико - токсикологическое исследование трупного материала', 'code' => '23.4', 'expertise_type_id' => 23 ],
            [ 'name' => 'Судебно-экспертное криминалистическое исследование трупного материала', 'code' => '23.5', 'expertise_type_id' => 23 ],
            [ 'name' => 'Судебное общеэкспертное исследование потерпевших, обвиняемых и других лиц', 'code' => '24.1', 'expertise_type_id' => 24 ],
            [ 'name' => 'Судебно-экспертное химико - токсикологическое исследование биологических объектов от живого лица', 'code' => '24.2', 'expertise_type_id' => 24 ],
            [ 'name' => 'Судебное общеэкспертное исследование по материалам уголовных, гражданских и административных дел', 'code' => '25.1', 'expertise_type_id' => 25 ],
            [ 'name' => 'Судебно-экспертное серологическое исследование биологических объектов', 'code' => '26.1', 'expertise_type_id' => 26 ],
            [ 'name' => 'Судебно-экспертное медицинское исследование волос.', 'code' => '26.2', 'expertise_type_id' => 26 ],
            [ 'name' => 'Судебно-экспертное цитологическое исследование', 'code' => '26.3', 'expertise_type_id' => 26 ],
            [ 'name' => 'Судебно-экспертное медицинское криминалистическое исследование', 'code' => '26.4', 'expertise_type_id' => 26 ],
            [ 'name' => 'Судебно-экспертное химико - токсикологическое исследование объектов не биологического происхождения.', 'code' => '26.5', 'expertise_type_id' => 26 ],
            [ 'name' => 'Судебно-экспертное биохимическое исследование биологических объектов', 'code' => '27.1', 'expertise_type_id' => 27 ],
            [ 'name' => 'Судебно-экспертное гистохимическое исследование трупного материала', 'code' => '23.3', 'expertise_type_id' => 23 ]
        ];

        foreach ($seeders as $seeder) {
            $newSeeder = new ExpertiseSpeciality();

            foreach ($seeder as $row => $value) $newSeeder[$row] = $value;

            $newSeeder->save();
        }
    }
}
