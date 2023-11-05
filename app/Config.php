<?php

namespace App;

class Config
{
     public function __construct()
     {

          // Mulai sesi
          if (session_id() == "") {
               session_start();
          }

          // Timezone
          date_default_timezone_set("Asia/Jakarta");

          // Url dan Assets
          define("URL", "http://localhost/pbwl-project10");
          define("AST", URL . "/layouts/assets");

          define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);
     }
}
