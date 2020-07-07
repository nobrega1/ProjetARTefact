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
                'shortdescr'=>Arr::random(['Gravel','Road','mtb']),
                'longdescr'=>"Une bicyclette (aussi appelée bicycle en Amérique du Nord), ou un vélo (abréviation du mot vélocipède), est un véhicule terrestre à propulsion humaine entrant dans la catégorie des cycles et composé de deux roues alignées, qui lui donnent son nom. La force motrice est fournie par son conducteur (appelé « cycliste »), en position le plus souvent assise, par l'intermédiaire de deux pédales entraînant la roue arrière par une chaîne à rouleaux. ",
                'distinctivesign'=>'distinctivesign' . $i,
                'lienimage'=>'https://www.lipo.ch/medias/h60/h6e/9069290520606.jpg'
                ]);
        }
    }

}
