# SQL Schema
Create table If Not Exists Movies
(
    movie_id int,
    title    varchar(30)
);

Create table If Not Exists Users
(
    user_id int,
    name    varchar(30)
);

Create table If Not Exists MovieRating
(
    movie_id   int,
    user_id    int,
    rating     int,
    created_at date
);

Truncate table Movies;

insert into Movies (movie_id, title)
values ('1', 'Avengers');

insert into Movies (movie_id, title)
values ('2', 'Frozen 2');

insert into Movies (movie_id, title)
values ('3', 'Joker');

Truncate table Users;

insert into Users (user_id, name)
values ('1', 'Daniel');

insert into Users (user_id, name)
values ('2', 'Monica');

insert into Users (user_id, name)
values ('3', 'Maria');

insert into Users (user_id, name)
values ('4', 'James');

Truncate table MovieRating;

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('1', '1', '3', '2020-01-12');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('1', '2', '4', '2020-02-11');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('1', '3', '2', '2020-02-12');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('1', '4', '1', '2020-01-01');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('2', '1', '5', '2020-02-17');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('2', '2', '2', '2020-02-01');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('2', '3', '2', '2020-03-01');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('3', '1', '3', '2020-02-22');

insert into MovieRating (movie_id, user_id, rating, created_at)
values ('3', '2', '4', '2020-02-25');

# Solution
(select name as results
 from MovieRating
          left join Users on MovieRating.user_id = Users.user_id
 group by name
 order by count(*) desc, name
 limit 1)
union all
(select title as results
 from MovieRating
          left join Movies on MovieRating.movie_id = Movies.movie_id
 where extract(year_month from created_at) = 202002
 group by title
 order by avg(rating) desc, title
 limit 1);
