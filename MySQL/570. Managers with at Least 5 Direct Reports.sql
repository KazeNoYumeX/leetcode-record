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
values ('101', 'John', 'A', NULL);

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
select e2.name
from Employee as e1
         left join Employee as e2 on e1.managerId = e2.id
group by e2.id, e2.name
having count(e2.id) >= 5;
