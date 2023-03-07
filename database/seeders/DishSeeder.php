<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Database\Seeders\CategorySeeder;
use Faker\Generator as Faker;
class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        //3
        $dish_3 = new Dish();
        $dish_3->name='Hamburger Classic';
        $dish_3->slug = Str::slug($dish_3->name);
        $dish_3->img = 'https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $dish_3->restaurant_id=1;
        $dish_3->description='L\'Hamburger più americano che c\'è';
        $dish_3->price=9.50;
        $dish_3->ingredients='Pane, hamburger, insalata, pomodoro, cetriolini';
        $dish_3->visible=$faker->boolean();
        $dish_3->save();
        $dish_3->orders()->attach(1,['quantity' => rand(1,5)]);

            //4
        $dish_4 = new Dish();
        $dish_4->name='Patatine fritte';
        $dish_4->slug = Str::slug($dish_4->name);
        $dish_4->img = 'https://images.unsplash.com/photo-1606755456206-b25206cde27e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80';
        $dish_4->restaurant_id=1;
        $dish_4->description='Le classiche "fries" americane';
        $dish_4->price=4.50;
        $dish_4->ingredients='Patate, sale';
        $dish_4->visible=$faker->boolean();
        $dish_4->save();
        $dish_4->orders()->attach(1,['quantity' => rand(1,5)]);

        //3
        $dish_3 = new Dish();
        $dish_3->name='Hamburger Classic';
        $dish_3->slug = Str::slug($dish_3->name);
        $dish_3->img = 'https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $dish_3->restaurant_id=2;
        $dish_3->description='L\'Hamburger più americano che c\'è';
        $dish_3->price=9.50;
        $dish_3->ingredients='Pane, hamburger, insalata, pomodoro, cetriolini';
        $dish_3->visible=$faker->boolean();
        $dish_3->save();
        $dish_3->orders()->attach(18,['quantity' => rand(1,5)]);

            //4
        $dish_4 = new Dish();
        $dish_4->name='Patatine fritte';
        $dish_4->slug = Str::slug($dish_4->name);
        $dish_4->img = 'https://images.unsplash.com/photo-1606755456206-b25206cde27e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80';
        $dish_4->restaurant_id=2;
        $dish_4->description='Le classiche "fries" americane';
        $dish_4->price=4.50;
        $dish_4->ingredients='Patate, sale';
        $dish_4->visible=$faker->boolean();
        $dish_4->save();
        $dish_4->orders()->attach(18,['quantity' => rand(1,5)]);

        //3
        $dish_3 = new Dish();
        $dish_3->name='Hamburger Classic';
        $dish_3->slug = Str::slug($dish_3->name);
        $dish_3->img = 'https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $dish_3->restaurant_id=3;
        $dish_3->description='L\'Hamburger più americano che c\'è';
        $dish_3->price=9.50;
        $dish_3->ingredients='Pane, hamburger, insalata, pomodoro, cetriolini';
        $dish_3->visible=$faker->boolean();
        $dish_3->save();
        $dish_3->orders()->attach(17,['quantity' => rand(1,5)]);

            //4
        $dish_4 = new Dish();
        $dish_4->name='Patatine fritte';
        $dish_4->slug = Str::slug($dish_4->name);
        $dish_4->img = 'https://images.unsplash.com/photo-1606755456206-b25206cde27e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80';
        $dish_4->restaurant_id=3;
        $dish_4->description='Le classiche "fries" americane';
        $dish_4->price=4.50;
        $dish_4->ingredients='Patate, sale';
        $dish_4->visible=$faker->boolean();
        $dish_4->save();
        $dish_4->orders()->attach(17,['quantity' => rand(1,5)]);

             //23
        $dish_23 = new Dish();
        $dish_23->name='Bottiglia d\'acqua';
        $dish_23->slug = Str::slug($dish_23->name);
        $dish_23->img = 'https://www.biobrothers.it/2255-large_default/bottiglietta-pet-acqua-naturale-monte-rosa.jpg';
        $dish_23->restaurant_id=1;
        $dish_23->description=null;
        $dish_23->price=1.50;
        $dish_23->ingredients=null;
        $dish_23->visible=$faker->boolean();
        $dish_23->save();
        $dish_23->orders()->attach(1,['quantity' => rand(1,5)]);

        //24
    $dish_24 = new Dish();
        $dish_24->name='Lattina di birra';
        $dish_24->slug = Str::slug($dish_24->name);
        $dish_24->img = 'https://www.iperdrink.it/files/2013/07/heineken-heineken-lat-cl33.png';
        $dish_24->restaurant_id=1;
        $dish_24->description=null;
        $dish_24->price=4.50;
        $dish_24->ingredients=null;
        $dish_24->visible=$faker->boolean();
        $dish_24->save();
        $dish_24->orders()->attach(1,['quantity' => rand(1,5)]);


        //25
    $dish_25  = new Dish();
        $dish_25->name='Lattina di Coca cola';
        $dish_25->slug = Str::slug($dish_25->name);
        $dish_25->img = 'https://zenick.azureedge.net/zenick-images/24351_2DaWyZH6N5.jpg';
        $dish_25->restaurant_id=1;
        $dish_25->description=null;
        $dish_25->price=4.50;
        $dish_25->ingredients=null;
        $dish_25->visible=$faker->boolean();
        $dish_25->save();
        $dish_25->orders()->attach(1,['quantity' => rand(1,5)]);

        //5
        $dish_5 = new Dish();
        $dish_5->name='Riso cantonese';
        $dish_5->slug = Str::slug($dish_5->name);
        $dish_5->img = 'https://www.ilcuoreinpentola.it/wp-content/uploads/2020/05/riso-alla-cantonese.jpeg';
        $dish_5->restaurant_id=4;
        $dish_5->description='Uno dei più iconici risi cinesi!';
        $dish_5->price=5.50;
        $dish_5->ingredients='Riso basmati, uova, pisellini, prosciutto a dadini, olio, cipollotto';
        $dish_5->visible=$faker->boolean();
        $dish_5->save();
        $dish_5->orders()->attach(2,['quantity' => rand(1,5)]);

            //19
        $dish_19 = new Dish();
        $dish_19->name='Pollo al limone';
        $dish_19->slug = Str::slug($dish_19->name);
        $dish_19->img = 'https://www.giallozafferano.it/images/196-19689/Pollo-al-limone_650x433_wm.jpg';
        $dish_19->restaurant_id=4;
        $dish_19->description='Piatto tipico asiatico a base di pollo';
        $dish_19->price=5.50;
        $dish_19->ingredients='Pollo, limone, olio';
        $dish_19->visible=$faker->boolean();
        $dish_19->save();
        $dish_19->orders()->attach(10,['quantity' => rand(1,5)]);

        //5
        $dish_5 = new Dish();
        $dish_5->name='Riso cantonese';
        $dish_5->slug = Str::slug($dish_5->name);
        $dish_5->img = 'https://www.ilcuoreinpentola.it/wp-content/uploads/2020/05/riso-alla-cantonese.jpeg';
        $dish_5->restaurant_id=5;
        $dish_5->description='Uno dei più iconici risi cinesi!';
        $dish_5->price=5.50;
        $dish_5->ingredients='Riso basmati, uova, pisellini, prosciutto a dadini, olio, cipollotto';
        $dish_5->visible=$faker->boolean();
        $dish_5->save();
        $dish_5->orders()->attach(16,['quantity' => rand(1,5)]);

            //19
        $dish_19 = new Dish();
        $dish_19->name='Pollo al limone';
        $dish_19->slug = Str::slug($dish_19->name);
        $dish_19->img = 'https://www.giallozafferano.it/images/196-19689/Pollo-al-limone_650x433_wm.jpg';
        $dish_19->restaurant_id=5;
        $dish_19->description='Piatto tipico asiatico a base di pollo';
        $dish_19->price=5.50;
        $dish_19->ingredients='Pollo, limone, olio';
        $dish_19->visible=$faker->boolean();
        $dish_19->save();
        $dish_19->orders()->attach(16,['quantity' => rand(1,5)]);

         //5
         $dish_5 = new Dish();
         $dish_5->name='Riso cantonese';
         $dish_5->slug = Str::slug($dish_5->name);
         $dish_5->img = 'https://www.ilcuoreinpentola.it/wp-content/uploads/2020/05/riso-alla-cantonese.jpeg';
         $dish_5->restaurant_id=6;
         $dish_5->description='Uno dei più iconici risi cinesi!';
         $dish_5->price=5.50;
         $dish_5->ingredients='Riso basmati, uova, pisellini, prosciutto a dadini, olio, cipollotto';
         $dish_5->visible=$faker->boolean();
         $dish_5->save();
         $dish_5->orders()->attach(15,['quantity' => rand(1,5)]);
 
             //19
         $dish_19 = new Dish();
         $dish_19->name='Pollo al limone';
         $dish_19->slug = Str::slug($dish_19->name);
         $dish_19->img = 'https://www.giallozafferano.it/images/196-19689/Pollo-al-limone_650x433_wm.jpg';
         $dish_19->restaurant_id=6;
         $dish_19->description='Piatto tipico asiatico a base di pollo';
         $dish_19->price=5.50;
         $dish_19->ingredients='Pollo, limone, olio';
         $dish_19->visible=$faker->boolean();
         $dish_19->save();
         $dish_19->orders()->attach(15,['quantity' => rand(1,5)]);

        //7
        $dish_7 = new Dish();
        $dish_7->name='Caesar Salad';
        $dish_7->slug = Str::slug($dish_7->name);
        $dish_7->img = 'https://static.cookist.it/wp-content/uploads/sites/21/2021/07/Caesar-salad-0D6A0393-1200x675.jpg';
        $dish_7->restaurant_id=3;
        $dish_7->description='Celebre insalata';
        $dish_7->price=7.00;
        $dish_7->ingredients='Insalata, uova, pane, limone, aglio, senape, aceto, parmigiano, olio, pepe, acciuga';
        $dish_7->visible=$faker->boolean();
        $dish_7->save();
        $dish_7->orders()->attach(2,['quantity' => rand(1,5)]);

            //8
        $dish_8 = new Dish();
        $dish_8->name='Insalata Greca';
        $dish_8->slug = Str::slug($dish_8->name);
        $dish_8->img = 'https://www.donnamoderna.com/content/uploads/2021/08/insalata-greca.jpg';
        $dish_8->restaurant_id=3;
        $dish_8->description='Pietanza fresca e colorata, tipica della cucina greca';
        $dish_8->price=7.00;
        $dish_8->ingredients='Insalata, pomodori, cetrioli, peperoni, cipolle, olive nere, cubetti di formaggio feta';
        $dish_8->visible=$faker->boolean();
        $dish_8->save();
        $dish_8->orders()->attach(3,['quantity' => rand(1,5)]);

        //7
        $dish_7 = new Dish();
        $dish_7->name='Caesar Salad';
        $dish_7->slug = Str::slug($dish_7->name);
        $dish_7->img = 'https://static.cookist.it/wp-content/uploads/sites/21/2021/07/Caesar-salad-0D6A0393-1200x675.jpg';
        $dish_7->restaurant_id=7;
        $dish_7->description='Celebre insalata';
        $dish_7->price=7.00;
        $dish_7->ingredients='Insalata, uova, pane, limone, aglio, senape, aceto, parmigiano, olio, pepe, acciuga';
        $dish_7->visible=$faker->boolean();
        $dish_7->save();
        $dish_7->orders()->attach(14,['quantity' => rand(1,5)]);

            //8
        $dish_8 = new Dish();
        $dish_8->name='Insalata Greca';
        $dish_8->slug = Str::slug($dish_8->name);
        $dish_8->img = 'https://www.donnamoderna.com/content/uploads/2021/08/insalata-greca.jpg';
        $dish_8->restaurant_id=7;
        $dish_8->description='Pietanza fresca e colorata, tipica della cucina greca';
        $dish_8->price=7.00;
        $dish_8->ingredients='Insalata, pomodori, cetrioli, peperoni, cipolle, olive nere, cubetti di formaggio feta';
        $dish_8->visible=$faker->boolean();
        $dish_8->save();
        $dish_8->orders()->attach(14,['quantity' => rand(1,5)]);

        //9
        $dish_9 = new Dish();
        $dish_9->name='Bhelpuri';
        $dish_9->slug = Str::slug($dish_9->name);
        $dish_9->img = 'https://i.ytimg.com/vi/dW4iE5Lcg3w/maxresdefault.jpg';
        $dish_9->restaurant_id=4;
        $dish_9->description='Tipico snack salato indiano a base di riso soffiato';
        $dish_9->price=8.50;
        $dish_9->ingredients='Riso, arachidi, ceci, papate, cipolla, pomodoro, curcuma, coriandolo, cetriolo';
        $dish_9->visible=$faker->boolean();
        $dish_9->save();
        $dish_9->orders()->attach(4,['quantity' => rand(1,5)]);

            //10
        $dish_10 = new Dish();
        $dish_10->name='Pollo Tandoori';
        $dish_10->slug = Str::slug($dish_10->name);
        $dish_10->img = 'https://www.salepepe.it/files/2014/04/tandoori-india-1140x636.jpg';
        $dish_10->restaurant_id=4;
        $dish_10->description='Per una perfetta cena etnica, il sapore semplice e speziato del pollo tandoori farà al caso tuo';
        $dish_10->price=8.00;
        $dish_10->ingredients='Pollo arrosto, yogurt e spezie';
        $dish_10->visible=$faker->boolean();
        $dish_10->save();
        $dish_10->orders()->attach(4,['quantity' => rand(1,5)]);

             //1
        $dish_1 = new Dish();
        $dish_1->name='Spaghetti alla Carbonara';
        $dish_1->slug = Str::slug($dish_1->name);
        $dish_1->img = 'https://images.unsplash.com/photo-1588013273468-315fd88ea34c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80';
        $dish_1->restaurant_id=13;
        $dish_1->description='Piatto buono e tipico italiano';
        $dish_1->price=8.50;
        $dish_1->ingredients='Spaghetti, Uova , guanciale , pecorino';
        $dish_1->visible=$faker->boolean();
        $dish_1->save();
        $dish_1->orders()->attach(5,['quantity' => rand(1,5)]);
        
        //2
        $dish_2 = new Dish();
        $dish_2->name='Cacio e pepe';
        $dish_2->slug = Str::slug($dish_2->name);
        $dish_2->img = 'https://images.unsplash.com/photo-1612874742237-6526221588e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80';
        $dish_2->restaurant_id=13;
        $dish_2->description='Piatto buono e tipico italiano';
        $dish_2->price=7.50;
        $dish_2->ingredients='Spaghetti, pecorino romano , pepe nero in grani';
        $dish_2->visible=$faker->boolean();
        $dish_2->save();
        $dish_2->orders()->attach(5,['quantity' => rand(1,5)]);

        //11
        $dish_11 = new Dish();
        $dish_11->name='Paella di pesce';
        $dish_11->slug = Str::slug($dish_11->name);
        $dish_11->img = 'https://cdn.ilclubdellericette.it/wp-content/uploads/2017/04/paella-ricetta-originale-790x500.jpg.webp';
        $dish_11->restaurant_id=7;
        $dish_11->description='Saporita e invitante paella spagnola';
        $dish_11->price=10.00;
        $dish_11->ingredients='Riso, calamari, cozze, vongole, gamberi, scampi, pomodoro, cipolla, zafferano, paprika, olio';
        $dish_11->visible=$faker->boolean();
        $dish_11->save();
        $dish_11->orders()->attach(6,['quantity' => rand(1,5)]);

            //12
        $dish_12 = new Dish();
        $dish_12->name='Cous cous di carne';
        $dish_12->slug = Str::slug($dish_12->name);
        $dish_12->img = 'https://blog.giallozafferano.it/maniamore/wp-content/uploads/2016/05/couscous-surgelati.jpg';
        $dish_12->restaurant_id=7;
        $dish_12->description='Un grande classico della cucina nord africana';
        $dish_12->price=7.50;
        $dish_12->ingredients='Cous cous, zafferano, agnello, cipolla, zenzero, carote, zucchine, olio, sale';
        $dish_12->visible=$faker->boolean();
        $dish_12->save();
        $dish_12->orders()->attach(6,['quantity' => rand(1,5)]);

        //13
        $dish_13 = new Dish();
        $dish_13->name='Tacos';
        $dish_13->slug = Str::slug($dish_13->name);
        $dish_13->img = 'https://www.melarossa.it/wp-content/uploads/2020/12/tacos.jpg';
        $dish_13->restaurant_id=19;
        $dish_13->description='Una ricetta intramontabile della cucina messicana';
        $dish_13->price=5.00;
        $dish_13->ingredients='Tortillas di mais, manzo, peperoni, cipolle, guacamole';
        $dish_13->visible=$faker->boolean();
        $dish_13->save();
        $dish_13->orders()->attach(7,['quantity' => rand(1,5)]);

            //14
        $dish_14 = new Dish();
        $dish_14->name='Burrito';
        $dish_14->slug = Str::slug($dish_14->name);
        $dish_14->img = 'https://cdn.ilclubdellericette.it/wp-content/uploads/2021/07/burrito-di-carne-1280x720.jpg';
        $dish_14->restaurant_id=19;
        $dish_14->description='Simbolo della cucina Tex-Mex, gustoso ed invitante';
        $dish_14->price=8.50;
        $dish_14->ingredients='Tortillas di mais, fagioli neri, mais, peperoncino manzo, guacamole';
        $dish_14->visible=$faker->boolean();
        $dish_14->save();
        $dish_14->orders()->attach(7,['quantity' => rand(1,5)]);

        //15
        $dish_15 = new Dish();
        $dish_15->name='Rainbow Poke';
        $dish_15->slug = Str::slug($dish_15->name);
        $dish_15->img = 'https://somuchfoodblog.com/wp-content/uploads/2021/06/rainbow-poke8-scaled.jpg';
        $dish_15->restaurant_id=8;
        $dish_15->description='Piatto unico e squisito tipico della cucina hawaiana';
        $dish_15->price=8.50;
        $dish_15->ingredients='Riso, edemame, fagiolini, pomodori, uova , salmone';
        $dish_15->visible=$faker->boolean();
        $dish_15->save();
        $dish_15->orders()->attach(8,['quantity' => rand(1,5)]);

            //16
        $dish_16 = new Dish();
        $dish_16->name='Poke vegetariana';
        $dish_16->slug = Str::slug($dish_16->name);
        $dish_16->img = 'https://www.macrolibrarsi.it/data/speciali/large/poke-bowl.jpg';
        $dish_16->restaurant_id=9;
        $dish_16->description='Piatto unico e squisito tipico della cucina hawaiana';
        $dish_16->price=9.00;
        $dish_16->ingredients='Riso, avocado, pomodorini, peperoni, mais dolce, olio d\'oliva, semi di sesamo';
        $dish_16->visible=$faker->boolean();
        $dish_16->save();
        $dish_16->orders()->attach(13,['quantity' => rand(1,5)]);

        //15
        $dish_15 = new Dish();
        $dish_15->name='Rainbow Poke';
        $dish_15->slug = Str::slug($dish_15->name);
        $dish_15->img = 'https://somuchfoodblog.com/wp-content/uploads/2021/06/rainbow-poke8-scaled.jpg';
        $dish_15->restaurant_id=9;
        $dish_15->description='Piatto unico e squisito tipico della cucina hawaiana';
        $dish_15->price=8.50;
        $dish_15->ingredients='Riso, edemame, fagiolini, pomodori, uova , salmone';
        $dish_15->visible=$faker->boolean();
        $dish_15->save();
        $dish_15->orders()->attach(13,['quantity' => rand(1,5)]);

            //16
        $dish_16 = new Dish();
        $dish_16->name='Poke vegetariana';
        $dish_16->slug = Str::slug($dish_16->name);
        $dish_16->img = 'https://www.macrolibrarsi.it/data/speciali/large/poke-bowl.jpg';
        $dish_16->restaurant_id=8;
        $dish_16->description='Piatto unico e squisito tipico della cucina hawaiana';
        $dish_16->price=9.00;
        $dish_16->ingredients='Riso, avocado, pomodorini, peperoni, mais dolce, olio d\'oliva, semi di sesamo';
        $dish_16->visible=$faker->boolean();
        $dish_16->save();
        $dish_16->orders()->attach(8,['quantity' => rand(1,5)]);

        //17
        $dish_17 = new Dish();
        $dish_17->name='Pollo fritto';
        $dish_17->slug = Str::slug($dish_17->name);
        $dish_17->img = null;
        $dish_17->restaurant_id=25;
        $dish_17->description='Meraviglioso street food a base di pollo';
        $dish_17->price=4.50;
        $dish_17->ingredients='Pollo, olio, sale';
        $dish_17->visible=$faker->boolean();
        $dish_17->save();
        $dish_17->orders()->attach(9,['quantity' => rand(1,5)]);

            //18
        $dish_18 = new Dish();
        $dish_18->name='Kebab Ali';
        $dish_18->slug = Str::slug($dish_18->name);
        $dish_18->img = 'https://primochef.it/wp-content/uploads/2015/07/SH_pollo_fritto_limone.jpg';
        $dish_18->restaurant_id=17;
        $dish_18->description='Famosa pietanza medio orientale apprezzata ovunque';
        $dish_18->price=3.50;
        $dish_18->ingredients='Piadina, carne, insalata, cipolla, pomodoro';
        $dish_18->visible=$faker->boolean();
        $dish_18->save();
        $dish_18->orders()->attach(9,['quantity' => rand(1,5)]);

            //20
        $dish_20 = new Dish();
        $dish_20->name='Uramaki California';
        $dish_20->slug = Str::slug($dish_20->name);
        $dish_20->img = 'https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2018/05/1467Mod.jpg';
        $dish_20->restaurant_id=5;
        $dish_20->description='Pietanza buona e salutare famosa in tutto il pianeta';
        $dish_20->price=3.00;
        $dish_20->ingredients='Riso, alga, salmone, avocado, maionese';
        $dish_20->visible=$faker->boolean();
        $dish_20->save();
        $dish_20->orders()->attach(10,['quantity' => rand(1,5)]);

        //6
        $dish_6 = new Dish();
        $dish_6->name='Sushi Nigiri';
        $dish_6->slug = Str::slug($dish_6->name);
        $dish_6->img = 'https://primochef.it/wp-content/uploads/2021/10/SH_nigiri_salmone.jpg.webp';
        $dish_6->restaurant_id=5;
        $dish_6->description='Il vero e unico sushi made in Japan';
        $dish_6->price=8.50;
        $dish_6->ingredients='Riso, tonno';
        $dish_6->visible=$faker->boolean();
        $dish_6->save();
        $dish_6->orders()->attach(10,['quantity' => rand(1,5)]);

            //20
            $dish_20 = new Dish();
            $dish_20->name='Uramaki California';
            $dish_20->slug = Str::slug($dish_20->name);
            $dish_20->img = 'https://blog.giallozafferano.it/dulcisinforno/wp-content/uploads/2018/05/1467Mod.jpg';
            $dish_20->restaurant_id=30;
            $dish_20->description='Pietanza buona e salutare famosa in tutto il pianeta';
            $dish_20->price=3.00;
            $dish_20->ingredients='Riso, alga, salmone, avocado, maionese';
            $dish_20->visible=$faker->boolean();
            $dish_20->save();
            $dish_20->orders()->attach(19,['quantity' => rand(1,5)]);
    
            //6
            $dish_6 = new Dish();
            $dish_6->name='Sushi Nigiri';
            $dish_6->slug = Str::slug($dish_6->name);
            $dish_6->img = 'https://primochef.it/wp-content/uploads/2021/10/SH_nigiri_salmone.jpg.webp';
            $dish_6->restaurant_id=30;
            $dish_6->description='Il vero e unico sushi made in Japan';
            $dish_6->price=8.50;
            $dish_6->ingredients='Riso, tonno';
            $dish_6->visible=$faker->boolean();
            $dish_6->save();
            $dish_6->orders()->attach(19,['quantity' => rand(1,5)]);

        //21
        $dish_21 = new Dish();
        $dish_21->name='Tiramisù';
        $dish_21->slug = Str::slug($dish_21->name);
        $dish_21->img = 'https://www.ricettemiele.it/cache/media/2020/12/tiramisu_finale_bassa_598.jpg/7d4453c866ffa2cd6aa239a18f4a4084.jpg';
        $dish_21->restaurant_id=11;
        $dish_21->description='Goloso dessert da gustare a fine cena';
        $dish_21->price=5.00;
        $dish_21->ingredients='Uova , zucchero, mascarpone, caffè, savoiardi';
        $dish_21->visible=$faker->boolean();
        $dish_21->save();
        $dish_21->orders()->attach(11,['quantity' => rand(1,5)]);

        //24
        $dish_21 = new Dish();
        $dish_21->name='Tiramisù';
        $dish_21->slug = Str::slug($dish_21->name);
        $dish_21->img = 'https://www.ricettemiele.it/cache/media/2020/12/tiramisu_finale_bassa_598.jpg/7d4453c866ffa2cd6aa239a18f4a4084.jpg';
        $dish_21->restaurant_id=33;
        $dish_21->description='Goloso dessert da gustare a fine cena';
        $dish_21->price=5.00;
        $dish_21->ingredients='Uova , zucchero, mascarpone, caffè, savoiardi';
        $dish_21->visible=$faker->boolean();
        $dish_21->save();
        $dish_21->orders()->attach(22,['quantity' => rand(1,5)]);

            //22
        $dish_22 = new Dish();
        $dish_22->name='Panna cotta';
        $dish_22->slug = Str::slug($dish_22->name);
        $dish_22->img = 'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-panna-cotta/jcr:content/header-par/image_single.img10.jpg/1646829031222.jpg';
        $dish_22->restaurant_id=11;
        $dish_22->description='Dessert unico da assaporare in buona compagnia';
        $dish_22->price=4.00;
        $dish_22->ingredients='Panna, vaniglia, zucchero, gelatina';
        $dish_22->visible=$faker->boolean();
        $dish_22->save();
        $dish_22->orders()->attach(11,['quantity' => rand(1,5)]);

            //23
            $dish_22 = new Dish();
            $dish_22->name='Panna cotta';
            $dish_22->slug = Str::slug($dish_22->name);
            $dish_22->img = 'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-panna-cotta/jcr:content/header-par/image_single.img10.jpg/1646829031222.jpg';
            $dish_22->restaurant_id=33;
            $dish_22->description='Dessert unico da assaporare in buona compagnia';
            $dish_22->price=4.00;
            $dish_22->ingredients='Panna, vaniglia, zucchero, gelatina';
            $dish_22->visible=$faker->boolean();
            $dish_22->save();
            $dish_22->orders()->attach(22,['quantity' => rand(1,5)]);

            //24
        $dish_21 = new Dish();
        $dish_21->name='Tiramisù';
        $dish_21->slug = Str::slug($dish_21->name);
        $dish_21->img = 'https://www.ricettemiele.it/cache/media/2020/12/tiramisu_finale_bassa_598.jpg/7d4453c866ffa2cd6aa239a18f4a4084.jpg';
        $dish_21->restaurant_id=32;
        $dish_21->description='Goloso dessert da gustare a fine cena';
        $dish_21->price=5.00;
        $dish_21->ingredients='Uova , zucchero, mascarpone, caffè, savoiardi';
        $dish_21->visible=$faker->boolean();
        $dish_21->save();
        $dish_21->orders()->attach(21,['quantity' => rand(1,5)]);

            //22
        $dish_22 = new Dish();
        $dish_22->name='Panna cotta';
        $dish_22->slug = Str::slug($dish_22->name);
        $dish_22->img = 'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-panna-cotta/jcr:content/header-par/image_single.img10.jpg/1646829031222.jpg';
        $dish_22->restaurant_id=32;
        $dish_22->description='Dessert unico da assaporare in buona compagnia';
        $dish_22->price=4.00;
        $dish_22->ingredients='Panna, vaniglia, zucchero, gelatina';
        $dish_22->visible=$faker->boolean();
        $dish_22->save();
        $dish_22->orders()->attach(21,['quantity' => rand(1,5)]);

            //24
            $dish_21 = new Dish();
            $dish_21->name='Tiramisù';
            $dish_21->slug = Str::slug($dish_21->name);
            $dish_21->img = 'https://www.ricettemiele.it/cache/media/2020/12/tiramisu_finale_bassa_598.jpg/7d4453c866ffa2cd6aa239a18f4a4084.jpg';
            $dish_21->restaurant_id=31;
            $dish_21->description='Goloso dessert da gustare a fine cena';
            $dish_21->price=5.00;
            $dish_21->ingredients='Uova , zucchero, mascarpone, caffè, savoiardi';
            $dish_21->visible=$faker->boolean();
            $dish_21->save();
            $dish_21->orders()->attach(20,['quantity' => rand(1,5)]);
    
                //22
            $dish_22 = new Dish();
            $dish_22->name='Panna cotta';
            $dish_22->slug = Str::slug($dish_22->name);
            $dish_22->img = 'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-panna-cotta/jcr:content/header-par/image_single.img10.jpg/1646829031222.jpg';
            $dish_22->restaurant_id=31;
            $dish_22->description='Dessert unico da assaporare in buona compagnia';
            $dish_22->price=4.00;
            $dish_22->ingredients='Panna, vaniglia, zucchero, gelatina';
            $dish_22->visible=$faker->boolean();
            $dish_22->save();
            $dish_22->orders()->attach(20,['quantity' => rand(1,5)]);

       
    }
    }
