<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->delete();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('product')->insert([
                'brandno'=> rand(1,100),
                'shortdescr'=>Arr::random(['Gravel','Road','Mtb','Emtb','Eroad']),
                'longdescr'=>"Une bicyclette (aussi appelée bicycle en Amérique du Nord), ou un vélo (abréviation du mot vélocipède), est un véhicule terrestre à propulsion humaine entrant dans la catégorie des cycles et composé de deux roues alignées, qui lui donnent son nom. La force motrice est fournie par son conducteur (appelé « cycliste »), en position le plus souvent assise, par l'intermédiaire de deux pédales entraînant la roue arrière par une chaîne à rouleaux. ",
                'distinctivesign'=>Arr::random(['MOUSTACHE Xroad 3 ','Focus Aventura','Lapierre Overvolt','E-fati lu']),
                'lienimage'=>Arr::random(['https://media-cdn.canyon.com/dw/image/v2/BCML_PRD/on/demandware.static/-/Sites-canyon-master/default/dwbab85a1c/images/full/full_2020_/2020/full_2020_speedmax-cf-7-0_2419_bk-bk_P5.png?sw=1060&sh=1060&sm=fit&sfrm=png',
                                        'https://cdn.webshopapp.com/shops/212063/files/215250743/6ku-fixie-single-speed-bike-barcelona.jpg',
                                        'https://www.rotwild.com/typo3temp/assets/_processed_/0/9/csm_ROTWILD_RE750_PRO_BURNINGRED_RE750F20P_0eb8b848e0.png',
                                        'http://fatalbike.com/wp-content/uploads/2019/09/DomanePlus_19_24672_A_Primary.jpeg'])
                ]);
        }
    }

}
