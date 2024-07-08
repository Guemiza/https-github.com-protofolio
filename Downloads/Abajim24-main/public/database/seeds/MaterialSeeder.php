<?php

use Illuminate\Database\Seeder;
use App\Models\Material;
class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $material = [

          ///1////
           
          ['name' => 'Sciences SVT'],
          ['name' => 'Mathématiques'],
          ['name' => 'Physiques'],
          ['name' => 'Chimie'],
          ['name' => 'Informatique'],
          ['name' => 'Technologie'],
          ['name' => 'Arabe'],
          ['name' => 'Pensée Islamique'],
          ['name' => 'Education civile'],
          ['name' => 'Histoire'],
          ['name' => 'Géographie'],
          ['name' => 'Francais'],
          ['name' => 'Anglais'],


          //2science///
          ['name' => 'Sciences SVT','section_id'=>'1'],
          ['name' => 'Mathématiques','section_id'=>'1'],
          ['name' => 'Physiques','section_id'=>'1'],
          ['name' => 'Chimie','section_id'=>'1'],
          ['name' => 'Informatique','section_id'=>'1'],
          ['name' => 'Technologie','section_id'=>'1'],
          ['name' => 'Arabe','section_id'=>'1'],
          ['name' => 'Pensée Islamique','section_id'=>'1'],
          ['name' => 'Education civile','section_id'=>'1'],
          ['name' => 'Histoire','section_id'=>'1'],
          ['name' => 'Géographie','section_id'=>'1'],
          ['name' => 'Francais','section_id'=>'1'],
          ['name' => 'Anglais','section_id'=>'1'],
         ////2 lettre///

          ['name' => 'Philosofie','section_id'=>'4'],
          ['name' => 'Arabe','section_id'=>'4'],
          ['name' => 'Pensée Islamique','section_id'=>'4'],
          ['name' => 'Education civile','section_id'=>'4'],
          ['name' => 'Histoire','section_id'=>'4'],
          ['name' => 'Géographie','section_id'=>'4'],
          ['name' => 'Francais','section_id'=>'4'],
          ['name' => 'Anglais','section_id'=>'4'],
          ['name' => 'Informatique','section_id'=>'4'],
          ['name' => 'Mathématiques','section_id'=>'4'],
          ['name' => 'Siences SVT','section_id'=>'4'],
      
        ///2 informatique///
        ['name' => 'Informatique','section_id'=>'5'],
        ['name' => 'Mathématiques','section_id'=>'5'],
        ['name' => 'Physiques','section_id'=>'5'],
        ['name' => 'Chimie','section_id'=>'5'],
        ['name' => 'Arabe','section_id'=>'5'],
        ['name' => 'Francais','section_id'=>'5'],
        ['name' => 'Anglais','section_id'=>'5'],
        ['name' => 'Technologie','section_id'=>'5'],
        ['name' => 'Pensée Islamique','section_id'=>'5'],
        ['name' => 'Education civile','section_id'=>'5'],
        ['name' => 'Histoire','section_id'=>'5'],
        ['name' => 'Géographie','section_id'=>'5'],

          ///2 Economie////
        ['name' => 'Economie','section_id'=>'6'],
        ['name' => 'Gestion','section_id'=>'6'],
        ['name' => 'Informatique','section_id'=>'6'],
        ['name' => 'Mathématiques','section_id'=>'6'],
        ['name' => 'Arabe','section_id'=>'6'],
        ['name' => 'Francais','section_id'=>'6'],
        ['name' => 'Anglais','section_id'=>'6'],
        ['name' => 'Pensée Islamique','section_id'=>'6'],
        ['name' => 'Education civile','section_id'=>'6'],
        ['name' => 'Histoire','section_id'=>'6'],
        ['name' => 'Géographie','section_id'=>'6'],


        ///3 science//
          ['name' => 'Sciences SVT','section_id'=>'7'],
          ['name' => 'Mathématiques','section_id'=>'7'],
          ['name' => 'Physiques','section_id'=>'7'],
          ['name' => 'Chimie','section_id'=>'7'],
          ['name' => 'Informatique','section_id'=>'7'],
          ['name' => 'Arabe','section_id'=>'7'],
          ['name' => 'Histoire','section_id'=>'7'],
          ['name' => 'Géographie','section_id'=>'7'],
          ['name' => 'Francais','section_id'=>'7'],
          ['name' => 'Anglais','section_id'=>'7'],
          ['name' => 'Philosofie','section_id'=>'7'],
          
          //3 math//
          ['name' => 'Sciences SVT','section_id'=>'8'],
          ['name' => 'Mathématiques','section_id'=>'8'],
          ['name' => 'Physiques','section_id'=>'8'],
          ['name' => 'Chimie','section_id'=>'8'],
          ['name' => 'Informatique','section_id'=>'8'],
          ['name' => 'Arabe','section_id'=>'8'],
          ['name' => 'Histoire','section_id'=>'8'],
          ['name' => 'Géographie','section_id'=>'8'],
          ['name' => 'Francais','section_id'=>'8'],
          ['name' => 'Anglais','section_id'=>'8'],
          ['name' => 'Philosofie','section_id'=>'8'],
          
          //3technique////

          ['name' => 'Elèctrique','section_id'=>'9'],
          ['name' => 'Mécanique','section_id'=>'9'],
          ['name' => 'Mathématiques','section_id'=>'9'],
          ['name' => 'Physiques','section_id'=>'9'],
          ['name' => 'Chimie','section_id'=>'9'],
          ['name' => 'Informatique','section_id'=>'9'],
          ['name' => 'Arabe','section_id'=>'9'],
          ['name' => 'Histoire','section_id'=>'9'],
          ['name' => 'Géographie','section_id'=>'9'],
          ['name' => 'Francais','section_id'=>'9'],
          ['name' => 'Anglais','section_id'=>'9'],
          ['name' => 'Philosofie','section_id'=>'9'],
         
        ///3 informatique////
        ['name' => 'Algorithme Et Programmation','section_id'=>'11'],
        ['name' => 'Système D"exploitation','section_id'=>'11'],
        ['name' => 'Mathématiques','section_id'=>'11'],
        ['name' => 'Physiques','section_id'=>'11'],
        ['name' => 'Chimie','section_id'=>'11'],
        ['name' => 'Arabe','section_id'=>'11'],
        ['name' => 'Histoire','section_id'=>'11'],
        ['name' => 'Géographie','section_id'=>'11'],
        ['name' => 'Francais','section_id'=>'11'],
        ['name' => 'Anglais','section_id'=>'11'],
        ['name' => 'Tic','section_id'=>'11'],
        ['name' => 'Philosofie','section_id'=>'11'],
        
          //3lettre///

          ['name' => 'Philosofie','section_id'=>'10'],
          ['name' => 'Arabe','section_id'=>'10'],
          ['name' => 'Pensée Islamique','section_id'=>'10'],
          ['name' => 'Education civile','section_id'=>'10'],
          ['name' => 'Histoire','section_id'=>'10'],
          ['name' => 'Géographie','section_id'=>'10'],
          ['name' => 'Francais','section_id'=>'10'],
          ['name' => 'Anglais','section_id'=>'10'],
          ['name' => 'Informatique','section_id'=>'10'],
          ['name' => 'Mathématiques','section_id'=>'10'],
         

        //3 Economie///
        ['name' => 'Economie','section_id'=>'12'],
        ['name' => 'Gestion','section_id'=>'12'],
        ['name' => 'Informatique','section_id'=>'12'],
        ['name' => 'Mathématiques','section_id'=>'12'],
        ['name' => 'Arabe','section_id'=>'12'],
        ['name' => 'Francais','section_id'=>'12'],
        ['name' => 'Anglais','section_id'=>'12'],
        ['name' => 'Histoire','section_id'=>'12'],
        ['name' => 'Géographie','section_id'=>'12'],
        ['name' => 'Philosofie','section_id'=>'12'],
       

        ///bac science///
          ['name' => 'Sciences SVT','section_id'=>'13'],
          ['name' => 'Mathématiques','section_id'=>'13'],
          ['name' => 'Physiques','section_id'=>'13'],
          ['name' => 'Chimie','section_id'=>'13'],
          ['name' => 'Informatique','section_id'=>'13'],
          ['name' => 'Arabe','section_id'=>'13'],
          ['name' => 'Francais','section_id'=>'13'],
          ['name' => 'Anglais','section_id'=>'13'],
          ['name' => 'Philosofie','section_id'=>'13'],
         
          //bac math//
          ['name' => 'Sciences SVT','section_id'=>'14'],
          ['name' => 'Mathématiques','section_id'=>'14'],
          ['name' => 'Physiques','section_id'=>'14'],
          ['name' => 'Chimie','section_id'=>'14'],
          ['name' => 'Informatique','section_id'=>'14'],
          ['name' => 'Arabe','section_id'=>'14'],
          ['name' => 'Francais','section_id'=>'14'],
          ['name' => 'Anglais','section_id'=>'14'],
          ['name' => 'Philosofie','section_id'=>'14'],
          
        //bac technique///
          ['name' => 'Elèctrique','section_id'=>'15'],
          ['name' => 'Mécanique','section_id'=>'15'],
          ['name' => 'Mathématiques','section_id'=>'15'],
          ['name' => 'Physiques','section_id'=>'15'],
          ['name' => 'Chimie','section_id'=>'15'],
          ['name' => 'Informatique','section_id'=>'15'],
          ['name' => 'Arabe','section_id'=>'15'],
          ['name' => 'Francais','section_id'=>'15'],
          ['name' => 'Anglais','section_id'=>'15'],
          ['name' => 'Philosofie','section_id'=>'15'],
          



          ///bac informatique////
        ['name' => 'Algorithme Et Programmation','section_id'=>'17'],
        ['name' => 'Bases de données','section_id'=>'17'],
        ['name' => 'Mathématiques','section_id'=>'17'],
        ['name' => 'Physiques','section_id'=>'17'],
        ['name' => 'Chimie','section_id'=>'17'],
        ['name' => 'Arabe','section_id'=>'17'],
        ['name' => 'Francais','section_id'=>'17'],
        ['name' => 'Anglais','section_id'=>'17'],
        ['name' => 'Tic','section_id'=>'17'],
        ['name' => 'Philosofie','section_id'=>'17'],
        
          //bac lettre///

          ['name' => 'Philosofie','section_id'=>'16'],
          ['name' => 'Arabe','section_id'=>'16'],
          ['name' => 'Pensée Islamique','section_id'=>'16'],
          ['name' => 'Histoire','section_id'=>'16'],
          ['name' => 'Géographie','section_id'=>'16'],
          ['name' => 'Francais','section_id'=>'16'],
          ['name' => 'Anglais','section_id'=>'16'],
          ['name' => 'Informatique','section_id'=>'16'],
         

        //bac Economie///
        ['name' => 'Economie','section_id'=>'18'],
        ['name' => 'Gestion','section_id'=>'18'],
        ['name' => 'Informatique','section_id'=>'18'],
        ['name' => 'Mathématiques','section_id'=>'18'],
        ['name' => 'Arabe','section_id'=>'18'],
        ['name' => 'Francais','section_id'=>'18'],
        ['name' => 'Anglais','section_id'=>'18'],
        ['name' => 'Histoire','section_id'=>'18'],
        ['name' => 'Géographie','section_id'=>'18'],
        ['name' => 'Philosofie','section_id'=>'18'],
        


    ];
    foreach ($material as $key => $value) {

        material::create($value);

    }

    }

}

