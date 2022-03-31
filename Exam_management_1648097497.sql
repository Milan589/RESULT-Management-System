CREATE TABLE course(
    course_id INT(10) AUTO_INCREMENT,
    course_name VARCHAR(145),
    course_description VARCHAR(145),
    CONSTRAINT PK_Course PRIMARY KEY (course_id)
    );
    
CREATE TABLE college(
    college_id INT(10) AUTO_INCREMENT,
    course_id INT(10),
    college_name VARCHAR(145),
    estd_date DATE,
    CONSTRAINT PK_college PRIMARY KEY (college_id)
    );
    
CREATE TABLE teacher(
    teacher_id INT(10) AUTO_INCREMENT,
    college_id INT(10),
	teacher_fname VARCHAR(50),
	teacher_lname VARCHAR(50),
    teacher_username VARCHAR(145),
    teacher_password VARCHAR(512) NOT NULL,
    teacher_phone VARCHAR(15),
    teacher_address VARCHAR(150),
    teacher_is_admin VARCHAR(1),
	teacher_year INT(10), 
	teacher_dob DATE,
    CONSTRAINT PK_teacher PRIMARY KEY (teacher_id),
    CONSTRAINT FKteacher_college 
    FOREIGN KEY (college_id) REFERENCES college(college_id)
    );

CREATE TABLE subjects(
    subject_id INT(10) AUTO_INCREMENT,
    teacher_id INT(10),
    course_id INT(10),
    subject_name VARCHAR(45) NOT NULL,
    fullmarks INT(10),
    passmarks INT(10) NOT NULL,
    CONSTRAINT PK_subject PRIMARY KEY (subject_id),
    CONSTRAINT FKsubjects_teacher FOREIGN KEY(teacher_id) REFERENCES teacher(teacher_id),
    CONSTRAINT FKsubjects_course FOREIGN KEY(course_id) REFERENCES course(course_id)
    );
    
CREATE TABLE student(
    student_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    college_id INT(10),
    course_id INT(10),
    student_fname VARCHAR(50),
    student_lname VARCHAR(50),	
    student_username VARCHAR(145),
    student_password VARCHAR(512) NOT NULL,
    student_phone VARCHAR(15),
    student_address VARCHAR(150),
	student_year INT(10),
	student_dob DATE,
    CONSTRAINT FKstudent_college FOREIGN KEY(college_id) REFERENCES college(college_id) ,
    CONSTRAINT FKstudent_course FOREIGN KEY(course_id) REFERENCES course(course_id)
    );

CREATE TABLE exam(
    exam_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    subject_id INT(10),
    exam_date DATE,
    exam_year INT,
    CONSTRAINT FKexam_subject FOREIGN KEY(subject_id) REFERENCES subjects(subject_id)
    );
    
CREATE TABLE RESULT(
    result_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    student_id INT(10),
    exam_id INT(10),
    marks_obtained INT,
    grade VARCHAR(2),
    CONSTRAINT FKresult_student FOREIGN KEY(student_id) REFERENCES student(student_id),
    CONSTRAINT FKresult_exam FOREIGN KEY(exam_id) REFERENCES exam(exam_id)
    );


INSERT INTO course (course_id,course_name,course_description)
    VALUES (1,'BIM','Bachelor of Information Management');
INSERT INTO course (course_id,course_name,course_description)
    VALUES (2,'BSc.CSIT','Bachelors of Science in Computer Science and Information Technology');
INSERT INTO course (course_id,course_name,course_description)
    VALUES (3,'BCA','Bachelors of Computer Application');
INSERT INTO course (course_id,course_name,course_description)
    VALUES (4,'BSW','Bachelors of Social Work');
INSERT INTO course (course_id,course_name,course_description)
    VALUES (5,'BBM','Bachelors of Business Management');
    


INSERT INTO college 
    VALUES (1,2,'Orchid International College','1-jan-2010');
    
    

INSERT INTO teacher
        VALUES(101,1,'bijay_mishra','@@bijay@@',9851023456,'kathmandu','n');
INSERT INTO teacher
        VALUES(102,1,'suman_koirala','@@suman@@',9851023457,'kathmandu','n');
INSERT INTO teacher
        VALUES(103,1,'shikha_sharma','@@shikha@@',9851023458,'kathmandu','n');
INSERT INTO teacher
        VALUES(104,1,'nipun_thapa','@@nipun@@',9851023459,'kathmandu','n');
INSERT INTO teacher
        VALUES(105,1,'sherin_joshi','@@sherin@@',9851023460,'kathmandu','y');
INSERT INTO teacher
        VALUES(106,1,'thaneshwor_paneru','@@thaneshwor@@',9851023461,'kathmandu','n');


INSERT INTO subjects
        VALUES(1,101,2,'SAD',60,30);
INSERT INTO subjects
        VALUES(2,102,2,'Multimedia',60,30);
INSERT INTO subjects
        VALUES(3,103,2,'Web Technology',60,30);
INSERT INTO subjects
        VALUES(4,104,2,'Simulation and Modeling',60,30);
INSERT INTO subjects
        VALUES(5,105,2,'DAA',60,30);
INSERT INTO subjects
        VALUES(6,106,2,'Cryptography',60,30);
        
--SELECT T.teacher_username FROM teacher T INNER JOIN subject S
--ON T.teacher_id = S.teacher_id where s.subject_name='SAD';

insert into student
    values(201,1,2,'aashish_pokharel','@@aashish@@',9841235675,'Biratnagar');
insert into student
    values(202,1,2,'milan_chaudhary','@@milan@@',9841235676,'Dang');
insert into student
    values(203,1,2,'shree_ghimire','@@shree@@',9841235677,'Kathmandu');
    select * from student;
    
    
insert into exam
    values(1,1,'First','2-dec-2021','10-dec-2021');
insert into exam
    values(2,2,'First','3-dec-2021','10-dec-2021');
insert into exam
    values(3,3,'First','4-dec-2021','10-dec-2021');
insert into exam
    values(4,4,'First','5-dec-2021','10-dec-2021');
insert into exam
    values(5,5,'First','6-dec-2021','10-dec-2021');
insert into exam
    values(6,6,'First','7-dec-2021','10-dec-2021');
insert into exam
    values(7,1,'Second','3-feb-2022','10-feb-2022');
insert into exam
    values(8,2,'Second','4-feb-2022','10-feb-2022');
insert into exam
    values(9,3,'Second','5-feb-2022','10-feb-2022');
insert into exam
    values(10,4,'Second','6-feb-2022','10-feb-2022');
insert into exam
    values(11,5,'Second','7-feb-2022','10-feb-2022');
insert into exam
    values(12,6,'Second','8-feb-2022','10-feb-2022');
--select terminal,S.subject_name,S.fullmarks from subject S inner join exam E on
--    S.subject_id=E.subject_id;

insert into result
    values(1,201,38,'B+');
insert into result
    values(2,201,30,'B');
insert into result
    values(3,201,48,'A');
insert into result
    values(4,201,35,'B+');
insert into result
    values(5,201,55,'A+');
insert into result
    values(6,201,20,'F');
--delete
delete from result where student_id=201;
--6 rows deleted
insert into result
    values(1,202,38,'B+');
insert into result
    values(2,202,30,'B');
insert into result
    values(3,202,48,'A');
insert into result
    values(4,202,35,'B+');
insert into result
    values(5,202,55,'A+');
insert into result
    values(6,202,40,'A');
    
select * from result;
    
            
    
        
    



        
    

    
