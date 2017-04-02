<?php

use App\Word;
use Illuminate\Database\Seeder;

class WordSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $w=new Word;
        $w->word='good';
        $w->weight=1;
        $w->save();

        $w=new Word;
        $w->word='bad';
        $w->weight=-1;
        $w->save();

        $w=new Word;
        $w->word='awesome';
        $w->weight=2;
        $w->save();

        $w=new Word;
        $w->word='terrible';
        $w->weight=-2;
        $w->save();

        $w=new Word;
        $w->word='great';
        $w->weight=2;
        $w->save();
    }
}
