<?php

class ContactsTableSeeder extends Seeder {
    
	public function run()
	{
            DB::table('contacts')->delete();
            
            $arr = array(
                array(
                    'fName' => 'John',
                    'lName' => 'Smith',
                    'email' => 'johnSmith@gmail.com'
                ),
                array(
                    'fName' => 'Joe',
                    'lName' => 'Smith',
                    'email' => 'joeSmith@gmail.com'
                ),
                array(
                    'fName' => 'Jake',
                    'lName' => 'Doe',
                    'email' => 'johnDoe@gmail.com'
                ),
                array(
                    'fName' => 'Arnold',
                    'lName' => 'Smith',
                    'email' => 'johnSmith@gmail.com'
                ),
                array(
                    'fName' => 'Ram',
                    'lName' => 'Smith',
                    'email' => 'joeSmith@gmail.com'
                ),
                array(
                    'fName' => 'Sly',
                    'lName' => 'Smith',
                    'email' => 'johnSmith@gmail.com'
                ),
                array(
                    'fName' => 'Jean',
                    'lName' => 'Smith',
                    'email' => 'joeSmith@gmail.com'
                ),
            );
            
            DB::table('contacts')->insert($arr);
	}

}