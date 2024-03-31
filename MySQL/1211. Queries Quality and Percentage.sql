# SQL Schema
Create table If Not Exists Queries
(
    query_name varchar(30),
    result     varchar(50),
    position   int,
    rating     int
);

Truncate table Queries;

insert into Queries (query_name, result, position, rating)
values ('Dog', 'Golden Retriever', '1', '5');

insert into Queries (query_name, result, position, rating)
values ('Dog', 'German Shepherd', '2', '5');

insert into Queries (query_name, result, position, rating)
values ('Dog', 'Mule', '200', '1');

insert into Queries (query_name, result, position, rating)
values ('Cat', 'Shirazi', '5', '2');

insert into Queries (query_name, result, position, rating)
values ('Cat', 'Siamese', '3', '3');

insert into Queries (query_name, result, position, rating)
values ('Cat', 'Sphynx', '7', '4');

# Solution
select query_name,
       round(avg(rating / position), 2) as quality,
       round(avg(rating < 3) * 100, 2)  as poor_query_percentage
from Queries
where query_name is not null
group by query_name;
