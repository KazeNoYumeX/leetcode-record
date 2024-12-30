# SQL Schema
Create table If Not Exists Seat
(
    id      int,
    student varchar(255)
);

Truncate table Seat;

insert into Seat (id, student)
values ('1', 'Abbot');

insert into Seat (id, student)
values ('2', 'Doris');

insert into Seat (id, student)
values ('3', 'Emerson');

insert into Seat (id, student)
values ('4', 'Green');

insert into Seat (id, student)
values ('5', 'Jeames');

# Solution
select row_number() over () as id, student
from Seat
order by if(mod(id, 2) = 0, id - 1, id + 1);
