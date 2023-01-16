<?php

namespace Database\Seeders;

use App\Models\Bitcoin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BitcoinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('https://api.sampleapis.com/bitcoin/historical_prices');
        $data = json_decode($data);
        // dump($data);
        foreach($data as $price_log){
            $new_price_log = new Bitcoin();
            $new_price_log->date = $this->reformDate($price_log->Date);
            $new_price_log->price = $price_log->Price;
            $new_price_log->open = $price_log->Open;
            $new_price_log->high = $price_log->High;
            $new_price_log->change = $price_log->ChangePercentFromLastMonth;
            $new_price_log->volume = $price_log->Volume;
            $new_price_log->save();
        }
    }
    private function reformDate($date){

        $newDate = date("Y-m-d", strtotime($date));

        return $newDate;

    }
}
