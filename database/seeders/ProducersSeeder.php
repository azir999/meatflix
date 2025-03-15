<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProducersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('producers')->insert([
            [
                'id' => 1,
                'profil' => 'https://m.media-amazon.com/images/M/MV5BMmNjOTI2ZjUtOTE4OC00NTgxLTg1YmUtOTU1NjVjYTliNTQxXkEyXkFqcGc@.jpg',
                'name' => 'Jeffrey Penman',
                'birthdate' => '1970-09-14',
            ],
            [
                'id' => 2,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/AdhoMikWWe1vjar68fuvekURno2.jpg',
                'name' => 'Marc Platt',
                'birthdate' => '1960-12-04',
            ],
            [
                'id' => 3,
                'profil' => 'https://m.media-amazon.com/images/M/MV5BOWNkMWU3NDYtNzQ4ZS00NjRhLThmZTMtNmU3MTY4OGUzNjcyXkEyXkFqcGc@.jpg',
                'name' => 'Jeanie Igoe',
                'birthdate' => '1975-03-20',
            ],
            [
                'id' => 4,
                'profil' => 'https://m.media-amazon.com/images/M/MV5BMGU0MjAyMGItMDJlOS00MmYwLTg5ZDEtM2MwZTQwYjllZjUxXkEyXkFqcGc@.jpg',
                'name' => 'Mike Larocca',
                'birthdate' => '1965-07-30',
            ],
            [
                'id' => 5,
                'profil' => 'https://media.licdn.com/dms/image/v2/D5603AQH0LHTpDa1XIA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1718294337240?e=1747267200&v=beta&t=I4P_Oqf_UDzDm_RrmQZc1Arf9u31M8kC5sHkT4ODsFI',
                'name' => 'Jessica Derhammer',
                'birthdate' => '1980-05-15',
            ],
            [
                'id' => 6,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/xuAIuYSmsUzKlUMBFGVZaWsY3DZ.jpg',
                'name' => 'Christopher Nolan',
                'birthdate' => '1970-07-30',
            ],
            [
                'id' => 7,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/A6FPht87DiqXzp456WjakLi2AtP.jpg',
                'name' => 'Todd Phillips',
                'birthdate' => '1970-12-20',
            ],
            [
                'id' => 8,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/9QBM78rW6E7DPHmnVFGLMgMHoyl.jpg',
                'name' => 'Jang Young-hwan',
                'birthdate' => '1968-10-15',
            ],
            [
                'id' => 9,
                'profil' => 'https://m.media-amazon.com/images/M/MV5BMjE0MTQzMDA2NV5BMl5BanBnXkFtZTYwNjQxNzU0.jpg',
                'name' => 'Lynda Obst',
                'birthdate' => '1950-03-01',
            ],
            [
                'id' => 10,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/qd8d381vz2skpreY1BfVuSfLJts.jpg',
                'name' => 'Jonathan Nolan',
                'birthdate' => '1976-06-06',
            ],
            [
                'id' => 11,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/utc1PS6WVWR5tknzTJqXtnD0kBp.jpg',
                'name' => 'Emma Thomas',
                'birthdate' => '1971-12-09',
            ],
            [
                'id' => 12,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/2XZT80gR72to084pEj4f0SCDmDn.jpg',
                'name' => 'Kevin Feige',
                'birthdate' => '1973-06-02',
            ],
            [
                'id' => 13,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/9NAZnTjBQ9WcXAQEzZpKy4vdQto.jpg',
                'name' => 'James Cameron',
                'birthdate' => '1954-08-16',
            ],
            [
                'id' => 14,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/5YWxIdEql8yyGWIcF1X3QPQ40u6.jpg',
                'name' => 'Joel Silver',
                'birthdate' => '1952-07-14',
            ],
            [
                'id' => 15,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/1qXa4o8gSQqxXSRp0X0lvRM018O.jpg',
                'name' => 'Steve Tisch',
                'birthdate' => '1949-02-14',
            ],
            [
                'id' => 16,
                'profil' => 'https://images.mubicdn.net/images/cast_member/23718/cache-209048-1489646455/image-w856.jpg',
                'name' => 'Niki Marvin',
                'birthdate' => '1975-09-27',
            ],
            [
                'id' => 17,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/yHRAgKCRESvnLN72L32BUwXLHIT.jpg',
                'name' => 'Branko Lustig',
                'birthdate' => '1938-06-10',
            ],
            [
                'id' => 18,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/irirhgOX0siCyqvMrt2hoJpXfOG.jpg',
                'name' => 'Sacha Baron Cohen',
                'birthdate' => '1971-10-13',
            ],
            [
                'id' => 19,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/bBTYGOWuF3WJBgiqVSpNBuL9qlg.jpg',
                'name' => 'David Lancaster',
                'birthdate' => '1965-04-04',
            ],
            [
                'id' => 20,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/9IBAfdNFLybTC0YBdiLV3VioIh4.jpg',
                'name' => 'Robbie Brenner',
                'birthdate' => '1963-11-02',
            ],
            [
                'id' => 21,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/y4ZPOAn2oe2KsszWkMGJeahONlU.jpg',
                'name' => 'Lars Knudsen',
                'birthdate' => '1978-01-18',
            ],
            [
                'id' => 22,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/rOpkJ03u7e2AVfnxE5ASO8Ynheo.jpg',
                'name' => 'Eli Bush',
                'birthdate' => '1981-03-30',
            ],
            [
                'id' => 23,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/dvtv8eV1O8Fl385ctOu3sqO2PbD.jpg',
                'name' => 'Yorgos Lanthimos',
                'birthdate' => '1973-05-27',
            ],
            [
                'id' => 24,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/sDVEoOK4mLZpfxhxP6y5figCdsf.jpg',
                'name' => 'Andrew Macdonald',
                'birthdate' => '1960-10-10',
            ],
            [
                'id' => 25,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/wZLj3qLrieFQzt49i981lMVijPm.jpg',
                'name' => 'Bob Gale',
                'birthdate' => '1951-05-25',
            ],
            [
                'id' => 26,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/s03CeUeC5yAXyB1acqP0zGNo2SC.jpg',
                'name' => 'Wes Anderson',
                'birthdate' => '1969-05-01',
            ],
            [
                'id' => 27,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/3CiICrmhaYnirmOMHEaFXYTbsnT.jpg',
                'name' => 'Walter Hill',
                'birthdate' => '1942-01-10',
            ],
            [
                'id' => 28,
                'profil' => 'https://media.themoviedb.org/t/p/w600_and_h900_bestv2/3bYwyBjWIWt4bl3MANxtG9F1kwf.jpg',
                'name' => 'Ifa Isfansyah',
                'birthdate' => '1982-04-05',
            ],
        ]);
    }
}
