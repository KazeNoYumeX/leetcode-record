# SQL Schema
Create table If Not Exists Employee
(
    employee_id   int,
    department_id int,
    primary_flag  ENUM ('Y','N')
);

Truncate table Employee;

insert into Employee (employee_id, department_id, primary_flag)
values ('1', '1', 'N');

insert into Employee (employee_id, department_id, primary_flag)
values ('2', '1', 'Y');

insert into Employee (employee_id, department_id, primary_flag)
values ('2', '2', 'N');

insert into Employee (employee_id, department_id, primary_flag)
values ('3', '3', 'N');

insert into Employee (employee_id, department_id, primary_flag)
values ('4', '2', 'N');

insert into Employee (employee_id, department_id, primary_flag)
values ('4', '3', 'Y');

insert into Employee (employee_id, department_id, primary_flag)
values ('4', '4', 'N');

# Solution
select employee_id, department_id
from Employee
where primary_flag = 'Y'
union
select employee_id, department_id
from Employee
group by employee_id
having count(employee_id) = 1;
