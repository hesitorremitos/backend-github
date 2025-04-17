

create table products(
    id int unsigned primary key auto_increment,
    name varchar(50),
    description varchar(255),
    created_at timestamp default current_timestamp
)