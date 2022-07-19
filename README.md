## Vocation
Praction with using outer component(package) "Phinx" and it's migrations, seeders.

## Description
Project can create & seed tables: users, articles. Inuse DBMS PostgreSQL. Config file (phinx.php)
is tuned to use that DBMS.

To migrate tables used command:
```
 vendor/bin/phinx migrate -e
```

To seed tables was used commands:
```
vendor/bin/phinx seed:run -s UserSeeder
vendor/bin/phinx seed:run -s ArticleSeeder
```