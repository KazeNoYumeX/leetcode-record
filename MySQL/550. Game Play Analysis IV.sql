# SQL Schema
Create table If Not Exists Activity
(
    player_id    int,
    device_id    int,
    event_date   date,
    games_played int
);

Truncate table Activity;

insert into Activity (player_id, device_id, event_date, games_played)
values ('1', '2', '2016-03-01', '5');

insert into Activity (player_id, device_id, event_date, games_played)
values ('1', '2', '2016-03-02', '6');

insert into Activity (player_id, device_id, event_date, games_played)
values ('2', '3', '2017-06-25', '1');

insert into Activity (player_id, device_id, event_date, games_played)
values ('3', '1', '2016-03-02', '0');

insert into Activity (player_id, device_id, event_date, games_played)
values ('3', '4', '2018-07-03', '5');

# Solution
select round(count(player_id) / (select count(distinct player_id) from Activity), 2) as fraction
from Activity
where (player_id, event_date) in (select player_id, date_add(min(event_date), interval 1 day) as first_logged_players
                                  from Activity
                                  group by player_id);
