<?php

use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
        	[
        		'titular' => 'La celebración secreta de Cristiano Ronaldo en Nicosia con Messi de por medio',
        		'entrada' => 'El idilio de Cristiano Ronaldo con la Champions League no tiene límites. Puede estar muy mal, incluso fatal, en la Liga. Pero algo se le remueve en el estómago cuando regresa a Europa. Escucha el himno de la Champions y recupera su voracidad goleadora.',
        		'cuerpo' => 'Contra el débil Apoel de Nicosia, Cristiano volvió a marcar. Anotó los dos últimos tantos, que sirvieron para abultar el resultado (0-6) de un partido que hacía rato fue sentenciado. El modesto rival del Madrid fue perfecto para que los jugadores que peor están en este primer tramo de curso –Benzema, Modric y el propio Cristiano– lavasen su imagen a fuerza de goles. Cuatro entre el crack portugués y su inseparable cómplice francés en la delantera blanca, el niño mimado de Zinedine Zidane. Y tras el encuentro, sorpresa. Cristiano celebró sus goles como si de una victoria histórica se tratase. Chilló su habitual “siuuuuuuh” en el vestuario blanco, como muestra de autoridad a los más jóvenes. Ronaldo quiso dejar claro quien manda en el Madrid. Por ello no dudó en remarcar que ya van otros dos tantos en su cuenta goleadora de la liga de campeones: suma 113. Y también se acordó de Leo Messi. Cada vez son más los goles que separan a ambos en Europa. “Ya le saco 16”, presumió el delantero blanco.',
        		'imagen' => 'https://static.independent.co.uk/s3fs-public/styles/article_small/public/thumbnails/image/2015/08/03/09/cristiano-ronaldo.jpg',
        		'fecha' => date('Y-m-d'),
        		'usuario_id' => 1,
        		'categoria_id' => 1,
        	],
        	[
        		'titular' => 'Silver Snipers, el equipo de CS:GO con una media de edad de 71 años que participará en DreamHack Winter',
        		'entrada' => 'Por si alguien tiene dudas de que los juegos no tienen edad.',
        		'cuerpo' => 'No, los videojuegos no tienen edad. Es algo que no nos cansamos de decirlo e incluso, en Vandal Sports, hemos puesto en nuestro año y medio de vida numerosos ejemplos como el de Grandpa, un buceador de 64 años que destroza rivales en PUBG. Hoy os traemos otro de estos casos gracias a Silver Snipers, un equipo de CS:GO con una media de edad de 71 cuyo integrante más joven (si dejamos a un lado a Potti, la leyenda de Counter-Strike que les entrena) es Mónica "Teen Slayer" Idenfors, una mujer de 62 años que apenas ha jugado 69 horas al FPS de Valve. En el otro lado de la balanza tenemos a Bertil "Berra-Bang" Englud, un hombre de 81 años de edad que, además del más veterano, es también la estrella del equipo con el mejor índice de K/D de un conjunto formado también por Abbe "BirDie", Oivind "Windy" y Wanja "Knitting Knight".',
        		'imagen' => 'http://media.vandalsports.com/i/640x360/11-2017/20171124154924_1.jpg',
        		'fecha' => date('Y-m-d'),
        		'usuario_id' => 1,
        		'categoria_id' => 2,
        	],
        ]);
    }
}
