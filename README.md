# 🔐 Gerador de Token com Expiração

Projeto em PHP que gera um token seguro com tempo de expiração de 10 minutos, ideal para sistemas de autenticação ou redefinição de senha.

## 🚀 Tecnologias
- PHP
- MySQL
- HTML/CSS simples

## 📁 Estrutura
- `index.php`: interface simples
- `gerar.php`: gera token e armazena no banco
- `validar.php`: verifica se o token ainda é válido
- `Conn.php`: conexão com banco MySQL
- `tokens.sql`: estrutura da tabela

## 📌 Como usar

1. Importe `tokens.sql` no seu MySQL
2. Edite os dados de conexão no `Conn.php` (usuário/senha)
3. Acesse `index.php` para gerar tokens
4. Valide acessando o link gerado
