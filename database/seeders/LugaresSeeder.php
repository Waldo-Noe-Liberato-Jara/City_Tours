<?php

namespace Database\Seeders;

use App\Models\Lugares;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LugaresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lugares = new Lugares();
        $lugares->nombre = 'Los Baños del Inca';
        $lugares->descripcion = 'Los Baños del Inca es un balneario de aguas termo medicinales que posee propiedades curativas para tratar afecciones al sistema nervioso, huesos, piel, gastritis y otros.';
        $lugares->ubicacion = 'En el distrito Baños del Inca, región Cajamarca.';
        $lugares->imagen = 'images_of_places/Baños_de_Inca.jpg';
        $lugares->save();

        $lugares2 = new Lugares();
        $lugares2->nombre = 'Ciudad Sagrada de Caral';
        $lugares2->descripcion = 'El sitio arqueológico de Caral es considerado la ciudad más antigua de Perú. Es un complejo de edificaciones que pertenece a la civilización Caral, una de las civilizaciones más antiguas del mundo, de aproximadamente 5000 años de antigüedad.';
        $lugares2->ubicacion = 'En el valle de Supe, provincia de Barranca, a 182 km al norte de Lima.';
        $lugares2->imagen = 'images_of_places/Caral.jpg';
        $lugares2->save();

        $lugares3 = new Lugares();
        $lugares3->nombre = 'Parque Nacional del Huascarán';
        $lugares3->descripcion = 'Es un espacio natural que protege las formaciones geológicas, nevados, lagunas, flora, fauna y los variados ecosistemas de la Cordillera Blanca, la cordillera tropical más extensa del mundo. El año 1985 fue declarado Patrimonio Natural de la Humanidad.';
        $lugares3->ubicacion = 'En la región Ancash, entre las provincias de Huaylas, Yungay, Carhuaz, Huaraz, Recuay.';
        $lugares3->imagen = 'images_of_places/Huascaran.jpg';
        $lugares3->save();

        $lugares4 = new Lugares();
        $lugares4->nombre = 'Fortaleza de Kuélap';
        $lugares4->descripcion = 'Es una ciudadela pre inca amurallada con bloques de piedras. Fue construido por la cultura Chachapoyas (800 d.C. al 1470 d.C.), pero posteriormente fue ocupado por los incas. Está ubicado sobre la cima de la colina Barreta, en los Andes nor orientales del Perú, en la región Amazonas.';
        $lugares4->ubicacion = 'En la parte alta del valle del río Utcubamba, distrito de Tingo, provincia de Luya, región Amazonas. A 50 km al sur de Chachapoyas.';
        $lugares4->imagen = 'images_of_places/Kuelap_Amazonas.jpg';
        $lugares4->save();

        $lugares5 = new Lugares();
        $lugares5->nombre = 'Huaca Tambo Inga';
        $lugares5->descripcion = 'Fue el principal centro administrativo de los Incas al norte de su territorio. La huaca queda en el distrito de Puente Piedra en Lima, Perú. El conjunto arquitectónico conocido con el nombre de Tambo lnga debe haber sido la sede administrativa del huno de Carabayllo y en sus amplias instalaciones hubo lugar, a no dudarlo, para que el gobernador y funcionarios Incas administrasen justicia y buen gobierno, para que los habitantes de la región rindiesen tributo y pleitesía a los representantes del Apu Inca, para que los viajeros, sobre todo las comitivas oficiales y los ejércitos imperiales, encontrasen reposo y avituallamiento y, especialmente, para captar y almacenar los ingentes recursos que la región aportaba a las arcas del Tahuantinsuyo.';
        $lugares5->ubicacion = 'En el distrito de Puente Piedra, provincia de Lima, departamento de Lima.';
        $lugares5->imagen = 'images_of_places/La_huaca_tambo_inga.jpg';
        $lugares5->save();

        $lugares6 = new Lugares();
        $lugares6->nombre = 'Machu Picchu';
        $lugares6->descripcion = 'El Santuario Histórico de Machu Picchu es el destino turístico más visitado de Perú y de América. Es una antigua ciudad inca que está ubicado en el corazón de los andes peruanos. Fue construido en el siglo XV, durante la época inca. Se cree que esta ciudad sagrada fue un importante lugar de culto religioso y de descanso durante el reinado del Inca Pachacuteq.';
        $lugares6->ubicacion = 'En el distrito de Machu Picchu, provincia Urubamba, región Cusco, al sur de Perú. A 122 kilómetros de la ciudad de Cusco.';
        $lugares6->imagen = 'images_of_places/Machu_Pichu.jpg';
        $lugares6->save();

        $lugares7 = new Lugares();
        $lugares7->nombre = 'Punta Sal';
        $lugares7->descripcion = 'Es un hermoso balneario que está ubicado en la provincia de Contralmirante Villar, a 80 km de la ciudad de Tumbes. Es considerada como una de las playas más hermosas y extensas norte peruano. Destaca por sus aguas tranquilas y cálidas (por encima de los 20 °C.), arena fina durante la marea baja, olas suaves y sol brillante durante los 365 días del año.';
        $lugares7->ubicacion = 'En el distrito de Canoas de Punta Sal, en Tumbes.';
        $lugares7->imagen = 'images_of_places/Punta_Sal.jpg';
        $lugares7->save();

        $lugares8 = new Lugares();
        $lugares8->nombre = 'Río Amazonas';
        $lugares8->descripcion = 'El río amazonas es el río más largo y caudaloso de la tierra y una de las mayores reservas de agua dulce del planeta. Nace en las cumbres nevadas de la cordillera de los Andes y recorre más de 7200 kilómetros, atravesando los territorios de Perú, Colombia y Brasil.';
        $lugares8->ubicacion = 'En el extremo sur del país, en gran parte al sur de la línea ecuatorial, en la región Amazonia. Limita al norte con Caquetá y Vaupés, al este con el estado brasileño del mismo nombre, al sur con el departamento peruano de Loreto y al oeste con Putumayo.';
        $lugares8->imagen = 'images_of_places/Rio_Amazonas.jpg';
        $lugares8->save();

        $lugares9 = new Lugares();
        $lugares9->nombre = 'Museo Tumbas Reales de Sipán';
        $lugares9->descripcion = 'El Museo Tumbas Reales de Sipán es una réplica funeraria exacta de la cámara funeraria del Señor de Sipán, antiguo gobernante mochica del siglo III. El museo cuenta con tres niveles donde se exhibe y resguarda más de 2000 piezas de oro, joyas, cerámicas y ajuares funerarios. Entre los restos y piezas culturales más importantes, que pertenecieron a este gobernante del antiguo Perú, resaltan: ornamentos, emblemas, atuendos, estandartes de cobre, corona de cobre, pectorales de conchas, orejeras de oro y turquesa, sonajeras de oro, tocado del algodón y adornos de plumas.';
        $lugares9->ubicacion = 'En la ciudad de Lambayeque, localizada en el Departamento de Lambayeque.';
        $lugares9->imagen = 'images_of_places/Tumbas_Reales_de_Sipán_Lambayeque.jpg';
        $lugares9->save();

        $lugares10 = new Lugares();
        $lugares10->nombre = 'Líneas de Nazca';
        $lugares10->descripcion = 'Las Líneas de Nazca son un grupo de antiguos geoglifos grabados en la arena del desierto. Están ubicados en el Valle de Nazca, Valle de Palpa y en el desierto de Jumana. Estos enigmáticos geoglifos fueron creados por los hombres de la Cultura Nazca (200 a.C. – 700 d.C.) y se extienden sobre una superficie de 450 Km².';
        $lugares10->ubicacion = 'En la provincia de nazca, región Ica. A 450 kilómetros al sur de Lima.';
        $lugares10->imagen = 'images_of_places/Lineas_de_nazca.jpg';
        $lugares10->save();
    }
}
