<?php

namespace App\Controller;

use App\Core\Form;
use App\Core\View;

class InstallerController
{
    public function install(): void
    {
        $form = new Form("InstallerForm");

        if ($form->isSubmitted() && $form->isValid()) {
            $dbHost = $_POST['dbHost'];
            $dbName = $_POST['dbName'];
            $dbUser = $_POST['dbUser'];
            $dbPassword = $_POST['dbPassword'];
            $dbPort = $_POST['dbPort'];
            $tablePrefix = $_POST['tablePrefix'];

            $configContent = <<<PHP
<?php
define('DB_HOST', '$dbHost');
define('DB_NAME', '$dbName');
define('DB_USER', '$dbUser');
define('DB_PASSWORD', '$dbPassword');
define('DB_PORT', '$dbPort');
define('TABLE_PREFIX', '$tablePrefix');
PHP;

            file_put_contents('../config.php', $configContent);

            header('Location: /login');
            exit();
        }

        $view = new View('installer');
        $view->assign('form', $form->build());
        $view->render();
    }
}
