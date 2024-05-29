<?PHP

session_start();

//$nome = $_POST['nome'];
//echo $nome;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['nome'];
    $password = $_POST['senha'];

    if ($username == 'MATHEUS BARBOSA' && $password == 'matheus123'){
        $_SESSION['nome'] = $username;
        
        header("location: bemvindo.php");

    } else {
        echo "Usuario ou senha invalidos";
    }
}