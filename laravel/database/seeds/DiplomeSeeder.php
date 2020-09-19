<?php

use Illuminate\Database\Seeder;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diplomes')->insertGetId([
            'intitule' => 'Licence en Administration des Entreprises',
            'domaine' => 'COMMERCE_GESTION',
            'niveau' => '1ERE_ANNEE', // Licecne
        ]);
        
        DB::table('diplomes')->insertGetId([
            'intitule' => 'Master en comptabilité contrôle et audit',
            'domaine' => 'COMMERCE_GESTION',
            'niveau' => '4EME_ANNEE', // Master
        ]);

        DB::table('diplomes')->insertGetId([
            'intitule' => 'Master en Finance Banque',
            'domaine' => 'COMMERCE_GESTION',
            'niveau' => '4EME_ANNEE', // Master
        ]);

        DB::table('diplomes')->insertGetId([
            'intitule' => 'Master en Marketing et Management de la distribution',
            'domaine' => 'COMMERCE_GESTION',
            'niveau' => '4EME_ANNEE', // Master
        ]);

        
    }
}
