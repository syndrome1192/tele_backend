<?php

namespace Database\Seeders;

use App\Models\Good;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'              => 'Товар 1',
                'vendor_code'       => '2kj32k2e23m4',
                'category'          => 'Разное',
                'weight'            => '789',
                'cost_price'        => '1699',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 1',
                'vendor_code'       => '2desdcdsdscsc',
                'category'          => 'Разное',
                'weight'            => '802',
                'cost_price'        => '2200',
                'product_condition' => 'Б/У',
            ],
            [
                'name'              => 'Товар 3',
                'vendor_code'       => '4sd54asd6asdd',
                'category'          => 'Техника',
                'weight'            => '1020',
                'cost_price'        => '8050',
                'product_condition' => 'Хит',
            ],
            [
                'name'              => 'Товар 1',
                'vendor_code'       => '456sdad5s2d',
                'category'          => 'Премиум',
                'weight'            => '560',
                'cost_price'        => '2700',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 2',
                'vendor_code'       => '2ecwwcwdcwdwc',
                'category'          => 'Премиум',
                'weight'            => '802',
                'cost_price'        => '2550',
                'product_condition' => 'Хит',
            ],
            [
                'name'              => 'Товар 4',
                'vendor_code'       => 'asda89as5d22das',
                'category'          => 'Техника',
                'weight'            => '755',
                'cost_price'        => '8999',
                'product_condition' => 'Б/У',
            ],
            [
                'name'              => 'Товар 3',
                'vendor_code'       => '2desdcdsdscsc',
                'category'          => 'Техника',
                'weight'            => '850',
                'cost_price'        => '7000',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 4',
                'vendor_code'       => 'dd4d57ffggg',
                'category'          => 'Премиум',
                'weight'            => '810',
                'cost_price'        => '10000',
                'product_condition' => 'Б/У',
            ],
            [
                'name'              => 'Товар 2',
                'vendor_code'       => 'jjkjiu8700',
                'category'          => 'Разное',
                'weight'            => '569',
                'cost_price'        => '7990',
                'product_condition' => 'Хит',
            ],
            [
                'name'              => 'Товар 3',
                'vendor_code'       => 'fhhjghgjggjhjg',
                'category'          => 'Премиум',
                'weight'            => '999',
                'cost_price'        => '89000',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 2',
                'vendor_code'       => 'sdfrgrgege567',
                'category'          => 'Разное',
                'weight'            => '899',
                'cost_price'        => '5875',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 2',
                'vendor_code'       => 'sdsdfdsfsf456',
                'category'          => 'Техника',
                'weight'            => '5878',
                'cost_price'        => '20000',
                'product_condition' => 'Хит',
            ],
            [
                'name'              => 'Товар 4',
                'vendor_code'       => 'sdfs87f0sdf',
                'category'          => 'Премиум',
                'weight'            => '811',
                'cost_price'        => '3999',
                'product_condition' => 'Б/У',
            ],
            [
                'name'              => 'Товар 3',
                'vendor_code'       => 'ewww4435ffsd',
                'category'          => 'Техника',
                'weight'            => '555',
                'cost_price'        => '6990',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 4',
                'vendor_code'       => 'qwqeqdfs343fff',
                'category'          => 'Премиум',
                'weight'            => '802',
                'cost_price'        => '2300',
                'product_condition' => 'Б/У',
            ],
            [
                'name'              => 'Товар 1',
                'vendor_code'       => '4esdcsscsdc',
                'category'          => 'Разное',
                'weight'            => '811',
                'cost_price'        => '6588',
                'product_condition' => 'Б/У',
            ],
            [
                'name'              => 'Товар 2',
                'vendor_code'       => 'asdasda456',
                'category'          => 'Премиум',
                'weight'            => '999',
                'cost_price'        => '8750',
                'product_condition' => 'Новый',
            ],
            [
                'name'              => 'Товар 3',
                'vendor_code'       => '3asdaadsasd',
                'category'          => 'Техника',
                'weight'            => '799',
                'cost_price'        => '20500',
                'product_condition' => 'Хит',
            ],
            [
                'name'              => 'Товар 4',
                'vendor_code'       => 'wererwe533er',
                'category'          => 'Техника',
                'weight'            => '823',
                'cost_price'        => '11000',
                'product_condition' => 'Хит',
            ],
            [
                'name'              => 'Товар 1',
                'vendor_code'       => 'sdfsd45rsd55',
                'category'          => 'Разное',
                'weight'            => '8777',
                'cost_price'        => '15000',
                'product_condition' => 'Б/У',
            ],
        ];

        foreach ($data as $row) {
            $inventory = new Good;
            $inventory->fill($row);
            $inventory->save();
        }
    }
}
