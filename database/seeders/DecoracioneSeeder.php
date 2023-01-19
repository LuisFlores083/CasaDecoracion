<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Decoracione;

class DecoracioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $decoracion1 = new decoracione();
        $decoracion1->nombre = 'Póster';
        $decoracion1->descripcion = '¿Paredes vacías? Buu. Cúbrelas de tu personalidad con pósters originales que reflejen cualquiera de tus gustos, la naturaleza, los viajes, los deportes o la música.';
        $decoracion1->imagen = 'c1.png';
        $decoracion1->save();

        $decoracion2 = new decoracione();
        $decoracion2->nombre = 'Láminas fotográficas';
        $decoracion2->descripcion = 'Una ventana al mundo. Tú eliges las vistas.';
        $decoracion2->imagen = 'c2.png';
        $decoracion2->save();
        
        $decoracion3 = new decoracione();
        $decoracion3->nombre = 'Lienzos';
        $decoracion3->descripcion = 'Te entrarán unas ganas irrefrenables de atusarte el bigotillo para admirarlos.';
        $decoracion3->imagen = 'c3.png';
        $decoracion3->save();

        $decoracion4 = new decoracione();
        $decoracion4->nombre = 'Láminas artísticas';
        $decoracion4->descripcion = 'Calidad excepcional, colores vibrantes, impresión óptima y adjetivos inagotables para describir su grandeza.';
        $decoracion4->imagen = 'c4.png';
        $decoracion4->save();

        $decoracion5 = new decoracione();
        $decoracion5->nombre = 'Telas decorativas';
        $decoracion5->descripcion = 'Paredes, camas, sofás... Las telas decorativas lo cubren todo con mucho arte.';
        $decoracion5->imagen = 'c5.png';
        $decoracion5->save();

        $decoracion6 = new decoracione();
        $decoracion6->nombre = 'Láminas artísticas';
        $decoracion6->descripcion = 'Calidad excepcional, colores vibrantes, impresión óptima y adjetivos inagotables para describir su grandeza.';
        $decoracion6->imagen = 'c6.png';
        $decoracion6->save();

        $decoracion7 = new decoracione();
        $decoracion7->nombre = 'Láminas enmarcadas';
        $decoracion7->descripcion = 'Comprar, recibir, colgar: rodéate de diseños originales con el mínimo esfuerzo.';
        $decoracion7->imagen = 'c7.png';
        $decoracion7->save();

        $decoracion8 = new decoracione();
        $decoracion8->nombre = 'Láminas montadas';
        $decoracion8->descripcion = 'Láminas montadas de madera y lienzo listas para colgar diseñadas por artistas independientes. Olvídate de martillos, clavos y agujeros en la pared.';
        $decoracion8->imagen = 'c8.png';
        $decoracion8->save();

    }
}
