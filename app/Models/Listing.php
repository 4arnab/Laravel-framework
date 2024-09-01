<?php

namespace App\Models;

class Listing{
    public static function getAll():array{
        return [
            [
                "id" => 1,
                "title" => "new title",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
            ],
            [
                "id" => 1,
                "title" => "new title",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            ],
            [
                "id" => 1,
                "title" => "new title",
                "subtitle"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
            ],
        ];
    }
}