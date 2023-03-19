CREATE DATABASE test_1;

USE test_1;

-- employees

CREATE TABLE employees (
	emp_no INT(11) NOT NULL
	, birth_date DATE
	, first_name VARCHAR(14) NOT NULL
	, last_name VARCHAR(16) NOT NULL
	, gender ENUM('M', 'F')
	, hire_date DATE NOT NULL
	, CONSTRAINT PK_EMPLOYEES_emp_no PRIMARY KEY(emp_no) 
)
;

SELECT * FROM employees;

-- salaries

CREATE TABLE salaries (
	emp_no INT(11) NOT NULL
	, salary INT(11)
	, from_date DATE NOT NULL
	, to_date DATE 
	, CONSTRAINT PK_SALARIES_GROUP PRIMARY KEY(emp_no, from_date) 
)
;

ALTER TABLE salaries ADD INDEX emp_no(emp_no);

ALTER TABLE salaries 
ADD FOREIGN KEY(emp_no) 
REFERENCES employees (emp_no);

SELECT * FROM salaries;

-- titles

CREATE TABLE titles (
	emp_no INT(11) NOT NULL
	, title VARCHAR(50) NOT NULL
	, from_date DATE NOT NULL
	, to_date DATE 
	, CONSTRAINT PK_TITLES_GROUP PRIMARY KEY(emp_no, title, from_date) 
)
;

ALTER TABLE titles ADD INDEX emp_no(emp_no);

ALTER TABLE titles 
ADD FOREIGN KEY(emp_no) 
REFERENCES employees (emp_no);

SELECT * FROM titles;

-- departments

CREATE TABLE departments (
	dept_no CHAR(4) NOT NULL
	, dept_name VARCHAR(40)
	, CONSTRAINT PK_DEPARTMENTS PRIMARY KEY(dept_no) 
)
;

ALTER TABLE departments ADD INDEX dept_name(dept_name);

-- dept_emp

CREATE TABLE dept_emp (
	emp_no INT(11)
	, dept_no CHAR(4)
	, from_date DATE
	, to_date DATE
	, CONSTRAINT PK_DEPT_EMP_GROUP PRIMARY KEY(emp_no, dept_no) 
)
;

ALTER TABLE dept_emp ADD INDEX emp_no(emp_no);
ALTER TABLE dept_emp ADD INDEX dept_no(dept_no);

ALTER TABLE dept_emp 
ADD FOREIGN KEY(dept_no) 
REFERENCES departments (dept_no) 
;
ALTER TABLE dept_emp 
ADD FOREIGN KEY(emp_no) 
REFERENCES employees (emp_no)
;

-- dept_manager

CREATE TABLE dept_manager (
	dept_no CHAR(4)
	, emp_no INT(11)
	, from_date DATE
	, to_date DATE
	, CONSTRAINT PK_dept_manager_GROUP PRIMARY KEY(dept_no, emp_no) 
)
;

ALTER TABLE dept_manager ADD INDEX emp_no(emp_no);
ALTER TABLE dept_manager ADD INDEX dept_no(dept_no);

ALTER TABLE dept_manager 
ADD FOREIGN KEY(emp_no) 
REFERENCES employees (emp_no)
;
ALTER TABLE dept_manager 
ADD FOREIGN KEY(dept_no) 
REFERENCES departments (dept_no)
;


COMMIT;