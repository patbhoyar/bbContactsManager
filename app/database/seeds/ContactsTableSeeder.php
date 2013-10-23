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
                    'fName' => 'John',
                    'lName' => 'Doe',
                    'email' => 'johnDoe@gmail.com'
                )
            );
            
            DB::table('contacts')->insert($arr);
	}

}