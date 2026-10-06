<?php

    session_start();
    $SITE = "Site Games";
    function criarTopo($titulo){
        $htmlTopo = '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$titulo.'</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="logo">Free<span>Games</span></div>
        <div class="navegacao">
        '.logado().'
        </div>
    </header>';

        return $htmlTopo;
    }

    function logado(){
        $linksTopo = "";

        if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1){

         $linksTopo = '<div>
         '.criarLinkMenu("index.php","Inicio").
         '            
          '.criarLinkMenu("games.php","Games").
         '
        '.criarLinkMenu("perfil.php","Perfil").
        '
        '.criarLinkMenu("cadastrar_Usuario.php","Cadastrar Usuário").
        '
        '.criarLinkMenu("listar_usuarios.php","Listar Usuários").
         '    
         '.criarLinkMenu("sair.php", "Sair").
         '
        </div>';

    } else {

    $linksTopo = 
    '<div>
    '.criarLinkMenu("index.php", "Início").'   
    '.criarLinkMenu("games.php", "Games").'     
        '.criarLinkMenu("entrar.php", "Login").'                        
    </div>';
    }
    
    return $linksTopo;

}

 function criaFormularioCadastroUsuario(){

    return '<main>
    <form class="form-login" action="inserir_usuario.php" method="POST">

        <h2>Cadastrar Usuário</h2>

        <div class="campo">
            <ion-icon name="person-outline"></ion-icon>
            <input 
                class="input-login"
                type="text" 
                name="email" 
                placeholder="Email"
                required
            >
        </div>

        <div class="campo">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input 
            class="input-login"
                type="password" 
                name="senha" 
                placeholder="Senha"
                required
            >
        </div>

        <button type="submit" class="btn ativo">
            <ion-icon name="log-in-outline"></ion-icon>
            Cadastrar
        </button>

        <button type="reset" class="btn">
            <ion-icon name="trash-bin-outline"></ion-icon>
            Limpar
        </button>
    </form>
    </main>';

 }

    function criarRodape(){
        $htmlRodape = '<footer id="desenvolvedores">
        <h2>FreeGames</h2>
        <p>Projeto desenvolvido para estudo de HTML e CSS básico.</p>
        <p>IFES — Desenvolvimento Web</p>
        </footer>
        </body>
        </html>';

        return $htmlRodape;
    }

    function criarLinkMenu($pagina, $nome){

    $html = '<a class="btn '.linkAtivo($pagina).'" href='.$pagina.'> '.$nome.'</a>';    

    return $html;
    }

    function linkAtivo($link){
        $resposta = "";
        $pagAtual = basename($_SERVER['PHP_SELF']);
        if ($link == $pagAtual) {
            $resposta = "ativo";
        } else{
            $resposta = "";
        }
        return $resposta;
    }

    function criarMsgErro($mensagemErrouLogin){
        return '<div class = "msgErro">'.$mensagemErrouLogin.'</div>';
    }

    function criarMsgAcerto($mensagemAcerto){
        return '<div class = "msgAcerto">'.$mensagemAcerto.'</div>';
    }

    function criarForm(){
        $htmlForm = '<div class="area-login" id="login">
            <div class="login">
                <h1>Entrar</h1>
                <p class="login-descricao">Acesse sua conta para acompanhar seus jogos favoritos.</p>

                <form action="validarUsuario.php" method="post">
                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="opcoes-login">
                        <input type="checkbox" id="lembrar" name="lembrar">
                        <label for="lembrar">Lembrar de mim</label>
                        <a href="#">Esqueci minha senha</a>
                    </div>

                    <button type="submit">Entrar</button>
                </form>

                <p class="criar-conta">Ainda não possui uma conta? <a href="#">Cadastre-se</a></p>
            </div>
        </div>';

        return $htmlForm;
    }

    function criarCard($titulo, $imagem, $descricao){
        $htmlCards = '<div class="categoria" id="categorias">
            <h1>Shooter</h1>
            <div class="card">
                <div class="card-imagem"><img src="'.$imagem.'" alt=""></div>
                <div class="card-titulo">'.$titulo.'</div>
                <div class="card-descricao">'.$descricao.'</div>
                <a class="card-link" href="#">Conhecer jogo</a>
            </div>';

        return $htmlCards;
    }

    function criarDestaq($titulo, $imagem, $descricao){
        $htmlDestaq = '<div class="categoria" id="games">
            <h1>Jogo em destaque</h1>
            <div class="card-destaque">
                <div class="card-imagem"><img src="'.$imagem.'" alt="Capa do Fortnite"></div>
                <div class="card-conteudo">
                    <span class="etiqueta">GRÁTIS</span>
                    <div class="card-titulo">'.$titulo.'</div>
                    <div class="card-descricao">'.$descricao.'</div>
                    <a class="card-link" href="#">Conhecer jogo</a>
                </div>
            </div>
        </div>';

        return $htmlDestaq;
    }
    
?>