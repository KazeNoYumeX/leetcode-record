# SQL Schema
Create table If Not Exists Employees
(
    employee_id int,
    name        varchar(20),
    reports_to  int null,
    age         int
);

Truncate table Employees;

insert into Employees (employee_id, name, reports_to, age)
values ('9', 'Hercy', null, '43');

insert into Employees (employee_id, name, reports_to, age)
values ('6', 'Alice', '9', '41');

insert into Employees (employee_id, name, reports_to, age)
values ('4', 'Bob', '9', '36');

insert into Employees (employee_id, name, reports_to, age)
values ('2', 'Winston', null, '37');

# Solution
select managers.employee_id,
       managers.name,
       count(managers.employee_id) as reports_count,
       round(avg(Employees.age))   as average_age
from Employees managers
         left join Employees on managers.employee_id = Employees.reports_to
where Employees.reports_to is not null
group by managers.employee_id, managers.name
order by managers.employee_id;
