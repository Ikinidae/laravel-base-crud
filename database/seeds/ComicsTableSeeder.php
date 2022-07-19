<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10 ; $i++) {
            $comic = new Comic();
            $comic->title = 'DC';
            $comic->description = 'lorem ipsum';
            $comic->thumb = 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX';
            $comic->price = 5.5;
            $comic->series = 'Batman';
            $comic->sale_date = '2002/02/12';
            $comic->type = 'comic book';
            $comic->save();
        }
    }
}
