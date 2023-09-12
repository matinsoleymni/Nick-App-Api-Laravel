<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Stores = [
                    [
                        "id"=> 1 ,
                        "name"=> "Nike URC - House of Innovation 011",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Urmia, AZG, 1124, Freedom IR",
                        "status"=> true,
                        "clock"=> "Opens at 11:00 am",
                        "opens"=> "Open"
                    ],
                    [
                        "id"=> 2 ,
                        "name"=> "Nike MRC - House of Innovation 024",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Mashhad, KHR, 2411, Freedom IR",
                        "status"=> true,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Open"
                    ],
                    [
                        "id"=> 3 ,
                        "name"=> "Nike NYC - House of Innovation 000",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Urmia, AZG, 1124, Freedom IR",
                        "status"=> true,
                        "clock"=> "Opens at 11:00 am",
                        "opens"=> "open"
                    ],
                    [
                        "id"=> 4 ,
                        "name"=> "Nike MRC - House of Innovation 024",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Mashhad, KHR, 2411, Freedom IR",
                        "status"=> false,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Close"
                    ],
                    [
                        "id"=> 5 ,
                        "name"=> "Nike MRC - House of Innovation",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Tehran, THR, 2411, Freedom IR",
                        "status"=> false,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Close"
                    ],
                    [
                        "id"=> 6 ,
                        "name"=> "Nike Store - Shoes 11",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Mashhad, KHR, 2411, Freedom IR",
                        "status"=> false,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Close"
                    ],
                    [
                        "id"=> 7 ,
                        "name"=> "Nike MRC - House of Innovation 111",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Urmia, AZG, 001, Freedom IR",
                        "status"=> true,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Open"
                    ],
                    [
                        "id"=> 8 ,
                        "name"=> "Nike MRC - House of Innovation 024",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Mashhad, KHR, 2411, Freedom IR",
                        "status"=> false,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Close"
                    ],
                    [
                        "id"=> 9 ,
                        "name"=> "Nike MRC - House of Innovation 024",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Mashhad, KHR, 2411, Freedom IR",
                        "status"=> false,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Close"
                    ],
                    [
                        "id"=> 10 ,
                        "name"=> "Nike MRC - House of Innovation 024",
                        "desc"=> "650 5th Ave.",
                        "location"=> "Mashhad, KHR, 2411, Freedom IR",
                        "status"=> true,
                        "clock"=> "Opens at 12:00 am",
                        "opens"=> "Open"
                    ]
                ];
            return [
                "name" => $Stores[4]["name"],
                "description" => $Stores[4]["desc"],
                "location" => $Stores[4]["location"],
                "status" => $Stores[4]["status"],
                "clock" => $Stores[4]["clock"],
                "opens" => $Stores[4]["opens"],
            ];

    }
}
