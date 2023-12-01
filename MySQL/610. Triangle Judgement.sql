# SQL Schema
Create table If Not Exists Triangle
(
    x int,
    y int,
    z int
);

Truncate table Triangle;

insert into Triangle (x, y, z)
values ('13', '15', '30');

insert into Triangle (x, y, z)
values ('10', '20', '15');

# Solution
select x, y, z, if(x + y > z and y + z > x and z + x > y, 'Yes', 'No') as triangle
from Triangle;
