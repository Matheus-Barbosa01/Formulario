<?PHP

session_start();

if(isset($_SESSION['nome'])) {
    
    echo "bem vindo! {$_SESSION ['nome']}";
}else{
    header("Location: index.html");
}
?>

<br>
<button><a href="sair.php">sair</a>
</button>