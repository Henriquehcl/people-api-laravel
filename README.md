<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
    <h1>
        Api de cadastro de pessoas desenvolvido em Laravel com MySQL
    </h1>
</p>

### Use o Composer para fazer a instalação de todas as dependências


#### todos os endpoints são:

```
GET    = people/
GET ID = people/ID
PATCH  = people/ID
DELETE = people/ID

```


### Comando para criar a tabela no MySQL
```
SQL
CREATE TABLE people(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
people_name VARCHAR(100) NOT NULL,
email VARCHAR(50),
fone VARCHAR(20),
address VARCHAR(100),
country VARCHAR(50),
state VARCHAR(80),
city VARCHAR(50),
updated_at TIMESTAMP,
created_at TIMESTAMP
) ENGINE = InnoDB;


```

### Arquivo ".env" é onde fica configurado as informações de acesso ao DB no MySQL
####Exemplo de como é a configuração no arquivo ".env"

```

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meuBancoDados
DB_USERNAME=root
DB_PASSWORD=1234

```
