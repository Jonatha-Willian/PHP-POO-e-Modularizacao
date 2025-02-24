<?php
function meu_autoloder($className){
    $diretorios = ['classes/', 'traits/'];
    
    foreach($diretorios as $diretorio){
        $diretorio = strtolower($diretorio);
        $className = strtolower($className);
        if(file_exists($diretorio . $className . '.class.php')){
            include_once($diretorio . $className . '.class.php');
            break;
        }
    }
}
spl_autoload_register('meu_autoloder');

$user = new User();
$user->createUser();
$user->loginUser();

echo '<hr>';

$file= new File();
$file->created();
$file->deleted();

$teste = new Teste();
$teste->teste();