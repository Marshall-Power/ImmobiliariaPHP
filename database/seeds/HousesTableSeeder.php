<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('houses')->insert([
        'name' => 'Mansió 1',
        'address' => 'c/ 11 de Setembre, nº4',
        'description_ca' => 'Mansió molt ben situada, amoblada, 471 m², 5 habitacions, 3 banys, aire acondicionat i un garatge on poder aparcar dos cotxes. Certificat energetic tipus A.',
        'description_es' => 'Mansión muy bien situada, amueblada, 471 m², 5 habitaciones, 3 baños, aire acondicionadao y un garage dónde poder aparcar dos coches. Certificado energetico tipo A.',
        'latitude' => 41.9963105,
        'longitude' => 2.8268954,
        'zone_id' => 1,
        'price' => 675000,
        'size' => 421,
        'rooms' => 5,
        'bathrooms' => 3,
        'furnished' => true,
        'air_conditioner' => true,
        'climate_id' => 3,
        'elevator' => false,
        'employee_id' => 2,
        'housetype_id' => 3,
        'contract_id' => 2,
        'date_published' => now(),
        'available' => true,
        'parking' => true,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Pis 1',
        'address' => 'c/ Santa Clara, nº22, A',
        'description_ca' => 'Bonic pis totalment moblat de 40 m² útils. Consta de 1 habitació, amb armaris, 1 bany complet, cuina independent amb rentador, sala menjador i balcó. Terres de parquet, doble vidre, portes de fusta, bomba de calor i fred, persianes i cortines elèctriques, ascensor, cèntric. Inmillorables vistes i molt lluminós. A punt per entra-hi a viure. Animals no permesos.',
        'description_es' => 'Bonito piso totalmente amueblado de 40m² utiles. Consta de 1 habitación con armarios, 1 banyo completo, cocina independiente con lavadora, sala de estar y balcón. Suelo de parquet, doble vidior, puertas de madera, bomba de calor y frio, persianas y cortians electricas, ascensor, céntrico. Immejorables vistas y muy luminoso. Apunto para entrar a vivir. Animales de companyia no permitidos.',
        'latitude' => 41.9840907,
        'longitude' => 2.8232524,
        'zone_id' => 1,
        'price' => 575,
        'size' => 40,
        'rooms' => 1,
        'bathrooms' => 1,
        'furnished' => true,
        'air_conditioner' => true,
        'climate_id' => 3,
        'elevator' => true,
        'employee_id' => 2,
        'housetype_id' => 1,
        'contract_id' => 1,
        'date_published' => now(),
        'available' => true,
        'parking' => false,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Mansió 2',
        'address' => 'c/ Torres de Palau, nº2',
        'description_ca' => 'Casa a quatre vents a la millor zona residencial de Girona, amb vistes i privacitat total, sense veïns al davant. Superfície construïda 380 m² sobre parcel•la de 1.083 m². Consta de saló menjador amb dos ambients diferenciats, cuina office amb llar de foc i rebost, 6 habitacions dobles (1 tipus suite), 3 banys, lavabo, sala de bugaderia, garatge gran i traster. El jardí perimetral i frontal té enllumenat i sistema de reg, piscina de 5m x 10m. Casa amb acabats de molt bona qualitat, tancaments de doble vidre i fusteria de noguera, amb muntacàrregues i previsió per un ascensor, sistema de seguretat. ',
        'description_es' => 'Casa de cuatro vientos en la mejor zona residencial de Gerona, con vistas y privacidad total, sin vecinos enfrente. Superfície construida 380 m² sobre parcela de 1.083 m². Consta de salón de estar con dos ambientes diferenciados, cocina office con chiminea y despensa, 6 habitaciones dobles (1 tipus suite) 4 baños, lavabo, sala de bugaderia, garage grande y trastero. El jardín perimentral y fronta tiene iluminación y sistema de riego, piscina de 5m x 10m. Casa con acabados de muy buena calidad, cierres de doble vidirio y fusteria de noguera, con montacargas y previsión para un ascensor, sistema de seguridad.',
        'latitude' => 41.951369,
        'longitude' => 2.8174914,
        'zone_id' => 1,
        'price' => 3500,
        'size' => 380,
        'rooms' => 6,
        'bathrooms' => 4,
        'furnished' => true,
        'air_conditioner' => true,
        'climate_id' => 3,
        'elevator' => false,
        'employee_id' => 2,
        'housetype_id' => 3,
        'contract_id' => 1,
        'date_published' => now(),
        'available' => true,
        'parking' => true,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Atic 1',
        'address' => 'c/ de la Cruz, nº4',
        'description_ca' => 'Àtic en lloguer amoblado. 421 m², disposa de 4 dormitoris (3 dobles) amb paviment de parquet, cuina office, saló menjador de 49 m², 2 banys complets, 2 terrasses de 45 m², calefacció de gas natural, aire condicionat, finestres amb alumini i amb vidre doble. Dues places de pàrquing incloses',
        'description_es' => 'Atico para alquilar amueblado. 421 m², dispone de 4 dormitorios (3 dobles) con pavimiento de parquet, cocina office, salón comedor de 49 m², 2 baños completos, 2 terrazas de 45 m², calefacción de gas natura, aire acondicionado, ventandas con aluminio y vidrio doble, dos plazas de parking',
        'latitude' => 41.9755799,
        'longitude' => 2.8201955,
        'zone_id' => 1,
        'price' => 1200,
        'size' => 421,
        'rooms' => 4,
        'bathrooms' => 2,
        'furnished' => true,
        'air_conditioner' => true,
        'climate_id' => 3,
        'elevator' => true,
        'employee_id' => 2,
        'housetype_id' => 4,
        'contract_id' => 1,
        'date_published' => now(),
        'available' => true,
        'parking' => true,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Dúplex 1',
        'address' => 'Plaça Catalunya, nº21',
        'description_ca' => 'Fantàstic àtic dúplex al cor del Barri Vell de Girona acabat de reformar. Estat: a estrenar. En una comunitat molt tranquil. En ple centre comercial i cultural de la ciutat. Molt lluminós, rebedor, bany complet, distribuïdor, 2 habitacions, saló menjador amb terrassa i vistes al Barri Vell, coïa completament equipada. El dúplex es lloga amb electrodomèstics. Equipat amb aire condicionat i bomba de calor. Materials de primera qualitat en tots els acabats: Terres de gres, finestres amb tancaments molt aïllants (tèrmic i acústic) a doble vidre, cuina equipada amb nevera integrada. Conserva la Pedra vista original de la muralla de la Ciutat de Girona. Ascensor amb accés a dintre.',
        'description_es' => 'Fántastico ático dúplex en el corazón del Barri Vell de Gerona acabado de reformar. Estado: a estrenar. En una comunidad muy tranquila. En pleno centro comerical y cultural de la ciudad. Muy luminoso, rebedor, baño completo, distribuidor, 2 habitaciones, salón comedor con terraza y vistas al Barri Vell, El dúplex se alquila con electrodomesticos. Equipado con aire acondicionado y bomba de calor. Materiales de primera calidad den todos los acabados: Suelos de gres, ventandas con cierres muy aislantes (térmico y acústico) con vidrio doble, cocina equipada con nevera integrada. Conserva la piedra vista orignal de la muralla de la ciudad de Gerona. Ascensor con acceso al interor.',
        'latitude' => 41.9819056,
        'longitude' => 2.8214265,
        'zone_id' => 1,
        'price' => 250000,
        'size' => 440,
        'rooms' => 5,
        'bathrooms' => 2,
        'furnished' => true,
        'air_conditioner' => true,
        'climate_id' => 3,
        'elevator' => true,
        'employee_id' => 2,
        'housetype_id' => 5,
        'contract_id' => 2,
        'date_published' => now(),
        'available' => true,
        'parking' => true,
        'created_at' => now(),
      ]);
      DB::table('houses')->insert([
        'name' => 'Casa 1',
        'address' => 'c/ Can Llobet, nº10',
        'description_ca' => 'Semi-reformada casa adossada de 275 m². Consta de 5 habitacions (3 dobles i 2 individual), amb armaris encastats, 3 banys complets, cuina independent, sala menjador amb llar de foc i gran terrassa de 45 m². Terres de gres i parquet, tancaments d’alumini i de fusta, doble vidre i calefacció. Totalment moblada i equipada, a punt per entra-hi a viure. A 15 minuts de la RENFE. Amb pàrquing.',
        'description_es' => 'Semi-reformada cada adosada de 275 m². Consta de 5 habitaciones (3 dobles y 2 individuales), con armarios empotrados, 3 baños completos, cocina independiente, sala de comedor con chimenea de fuego y gran terraza de 45 m². Suelos de gres y parqué, cierres de aluminio y de madera, doble vidio y calefacción. Totalmente amueblada y equipada, a punto para entrar a viviar. A 15 minutos de la RENFE. Con párking',
        'latitude' => 42.3735542,
        'longitude' => 2.9183898,
        'zone_id' => 1,
        'price' => 620000,
        'size' => 275,
        'rooms' => 5,
        'bathrooms' => 3,
        'furnished' => true,
        'air_conditioner' => true,
        'climate_id' => 3,
        'elevator' => 0,
        'employee_id' => 2,
        'housetype_id' => 2,
        'contract_id' => 2,
        'date_published' => now(),
        'available' => true,
        'parking' => true,
        'created_at' => now(),
      ]);
    }
}
