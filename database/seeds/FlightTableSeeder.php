<?php

use Illuminate\Database\Seeder;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '1',
            'flight_code' => 'MB001',
            'flight_airplane_id' => '1',
            'flight_total_passenger' => '100',
            'flight_cost' => '2500000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-02',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-02 18:00:00',
            'flight_arrival_time' => '2019-04-02 21:30:00',
            'duration' => '03:30:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '1',
            'flight_code' => 'MB002',
            'flight_airplane_id' => '4',
            'flight_total_passenger' => '150',
            'flight_cost' => '8000000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-03',
            'flight_return_date' => '2019-04-07',
            'flight_departure_time' => '2019-04-03 04:00:00',
            'flight_arrival_time' => '2019-05-10 09:00:00',
            'duration' => '05:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '3',
            'flight_type' => '1',
            'flight_code' => 'MB003',
            'flight_airplane_id' => '5',
            'flight_total_passenger' => '200',
            'flight_cost' => '7500000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-03',
            'flight_return_date' => '2019-04-15',
            'flight_departure_time' => '2019-04-03 08:00:00',
            'flight_arrival_time' => '2019-04-03 13:30:00',
            'duration' => '05:30:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '2',
            'flight_type' => '1',
            'flight_code' => 'MB004',
            'flight_airplane_id' => '6',
            'flight_total_passenger' => '300',
            'flight_cost' => '8000000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '52',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-05 23:00:00',
            'flight_arrival_time' => '2019-04-06 03:00:00',
            'duration' => '04:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '1',
            'flight_code' => 'MB005',
            'flight_airplane_id' => '3',
            'flight_total_passenger' => '599',
            'flight_cost' => '2500000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => '2019-04-09',
            'flight_departure_time' => '2019-04-05 21:00:00',
            'flight_arrival_time' => '2019-04-06 01:30:00',
            'duration' => '04:30:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '3',
            'flight_type' => '1',
            'flight_code' => 'MB006',
            'flight_airplane_id' => '6',
            'flight_total_passenger' => '300',
            'flight_cost' => '25000000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-05 22:00:00',
            'flight_arrival_time' => '2019-04-06 08:00:00',
            'duration' => '10:00:00'
        ]);

        //nhan

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '1',
            'flight_code' => 'MB007',
            'flight_airplane_id' => '1',
            'flight_total_passenger' => '100',
            'flight_cost' => '5000000',
            'flight_airport_from_id' => '1',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-05-01',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-05-01 18:00:00',
            'flight_arrival_time' => '2019-05-01 23:00:00',
            'duration' => '05:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '2',
            'flight_code' => 'MB008',
            'flight_airplane_id' => '4',
            'flight_total_passenger' => '150',
            'flight_cost' => '4500000',
            'flight_airport_from_id' => '2',
            'flight_airport_to_id' => '3',
            'flight_departure_date' => '2019-05-10',
            'flight_return_date' => '2019-05-20',
            'flight_departure_time' => '2019-05-10 04:00:00',
            'flight_arrival_time' => '2019-05-10 08:00:00',
            'duration' => '04:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '3',
            'flight_type' => '2',
            'flight_code' => 'MB009',
            'flight_airplane_id' => '5',
            'flight_total_passenger' => '200',
            'flight_cost' => '6000000',
            'flight_airport_from_id' => '2',
            'flight_airport_to_id' => '4',
            'flight_departure_date' => '2019-03-10',
            'flight_return_date' => '2019-03-15',
            'flight_departure_time' => '2019-03-10 08:00:00',
            'flight_arrival_time' => '2019-03-10 15:30:00',
            'duration' => '07:30:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '2',
            'flight_type' => '1',
            'flight_code' => 'MB010',
            'flight_airplane_id' => '6',
            'flight_total_passenger' => '300',
            'flight_cost' => '8000000',
            'flight_airport_from_id' => '2',
            'flight_airport_to_id' => '5',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-05 22:00:00',
            'flight_arrival_time' => '2019-04-06 08:00:00',
            'duration' => '10:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '2',
            'flight_code' => 'MB011',
            'flight_airplane_id' => '3',
            'flight_total_passenger' => '599',
            'flight_cost' => '2500000',
            'flight_airport_from_id' => '2',
            'flight_airport_to_id' => '6',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => '2019-04-09',
            'flight_departure_time' => '2019-04-05 21:00:00',
            'flight_arrival_time' => '2019-04-05 22:00:00',
            'duration' => '02:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '3',
            'flight_type' => '1',
            'flight_code' => 'MB012',
            'flight_airplane_id' => '6',
            'flight_total_passenger' => '300',
            'flight_cost' => '25000000',
            'flight_airport_from_id' => '2',
            'flight_airport_to_id' => '7',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-05 22:00:00',
            'flight_arrival_time' => '2019-04-06 08:00:00',
            'duration' => '10:00:00'
        ]);

        //nhan

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '1',
            'flight_code' => 'MB013',
            'flight_airplane_id' => '1',
            'flight_total_passenger' => '100',
            'flight_cost' => '5000000',
            'flight_airport_from_id' => '3',
            'flight_airport_to_id' => '4',
            'flight_departure_date' => '2019-05-01',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-05-01 18:00:00',
            'flight_arrival_time' => '2019-05-01 23:00:00',
            'duration' => '05:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '2',
            'flight_code' => 'MB014',
            'flight_airplane_id' => '4',
            'flight_total_passenger' => '150',
            'flight_cost' => '4500000',
            'flight_airport_from_id' => '5',
            'flight_airport_to_id' => '6',
            'flight_departure_date' => '2019-05-10',
            'flight_return_date' => '2019-05-20',
            'flight_departure_time' => '2019-05-10 04:00:00',
            'flight_arrival_time' => '2019-05-10 08:00:00',
            'duration' => '04:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '3',
            'flight_type' => '2',
            'flight_code' => 'MB015',
            'flight_airplane_id' => '5',
            'flight_total_passenger' => '200',
            'flight_cost' => '6000000',
            'flight_airport_from_id' => '7',
            'flight_airport_to_id' => '8',
            'flight_departure_date' => '2019-03-10',
            'flight_return_date' => '2019-03-15',
            'flight_departure_time' => '2019-03-10 08:00:00',
            'flight_arrival_time' => '2019-03-10 15:30:00',
            'duration' => '07:30:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '2',
            'flight_type' => '1',
            'flight_code' => 'MB016',
            'flight_airplane_id' => '6',
            'flight_total_passenger' => '300',
            'flight_cost' => '8000000',
            'flight_airport_from_id' => '3',
            'flight_airport_to_id' => '1',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-05 22:00:00',
            'flight_arrival_time' => '2019-04-06 08:00:00',
            'duration' => '10:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_type' => '2',
            'flight_code' => 'MB016',
            'flight_airplane_id' => '3',
            'flight_total_passenger' => '599',
            'flight_cost' => '2500000',
            'flight_airport_from_id' => '3',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => '2019-04-09',
            'flight_departure_time' => '2019-04-05 21:00:00',
            'flight_arrival_time' => '2019-04-05 22:00:00',
            'duration' => '02:00:00'
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '3',
            'flight_type' => '1',
            'flight_code' => 'MB018',
            'flight_airplane_id' => '6',
            'flight_total_passenger' => '300',
            'flight_cost' => '25000000',
            'flight_airport_from_id' => '5',
            'flight_airport_to_id' => '2',
            'flight_departure_date' => '2019-04-05',
            'flight_return_date' => null,
            'flight_departure_time' => '2019-04-05 22:00:00',
            'flight_arrival_time' => '2019-04-06 08:00:00',
            'duration' => '10:00:00'
        ]);
    }
}
