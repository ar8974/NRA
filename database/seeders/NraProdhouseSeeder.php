<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraProdhouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_prodhouse')->insert([
            ['House_ID'=>1,'Name'=>'Sun Studios','Street'=>'Street 1','City'=>'Los Angeles','ZIP'=>'90001','Year_Est'=>1990,'Country_Code'=>'US'],
            ['House_ID'=>2,'Name'=>'DreamWorks','Street'=>'Street 2','City'=>'Mumbai','ZIP'=>'400001','Year_Est'=>2000,'Country_Code'=>'IN'],
            ['House_ID'=>3,'Name'=>'British Films','Street'=>'Baker St','City'=>'London','ZIP'=>'NW1','Year_Est'=>1985,'Country_Code'=>'GB'],
            ['House_ID'=>4,'Name'=>'Maple Studios','Street'=>'King St','City'=>'Toronto','ZIP'=>'M5H','Year_Est'=>1995,'Country_Code'=>'CA'],
            ['House_ID'=>5,'Name'=>'Sydney Pictures','Street'=>'Elm St','City'=>'Sydney','ZIP'=>'2000','Year_Est'=>2005,'Country_Code'=>'AU'],
            ['House_ID'=>6,'Name'=>'Berlin Productions','Street'=>'Hauptstr 10','City'=>'Berlin','ZIP'=>'10115','Year_Est'=>1992,'Country_Code'=>'DE'],
            ['House_ID'=>7,'Name'=>'Paris Films','Street'=>'Rue de Rivoli 8','City'=>'Paris','ZIP'=>'75001','Year_Est'=>1998,'Country_Code'=>'FR'],
            ['House_ID'=>8,'Name'=>'Tokyo Pictures','Street'=>'Sakura St 1','City'=>'Tokyo','ZIP'=>'100-0001','Year_Est'=>2003,'Country_Code'=>'JP'],
            ['House_ID'=>9,'Name'=>'Beijing Studio','Street'=>'Nanjing Rd 20','City'=>'Beijing','ZIP'=>'100000','Year_Est'=>1999,'Country_Code'=>'CN'],
            ['House_ID'=>10,'Name'=>'Rio Films','Street'=>'Rua 1 15','City'=>'Rio de Janeiro','ZIP'=>'20000-000','Year_Est'=>2001,'Country_Code'=>'BR'],
        ]);
    }
}
