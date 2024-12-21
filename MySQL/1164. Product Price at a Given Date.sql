# SQL Schema
Create table If Not Exists Products
(
    product_id  int,
    new_price   int,
    change_date date
);

Truncate table Products;

insert into Products (product_id, new_price, change_date)
values ('1', '20', '2019-08-14');

insert into Products (product_id, new_price, change_date)
values ('2', '50', '2019-08-14');

insert into Products (product_id, new_price, change_date)
values ('1', '30', '2019-08-15');

insert into Products (product_id, new_price, change_date)
values ('1', '35', '2019-08-16');

insert into Products (product_id, new_price, change_date)
values ('2', '65', '2019-08-17');

insert into Products (product_id, new_price, change_date)
values ('3', '20', '2019-08-18');

# Solution
select distinct product_id, 10 as price
from Products
where product_id not in (select distinct product_id from Products where change_date <= '2019-08-16')
union
select product_id, new_price as price
from Products
where (product_id, change_date) in
      (select product_id, max(change_date) as date from Products where change_date <= '2019-08-16' group by product_id)
order by product_id;
