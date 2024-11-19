<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Calculadora Simples</h1>
    <div class="calculator">
        <form method="post">
            <input type="text" name="tela" class="screen" id="tela" readonly value="<?php echo $_POST['tela'] ?? ''; ?>">
            <input type="hidden" name="num1" id="num1">
            <input type="hidden" name="num2" id="num2">
            <input type="hidden" name="operacao" id="operacao">
            <div class="buttons">
                <!-- Botões de números -->
                <?php for ($i = 1; $i <= 9; $i++): ?>
                    <button type="button" onclick="adicionarValor('<?php echo $i; ?>')"><?php echo $i; ?></button>
                <?php endfor; ?>
                <button type="button" onclick="adicionarValor('0')">0</button>
                <button type="button" onclick="adicionarValor('.')">.</button>
                <button type="button" onclick="limpar()">C</button>
                
                <!-- Botões de operações -->
                <button type="button" onclick="definirOperacao('+')">+</button>
                <button type="button" onclick="definirOperacao('-')">-</button>
                <button type="button" onclick="definirOperacao('*')">*</button>
                <button type="button" onclick="definirOperacao('/')">/</button>
                
                <!-- Botão de igual -->
                <button type="submit" onclick="enviar()">=</button>
            </div>
        </form>
    </div>
        
        <?php

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                if(isset($_GET['n1']) and isset($_GET['n2'])){
                    $n1 = $_GET['n1'];
                    $n2 = $_GET['n2'];
        
            
                    function soma(){
                        return $GLOBALS['n1'] + $GLOBALS['n2'];
                    }

                    function subtracao(){
                        return $GLOBALS['n1'] - $GLOBALS['n2'];
                    }
       
                    if($_GET['op'] == 'soma'){
                        echo "<h1> $n1  + $n2 = " .soma(). "</h1>";
                    } else {
                        echo "<h1> $n1 - $n2 = " .subtracao(). "</h1>";
                    }

                }
            }

        ?>
    </body>
</html>