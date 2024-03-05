create or replace database Website;
use Website;

create Table Clients(
    ClientId int not null auto_increment primary key,
    ClientName varchar(50)
);

insert into Clients(ClientName) values('Client1');
insert into Clients(ClientName) values('Client2');
