INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name	
	,gender
	,hire_date
)
VALUES 
(
	500000
	, DATE(19961123)
	,'DH'
	,'Lee'	
	,'M'
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500000;

ROLLBACK;

SELECT @@autocommit;

INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name	
	,gender
	,hire_date
)
VALUES 
(
	500002
	,DATE(19950704)
	,'BongJeong'
	,'Kwon'	
	,'F'
	,NOW()
);