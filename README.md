# Projeto Delícias da Sisi

Este é um projeto de site com dashboard de vendas usando PHP e MySQL.

## Observação
O arquivo `config/config.php`, que contém a senha de acesso ao banco de dados, está oculto por segurança (.gitignore).  
Se quiser rodar localmente, crie um arquivo com esse conteúdo:

```php
<?php
$host = "localhost";
$usuario = "root";
$senha = "SUA_SENHA_AQUI";
$banco = "deliciasdasisi";
?>