<?php namespace Alfredoem\Authentication;

class Authentication
{
    public static function structure()
    {
        return [
            "namespace" => ['alfredoem'],
            "dirs" => [
                [
                    "parent" => "app",
                    "child"  => [
                        ["name" => "Config", "child" => []],
                        ["name" => "Console", "child" => []],
                        ["name" => "Http", "child" => []],
                        ["name" => "Logic", "child" => []],
                    ]
                ],

                [
                    "parent" => "resources",
                    "child"  => [
                        [
                            "name" => "stubs",
                            "child" => [
                                [
                                    "name" => "database",
                                    "child" => [
                                        "migrations"
                                    ],
                                ],

                            ],
                        ],
                        [
                            "name" => "views",
                            "child" => [],
                        ]
                    ]
                ]
            ]
        ];
    }
}