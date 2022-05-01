<?php

namespace Database\Seeders;

use App\Models\AvatarObject;
use App\Models\Book;
use App\Models\Category;
use App\Models\Type;
use App\Models\UserBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Type::create(
            [                
            'name'=>"cabeza"
            ]
        );
        Type::create(
            [                
            'name'=>"cuerpo"
            ]
        );
        Type::create(
            [                
            'name'=>"mano"
            ]
        );
        Type::create(
            [                
            'name'=>"detras"
            ]
        );

        AvatarObject::create(
            [                
            'name' => "sombrero1",
            'image'=> "Isombrero1",
            'model'=> "Msombrero1",
            'type_id'=>1
            ]
        );
        AvatarObject::create(
            [                
            'name' => "cuerpo1",
            'image'=> "Icuerpo1",
            'model'=> "Mcuerpo1",
            'type_id'=>2
            ]
        );
        AvatarObject::create(
            [                
            'name' => "mano1",
            'image'=> "Imano1",
            'model'=> "Mmano1",
            'type_id'=>3
            ]
        );
        AvatarObject::create(
            [                
            'name' => "atras1",
            'image'=> "Iatras1",
            'model'=> "Matras1",
            'type_id'=>4
            ]
        );

        Category::create(
            [                
            'name' => "terror",
            'description' => "zona de terror",
            'music' => "Mterror",            
            ]
        );

        UserBook::create(
            [                
            'name'=>"Marcelo",
            'pseudonym' => 'Maru-chan',
            'headObject' => 1,
            'wearObject' => 2,
            'handObject' => 3,
            'backObject' => 4
            ]
        );


    

        Book::create(
            [
            'name' => "El Rey Peste",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1940",
            'music'=> " ",
            'portrait'=> "p1",
            'phrase'=> " Aquellas imágenes, aquellas sensaciones, aquellos obstáculos no podían, sin embargo, detener la carrera de hombres que, de por sí a valientes y ardiendo de coraje y cerveza fuerte, hubieran penetrado todo lo directamente que su tambaleante condición lo permitiera en las mismas fauces de la muerte. /  ",
            'author'=> "Edgar Allan Poe",
            ]
        );


        Book::create(
            [
            'name' => "La Caída de la casa Usher",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            
            'publication'=> "",
            'music'=> " ",
            'portrait'=> "p2",
            'phrase'=> " ¿No lo oyes? Sí, yo lo oigo y lo he oído. Mucho... mucho..., mucho tiempo..., muchos minutos, muchas horas, muchos días lo he oído, pero no me atrevía...",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Hombre de la multitud",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1840",
            'music'=> " ",
            'portrait'=> "p3",
            'phrase'=> "—Este viejo —dije por fin—representa el arquetipo y el genio del profundo crimen. Se niega a estar solo. Es el hombre de la multitud. Sería vano seguirlo, pues nada más aprenderé sobre él y sus acciones.",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "La Máscara de la muerte roja",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1842",
            'music'=> " ",
            'portrait'=> "p4",
            'phrase'=> " En los corazones de los hombres más temerarios hay cuerdas que no se dejan tocar sin emoción. ",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Escarabajo de Oro",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1843",
            'music'=> " ",
            'portrait'=> "p5",
            'phrase'=> " ¡Es la cosa más encantadora de la creación! —¿El qué? ¿El amanecer? —¡Qué disparate! ¡No! ¡El escarabajo! Es de un brillante color dorado, aproximadamente del tamaño de una nuez, con dos manchas de un negro azabache: una, cerca de la punta posterior, y la segunda, algo más alargada, en la otra punta",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Corazón Delator",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1843",
            'music'=> " ",
            'portrait'=> "p6",
            'phrase'=> " Sonreí, pues... ¿qué tenía que temer? ",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Gato Negro",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1843",
            'music'=> " ",
            'portrait'=> "p7",
            'phrase'=> " Hay algo en el generoso y abnegado amor de un animal que llega directamente al corazón de aquel que con frecuencia a probado la falsa amistad y la frágil fidelidad del hombre",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Entierro Prematuro",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1844",
            'music'=> " ",
            'portrait'=> "p8",
            'phrase'=> " Los demonios deben dormir o nos devorarán",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "El Cuervo",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1841",
            'music'=> " ",
            'portrait'=> "p9",
            'phrase'=> " ¡Pájaro o demonio, pero al fin profeta!",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => " Los Crímenes de la calle Morgue",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1837",
            'music'=> " ",
            'portrait'=> "p10",
            'phrase'=> "Lo que tan sólo es complicado, se toma equivocadamente —error muy común— por profundo",
            'author'=> "Edgar Allan Poe",
            ]
        );


    Book::create(
            [
            'name' => "La Narración de Arthur Gordon Pym",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1838",
            'music'=> " ",
            'portrait'=> "p11",
            'phrase'=> "Es absolutamente superfluo hacer conjeturas sobre un hecho que permanecerá eternamente envuelto en el más espantoso e insondable de los misterios. ",
            'author'=> "Edgar Allan Poe",
            ]
        );

    Book::create(
            [
            'name' => "El robo del elefante blanco",
            'avatarObjectId'=> 1,
            'category_id'=> 1 ,
            'publication'=> "1882",
            'music'=> " ",
            'portrait'=> "p12",
            'phrase'=> " Ya le dije yo que los apetitos del animal nos proporcionarían buenas pistas.",
            'author'=> "Mark Twain",
            ]
        );


}}
