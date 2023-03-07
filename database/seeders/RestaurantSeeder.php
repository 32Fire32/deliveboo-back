<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Provider\it_IT\Company;



class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Ristorante 1, Americano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 1;
        $newRestaurant->name = 'White Backery';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza del Sacro Cuore, 22, 65122 Pescara PE';
        $newRestaurant->description = 'Piatti americani serviti su tovagliette di carta in un piccolo locale con tavoli colorati e targhe vintage.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/c21ecdba-5901-4deb-9735-cd21e80ba67d/98e6373a-8de1-4f8b-9b9d-30ad382899c7.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(9);
        $newRestaurant->categories()->attach(11);

        // Ristorante 1a, Americano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 2;
        $newRestaurant->name = 'American Bar';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Garibaldi, 12, 65122 Macerata Mc';
        $newRestaurant->description = 'Vivi l\'esperienza di sorseggiare il vero whishy USA con i tuoi amici!';
        $newRestaurant->img = 'https://cdn1.matadornetwork.com/blogs/1/2021/10/american-themed-restaurants-560x420.jpeg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '15:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(9);

        // Ristorante 1b, Americano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 3;
        $newRestaurant->name = 'Girl & The Goat';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Viale della vittoria, 87, 50053 Empoli Em';
        $newRestaurant->description = 'Menù creativi e piatti curati ispirati alle migliori tradizioni USA';
        $newRestaurant->img = 'https://assets.londonist.com/uploads/2019/08/i875/the_delaunay.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '09:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);

        // Ristorante 2, Asiatico
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 4;
        $newRestaurant->name = 'Bambu';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza Filippo Andrea doria pamphili, 19';
        $newRestaurant->description = 'Il ristorante Bambu offre un ambiente accogliente, atmosfera casalinga per aiutarvi a gustare la cena in peino relax... Abbiamo messo insieme una squadra di professionisti, i quali aspirano a eccellere costantemente!';
        $newRestaurant->img = 'https://www.scattidigusto.it/wp-content/uploads/2018/01/Kowa-nuovo-ristorante-giapponese-cinese-Milano.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:30:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);

        // Ristorante 2a, Asiatico
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 5;
        $newRestaurant->name = 'Taste East asian food';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Largo Europa 3, Treviso (Tr)';
        $newRestaurant->description = 'Atmosfera unica e gusti orientali vi accompagneranno in questa esperienza unica.';
        $newRestaurant->img = 'https://i2.wp.com/www.puntarellarossa.it/wp/wp-content/uploads/2015/05/ristorante-taste-east-cucina-cinese-asiatica-roma-asian-food1.jpeg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:30:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);

        // Ristorante 2b, Asiatico
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 6;
        $newRestaurant->name = 'Ristorante la Fortuna';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Porta Garibaldi 8, Brindisi(Br)';
        $newRestaurant->description = 'Ristorante tipico cinese con menù di pietanze secondo le tradizioni orientali';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/07/60/1f/6a/hari-ristorante-giapponese.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '15:30:00';
        $newRestaurant->closing_time = '23:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);

        // Ristorante 3, Healthy
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 7;
        $newRestaurant->name = 'Zumos Juicebar & healthy food';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Boncompagni, 14/D Pisa (Pi)';
        $newRestaurant->description = 'Il primo Healthy Fast Food a Roma, dove mangiare sano e bere frullati con frutta tropicale è possibile';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/1a/ee/a3/b9/don-t-worry-be-healthy.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '11:30:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(6);

        // Ristorante 3, Healthy
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 8;
        $newRestaurant->name = 'Healty Color';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Picasso, 5/D, Cagliari (Ca)';
        $newRestaurant->description = 'La salute prima di tutto! Healty bar dove prima del gusto c\'è la salute';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/e5534ecf-b63d-48c6-bb3d-efa8251d7f44/015b916b-6f7d-49c0-8583-f551dc691861.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '06:30:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(11);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(6);

        // Ristorante 3, Healthy
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 9;
        $newRestaurant->name = 'Healty Ebbasta';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Largo Bonasera, 11 Torino (To)';
        $newRestaurant->description = 'Il ristorante Healty del rapper Sfera Ebbasta, idolo delle nuovissime generazioni!';
        $newRestaurant->img = 'https://www.torinofree.it/wp-content/uploads/2022/01/sfera-ebbasta-ristorante.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:30:00';
        $newRestaurant->closing_time = '21:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(8);

        // Ristorante 4, Indiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 10;
        $newRestaurant->name = 'JALALABAD cucina Indiana e Araba';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Corso Vittorio Emanuele II, 18, Ancona (An)';
        $newRestaurant->description = 'Curry di carne e vegani, oltre a biryani e piatti tandoori, in un ristorante a tinte vivaci con arredi tradizionali.';
        $newRestaurant->img = 'https://www.ristorantetara.it/gallery/files/Ristorante-indiano-tara-milano-gallery-3.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '23:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(4);
        $newRestaurant->categories()->attach(11);

        // Ristorante 4a, Indiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 11;
        $newRestaurant->name = 'Ghandi';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Corso Repubblica 2, Perugia (Pg)';
        $newRestaurant->description = 'Curry, byriani, tandoori, tutto il tipico della cucina indiana.';
        $newRestaurant->img = 'https://ristorantetara.it//img/Ristorante-indiano-tara-milano.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '17:00:00';
        $newRestaurant->closing_time = '23:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(4);
        $newRestaurant->categories()->attach(11);
        $newRestaurant->categories()->attach(3);

        // Ristorante 4b, Indiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 12;
        $newRestaurant->name = 'Il Guru';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazza del popolo, Lucca (Lu)';
        $newRestaurant->description = 'Vieni a scoprire un nuovo universo di sapori da "Il Guru".';
        $newRestaurant->img = 'https://www.napolitan.it/wp-content/uploads/2019/03/c700x420.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '23:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(4);
        $newRestaurant->categories()->attach(11);
        $newRestaurant->categories()->attach(2);

        // Ristorante 5, Italiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 13;
        $newRestaurant->name = 'Ristorante Il Falchetto';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via dei Montecatini, 12';
        $newRestaurant->description = 'Piatti romani come cacio e pepe e ossobuco, oltre a una corposa carta di vini, in un ristorante elegante.';
        $newRestaurant->img = 'https://wips.plug.it/cips/initalia.virgilio.it/cms/2019/10/spaghetti.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);

        // Ristorante 5a, Italiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 14;
        $newRestaurant->name = 'Pizza Italia';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Vicolo del gatto, 2, Milano (Mi)';
        $newRestaurant->description = 'Storica pizzeria milanese unica per la bontà e genuinità degli ingredienti. Disponibile anche pizza per celiaci';
        $newRestaurant->img = 'https://www.lastrappata.it/wp-content/uploads/2021/03/pizza-margherita-classica.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '12:00:00';
        $newRestaurant->closing_time = '22:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);

        // Ristorante 5b, Italiano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 15;
        $newRestaurant->name = 'Ristorante Acquasanta';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via dell\'aquasanta, 5 Jesi (An)';
        $newRestaurant->description = 'Da cinquant\'anni storico ristorante Jesino. Offre una vasta gamma di cucina italiana per gli amanti della tipica cucina marchigiana.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/15/a8/7a/0a/interieur.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '11:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);

        // Ristorante 6, Mediterraneo
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 16;
        $newRestaurant->name = 'Ristorante Mediterraneo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Anagni, 52/54 Venezia (Ve)';
        $newRestaurant->description = 'Acclamato ristorante del museo con giardino e sushi bar che offre dolci e piatti mediterranei.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/10234bfb-f7dd-48f5-8eb6-f0c8a7d7765c/76c6e8ae-4ba4-413a-add5-d3c071276c27.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '12:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);

        // Ristorante 6a, Mediterraneo
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 17;
        $newRestaurant->name = 'Ristorante Cusamè';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via del porto 4, La Spezia';
        $newRestaurant->description = 'Acclamato ristorante del museo con giardino e sushi bar che offre dolci e piatti mediterranei.';
        $newRestaurant->img = 'https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,q_auto,f_auto/restaurant/10234bfb-f7dd-48f5-8eb6-f0c8a7d7765c/76c6e8ae-4ba4-413a-add5-d3c071276c27.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '12:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);

        // Ristorante 6b, Mediterraneo
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 18;
        $newRestaurant->name = 'Ristorante Il Ponte';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Corso Liberazione 3 Como (Co)';
        $newRestaurant->description = 'Dalla cucina spagnola, a quella italiana e fusion, qui da noi puoi trovare la migliore cucina mediterranea della zona.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/18/23/25/39/our-delicious-paellas.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '11:00:00';
        $newRestaurant->closing_time = '22:50:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);

        // Ristorante 7, Messicano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 19;
        $newRestaurant->name = 'La Cucaracha';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Mocenigo, 10 Roma (Rm)';
        $newRestaurant->description = 'Tacos, quesadillas e fajitas, oltre a cocktail a base di tequila, in un locale accogliente con colorati murales messicani.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/10/bd/7d/bb/fajitas-de-pollo-chiken.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(7);
        $newRestaurant->categories()->attach(11);
        

        // Ristorante 7a, Messicano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 20;
        $newRestaurant->name = 'Santa Fè';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via della pace 254/a Rimini (Ri)';
        $newRestaurant->description = 'Ottime specialità messicane tra cui burrito, tacos e quesadillas! Disponibile anche per celiaci.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/10/bd/7d/bb/fajitas-de-pollo-chiken.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(7);
        $newRestaurant->categories()->attach(11);
        $newRestaurant->categories()->attach(3);

        // Ristorante 7b, Messicano
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 21;
        $newRestaurant->name = 'Ristorante Cicero';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Lungomare 4, Senigallia (An)';
        $newRestaurant->description = 'Vieni a mangiare Tacos da noi! Ogni sera animazione messicana e il mercoledì la prima birra è gratis';
        $newRestaurant->img = 'https://www.urbanmagazine.it/wp-content/uploads/canteen-770x480.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '16:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(7);
        $newRestaurant->categories()->attach(11);
        $newRestaurant->categories()->attach(9);


        // Ristorante 8, Poke
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 22;
        $newRestaurant->name = 'Gusto Poke';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Viale Leonardo da Vinci, 264 Milano (Mi)';
        $newRestaurant->description = 'Elegante wine bar in stile industrial chic, con mattoni a vista, ampie vetrate e menù su lavagna.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/1b/f8/2b/2d/variedad-de-poke-bowls.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '11:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);

        // Ristorante 8a, Poke
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 23;
        $newRestaurant->name = 'Hawaii Poke';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Largo Nazioni Unite 235, Lecce (Le)';
        $newRestaurant->description = 'Bella vista sul mare e menù poke di altissimo livello. Vieni a degustare le nostre tradizionali ed alternative ricette!';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/1b/f8/2b/2d/variedad-de-poke-bowls.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '09:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);

        // Ristorante 8b, Poke
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 24;
        $newRestaurant->name = 'Mandala Poke';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via del corso 5, Potenza';
        $newRestaurant->description = 'Gusto all\' ennesima potenza! Vieni e personalizza la tua poke!';
        $newRestaurant->img = 'https://www.urbanmagazine.it/wp-content/uploads/canteen-770x480.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '12:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);

        // Ristorante 9, FastFood
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 25;
        $newRestaurant->name = 'Birretta wine and food - Hamburger';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Leopoldo Nobili, 36 Napoli (Na)';
        $newRestaurant->description = 'Burger bar in stile industrial-chic che serve piatti vegani, carne e pollo locali accompagnati da birre artigianali.';
        $newRestaurant->img = 'http://www.studioristorante.com/wp-content/uploads/2017/07/5630be0a8fc825d5ac1c5575.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(9);
        $newRestaurant->categories()->attach(11);

        // Ristorante 9a, FastFood
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 26;
        $newRestaurant->name = 'No Junk Very Food';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Dante, 6, Palermo (Pa)';
        $newRestaurant->description = 'La nostra cucina riesce ad unire il gusto al mangiar bene, non ci credete? Venite a trovarci!.';
        $newRestaurant->img = 'http://www.studioristorante.com/wp-content/uploads/2017/07/5630be0a8fc825d5ac1c5575.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '07:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(9);
        $newRestaurant->categories()->attach(11);

        // Ristorante 9b, FastFood
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 27;
        $newRestaurant->name = ' Vegan Vector Burger';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via America 21, Siena';
        $newRestaurant->description = 'Il Fast Food per vegani è finalmente realtà! Hot dog di zucchine e Hamburger di soia!';
        $newRestaurant->img = 'https://ychef.files.bbci.co.uk/624x351/p081pwwb.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '05:00:00';
        $newRestaurant->closing_time = '21:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(9);

        // Ristorante 10, Sushi
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 28;
        $newRestaurant->name = 'Neko Sushi Monteverde';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Piazzale Eugenio Morelli, 14, Fabriano (An)';
        $newRestaurant->description = 'Riso alla cantonese e sushi, anche nella formula all you can eat, in ristorante con arredi scuri essenziali.';
        $newRestaurant->img = 'https://www.cosafarearoma.it/wp-content/uploads/2018/10/Migliore-Sushi-a-Roma-Ristoranti-Giapponesi.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);

        // Ristorante 10a, Sushi
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 29;
        $newRestaurant->name = 'Take Sushi';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Roma 1, Siena';
        $newRestaurant->description = 'Raffinato ed elegante ristorante di Sushi per palati raffinati e veri intenditori.';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/18/0c/84/97/take-sushi-ristorante.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '19:00:00';
        $newRestaurant->closing_time = '22:00:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);

        // Ristorante 10b, Sushi
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 30;
        $newRestaurant->name = 'Eat Sushi Japan';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via del sole 54, Brescia';
        $newRestaurant->description = 'Solo cucina giapponese. All you can eat sia a pranzo e a cena ad un prezzo incredibile!';
        $newRestaurant->img = 'https://sushiandsound.it/wp-content/uploads/2022/08/differenza-all-you-can-eat-giapponese-928x600.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '18:00:00';
        $newRestaurant->closing_time = '23:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(2);
        $newRestaurant->categories()->attach(3);
        $newRestaurant->categories()->attach(8);
        $newRestaurant->categories()->attach(10);
        $newRestaurant->categories()->attach(11);

        // Ristorante 11, Dolci
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 31;
        $newRestaurant->name = 'I Dolci Di Checco Er Carettiere';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Benedetta, 7 Pescara (Pe)';
        $newRestaurant->description = 'Elegante caffè/bar per colazione e pranzi leggeri, oltre a caffè, dolci artigianali e gelati.';
        $newRestaurant->img = 'https://www.bajaroma.it/wp-content/uploads/2020/04/Baja-Ristorante-Dolce.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '06:00:00';
        $newRestaurant->closing_time = '15:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(1);
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);

        // Ristorante 11a, Dolci
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 32;
        $newRestaurant->name = 'Pasticceria Borgonovo';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Via Liberazione 89, Sassari (Ss)';
        $newRestaurant->description = 'Briosche, Cappuccini, Torte per matrimonio ed altro ancora!';
        $newRestaurant->img = 'https://media-cdn.tripadvisor.com/media/photo-s/1a/d7/2b/7c/pasticceria-europa.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '06:00:00';
        $newRestaurant->closing_time = '22:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(11);

        // Ristorante 11b, Dolci
        $newRestaurant = new Restaurant;
        $newRestaurant->user_id = 33;
        $newRestaurant->name = 'Sogni di Zucchero';
        $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
        $newRestaurant->address = 'Corso Panigale 5, Roma (Ro)';
        $newRestaurant->description = 'Maestri del cake design siamo pronti a soddisfare le vostre richieste per festeggiare i momenti più importanti della vostra vita!';
        $newRestaurant->img = 'https://www.pfatisch.com/wp-content/uploads/2021/04/pft-02-Sito-Immagine-Pasticceria-Torte.jpg';
        $newRestaurant->vat = $faker->vat();
        $newRestaurant->opening_time = '05:30:00';
        $newRestaurant->closing_time = '20:30:00';
        $newRestaurant->phone_number = $faker->phoneNumber();
        $newRestaurant->price_shipping = $faker->randomFloat(1, 1, 4);
        $newRestaurant->sponsored = $faker->boolean();
        $newRestaurant->save();
        $newRestaurant->categories()->attach(5);
        $newRestaurant->categories()->attach(6);
        $newRestaurant->categories()->attach(11);
    }
}
