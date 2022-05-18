<?php

use Illuminate\Database\Seeder;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bancos = [
            [
                "codigo"=> "0001",
                "nombre"=> "Banco Central de Venezuela",
                
            ],
            [
                "codigo"=> "0102",
                "nombre"=> "Banco de Venezuela S.A.C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0104",
                "nombre"=> "Venezolano de Crédito, S.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0105",
                "nombre"=> "Banco Mercantil, C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0108",
                "nombre"=> "Banco Provincial, S.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0114",
                "nombre"=> "Bancaribe C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0115",
                "nombre"=> "Banco Exterior C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0116",
                "nombre"=> "Banco Occidental de Descuento, Banco Universal C.A",
                
            ],
            [
                "codigo"=> "0128",
                "nombre"=> "Banco Caroní C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0134",
                "nombre"=> "Banesco Banco Universal S.A.C.A.",
                
            ],
            [
                "codigo"=> "0137",
                "nombre"=> "Banco Sofitasa, Banco Universal",
                
            ],
            [
                "codigo"=> "0138",
                "nombre"=> "Banco Plaza, Banco Universal",
                
            ],
            [
                "codigo"=> "0146",
                "nombre"=> "Banco de la Gente Emprendedora C.A",
                
            ],
            [
                "codigo"=> "0151",
                "nombre"=> "BFC Banco Fondo Común C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0156",
                "nombre"=> "100% Banco, Banco Universal C.A.",
                
            ],
            [
                "codigo"=> "0157",
                "nombre"=> "DelSur Banco Universal C.A.",
                
            ],
            [
                "codigo"=> "0163",
                "nombre"=> "Banco del Tesoro, C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0166",
                "nombre"=> "Banco Agrícola de Venezuela, C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0168",
                "nombre"=> "Bancrecer, S.A. Banco Microfinanciero",
                
            ],
            [
                "codigo"=> "0169",
                "nombre"=> "Mi Banco, Banco Microfinanciero C.A.",
                
            ],
            [
                "codigo"=> "0171",
                "nombre"=> "Banco Activo, Banco Universal",
                
            ],
            [
                "codigo"=> "0172",
                "nombre"=> "Bancamica, Banco Microfinanciero C.A.",
                
            ],
            [
                "codigo"=> "0173",
                "nombre"=> "Banco Internacional de Desarrollo, C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0174",
                "nombre"=> "Banplus Banco Universal, C.A",
                
            ],
            [
                "codigo"=> "0175",
                "nombre"=> "Banco Bicentenario del Pueblo de la Clase Obrera, Mujer y Comunas B.U.",
                
            ],
            [
                "codigo"=> "0176",
                "nombre"=> "Novo Banco, S.A. Sucursal Venezuela Banco Universal",
                
            ],
            [
                "codigo"=> "0177",
                "nombre"=> "Banco de la Fuerza Armada Nacional Bolivariana, B.U.",
                
            ],
            [
                "codigo"=> "0190",
                "nombre"=> "Citibank N.A.",
                
            ],
            [
                "codigo"=> "0191",
                "nombre"=> "Banco Nacional de Crédito, C.A. Banco Universal",
                
            ],
            [
                "codigo"=> "0601",
                "nombre"=> "Instituto Municipal de Crédito Popular",
                
            ]
        ];

        DB::table('bancos')->insert($bancos);
    }
}
