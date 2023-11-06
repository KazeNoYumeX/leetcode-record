# SQL Schema
Create table If Not Exists Users
(
    user_id   int,
    user_name varchar(20)
);

Create table If Not Exists Register
(
    contest_id int,
    user_id    int
);

Truncate table Users;

insert into Users (user_id, user_name)
values ('6', 'Alice');

insert into Users (user_id, user_name)
values ('2', 'Bob');

insert into Users (user_id, user_name)
values ('7', 'Alex');

Truncate table Register;

insert into Register (contest_id, user_id)
values ('215', '6');

insert into Register (contest_id, user_id)
values ('209', '2');

insert into Register (contest_id, user_id)
values ('208', '2');

insert into Register (contest_id, user_id)
values ('210', '6');

insert into Register (contest_id, user_id)
values ('208', '6');

insert into Register (contest_id, user_id)
values ('209', '7');

insert into Register (contest_id, user_id)
values ('209', '6');

insert into Register (contest_id, user_id)
values ('215', '7');

insert into Register (contest_id, user_id)
values ('208', '7');

insert into Register (contest_id, user_id)
values ('210', '2');

insert into Register (contest_id, user_id)
values ('207', '2');

insert into Register (contest_id, user_id)
values ('210', '7');

# Solution
select contest_id, round(count(user_id) / (select count(user_id) from Users) * 100, 2) as percentage
from Register
group by contest_id
order by percentage desc, contest_id;
