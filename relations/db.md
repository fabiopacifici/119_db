# Live DB Library

La libreria presta  le copie dei libri agli utenti. Un libro puó aver uno o piú generi e una copia puó avere una certa condizione (stato della copia del libro - rovionata, nuova, etc etc). Una copia puo essere prestata ad uno utente.

- ~~books~~
- ~~copies~~
- ~~users~~
- ~~loans~~
- ~~genres~~
- ~~conditions~~

DB_NAME: library

Table name: books

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- title | INDEX | VARCHAR(200) | NOTNULL
- author | VARCHAR(255) | NOTNULL | DEFAULT('N/A')
- year | YEAR | NULL
- plot | TEXT | NULL
- age_range | VARCHAR(5) | NULL

Table name: copies

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- book_id | FK
- condition_id |FK
- isbn | CHAR(13) | UNIQUE | NOTNULL
- publisher
- pages
- language

Table: conditions

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- description

Table: genres

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- description

Table name: users

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- name | VARCHAR(30) NOTNULL
- lastname |VARCHAR(40) NOTNULL
- address | VARCHAR(200) NOTNULL
- email | VARCHAR(255) NOTNULL

Table name: loans

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- copy_id | FK
- user_id |FK
- start_date
- end_date
  
Table name: book_genre

- id | INDEX | INT or BIGINT | PK |  NOTNULL | UNIQUE |AI (AUTO_INCREMENT)
- genre_id | FK
- book_id | FK
