# SQL Schema
Create table If Not Exists Accounts
(
    account_id int,
    income     int
);

Truncate table Accounts;

insert into Accounts (account_id, income)
values ('3', '108939');

insert into Accounts (account_id, income)
values ('2', '12747');

insert into Accounts (account_id, income)
values ('8', '87709');

insert into Accounts (account_id, income)
values ('6', '91796');

# Solution
select "Low Salary" as category, sum(income < 20000) as accounts_count
from Accounts
union all
select "Average Salary" as category, sum(income between 20000 and 50000) as accounts_count
from Accounts
union all
select "High Salary" as category, sum(income > 50000) as accounts_count
from Accounts;
