<?php

namespace App\Forms;

class InstallerForm
{
    public static function getConfig(): array
    {
        return [
            "config" => [
                "action" => "/install",
                "method" => "POST",
                "submit" => "Installer"
            ],
            "inputs" => [
                "dbHost" => [
                    "type" => "text",
                    "placeholder" => "Database Host",
                    "required" => true,
                ],
                "dbName" => [
                    "type" => "text",
                    "placeholder" => "Database Name",
                    "required" => true,
                ],
                "dbUser" => [
                    "type" => "text",
                    "placeholder" => "Database User",
                    "required" => true,
                ],
                "dbPassword" => [
                    "type" => "password",
                    "placeholder" => "Database Password",
                    "required" => true,
                ],
                "dbPort" => [
                    "type" => "number",
                    "placeholder" => "Database Port",
                    "required" => true,
                    "value" => 5432
                ],
                "tablePrefix" => [
                    "type" => "text",
                    "placeholder" => "Table Prefix",
                    "required" => true,
                    "value" => "chall"
                ]
            ]
        ];
    }
}
