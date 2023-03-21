-- student_info
CREATE TABLE student_info (
	stu_no INT NOT NULL PRIMARY KEY
	, stu_birth DATE NOT NULL
	, stu_name VARCHAR(30) NOT NULL
	, stu_sex ENUM('M', 'F') NULL
	, stu_addr VARCHAR(100) NULL
	, stu_callno CHAR(11) NOT NULL
	, stu_ent_date DATE NOT NULL
	, stu_grad_date DATE NULL
	, stu_status ENUM('0', '1', '2', '3') NOT NULL
);

SELECT * FROM student_info;



-- grade
CREATE TABLE grade (
	sub_no INT NOT NULL
	, stu_no INT NOT NULL 
	, grade_score INT NOT NULL
	, grade_rank INT NOT NULL
	, grade_comp_date DATE NOT NULL
	, PRIMARY KEY(sub_no, stu_no)
);

SELECT * FROM grade;



-- subject
CREATE TABLE subject (
	sub_no INT NOT NULL PRIMARY KEY
	, sub_name VARCHAR(200) NOT NULL
	, sub_personnel INT NOT NULL
	, sub_sem ENUM('0', '1', '2', '3') NOT NULL
	, sub_room INT NOT NULL
	, sub_start_time TIME NOT NULL
	, sub_end_time TIME NOT NULL
	, sub_essential ENUM('Y', 'N') NOT NULL
	, book_no INT NOT NULL
	, pro_no INT NOT NULL
);
	
SELECT * FROM subject;



-- professor
CREATE TABLE professor (
	pro_no INT NOT NULL PRIMARY KEY
	, pro_name VARCHAR(30) NOT NULL
	, pro_deg_no INT NOT NULL
	, pro_sex ENUM('M', 'F') NULL
	, pro_title VARCHAR(10) NOT NULL
	, pro_email VARCHAR(50) NULL
	, pro_lab_no INT NOT NULL
	, pro_birth DATE NOT NULL
	, pro_hire_date DATE NOT NULL
);

SELECT * FROM professor;



-- book_info
CREATE TABLE book_info (
	book_no INT NOT NULL PRIMARY KEY
	, book_name VARCHAR(200) NOT NULL
);

SELECT * FROM book_info;



COMMIT;