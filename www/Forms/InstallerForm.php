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
                    "min" => 2,
                    "max" => 255,
                    "placeholder" => "Database Host",
                    "required" => true,
                    "error" => "Le nom d'hôte de la base de données doit faire entre 2 et 255 caractères",
                ],
                "dbName" => [
                    "type" => "text",
                    "min" => 2,
                    "max" => 255,
                    "placeholder" => "Database Name",
                    "required" => true,
                    "error" => "Le nom de la base de données doit faire entre 2 et 255 caractères",
                ],
                "dbUser" => [
                    "type" => "text",
                    "min" => 2,
                    "max" => 255,
                    "placeholder" => "Database User",
                    "required" => true,
                    "error" => "Le nom d'utilisateur de la base de données doit faire entre 2 et 255 caractères",
                ],
                "dbPassword" => [
                    "type" => "password",
                    "min" => 2,
                    "max" => 255,
                    "placeholder" => "Database Password",
                    "required" => true,
                    "error" => "Le mot de passe de la base de données doit faire entre 2 et 255 caractères",
                ],
                "dbPort" => [
                    "type" => "text",
                    "min" => 1,
                    "max" => 5,
                    "placeholder" => "Database Port",
                    "required" => true,
                    "error" => "Le port de la base de données doit faire entre 1 et 5 caractères",
                ],
                "tablePrefix" => [
                    "type" => "text",
                    "min" => 1,
                    "max" => 50,
                    "placeholder" => "Table Prefix",
                    "required" => true,
                    "error" => "Le préfixe des tables doit faire entre 1 et 50 caractères",
                ],
            ]
        ];
    }
}
