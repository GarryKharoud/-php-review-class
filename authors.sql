Create database comp_1006;
use comp_1006;

create table authors(
	id INT not null auto_increment primary key,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email varchar(100) not null,
    date_of_birth date not null,
    profile varchar(200) null
);