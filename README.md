# Домашка по ООП

Пока делал вообще не понял нафига нам два класса News и Announce, которые абсолютно идеинтичные по полям (`link` и `author` это один и тот же `source`) и методам, можно было в классе Publication реализовать все три метода.

#### Должны быть уже созданы:
- db `my_db`
- user `newuser` password `password`

### SQL для создания таблиц
```
create table news (
  id int not null auto_increment primary key,
  title varchar(100),
  `text` text,
  link varchar(100),
  created_at datetime,
  updated_at datetime
)
create table announces (
  id int not null auto_increment primary key,
  title varchar(100),
  `text` text,
  author varchar(100),
  created_at datetime,
  updated_at datetime
)
```