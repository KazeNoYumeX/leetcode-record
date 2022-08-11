# SQL Schema
Create table World
(
    name       varchar(255),
    continent  varchar(255),
    area       int,
    population int,
    gdp        int
);

Truncate table World;

insert into World (name, continent, area, population, gdp)
values ('Afghanistan', 'Asia', '652230', '25500100', '20343000');

insert into World (name, continent, area, population, gdp)
values ('Albania', 'Europe', '28748', '2831741', '12960000');

insert into World (name, continent, area, population, gdp)
values ('Algeria', 'Africa', '2381741', '37100000', '188681000');

insert into World (name, continent, area, population, gdp)
values ('Andorra', 'Europe', '468', '78115', '3712000');

insert into World (name, continent, area, population, gdp)
values ('Angola', 'Africa', '1246700', '20609294', '100990000');

# Solution
SELECT name, population, area
FROM World
WHERE area >= 3000000
   OR population >= 25000000;