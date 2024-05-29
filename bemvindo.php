<?PHP

session_start();

if(isset($_SESSION['nome'])) {
    
    echo "Bem vindo! {$_SESSION ['nome']}";
}else {
    header("Location: index.html");
}
?>

<br>
<button>
    <a href="sair.php">Sair</a>
</button>