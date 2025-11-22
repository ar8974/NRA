<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NraViewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nra_viewer')->insert([
            ['View_ID'=>1,'F_Name'=>'Mike','L_Name'=>'Johnson','Street'=>'12 Oak St','City'=>'New York','ZIP'=>'10001','Acc_date'=>'2022-01-01','Monthly_Charge'=>15.99,'Country_Code'=>'US'],
            ['View_ID'=>2,'F_Name'=>'Sara','L_Name'=>'Patel','Street'=>'34 MG Rd','City'=>'Mumbai','ZIP'=>'400001','Acc_date'=>'2022-03-15','Monthly_Charge'=>10.99,'Country_Code'=>'IN'],
            ['View_ID'=>3,'F_Name'=>'Tom','L_Name'=>'Williams','Street'=>'22 King St','City'=>'London','ZIP'=>'EC1A','Acc_date'=>'2021-06-10','Monthly_Charge'=>12.50,'Country_Code'=>'GB'],
            ['View_ID'=>4,'F_Name'=>'Lisa','L_Name'=>'Clark','Street'=>'12 Queen St','City'=>'Toronto','ZIP'=>'M5H','Acc_date'=>'2021-08-05','Monthly_Charge'=>14.00,'Country_Code'=>'CA'],
            ['View_ID'=>5,'F_Name'=>'Emma','L_Name'=>'Taylor','Street'=>'5 Elm St','City'=>'Sydney','ZIP'=>'2000','Acc_date'=>'2023-01-12','Monthly_Charge'=>13.99,'Country_Code'=>'AU'],
            ['View_ID'=>6,'F_Name'=>'Hans','L_Name'=>'Schmidt','Street'=>'10 Hauptstr','City'=>'Berlin','ZIP'=>'10115','Acc_date'=>'2022-11-20','Monthly_Charge'=>11.50,'Country_Code'=>'DE'],
            ['View_ID'=>7,'F_Name'=>'Marie','L_Name'=>'Leroy','Street'=>'8 Rue de Rivoli','City'=>'Paris','ZIP'=>'75001','Acc_date'=>'2023-02-28','Monthly_Charge'=>12.99,'Country_Code'=>'FR'],
            ['View_ID'=>8,'F_Name'=>'Yuki','L_Name'=>'Sato','Street'=>'1 Sakura St','City'=>'Tokyo','ZIP'=>'100-0001','Acc_date'=>'2023-03-05','Monthly_Charge'=>14.50,'Country_Code'=>'JP'],
            ['View_ID'=>9,'F_Name'=>'Li','L_Name'=>'Zhang','Street'=>'20 Nanjing Rd','City'=>'Beijing','ZIP'=>'100000','Acc_date'=>'2022-07-15','Monthly_Charge'=>13.00,'Country_Code'=>'CN'],
            ['View_ID'=>10,'F_Name'=>'Carlos','L_Name'=>'Silva','Street'=>'15 Rua 1','City'=>'Rio de Janeiro','ZIP'=>'20000-000','Acc_date'=>'2023-04-10','Monthly_Charge'=>15.00,'Country_Code'=>'BR'],
            ['View_ID'=>11,'F_Name'=>'Anna','L_Name'=>'Lee','Street'=>'8 Pine St','City'=>'New York','ZIP'=>'10002','Acc_date'=>'2022-12-01','Monthly_Charge'=>16.00,'Country_Code'=>'US'],
            ['View_ID'=>12,'F_Name'=>'Ravi','L_Name'=>'Kumar','Street'=>'56 MG Rd','City'=>'Mumbai','ZIP'=>'400002','Acc_date'=>'2022-09-20','Monthly_Charge'=>11.00,'Country_Code'=>'IN'],
            ['View_ID'=>13,'F_Name'=>'George','L_Name'=>'Brown','Street'=>'33 King St','City'=>'London','ZIP'=>'EC1B','Acc_date'=>'2021-05-10','Monthly_Charge'=>12.00,'Country_Code'=>'GB'],
            ['View_ID'=>14,'F_Name'=>'Mia','L_Name'=>'Johnson','Street'=>'23 Queen St','City'=>'Toronto','ZIP'=>'M5K','Acc_date'=>'2021-08-20','Monthly_Charge'=>13.50,'Country_Code'=>'CA'],
            ['View_ID'=>15,'F_Name'=>'Olivia','L_Name'=>'Davis','Street'=>'7 Elm St','City'=>'Sydney','ZIP'=>'2001','Acc_date'=>'2023-01-22','Monthly_Charge'=>14.00,'Country_Code'=>'AU'],
            ['View_ID'=>16,'F_Name'=>'Karl','L_Name'=>'Meyer','Street'=>'11 Hauptstr','City'=>'Berlin','ZIP'=>'10116','Acc_date'=>'2022-11-25','Monthly_Charge'=>11.50,'Country_Code'=>'DE'],
            ['View_ID'=>17,'F_Name'=>'Sophie','L_Name'=>'Martin','Street'=>'9 Rue de Rivoli','City'=>'Paris','ZIP'=>'75002','Acc_date'=>'2023-02-15','Monthly_Charge'=>13.00,'Country_Code'=>'FR'],
            ['View_ID'=>18,'F_Name'=>'Kenji','L_Name'=>'Kobayashi','Street'=>'2 Sakura St','City'=>'Tokyo','ZIP'=>'100-0002','Acc_date'=>'2023-03-15','Monthly_Charge'=>14.50,'Country_Code'=>'JP'],
            ['View_ID'=>19,'F_Name'=>'Wei','L_Name'=>'Li','Street'=>'25 Nanjing Rd','City'=>'Beijing','ZIP'=>'100001','Acc_date'=>'2022-07-25','Monthly_Charge'=>13.50,'Country_Code'=>'CN'],
            ['View_ID'=>20,'F_Name'=>'Paulo','L_Name'=>'Costa','Street'=>'16 Rua 1','City'=>'Rio de Janeiro','ZIP'=>'20000-001','Acc_date'=>'2023-04-20','Monthly_Charge'=>15.00,'Country_Code'=>'BR'],
        ]);
    }
}
