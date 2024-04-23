# Live DB Library

Imparare a modellizzare un'entità della realtà.
In questo esempio, modellizziamo una tabella per memorizzare le informazioni riguardanti i `libri` di una biblioteca.

DB_NAME: library

Table name: books

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- isbn | CHAR(13) | UNIQUE | NOTNULL
- title | INDEX | VARCHAR(200) | NOTNULL
- author | VARCHAR(255) | NOTNULL | DEFAULT('N/A')
- ~~?genre~~
- publisher | VARCHAR(100) | NULL
- plot | TEXT | NULL
- year | YEAR | NULL
- pages | SMALLINT | NULL
- language | VARCHAR(5) | NOTNULL
- is_available | TINYINT | NOTNULL | DEFAULT(1)
- cover_image | VARCHAR(255) | NULL | DEFAULT('<https://lorempicsum.com/myimage.jpg>')
- vote | TINYINT | NULL
- condition | VARCHAR(50) | NULL
- age_range | VARCHAR(5) | NULL
- format | VARCHAR(20) | NOTNULL
- position | VARCHAR(20) | NOTNULL
- note | TEXT | NULL

## Esempio tabella con nomi ok

✅
--------------------------------------------------------------------------------------

|   ID        |   title    | publisher    | pages       | notes                   |---------------------------------------------------------------------------------------
1              Il signore        test publiser   123        | libro con patacca di sugo
2              Ciao
3               X
~~4               harry potter~~
5               Learn Kubernetes
6
7               Learn js        | NULL        | NULL        | NULL
8               NA

## Esempio tabella con nomi colonne non idonei

❌
------------------------------------------------------------

|   ID        |   tt        | pbr | pg       | nts |-------------------------------------------------------------
1              Il signore degli anelli             ciao        2022-02-02
2              Ciao
3               X
