CREATE TABLE users
(
    id         serial primary key,
    email      varchar(60)  not null unique,
    first_name varchar(255) not null,
    last_name  varchar(255) not null,
)