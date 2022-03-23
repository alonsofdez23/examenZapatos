<?php

namespace Database\Seeders;

use App\Models\Zapato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZapatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zapato = new Zapato();

        $zapato->codigo = "0123456789001";
        $zapato->denominacion = "Nike Air Force 1 '07";
        $zapato->precio = 109.99;
        $zapato->imagen = "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/a0a300da-2e16-4483-ba64-9815cf0598ac/air-force-1-07-zapatillas-lKPQ6q.png";

        $zapato->save();

        $zapato = new Zapato();

        $zapato->codigo = "0123456789002";
        $zapato->denominacion = "Nike Blazer Mid '77 Vintage";
        $zapato->precio = 99.99;
        $zapato->imagen = "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/ef4dbed6-c621-4879-8db3-f87296bfb570/blazer-mid-77-vintage-zapatillas-3x983t.png";

        $zapato->save();

        $zapato = new Zapato();

        $zapato->codigo = "0123456789003";
        $zapato->denominacion = "Nike ACG Mountain Fly Low";
        $zapato->precio = 189.99;
        $zapato->imagen = "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/25fd1779-ad4b-4497-aa54-bb094cc28283/acg-mountain-fly-low-zapatillas-8wT9Qq.png";

        $zapato->save();

        $zapato = new Zapato();

        $zapato->codigo = "0123456789004";
        $zapato->denominacion = "Nike Zion 1";
        $zapato->precio = 139.99;
        $zapato->imagen = "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/4a4e4848-4ecc-48d2-8853-82b1999e9128/zion-1-zapatillas-de-baloncesto-2WjGPX.png";

        $zapato->save();

        $zapato = new Zapato();

        $zapato->codigo = "0123456789005";
        $zapato->denominacion = "Nike SB Bruin React";
        $zapato->precio = 79.99;
        $zapato->imagen = "https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/28f375fb-b67e-48bf-9557-22aaefc02e12/sb-bruin-react-zapatillas-de-skateboard-xcCPh2.png";

        $zapato->save();
    }
}
