# SQL Schema
Create table If Not Exists Employee
(
    id     int,
    salary int
);

Truncate table Employee;

insert into Employee (id, salary)
values ('1', '100');

insert into Employee (id, salary)
values ('2', '200');

insert into Employee (id, salary)
values ('3', '300');

# Solution
select max(salary) as SecondHighestSalary
from Employee
where salary < (select max(salary) from Employee);
