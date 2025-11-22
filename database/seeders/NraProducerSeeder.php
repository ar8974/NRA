<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_producer')->insert([
            ['Prod_ID'=>1,'F_Name'=>'John','L_Name'=>'Doe','Street'=>'123 Main St','City'=>'New York','ZIP'=>'10001','Phone_code'=>'+1','Local_Phone'=>'5551234','Email'=>'john@example.com','Country_Code'=>'US'],
            ['Prod_ID'=>2,'F_Name'=>'Amit','L_Name'=>'Shah','Street'=>'45 MG Rd','City'=>'Mumbai','ZIP'=>'400001','Phone_code'=>'+91','Local_Phone'=>'1234567','Email'=>'amit@example.in','Country_Code'=>'IN'],
            ['Prod_ID'=>3,'F_Name'=>'Emma','L_Name'=>'Smith','Street'=>'22 King St','City'=>'London','ZIP'=>'EC1A','Phone_code'=>'+44','Local_Phone'=>'7778888','Email'=>'emma@ukmail.com','Country_Code'=>'GB'],
            ['Prod_ID'=>4,'F_Name'=>'Alice','L_Name'=>'Brown','Street'=>'12 Queen St','City'=>'Toronto','ZIP'=>'M5H','Phone_code'=>'+1','Local_Phone'=>'9991111','Email'=>'alice@canada.com','Country_Code'=>'CA'],
            ['Prod_ID'=>5,'F_Name'=>'Liam','L_Name'=>'Taylor','Street'=>'5 Elm St','City'=>'Sydney','ZIP'=>'2000','Phone_code'=>'+61','Local_Phone'=>'4445555','Email'=>'liam@au.com','Country_Code'=>'AU'],
            ['Prod_ID'=>6,'F_Name'=>'Hans','L_Name'=>'Müller','Street'=>'10 Hauptstr','City'=>'Berlin','ZIP'=>'10115','Phone_code'=>'+49','Local_Phone'=>'3332222','Email'=>'hans@de.com','Country_Code'=>'DE'],
            ['Prod_ID'=>7,'F_Name'=>'Marie','L_Name'=>'Dubois','Street'=>'8 Rue de Rivoli','City'=>'Paris','ZIP'=>'75001','Phone_code'=>'+33','Local_Phone'=>'6667777','Email'=>'marie@fr.com','Country_Code'=>'FR'],
            ['Prod_ID'=>8,'F_Name'=>'Yuki','L_Name'=>'Tanaka','Street'=>'1 Sakura St','City'=>'Tokyo','ZIP'=>'100-0001','Phone_code'=>'+81','Local_Phone'=>'1239876','Email'=>'yuki@jp.com','Country_Code'=>'JP'],
            ['Prod_ID'=>9,'F_Name'=>'Li','L_Name'=>'Wang','Street'=>'20 Nanjing Rd','City'=>'Beijing','ZIP'=>'100000','Phone_code'=>'+86','Local_Phone'=>'5556666','Email'=>'li@cn.com','Country_Code'=>'CN'],
            ['Prod_ID'=>10,'F_Name'=>'Carlos','L_Name'=>'Silva','Street'=>'15 Rua 1','City'=>'Rio de Janeiro','ZIP'=>'20000-000','Phone_code'=>'+55','Local_Phone'=>'8889999','Email'=>'carlos@br.com','Country_Code'=>'BR'],
            ['Prod_ID'=>11,'F_Name'=>'David','L_Name'=>'Lee','Street'=>'7 King St','City'=>'Seoul','ZIP'=>'100-111','Phone_code'=>'+82','Local_Phone'=>'2223333','Email'=>'david@kr.com','Country_Code'=>'KR'],
            ['Prod_ID'=>12,'F_Name'=>'Sara','L_Name'=>'Lopez','Street'=>'18 Calle St','City'=>'Madrid','ZIP'=>'28001','Phone_code'=>'+34','Local_Phone'=>'4445556','Email'=>'sara@es.com','Country_Code'=>'ES'],
            ['Prod_ID'=>13,'F_Name'=>'Tom','L_Name'=>'Harris','Street'=>'9 Queen St','City'=>'Melbourne','ZIP'=>'3000','Phone_code'=>'+61','Local_Phone'=>'7778889','Email'=>'tom@au.com','Country_Code'=>'AU'],
            ['Prod_ID'=>14,'F_Name'=>'Linda','L_Name'=>'Kim','Street'=>'5 Seoul St','City'=>'Seoul','ZIP'=>'100-222','Phone_code'=>'+82','Local_Phone'=>'3334445','Email'=>'linda@kr.com','Country_Code'=>'KR'],
            ['Prod_ID'=>15,'F_Name'=>'Hiro','L_Name'=>'Suzuki','Street'=>'2 Tokyo St','City'=>'Tokyo','ZIP'=>'100-0002','Phone_code'=>'+81','Local_Phone'=>'9876543','Email'=>'hiro@jp.com','Country_Code'=>'JP'],
            ['Prod_ID'=>16,'F_Name'=>'Chloe','L_Name'=>'Martin','Street'=>'12 Paris St','City'=>'Paris','ZIP'=>'75002','Phone_code'=>'+33','Local_Phone'=>'5556667','Email'=>'chloe@fr.com','Country_Code'=>'FR'],
            ['Prod_ID'=>17,'F_Name'=>'Ivan','L_Name'=>'Petrov','Street'=>'8 Moscow St','City'=>'Moscow','ZIP'=>'101000','Phone_code'=>'+7','Local_Phone'=>'1112223','Email'=>'ivan@ru.com','Country_Code'=>'RU'],
            ['Prod_ID'=>18,'F_Name'=>'Fatima','L_Name'=>'Ali','Street'=>'3 Cairo St','City'=>'Cairo','ZIP'=>'11511','Phone_code'=>'+20','Local_Phone'=>'4445557','Email'=>'fatima@eg.com','Country_Code'=>'EG'],
            ['Prod_ID'=>19,'F_Name'=>'Juan','L_Name'=>'Perez','Street'=>'6 Mexico St','City'=>'Mexico City','ZIP'=>'01000','Phone_code'=>'+52','Local_Phone'=>'8889990','Email'=>'juan@mx.com','Country_Code'=>'MX'],
            ['Prod_ID'=>20,'F_Name'=>'Anna','L_Name'=>'Ivanova','Street'=>'10 St Petersburg','City'=>'St Petersburg','ZIP'=>'190000','Phone_code'=>'+7','Local_Phone'=>'2223334','Email'=>'anna@ru.com','Country_Code'=>'RU'],
        ]);
    }
}
