<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movies')->insert([
           [
        
            "cover" => "https://a.ltrbxd.com/resized/film-poster/4/3/3/8/6/3/433863-the-lighthouse-0-1000-0-1500-crop.jpg?v=ee97005537",
            "title" => "The Lighthouse",
            "producer_id" => "Jeffrey Penman",
            "actor_actress" => "Robert Pattinson, Willem Dafoe.",
            "synopsis" => "Dua penjaga mercusuar berusaha menjaga kewarasan mereka saat tinggal di sebuah pulau terpencil dan misterius di New England pada tahun 1890-an."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/film-poster/2/6/6/6/7/6/266676-cruella-0-2000-0-3000-crop.jpg?v=310d3d59a9",
            "title" => "Cruella",
            "producer_id" => "Marc Platt",
            "actor_actress" => "Emma Stone, Emma Thompson.",
            "synopsis" => "Di London tahun 1970-an di tengah revolusi punk rock, seorang penipu muda bernama Estella bertekad untuk membuat namanya terkenal lewat desainnya. Ia berteman dengan sepasang pencuri muda yang menghargai selera nakalnya, dan bersama-sama mereka mampu membangun kehidupan mereka sendiri di jalanan London. Suatu hari, bakat Estella dalam berbusana menarik perhatian Baroness von Hellman, seorang legenda mode yang sangat anggun dan menakutkan. Namun hubungan mereka memicu serangkaian peristiwa dan pengungkapan yang akan menyebabkan Estella merangkul sisi jahatnya dan menjadi Cruella yang riuh, modis, dan suka membalas dendam."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/film-poster/4/8/8/3/9/9/488399-the-green-knight-0-2000-0-3000-crop.jpg?v=874a267b92",
            "title" => "The Green Knight",
            "producer_id" => "Jeanie Igoe",
            "actor_actress" => "Dev Patel, Alicia Vikander.",
            "synopsis" => "Petualangan fantasi epik berdasarkan legenda Arthurian, The Green Knight menceritakan kisah Sir Gawain, keponakan Raja Arthur yang gegabah dan keras kepala, yang memulai pencarian berani untuk menghadapi Green Knight, seorang raksasa berkulit zamrud dan penguji keberanian."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/film-poster/4/7/4/4/7/4/474474-everything-everywhere-all-at-once-0-2000-0-3000-crop.jpg?v=281f1a041e",
            "title" => "Everything Everywhere All at Once",
            "producer_id" => "Mike Larocca",
            "actor_actress" => "Michelle Yeoh, Stephanie Hsu, Ke Huy Quan.",
            "synopsis" => "Seorang imigran Tionghoa lanjut usia tersapu dalam petualangan gila di mana ia harus menyelamatkan dunia dengan menjelajahi berbagai alam semesta dan terhubung dengan kehidupan yang bisa saja ia jalani."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/sm/upload/nx/8b/vs/gc/cDbNAY0KM84cxXhmj8f0dLWza3t-0-2000-0-3000-crop.jpg?v=49eed12751",
            "title" => "Dune",
            "producer_id" => "Jessica Derhammer",
            "actor_actress" => "Timothée Chalamet, Zendaya, Oscar Isaac.",
            "synopsis" => "Paul Atreides, seorang pemuda berbakat dan cerdas yang ditakdirkan untuk sesuatu yang lebih besar, harus melakukan perjalanan ke planet paling berbahaya di alam semesta untuk memastikan masa depan keluarganya dan rakyatnya."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/sm/upload/pq/9f/sr/vt/aCIFMriQh8rvhxpN1IWGgvH0Tlg-0-2000-0-3000-crop.jpg?v=f3165fe17f",
            "title" => "Tenet",
            "producer_id" => "Christopher Nolan",
            "actor_actress" => "John David Washington, Robert Pattinson.",
            "synopsis" => "Seorang agen rahasia harus menggunakan konsep inversi waktu untuk mencegah Perang Dunia III."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/film-poster/4/0/6/7/7/5/406775-joker-0-2000-0-3000-crop.jpg?v=e4ea7f98cc",
            "title" => "Joker",
            "producer_id" => "Todd Phillips",
            "actor_actress" => "Joaquin Phoenix, Robert De Niro.",
            "synopsis" => "Seorang komedian gagal menghadapi kegagalan hidup dan akhirnya berubah menjadi penjahat keji di Kota Gotham."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/film-poster/4/2/6/4/0/6/426406-parasite-0-2000-0-3000-crop.jpg?v=8f5653f710",
            "title" => "Parasite",
            "producer_id" => "Jang Young-hwan",
            "actor_actress" => "Song Kang-ho, Lee Sun-kyun.",
            "synopsis" => "Sebuah keluarga miskin menyusup ke dalam kehidupan keluarga kaya dengan berbagai cara licik."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/film-poster/1/1/7/6/2/1/117621-interstellar-0-2000-0-3000-crop.jpg?v=7ad89e6666",
            "title" => "Interstellar",
            "producer_id" => "Lynda Obst",
            "actor_actress" => "Matthew McConaughey, Anne Hathaway.",
            "synopsis" => "Sebuah tim penjelajah luar angkasa mencari planet baru untuk menyelamatkan umat manusia."
           ],
           ["cover" => "https://a.ltrbxd.com/resized/sm/upload/sv/95/s9/4j/inception-0-2000-0-3000-crop.jpg?v=30d7224316",
            "title" => "Inception",
            "producer_id" => "Lynda Obst",
            "actor_actress" => "Leonardo DiCaprio, Joseph Gordon-Levitt.",
            "synopsis" => "Seorang pencuri ahli harus menanamkan ide dalam mimpi seseorang untuk menyelesaikan tugas terakhirnya."
           ],
           [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/5/1/1/4/7/51147-the-prestige-0-2000-0-3000-crop.jpg?v=ad7e891177",
            "title" => "The Prestige",
            "producer_id" => "Jonathan Nolan",
            "actor_actress" => "Hugh Jackman, Christian Bale.",
            "synopsis" => "Dua pesulap bersaing untuk menciptakan trik sulap terbaik dalam sejarah."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/sm/upload/78/y5/zg/ej/oefdD26aey8GPdx7Rm45PNncJdU-0-1000-0-1500-crop.jpg?v=2d0ce4be25",
            "title" => "The Dark Knight",
            "producer_id" => "Emma Thomas",
            "actor_actress" => "Christian Bale, Heath Ledger.",
            "synopsis" => "Batman menghadapi ancaman besar dari Joker yang ingin menghancurkan Gotham."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/2/2/6/6/6/0/226660-avengers-endgame-0-1000-0-1500-crop.jpg?v=250ab286a3",
            "title" => "Avengers: Endgame",
            "producer_id" => "Kevin Feige",
            "actor_actress" => "Robert Downey Jr., Chris Evans.",
            "synopsis" => "Para Avengers berusaha mengembalikan semua yang hilang setelah Thanos menghapus separuh kehidupan di alam semesta."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/5/1/5/2/4/51524-titanic-0-1000-0-1500-crop.jpg?v=7517ea94ce",
            "title" => "Titanic",
            "producer_id" => "James Cameron",
            "actor_actress" => "Leonardo DiCaprio, Kate Winslet.",
            "synopsis" => "Kisah cinta Jack dan Rose yang terjalin di kapal Titanic yang malang."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/5/1/5/1/8/51518-the-matrix-0-1000-0-1500-crop.jpg?v=fc7c366afe",
            "title" => "The Matrix",
            "producer_id" => "Joel Silver",
            "actor_actress" => "Keanu Reeves, Laurence Fishburne.",
            "synopsis" => "Seorang pria menemukan bahwa dunianya hanyalah simulasi komputer dan ia ditakdirkan untuk membebaskan umat manusia."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/2/7/0/4/2704-forrest-gump-0-1000-0-1500-crop.jpg?v=173bc04cf0",
            "title" => "Forrest Gump",
            "producer_id" => "Steve Tisch",
            "actor_actress" => "Tom Hanks, Robin Wright.",
            "synopsis" => "Seorang pria dengan keterbatasan intelektual mengalami berbagai peristiwa bersejarah dengan cara yang unik."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/sm/upload/7l/hn/46/uz/zGINvGjdlO6TJRu9wESQvWlOKVT-0-1000-0-1500-crop.jpg?v=8736d1c395",
            "title" => "The Shawshank Redemption",
            "producer_id" => "Niki Marvin",
            "actor_actress" => "Tim Robbins, Morgan Freeman.",
            "synopsis" => "Seorang pria yang dipenjara karena kejahatan yang tidak dilakukannya berusaha menemukan harapan di balik jeruji besi."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/5/1/9/5/2/51952-gladiator-2000-0-1000-0-1500-crop.jpg?v=0071a74571",
            "title" => "Gladiator",
            "producer_id" => "Branko Lustig",
            "actor_actress" => "Russell Crowe, Joaquin Phoenix.",
            "synopsis" => "Seorang jenderal Roma dikhianati dan menjadi gladiator untuk membalas dendam kepada Kaisar."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/5/1/6/1/4/51614-borat-cultural-learnings-of-america-for-make-benefit-glori-0-1000-0-1500-crop.jpg?v=17316654a2",
            "title" => "Borat: Cultural Learnings of America for Make Benefit Glorious Nation of Kazakhstan",
            "producer_id" => "Sacha Baron Cohen",
            "actor_actress" => "Sacha Baron Cohen, Ken Davitian.",
            "synopsis" => "Seorang jurnalis dari Kazakhstan melakukan perjalanan ke Amerika untuk membuat film dokumenter, tetapi malah menimbulkan kekacauan dengan tingkah lakunya yang aneh."
            ],            
            [
            "cover" => "https://a.ltrbxd.com/resized/sm/upload/cl/dn/kr/f1/4C9LHDxMsoYI0S3iMPZdm3Oevwo-0-1000-0-1500-crop.jpg?v=d13ea36528",
            "title" => "Whiplash",
            "producer_id" => "David Lancaster",
            "actor_actress" => "Miles Teller, J.K. Simmons.",
            "synopsis" => "Seorang drummer muda berusaha menjadi yang terbaik dengan menghadapi instruktur musik yang keras."
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/sm/upload/vm/qf/ng/lp/2FE2A140-82B9-48C7-ABD8-6632D4385666-0-1000-0-1500-crop.jpg?v=e2d1dfedaa",
            "title" => "Borat Subsequent Moviefilm",
            "producer_id" => "Sacha Baron Cohen",
            "actor_actress" => "Sacha Baron Cohen, Maria Bakalova.",
            "synopsis" => "14 tahun setelah membuat film tentang perjalanannya melintasi Amerika Serikat, Borat mempertaruhkan nyawa dan anggota tubuhnya saat ia kembali ke Amerika Serikat bersama putri kecilnya, dan mengungkap lebih banyak tentang budaya, pandemi COVID-19, dan pemilihan politik.
"
            ],
            [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/1/1/4/6/0/5/114605-dallas-buyers-club-0-2000-0-3000-crop.jpg?v=f1a830ac72",
            "title" => "Dallas Buyers Club",
            "producer_id" => "Robbie Brenner",
            "actor_actress" => "Matthew McConaughey, Jennifer Garner, Jared Leto.",
            "synopsis" => "Diangkat dari kisah nyata Ron Woodroof, seorang pria homofobik, pecandu narkoba, pecinta wanita, yang pada tahun 1986 didiagnosis mengidap HIV/AIDS dan diberi waktu tiga puluh hari untuk hidup."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/4/5/9/5/6/4/459564-midsommar-0-2000-0-3000-crop.jpg?v=ed7b8ded1f",
            "title" => "Midsommar",
            "producer_id" => "Lars Knudsen",
            "actor_actress" => "Florence Pugh, Jack Reynor William.",
            "synopsis" => "Beberapa teman pergi ke Swedia untuk belajar sebagai antropolog di sebuah festival musim panas yang diadakan setiap sembilan puluh tahun di kota asal salah satu dari mereka. Apa yang dimulai sebagai liburan impian di tempat di mana matahari tidak pernah terbenam, secara bertahap berubah menjadi mimpi buruk yang gelap saat penduduk misterius mengundang mereka untuk berpartisipasi dalam kegiatan perayaan yang mengganggu."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/3/2/6/2/7/9/326279-lady-bird-0-2000-0-3000-crop.jpg?v=754ff28eb4",
            "title" => "Lady Bird",
            "producer_id" => "Eli Bush",
            "actor_actress" => "Saoirse Ronan, Laurie Metcalf.",
            "synopsis" => "Lady Bird McPherson, seorang gadis berusia 17 tahun yang berkemauan keras, berpendirian teguh, dan artistik, tumbuh dewasa di Sacramento. Hubungannya dengan ibunya dan pendidikannya dipertanyakan dan diuji saat ia berencana untuk melanjutkan ke perguruan tinggi.
"
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/7/1/0/3/5/2/710352-poor-things-0-2000-0-3000-crop.jpg?v=a0f2ee9a0e",
            "title" => "Poor Things",
            "producer_id" => "Yorgos Lanthimos",
            "actor_actress" => "Emma Stone, Mark Ruffalo, Willem Dafoe.",
            "synopsis" => "Dihidupkan kembali oleh seorang ilmuwan yang tidak ortodoks, seorang wanita muda melarikan diri bersama seorang pengacara dalam petualangan kilat melintasi benua. Bebas dari prasangka pada masanya, ia tumbuh teguh dalam tujuannya untuk memperjuangkan kesetaraan dan pembebasan."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/8/3/4/6/5/6/834656-civil-war-0-2000-0-3000-crop.jpg?v=aefec33dbe",
            "title" => "Civil War",
            "producer_id" => "Andrew Macdonald",
            "actor_actress" => "Kirsten Dunst, Wagner Moura.",
            "synopsis" => "Dalam waktu dekat, sekelompok jurnalis perang berusaha bertahan hidup sambil melaporkan kebenaran saat Amerika Serikat berada di ambang perang saudara."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/5/1/9/4/5/51945-back-to-the-future-0-2000-0-3000-crop.jpg?v=6662417358",
            "title" => "Back to the Future",
            "producer_id" => "Bob Gale",
            "actor_actress" => "Michael J. Fox, Christopher Lloyd.",
            "synopsis" => "Remaja tahun delapan puluhan Marty McFly secara tidak sengaja dikirim kembali ke tahun 1955, secara tidak sengaja mengganggu pertemuan pertama orang tuanya dan menarik minat romantis ibunya. Marty harus memperbaiki kerusakan sejarah dengan menghidupkan kembali romansa orang tuanya dan - dengan bantuan teman penemunya yang eksentrik Doc Brown - kembali ke tahun 1985."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/sm/upload/z2/5l/zn/to/uMcbu3qVseJGH24xUAyIVzmcQV4-0-2000-0-3000-crop.jpg?v=8bc488a9ff",
            "title" => "Isle of Dogs",
            "producer_id" => "Wes Anderson",
            "actor_actress" => "Bryan Cranston, Koyu Rankin.",
            "synopsis" => "Di masa depan, wabah flu anjing menyebabkan wali kota sebuah kota di Jepang membuang semua anjing ke sebuah pulau yang digunakan sebagai tempat pembuangan sampah. Para anjing buangan itu harus segera memulai perjalanan epik ketika seorang anak laki-laki berusia 12 tahun tiba di pulau itu untuk menemukan hewan peliharaan kesayangannya."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/8/5/0/4/5/9/850459-alien-romulus-0-2000-0-3000-crop.jpg?v=acabb7fd83",
            "title" => "Alien: Romulus",
            "producer_id" => "Walter Hill",
            "actor_actress" => "Cailee Spaeny, David Jonsson.",
            "synopsis" => "Saat mengais-ngais bagian terdalam stasiun luar angkasa yang terbengkalai, sekelompok penjajah luar angkasa muda berhadapan langsung dengan bentuk kehidupan paling mengerikan di alam semesta."
            ],
              [
            "cover" => "https://a.ltrbxd.com/resized/film-poster/7/1/3/9/5/8/713958-yuni-0-2000-0-3000-crop.jpg?v=36ed328013",
            "title" => "Yuni",
            "producer_id" => "Ifa Isfansyah",
            "actor_actress" => "Arawinda Kirana, Kevin Ardilova.",
            "synopsis" => "Pada tahun terakhirnya di sekolah menengah, seorang siswa Indonesia yang cerdas bertekad untuk melanjutkan pendidikannya dan menolak menikah, meskipun ada harapan dari masyarakatnya."
            ],
           
                ]);
            }
        }