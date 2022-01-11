<?php
use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\MediaFile;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'name' => 'Paris',
                'content'=>'New York, a city that doesnt sleep, as Frank Sinatra sang. The Big Apple is one of the largest cities in the United States and one of the most popular in the whole country and the world. Millions of tourists visit it every year attracted by its various iconic symbols and its wide range of leisure and cultural offer. New York is the birth place of new trends and developments in many fields such as art, gastronomy, technology,...',
                'map_lat' => '48.856613',
                'map_lng' => '2.352222',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Egypt',
                'map_lat' => '40.712776',
                'map_lng' => '-74.005974',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'New York, United States',
                'map_lat' => '40.712776',
                'map_lng' => '-74.005974',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'California',
                'map_lat' => '36.778259',
                'map_lng' => '-119.417931',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'United States',
                'map_lat' => '37.090240',
                'map_lng' => '-95.712891',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Los Angeles',
                'map_lat' => '34.052235',
                'map_lng' => '-118.243683',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'New Jersey',
                'map_lat' => '40.058323',
                'map_lng' => '-74.405663',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'San Francisco',
                'map_lat' => '37.774929',
                'map_lng' => '-122.419418',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'Virginia',
                'map_lat' => '37.431572',
                'map_lng' => '-78.656891',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ],
            [
                'name' => 'lebnan',
                'map_lat' => '37.431572',
                'map_lng' => '-78.656891',
                'map_zoom' => '12',
                'status' => '1',
                'user_id' => '1',
                'created_at' =>  date("Y-m-d H:i:s")
            ]
        ];

        foreach ($locations as $location){
            $row = new Location( $location );
            $row->save();
        }
    }
}
