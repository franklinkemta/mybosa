<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a default admin
        $admin_user_id = DB::table('users')->insertGetId([
            'typeCompte' => 'ADMIN',
            'email' => 'danayub@gmail.com',
            'password' => Hash::make('admin@mybosa'),
        ]);

        DB::table('admins')->insert([
            'user_id' => $admin_user_id,
            'nom' => 'Ayub',
            'prenom' => 'Dan',
            'pays_residence' => 'MA',
            'telephone' => '+2120700130147',
        ]);

        // Create a sample school
        $etablissement_user_id = DB::table('users')->insertGetId([
            'typeCompte' => 'ETABLISSEMENT',
            'email' => 'mybosa.admin@hec.ma',
            'password' => Hash::make('hecma2020'),
        ]);

        DB::table('etablissements')->insert([
            'user_id' => $etablissement_user_id,
            'nom' => 'Ecole des Hautes Etudes de Commerce',
            'sigle' => 'HEC',
            'pays' => 'MA',
            'ville' => 'RABAT',
        ]);

        // Create a sample student
        $etudiant_user_id = DB::table('users')->insertGetId([
            'typeCompte' => 'ETUDIANT',
            'email' => 'franklinkemta@gmail.com',
            'password' => Hash::make('azerty2020'),
        ]);

        DB::table('etudiants')->insert([
            'user_id' => $etudiant_user_id,
            'nom' => 'Kemta',
            'prenom' => 'Franklin',
            'pays_residence' => 'MA',
            'telephone' => '+2120609349882',
        ]);
        
    }
}
