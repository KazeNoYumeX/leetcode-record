# SQL Schema
Create table If Not Exists Delivery
(
    delivery_id                 int,
    customer_id                 int,
    order_date                  date,
    customer_pref_delivery_date date
);

Truncate table Delivery;

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('1', '1', '2019-08-01', '2019-08-02');

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('2', '2', '2019-08-02', '2019-08-02');

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('3', '1', '2019-08-11', '2019-08-12');

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('4', '3', '2019-08-24', '2019-08-24');

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('5', '3', '2019-08-21', '2019-08-22');

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('6', '2', '2019-08-11', '2019-08-13');

insert into Delivery (delivery_id, customer_id, order_date, customer_pref_delivery_date)
values ('7', '4', '2019-08-09', '2019-08-09');

# Solution
select round(sum(order_date) / count(customer_id) * 100, 2) as immediate_percentage
from (select customer_id, if(min(order_date) = min(customer_pref_delivery_date), 1, 0) as order_date
      from Delivery
      group by customer_id) as first_orders;
