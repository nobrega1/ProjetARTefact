<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventSeeder::class);
        $this->call(EditionSeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CatalogueSeeder::class);
        $this->call(BikeSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(BadgeSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(BookmarkSeeder::class);
        $this->call(AdressetypeSeeder::class);
        $this->call(RoadSeeder::class);
        $this->call(EbikeSeeder::class);
        $this->call(GravelSeeder::class);
        $this->call(MtbSeeder::class);
        $this->call(EmtbSeeder::class);
    }
}
