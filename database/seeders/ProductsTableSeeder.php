<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => '1',
                'codigobarras' => '1b',
                'name' => 'camisa',
                'description' => 'descripcion de camisa',
                'purchaseprice' => 98.0,
                'saleprice' => 118.0,
                'salepricemin' => 100.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 100.0,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => NULL,
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            1 => 
            array (
                'id' => 2,
                'codigo' => '2',
                'codigobarras' => '2b',
                'name' => 'polo',
                'description' => 'descripcion de polo',
                'purchaseprice' => 50.0,
                'saleprice' => 59.0,
                'salepricemin' => 60.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 50.0,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => NULL,
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            2 => 
            array (
                'id' => 3,
                'codigo' => '3',
                'codigobarras' => '3ax',
                'name' => 'pantalon',
                'description' => 'descripcion de pantalon',
                'purchaseprice' => 8.0,
                'saleprice' => 11.8,
                'salepricemin' => 10.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 10.0,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => NULL,
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            3 => 
            array (
                'id' => 4,
                'codigo' => '4',
                'codigobarras' => '4ax',
                'name' => 'casaca',
                'description' => 'descripcion de casaca',
                'purchaseprice' => 36.0,
                'saleprice' => 47.2,
                'salepricemin' => 45.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 40.0,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            4 => 
            array (
                'id' => 5,
                'codigo' => '5',
                'codigobarras' => '5mn',
                'name' => 'buzo',
                'description' => 'descripcion de buzo',
                'purchaseprice' => 83.0,
                'saleprice' => 141.6,
                'salepricemin' => 93.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 120.0,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            5 => 
            array (
                'id' => 6,
                'codigo' => '11',
                'codigobarras' => '1bb',
                'name' => 'camisa',
                'description' => 'descripcion de camisa',
                'purchaseprice' => 900.0,
                'saleprice' => 1180.0,
                'salepricemin' => 1080.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 1000.0,
                'company_id' => 2,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            6 => 
            array (
                'id' => 7,
                'codigo' => '12',
                'codigobarras' => '2bb',
                'name' => 'polo',
                'description' => 'descripcion de polo',
                'purchaseprice' => 120.0,
                'saleprice' => 177.0,
                'salepricemin' => 170.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 150.0,
                'company_id' => 2,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            7 => 
            array (
                'id' => 8,
                'codigo' => '13',
                'codigobarras' => '3axx',
                'name' => 'pantalon',
                'description' => 'descripcion de pantalon',
                'purchaseprice' => 153.0,
                'saleprice' => 354.0,
                'salepricemin' => 320.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 300.0,
                'company_id' => 2,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            8 => 
            array (
                'id' => 9,
                'codigo' => '14',
                'codigobarras' => '4axx',
                'name' => 'casaca',
                'description' => 'descripcion de casaca',
                'purchaseprice' => 30.0,
                'saleprice' => 35.4,
                'salepricemin' => 33.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 30.0,
                'company_id' => 2,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            9 => 
            array (
                'id' => 10,
                'codigo' => '15',
                'codigobarras' => '5mnn',
                'name' => 'buzo',
                'description' => 'descripcion de buzo',
                'purchaseprice' => 13.0,
                'saleprice' => 23.6,
                'salepricemin' => 23.0,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 20.0,
                'company_id' => 2,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 0,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            10 => 
            array (
                'id' => 11,
                'codigo' => '16',
                'codigobarras' => '1bo',
                'name' => 'bolsa',
                'description' => 'descripcion de labolsa',
                'purchaseprice' => 0.01,
                'saleprice' => 0.059,
                'salepricemin' => 0.05,
                'mtovalorgratuito' => 0.0,
                'mtovalorunitario' => 0.05,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => 1,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => NULL,
                'created_at' => '2024-04-26 22:33:19',
                'updated_at' => '2024-04-26 22:33:19',
            ),
            11 => 
            array (
                'id' => 12,
                'codigo' => NULL,
                'codigobarras' => 'cal123',
                'name' => 'calzon con estrella',
                'description' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 100.0,
                'salepricemin' => 90.0,
                'mtovalorgratuito' => NULL,
                'mtovalorunitario' => 84.75,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 12,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => NULL,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => 'fe/default/products/productdefault.jpg',
                'created_at' => '2024-04-26 22:34:29',
                'updated_at' => '2024-04-26 22:34:37',
            ),
            12 => 
            array (
                'id' => 13,
                'codigo' => NULL,
                'codigobarras' => 'fal123',
                'name' => 'falda jean',
                'description' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 200.0,
                'salepricemin' => NULL,
                'mtovalorgratuito' => NULL,
                'mtovalorunitario' => 169.49,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 13,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => NULL,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => NULL,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => 'fe/default/products/productdefault.jpg',
                'created_at' => '2024-04-26 22:36:32',
                'updated_at' => '2024-04-26 22:36:32',
            ),
            13 => 
            array (
                'id' => 14,
                'codigo' => NULL,
                'codigobarras' => 'lap234',
                'name' => 'laptop hp notebook',
                'description' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 100.0,
                'salepricemin' => NULL,
                'mtovalorgratuito' => NULL,
                'mtovalorunitario' => 84.75,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 3,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => NULL,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => 1,
                'image1' => 'fe/1/products/bfwfxls3ee80uOPIeeIklYozxrorcf4p9SOzCsF8.jpg',
                'image2' => 'fe/1/products/0hQnq7YSDE9F9t5qY5Zj190HjqK8jiA3VVRGKp5W.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => 'fe/default/products/productdefault.jpg',
                'created_at' => '2024-04-26 22:43:16',
                'updated_at' => '2024-04-26 22:53:53',
            ),
            14 => 
            array (
                'id' => 15,
                'codigo' => NULL,
                'codigobarras' => 'lg123',
                'name' => 'leche',
                'description' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 5.0,
                'salepricemin' => NULL,
                'mtovalorgratuito' => NULL,
                'mtovalorunitario' => 4.24,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 7,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => NULL,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => NULL,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => 'fe/default/products/productdefault.jpg',
                'created_at' => '2024-04-26 23:19:35',
                'updated_at' => '2024-04-26 23:19:35',
            ),
            15 => 
            array (
                'id' => 16,
                'codigo' => NULL,
                'codigobarras' => 'lpv432',
                'name' => 'lecha pv',
                'description' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 8.0,
                'salepricemin' => NULL,
                'mtovalorgratuito' => NULL,
                'mtovalorunitario' => 6.78,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 7,
                'brand_id' => 1,
                'tipoafectacion_id' => 1,
                'esbolsa' => NULL,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => NULL,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => 'fe/default/products/productdefault.jpg',
                'created_at' => '2024-04-26 23:20:44',
                'updated_at' => '2024-04-26 23:20:44',
            ),
            16 => 
            array (
                'id' => 17,
                'codigo' => NULL,
                'codigobarras' => 'cst23',
                'name' => 'calzon semitanga',
                'description' => NULL,
                'purchaseprice' => NULL,
                'saleprice' => 60.0,
                'salepricemin' => 50.0,
                'mtovalorgratuito' => NULL,
                'mtovalorunitario' => 50.85,
                'company_id' => 1,
                'currency_id' => 1,
                'um_id' => 1,
                'modelo_id' => 1,
                'category_id' => 12,
                'brand_id' => 3,
                'tipoafectacion_id' => 1,
                'esbolsa' => NULL,
                'detraccion' => NULL,
                'percepcion' => NULL,
                'state' => NULL,
                'image1' => 'fe/default/products/productdefault.jpg',
                'image2' => 'fe/default/products/productdefault.jpg',
                'image3' => 'fe/default/products/productdefault.jpg',
                'image4' => 'fe/default/products/productdefault.jpg',
                'created_at' => '2024-04-26 23:21:48',
                'updated_at' => '2024-04-26 23:21:48',
            ),
        ));
        
        
    }
}