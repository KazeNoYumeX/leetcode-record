# SQL Schema
Create table If Not Exists Students
(
    student_id   int,
    student_name varchar(20)
);

Create table If Not Exists Subjects
(
    subject_name varchar(20)
);

Create table If Not Exists Examinations
(
    student_id   int,
    subject_name varchar(20)
);

Truncate table Students;

insert into Students (student_id, student_name)
values ('1', 'Alice');

insert into Students (student_id, student_name)
values ('2', 'Bob');

insert into Students (student_id, student_name)
values ('13', 'John');

insert into Students (student_id, student_name)
values ('6', 'Alex');

Truncate table Subjects;

insert into Subjects (subject_name)
values ('Math');

insert into Subjects (subject_name)
values ('Physics');

insert into Subjects (subject_name)
values ('Programming');

Truncate table Examinations;

insert into Examinations (student_id, subject_name)
values ('1', 'Math');

insert into Examinations (student_id, subject_name)
values ('1', 'Physics');

insert into Examinations (student_id, subject_name)
values ('1', 'Programming');

insert into Examinations (student_id, subject_name)
values ('2', 'Programming');

insert into Examinations (student_id, subject_name)
values ('1', 'Physics');

insert into Examinations (student_id, subject_name)
values ('1', 'Math');

insert into Examinations (student_id, subject_name)
values ('13', 'Math');

insert into Examinations (student_id, subject_name)
values ('13', 'Programming');

insert into Examinations (student_id, subject_name)
values ('13', 'Physics');

insert into Examinations (student_id, subject_name)
values ('2', 'Math');

insert into Examinations (student_id, subject_name)
values ('1', 'Math');

# Solution
select Students.student_id,
       student_name,
       Subjects.subject_name,
       count(Examinations.student_id) as attended_exams
from Students
         join Subjects
         left join Examinations on Students.student_id = Examinations.student_id and
                                   Subjects.subject_name = Examinations.subject_name
group by Students.student_id, student_name, Subjects.subject_name
order by Students.student_id;
