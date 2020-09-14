<?php

use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            // Informations related to the diploma
            'diplome_id' => 1, // Admin des affaires
            'diplome_domaine' => 'COMMERCE_GESTION',
            'diplome_niveau' => '1ERE_ANNEE', // L1
            
            // Informations related to the school
            'etablissement_id' => 1, // let say everytime we seed the created default school will have the ID=1
            'etablissement_nom' => 'HEC',
            'etablissement_sigle' => 'Ecole des Hautes Etudes de Commerce',
            'etablissement_pays' => 'MA',
            'etablissement_ville' => 'RABAT',
            'etablissement_intitule_filiere' => 'Administration des Entreprises',
            'etablissement_specialite' => null,

            // Informations specifics to the diploma
            'duree' => '3_ANS', // Licence
            'score' => 70.0,
            'prix' => 40000,
        ]);

        DB::table('formations')->insert([
            // Informations related to the diploma
            'diplome_id' => 1, // Admin des affaires
            'diplome_domaine' => 'COMMERCE_GESTION',
            'diplome_niveau' => '1ERE_ANNEE', // L1
            
            // Informations related to the school
            'etablissement_id' => 1, // let say everytime we seed the created default school will have the ID=1
            'etablissement_nom' => 'HEC',
            'etablissement_sigle' => 'Ecole des Hautes Etudes de Commerce',
            'etablissement_pays' => 'MA',
            'etablissement_ville' => 'CASABLANCA',
            'etablissement_intitule_filiere' => 'Administration des Entreprises',
            'etablissement_specialite' => null,

            // Informations specifics to the diploma
            'duree' => '3_ANS', // Licence
            'score' => 60.0,
            'prix' => 50000,
        ]);

        DB::table('formations')->insert([
            // Informations related to the diploma
            'diplome_id' => 1, // Admin des affaires
            'diplome_domaine' => 'COMMERCE_GESTION',
            'diplome_niveau' => '1ERE_ANNEE', // L1
            
            // Informations related to the school
            'etablissement_id' => 1, // let say everytime we seed the created default school will have the ID=1
            'etablissement_nom' => 'HEC',
            'etablissement_sigle' => 'Ecole des Hautes Etudes de Commerce',
            'etablissement_pays' => 'MA',
            'etablissement_ville' => 'FES',
            'etablissement_intitule_filiere' => 'Administration des Entreprises',
            'etablissement_specialite' => null,

            // Informations specifics to the diploma
            'duree' => '3_ANS', // Licence
            'score' => 50.0,
            'prix' => 35000,
        ]);

        DB::table('formations')->insert([
            // Informations related to the diploma
            'diplome_id' => 2,
            'diplome_domaine' => 'COMMERCE_GESTION',
            'diplome_niveau' => '4EME_ANNEE', // Master
            
            // Informations related to the school
            'etablissement_id' => 1, // let say everytime we seed the created default school will have the ID=1
            'etablissement_nom' => 'HEC',
            'etablissement_sigle' => 'Ecole des Hautes Etudes de Commerce',
            'etablissement_pays' => 'MA',
            'etablissement_ville' => 'RABAT',
            'etablissement_intitule_filiere' => 'Comptablité contrôle et audit',
            'etablissement_specialite' => null,

            // Informations specifics to the diploma
            'duree' => '2_ANS', // Master
            'score' => 65.5,
            'prix' => 35000,
        ]);
    }
}
