# 🚀 PHP Starter Pack: Exercícios Fundamentais
[![Tecnologias](https://img.shields.io/badge/Tecnologias-PHP%20%7C%20HTML%20%7C%20CSS-8892BF.svg)](https://www.php.net/)

> **"A jornada de mil milhas começa com o primeiro `echo`."**
>
> — *Algum sábio da Internet, provavelmente.*

Este repositório contém uma série de exercícios práticos focados nas **funções essenciais e fundamentais** da linguagem PHP. É um projeto de estudo dedicado a solidificar a base de conhecimento necessária para dar os primeiros passos (e não cair) no mundo do desenvolvimento web.

---

## 🎯 Objetivo do Projeto

Este projeto demonstra meu **domínio inicial** sobre os pilares do PHP, que são cruciais para qualquer desenvolvedor que pretenda mexer com *back-end* (ou apenas para sobreviver a entrevistas de nível *júnior*).

O código apresentado (*o arquivo HTML com o PHP embutido*) é uma prova de conceito onde executo e visualizo os resultados das funções, garantindo que eu entenda o **"o quê"** e o **"porquê"** de cada comando.

---

## 🛠️ Funções Cobertas (O Básico que Funciona)

O arquivo de exercícios foca nas seguintes áreas críticas, com exemplos práticos e formatados para fácil leitura:

### 🧵 Manipulação de Strings
* **Contagem:** `strlen()`
* **Substituição:** `str_replace()`, `substr()`
* **Formatação:** `strtolower()`, `strtoupper()`, `ucfirst()`, `trim()`, `sprintf()`
* **Separação/Junção:** `explode()`, `implode()`
* **Busca:** `strpos()` (A clássica função que exige a checagem `!== false`).

### 🔢 Funções Numéricas e Matemáticas
* **Arredondamento:** `round()`, `ceil()`, `floor()` (Para não ter erro de ponto flutuante, o terror de todo dev).
* **Formatação:** `number_format()` (Essencial para não mostrar preço em formato gringo para brasileiro).
* **Cálculo:** `abs()`, `pow()`, `sqrt()`, `max()`, `min()`.
* **Aleatoriedade:** `mt_rand()` (Porque `rand()` é muito "velho").

### 📦 Arrays e Verificação de Tipo
* **Contagem:** `count()`
* **Gerenciamento de Pilha/Fila:** `array_push()`, `array_pop()`, `array_shift()`
* **Verificação:** `array_key_exists()`, `in_array()`, `is_numeric()`, `is_int()`, `is_float()` (Para não misturar tipos de dados e causar um **bug bizarro**).
* **Combinação/Extração:** `array_merge()`, `array_keys()`, `array_values()`.

### ⏱️ Funções de Data e Hora (`DateTime` Class)
* Uso da poderosa classe **`DateTime`** para formatação (`format()`), manipulação (`modify()`) e cálculo de diferença (`diff()`), mostrando que eu não estou mais usando o obsoleto `date()`.

---

## ✨ Exemplo Real Aplicado

O último bloco de código é um exemplo de **processamento de dados brutos** de um cliente. Ele demonstra a aplicação prática de múltiplas funções juntas para:

1.  **Limpar e Formatar** dados de nome e e-mail (`trim`, `strtolower`, `ucwords`).
2.  **Calcular a Idade** utilizando a classe `DateTime` (`createFromFormat`, `diff`).
3.  **Processar Estatísticas de Compras** (Total de itens, soma, média, maior e menor compra) utilizando `explode`, `count`, `array_sum`, `max`, `min` e `number_format`.

> **Foco Profissional:** Este é um exercício de **higiene de dados** (data cleaning) e **lógica de negócios** (business logic) em um ambiente controlado, um pilar fundamental em qualquer aplicação.

---

## 👨‍💻 Sobre o Desenvolvedor

Olá! Eu sou o Arthur.

Sou um desenvolvedor **iniciante** focado em adquirir a *expertise* para construir soluções robustas. Este projeto representa um marco inicial, focado na **solidez dos fundamentos**, e é parte da minha preparação para entrar no mercado de trabalho. Meu objetivo é transformar estes pequenos *scripts* em aplicações complexas e, quem sabe, *dominar o mundo* (ou pelo menos o próximo projeto).

* **Linguagem Principal:** PHP (com ênfase em **aprendizado contínuo**).
* **Próxima Fase:** Mover estes conceitos para um *framework* moderno (tipo Laravel ou Symfony) e encarar o banco de dados.
