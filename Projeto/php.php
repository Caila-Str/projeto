<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FullJoshi Mangás - Cadastro pedidos</title>
    <link rel="icon" href="./imagens/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

    <header>
      <div class="logo">
          <h2>FullJoshi Mangás</h2>
          <p>Aqui você encontra os melhores Mangás.</p>
      </div><!--Logo-->    
      <div class="menu">
          <form>
              <div class="pesquisar">
                   <input type="text" placeholder="....">

                  <input type="submit" name="acao" value="Pesquisa">
               </div>
      
          </form>

          <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="Produtos.html">Produtos</a></li>
              <li><a href="forum.html">Fórum</a></li>
              <li><a href="php.php">Cadastro</a></li>
              
          </ul>
         
      </div><!--Menu-->
    </header>
    <section class="cadastro">
        <div class="form-cad">
            <h2>Cadastrar Clientes</h2>
                <form method="post" name="clientes">
                <div class="wraper-element">
                    <label for="fnomecompleto">Nome Completo</label>
                    <input type="text" id="fnomecompleto" name="cliente">
                </div>

                <div class="wraper-element">
                    <label for="fendereco">Endereço</label>
                    <input type="text" id="fendereco" name="endereco">
                </div>
                <div class="wraper-element">
                    <label for="ftelefone">Telefone</label>
                    <input type="number" id="ftelefone" name="telefone">
                </div>
                <div class="wraper-element">
                    <label for="fproduto">produto</label>
                    <input type="text" id="fproduto" name="produto">
                </div>

                <div class="wraper-element">
                    <label for="fvalor">valor</label>
                    <input type="number" id="fvalor" name="valor">
                </div>

                <div class="wraper-element">
                    <input type="submit" name="submit" value="Efetuar pedido">
                </div>
                </form>
        </div>
    </section><!--Formulario-->
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "fulljoshi";

        $conn = mysqli_connect($servername,$username,$password,$database);
                    
            if(isset($_POST['cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['valor'])){
                echo "Obrigado (a) pela preferência!";

                $nome = $_POST['cliente'];
                $endereco = $_POST['endereco'];
                $Telefone = $_POST['telefone'];
                $produto = $_POST['produto'];
                $valor = $_POST['valor'];

                $sql ="insert into 'tabela de pedidos' (cliente, endereco, telefone, produto, valor unitario) values ('$nome', '$endereco', '$Telefone', '$produto', '$valor')";

                $result = $conn->query($sql);

                if($result){
                    echo "Pedido enviado";   
                }else{
                    echo "Pedido não enviado";
                }
            
            }
    ?>

</body>
</html>