# SQL Schema
Create table If Not Exists Employee
(
    id         int,
    name       varchar(255),
    department varchar(255),
    managerId  int
);

Truncate table Employee;

insert into Employee (id, name, department, managerId)
values ('101', 'John', 'A', 'None');

insert into Employee (id, name, department, managerId)
values ('102', 'Dan', 'A', '101');

insert into Employee (id, name, department, managerId)
values ('103', 'James', 'A', '101');

insert into Employee (id, name, department, managerId)
values ('104', 'Amy', 'A', '101');

insert into Employee (id, name, department, managerId)
values ('105', 'Anne', 'A', '101');

insert into Employee (id, name, department, managerId)
values ('106', 'Ron', 'B', '101');

# Solution
select e1.name
from Employee as e1
         inner join Employee as e2 on e1.id = e2.managerId
group by e1.name, e2.managerId
having count(e1.name) >= 5;
