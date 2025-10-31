<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            /* Para conter o box-shadow, se necessário */
            overflow: hidden; 
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
            /* **[MEU UPGRADE]** Adiciona um espaço entre os blocos para respirar. */
            margin-bottom: 15px; 
        }
        .exercicio:last-child {
            border-bottom: none;
            margin-bottom: 0; /* O último não precisa de espaço embaixo */
        }
        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .resultado strong {
            color: #004a99;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }
        ul, ol {
            padding-left: 20px;
        }
        /* Novo estilo para blocos de código grandes (opcional, para organização) */
        .codigo-bloco {
            /* MUDANÇA AQUI: Fundo branco ou claro (tipo #f9f9f9) */
        background-color: #ffffff; 
        /* MUDANÇA AQUI: Cor da fonte escura (preto #000 ou quase preto #212529) */
        color: #212529; 
        padding: 15px;
        border-radius: 5px;
        /* ADICIONEI UMA BORDA LEVE para separar do fundo branco do .container */
        border: 1px solid #dee2e6; 
        white-space: pre-wrap;
        font-family: Consolas, monospace;
        margin-top: 10px;
        overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>
        
        <div class="exercicio">
            <h3>Funções Essenciais de Strings em PHP</h3>
            <div class="codigo-bloco">
<pre><code>// Bloco de Execução no PHP
$texto = "Olá, mundo!";
$frase = "Eu gosto de maçã.";
$email = "contato@exemplo.com";
$texto_lower = "Isso É Um TESTE";
$nome_ucfirst = "joão";
$entrada_trim = " olá ";
$data_explode = "29-10-2025";
$array_implode = ["Maçã", "Banana", "Laranja"];
$frase_strpos = "O gato subiu no telhado.";
$nome_sprintf = "Maria";
$idade_sprintf = 30;

// 1. strlen()
$len = strlen($texto);

// 2. str_replace()
$nova_frase = str_replace("maçã","banana", $frase);

// 3. substr()
$dominio = substr($email, 8);
$usuario = substr($email, 0, 7);

// 4. strtolower()
$lower = strtolower($texto_lower);

// 5. strtoupper()
$upper = strtoupper($texto_lower);

// 6. ucfirst()
$ucfirst = ucfirst($nome_ucfirst);

// 7. trim()
$limpo = trim($entrada_trim);

// 8. explode()
$partes = explode("-", $data_explode);

// 9. implode()
$lista_compras = implode(", ", $array_implode);

// 10. strpos()
$posicao = strpos($frase_strpos, "gato");
$pos_msg = ($posicao !== false) ? "A palavra 'gato' foi encontrada na posição: " . $posicao : "A palavra 'gato' não foi encontrada.";

// 11. sprintf()
$texto_formatado = sprintf("O nome dela é %s e ela tem %d anos.", $nome_sprintf, $idade_sprintf);

// O PHP aqui simplesmente ecoa (printa) todos os resultados.
</code></pre>
            </div>
            
            <div class="resultado">
                <?php 
                // Função strlen()
                $texto = "Olá, mundo!";
                echo "<p><strong>1. strlen(\"$texto\"):</strong> " . strlen($texto) . " (Conta a exclamação e a vírgula também.)</p>";
                
                // Função str_replace()
                $frase = "Eu gosto de maçã.";
                $nova_frase = str_replace("maçã","banana", $frase);
                echo "<p><strong>2. str_replace(\"maçã\", \"banana\", \"$frase\"):</strong> $nova_frase</p>";

                // Função substr()
                $email = "contato@exemplo.com";
                $dominio = substr($email, 8);
                $usuario = substr($email, 0, 7);
                echo "<p><strong>3. substr(\"$email\", 8):</strong> $dominio | <strong>substr(\"$email\", 0, 7):</strong> $usuario</p>";

                // Função strtolower()
                $texto_lower = "Isso É Um TESTE";
                echo "<p><strong>4. strtolower(\"$texto_lower\"):</strong> " . strtolower($texto_lower) . "</p>";
                
                // Função strtoupper()
                echo "<p><strong>5. strtoupper(\"$texto_lower\"):</strong> " . strtoupper($texto_lower) . "</p>";
                
                // Função ucfirst()
                $nome_ucfirst = "joão";
                echo "<p><strong>6. ucfirst(\"$nome_ucfirst\"):</strong> " . ucfirst($nome_ucfirst) . "</p>";

                // Função trim()
                $entrada_trim = " olá ";
                $limpo = trim($entrada_trim);
                echo "<p><strong>7. trim(\" $entrada_trim \"):</strong> '" . $limpo . "' (sem os espaços nas bordas)</p>";
                
                // Função explode()
                $data_explode = "29-10-2025";
                $partes = explode("-", $data_explode);
                echo "<p><strong>8. explode(\"-\", \"$data_explode\"):</strong> Primeiro elemento (Dia): " . $partes[0] . "</p>";

                // Função implode()
                $array_implode = ["Maçã", "Banana", "Laranja"];
                $lista_compras = implode(", ", $array_implode);
                echo "<p><strong>9. implode(\", \", [Maçã, Banana, Laranja]):</strong> " . $lista_compras . "</p>";

                // Função strpos()
                $frase_strpos = "O gato subiu no telhado.";
                $posicao = strpos($frase_strpos, "gato");
                $pos_msg = ($posicao !== false) ? "A palavra 'gato' foi encontrada na posição: " . $posicao : "A palavra 'gato' não foi encontrada.";
                echo "<p><strong>10. strpos(\"$frase_strpos\", \"gato\"):</strong> " . $pos_msg . "</p>";

                // Função sprintf()
                $nome_sprintf = "Maria";
                $idade_sprintf = 30;
                $texto_formatado = sprintf("O nome dela é %s e ela tem %d anos.", $nome_sprintf, $idade_sprintf);
                echo "<p><strong>11. sprintf(\"O nome dela é \%s...\", Maria, 30):</strong> " . $texto_formatado . "</p>";
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>Funções Numéricas e Matemáticas em PHP</h3>
            <div class="resultado">
                <?php
                // 1. number_format()
                $preco = 1250.75;
                echo "<p><strong>1. number_format($preco, 2, ',', '.'):</strong> R$ " . number_format($preco, 2, ',', '.') . " | Arredondando simples: " . number_format($preco) . "</p>";

                // 2. round()
                echo "<p><strong>2. round(4.3):</strong> " . round(4.3) . " | <strong>round(4.7):</strong> " . round(4.7) . " | <strong>round(2.3456, 2):</strong> " . round(2.3456, 2) . "</p>";

                // 3. ceil()
                echo "<p><strong>3. ceil(4.3):</strong> " . ceil(4.3) . "</p>";

                // 4. floor()
                echo "<p><strong>4. floor(4.7):</strong> " . floor(4.7) . "</p>";

                // 5. abs()
                $diferenca = 10 - 25; // -15
                echo "<p><strong>5. abs(10 - 25):</strong> " . abs($diferenca) . "</p>";

                // 6. rand() ou mt_rand()
                echo "<p><strong>6. mt_rand(1, 10):</strong> " . mt_rand(1, 10) . " (Número aleatório)</p>";

                // 7. max()
                $notas = [7.5, 9.0, 6.2];
                echo "<p><strong>7. max(5, 10, 2, 8):</strong> " . max(5, 10, 2, 8) . " | <strong>max(\$notas):</strong> " . max($notas) . "</p>";

                // 8. min()
                $precos = [19.99, 15.50, 22.00];
                echo "<p><strong>8. min(5, 10, 2, 8):</strong> " . min(5, 10, 2, 8) . " | <strong>min(\$precos):</strong> " . min($precos) . "</p>";

                // 9. pow()
                echo "<p><strong>9. pow(2, 3):</strong> " . pow(2, 3) . "</p>";

                // 10. sqrt()
                echo "<p><strong>10. sqrt(9):</strong> " . sqrt(9) . "</p>";
                ?>
            </div>
        </div>
        
        <div class="exercicio">
            <h3>Funções de Verificação de Tipo e Array</h3>
            <div class="resultado">
                <h4>Verificação de Tipo (O resultado é *true* ou *false*)</h4>
                <?php
                // 11. is_numeric()
                echo "<p><strong>11. is_numeric(123):</strong> "; var_dump(is_numeric(123)); echo " | <strong>is_numeric(\"123.45\"):</strong> "; var_dump(is_numeric("123.45")); echo " | <strong>is_numeric(\"Olá\"):</strong> "; var_dump(is_numeric("Olá")); echo "</p>";
                
                // 12. is_int()
                echo "<p><strong>12. is_int(123):</strong> "; var_dump(is_int(123)); echo " | <strong>is_int(123.45):</strong> "; var_dump(is_int(123.45)); echo " | <strong>is_int(\"123\"):</strong> "; var_dump(is_int("123")); echo "</p>";

                // 13. is_float()
                echo "<p><strong>13. is_float(123.45):</strong> "; var_dump(is_float(123.45)); echo " | <strong>is_float(123):</strong> "; var_dump(is_float(123)); echo "</p>";
                ?>
                
                <h4>Funções Essenciais de Array</h4>
                <?php
                // 1. count()
                $frutas = ["Maçã", "Banana", "Laranja"];
                echo "<p><strong>1. count([Maçã, Banana, Laranja]):</strong> " . count($frutas) . "</p>";

                // 2. array_push()
                $lista_push = ["Arroz", "Feijão"];
                array_push($lista_push, "Macarrão", "Óleo");
                echo "<p><strong>2. array_push(\$lista, ...):</strong> "; print_r($lista_push); echo "</p>";

                // 3. array_pop()
                $lista_pop = ["Arroz", "Feijão", "Macarrão"];
                $ultimo_item = array_pop($lista_pop);
                echo "<p><strong>3. array_pop():</strong> Item removido: $ultimo_item. Array restante: "; print_r($lista_pop); echo "</p>";

                // 4. array_shift()
                $lista_shift = ["Arroz", "Feijão", "Macarrão"];
                $primeiro_item = array_shift($lista_shift);
                echo "<p><strong>4. array_shift():</strong> Item removido: $primeiro_item. Array restante: "; print_r($lista_shift); echo "</p>";

                // 5. array_key_exists()
                $config = ['usuario' => 'admin', 'senha' => '123'];
                $key_exists_msg = array_key_exists('usuario', $config) ? "A chave 'usuario' existe." : "A chave 'usuario' NÃO existe.";
                echo "<p><strong>5. array_key_exists('usuario', \$config):</strong> " . $key_exists_msg . "</p>";

                // 6. in_array()
                $permissoes = ['ler', 'escrever', 'executar'];
                $in_array_msg = in_array('escrever', $permissoes) ? "O usuário pode escrever." : "O usuário NÃO pode escrever.";
                echo "<p><strong>6. in_array('escrever', \$permissoes):</strong> " . $in_array_msg . "</p>";

                // 7. array_merge()
                $array1 = ["a", "b"]; $array2 = ["c", "d"];
                $resultado_merge = array_merge($array1, $array2);
                echo "<p><strong>7. array_merge(\$array1, \$array2):</strong> "; print_r($resultado_merge); echo "</p>";

                // 8. array_keys()
                $capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];
                $paises = array_keys($capitais);
                echo "<p><strong>8. array_keys(\$capitais):</strong> "; print_r($paises); echo "</p>";

                // 9. array_values()
                $cidades = array_values($capitais);
                echo "<p><strong>9. array_values(\$capitais):</strong> "; print_r($cidades); echo "</p>";
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>Funções Essenciais de Data e Hora (DateTime)</h3>
            <div class="resultado">
                <?php
                // 1. new DateTime() e 2. format()
                $agora = new DateTime();
                echo "<p><strong>1/2. new DateTime()->format('d/m/Y H:i:s'):</strong> " . $agora->format('d/m/Y H:i:s') . "</p>";
                
                // 3. modify()
                $hoje_modify = new DateTime();
                $hoje_modify->modify('+10 days');
                echo "<p><strong>3. modify('+10 days'):</strong> Daqui a 10 dias será: " . $hoje_modify->format('d/m/Y') . "</p>";
                
                // 4. diff()
                $data_nascimento = new DateTime('1990-05-15');
                $hoje_diff = new DateTime();
                $intervalo = $hoje_diff->diff($data_nascimento);
                echo "<p><strong>4. diff():</strong> Você tem " . $intervalo->y . " anos. Diferença total de dias: " . $intervalo->days . "</p>";

                // 5. DateTime::createFromFormat()
                $data_string = '20/03/2026';
                $formato = 'd/m/Y';
                $data_obj = DateTime::createFromFormat($formato, $data_string);
                echo "<p><strong>5. createFromFormat('d/m/Y', '20/03/2026'):</strong> O ano é: " . $data_obj->format('Y') . "</p>";
                ?>
            </div>
        </div>

        <div class="exercicio">
            <h3>EXEMPLO REAL: Processamento e Relatório de Cliente</h3>
            <div class="codigo-bloco">
<pre><code>// --- DADOS BRUTOS ---
$dados_brutos = [
    'nome' => ' josé da silva ',
    'email' => 'JOSE.SILVA@EMAIL.COM',
    'nasc' => '15/05/1990',
    'compras' => '120.50, 80.00, 15.75, 250.00, 99.90'
];

// --- PROCESSAMENTO ---
$nome_limpo = trim($dados_brutos['nome']);
$nome_lower = strtolower($nome_limpo);
$email_limpo = strtolower($dados_brutos['email']);
$nome_formatado = ucwords($nome_lower);

$compras_array = explode(',', $dados_brutos['compras']);

$hoje = new DateTime();
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']);
$intervalo = $hoje->diff($data_nascimento);
$idade = $intervalo->y;

$total_de_compras = count($compras_array);
$valor_total_gasto = array_sum($compras_array);
$maior_compra = max($compras_array);
$menor_compra = min($compras_array);

$media_gasto = 0;
if ($total_de_compras > 0) {
    $media_gasto = round($valor_total_gasto / $total_de_compras, 2);
}

// --- GERAÇÃO DO RELATÓRIO (echo) ---
// Note que no HTML não podemos usar \n para quebrar linha, usamos <br> ou envolvemos em <pre> ou div/p.
// Vou usar um array para a saída e depois implode com <br> para manter a estrutura do seu PHP.
</code></pre>
            </div>

            <div class="resultado">
                <h4>Relatório Final Formatado</h4>
                <?php
                $dados_brutos = [
                    'nome' => ' josé da silva ',
                    'email' => 'JOSE.SILVA@EMAIL.COM',
                    'nasc' => '15/05/1990',
                    'compras' => '120.50, 80.00, 15.75, 250.00, 99.90'
                ];
                
                $nome_limpo = trim($dados_brutos['nome']);
                $nome_lower = strtolower($nome_limpo);
                $email_limpo = strtolower($dados_brutos['email']);
                $nome_formatado = ucwords($nome_lower);

                $compras_array = explode(',', $dados_brutos['compras']);

                $hoje = new DateTime();
                $data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']);
                $intervalo = $hoje->diff($data_nascimento);
                $idade = $intervalo->y;

                $total_de_compras = count($compras_array);
                $valor_total_gasto = array_sum($compras_array);
                $maior_compra = max($compras_array);
                $menor_compra = min($compras_array);

                $media_gasto = 0;
                if ($total_de_compras > 0) {
                    $media_gasto = round($valor_total_gasto / $total_de_compras, 2);
                }

                $output = [];
                $output[] = "<strong>RELATÓRIO DO CLIENTE GERADO EM " . $hoje->format('d/m/Y H:i:s') . "</strong>";

                $output[] = sprintf("Nome: %s", $nome_formatado);
                $output[] = sprintf("E-mail: %s", $email_limpo);
                $output[] = sprintf("Idade: %d anos", $idade);
                $output[] = "--- ESTATÍSTICAS DE COMPRAS ---";
                $output[] = "Total de pedidos: " . $total_de_compras;
                $output[] = "Valor total gasto: R$ " . number_format($valor_total_gasto, 2, ',', '.');
                $output[] = "Média por pedido: R$ " . number_format($media_gasto, 2, ',', '.');
                $output[] = "Maior compra: R$ " . number_format($maior_compra, 2, ',', '.');
                $output[] = "Menor compra: R$ " . number_format($menor_compra, 2, ',', '.');
                
                // Implodo o array de saída com <br> para quebrar as linhas no HTML
                echo implode("<br>", $output);
                ?>
            </div>
        </div>

    </div> 
</body>
</html>