<?php

require_once '../../src/lib/Database/Connection.php';

require_once "../../src/Util/Core.php";
require_once "../../src/Controller/AdminController.php";
require_once "../../src/Controller/ErroController.php";
require_once "../../src/Controller/HomeController.php";
require_once "../../src/Controller/SobreController.php";
require_once "../../src/Controller/PostController.php";

require_once "../../src/Model/Comentario.php";
require_once "../../src/Model/Postagem.php";

require_once "../../src/Vendor/autoload.php";


// captura o a pagina
$layout = file_get_contents("__layout__/layout.html");

// captura o conteúdo
ob_start();
    $core = new Core();
    $core->start($_GET);
    $content = ob_get_contents();
ob_end_clean();

// busca a ocorrência pega o retorno e insere no layout padrão
$layout = str_replace("{{__replace__}}", $content, $layout);
echo $layout;
