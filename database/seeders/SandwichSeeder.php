<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sandwiches')->insert([
            [
                'id' => 1,
                'titel' => 'Broodje gezond',
                'omschrijving' => 'Lekker broodje gezond met kaas, veldsla, komkommer, tomaat & ei',
                'symbolen' => 'gluten.png, ei.png, melk.png',
                'prijs' => 3.50,
                'image_path' => 'broodje_gezond.png',
                'duurzaamheid' => '5_sterren.png',
                'reviews' => '4_sterren.png'
            ],
            [
                'id' => 2,
                'titel' => 'Broodje bal met satésaus',
                'omschrijving' => 'Broodje bal van rundergehakt met ei, komkommer, bosui, sla & satésaus',
                'symbolen' => 'gluten.png, ei.png, pinda.png, soya.png',
                'prijs' => 4.00,
                'image_path' => 'broodje_bal.png',
                'duurzaamheid' => '3_sterren.png',
                'reviews' => '4_sterren.png'
            ],
            [
                'id' => 3,
                'titel' => 'Broodje hete kip',
                'omschrijving' => 'Pittig broodje kip met komkommer, ui, knoflook, paprika, sla & rode peper',
                'symbolen' => 'gluten.png, mosterd.png',
                'prijs' => 3.50,
                'image_path' => 'broodje_hete_kip.png',
                'duurzaamheid' => '4_sterren.png',
                'reviews' => '4_sterren.png'
            ],
            [
                'id' => 4,
                'titel' => 'Broodje brie met komkommer',
                'omschrijving' => 'Broodje brie met komkommer, sla, kiemgroenten, honing & walnoten',
                'symbolen' => 'gluten.png, noot.png, melk.png',
                'prijs' => 3.00,
                'image_path' => 'broodje_brie.png',
                'duurzaamheid' => '5_sterren.png',
                'reviews' => '3_sterren.png'
            ],
            [
                'id' => 5,
                'titel' => 'Italiaanse sandwich',
                'omschrijving' => 'Italiaanse sandwich met ham, pesto, sla, tomaten, mozzarella & salami',
                'symbolen' => 'gluten.png, varken.png, melk.png',
                'prijs' => 3.50,
                'image_path' => 'italiaanse_sandwich.png',
                'duurzaamheid' => '4_sterren.png',
                'reviews' => '5_sterren.png'
            ],
            [
                'id' => 6,
                'titel' => 'Broodje eiersalade',
                'omschrijving' => 'Broodjes met gezonde eiersalade met ei, avocado, rucola & tuinkers',
                'symbolen' => 'gluten.png, ei.png',
                'prijs' => 3.00,
                'image_path' => 'broodjes_gezonde_eiersalade.png',
                'duurzaamheid' => '5_sterren.png',
                'reviews' => '5_sterren.png'
            ],
            [
                'id' => 7,
                'titel' => 'Sandwich met gerookte zalm',
                'omschrijving' => 'Sandwich met gerookte zalm, ei, komkommer, roomkaas & tuinkers',
                'symbolen' => 'gluten.png, ei.png, melk.png',
                'prijs' => 4.00,
                'image_path' => 'broodje_met_zalm_en_ei.png',
                'duurzaamheid' => '4_sterren.png',
                'reviews' => '4_sterren.png'
            ],
            [
                'id' => 8,
                'titel' => 'Toast met Hüttenkäse',
                'omschrijving' => 'Toast met hüttenkäse, serranoham, tomaatjes, rucola & bieslook',
                'symbolen' => 'gluten.png, varken.png, melk.png',
                'prijs' => 5.00,
                'image_path' => 'broodje_met_zalm_en_ei.png',
                'duurzaamheid' => '4_sterren.png',
                'reviews' => '3_sterren.png'
            ],
            [
                'id' => 9,
                'titel' => 'Broodje kip kerrie',
                'omschrijving' => 'Broodje kip kerrie gemaakt van kip, bosui, yoghurt, mayo & perzik',
                'symbolen' => 'gluten.png, melk.png',
                'prijs' => 2.50,
                'image_path' => 'kip_kerrie_salade.png',
                'duurzaamheid' => '5_sterren.png',
                'reviews' => '5_sterren.png'
            ],
            [
                'id' => 10,
                'titel' => 'Broodje gepocheerd ei',
                'omschrijving' => 'Broodje gepocheerd ei met spinazie, bacon, avocado & peterselie',
                'symbolen' => 'gluten.png, varken.png, ei.png',
                'prijs' => 4.50,
                'image_path' => 'broodje_gepocheerd_ei.png',
                'duurzaamheid' => '4_sterren.png',
                'reviews' => '5_sterren.png'
            ]
        ]);
    }
}
