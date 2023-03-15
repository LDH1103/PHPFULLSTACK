-- 1번
INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name	
	,gender
	,hire_date
	)
VALUES (
	500001
	,DATE(19961123)
	,'DongHo'
	,'Lee'	
	,'M'
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500001;

-- 2번
-- 월급
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES (
	500001
	,10000
	,DATE(19961123)
	,DATE(99990101)
)

SELECT *
FROM salaries
WHERE emp_no = 500001;

-- 직책
INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500001
	,'Engineer'
	,DATE(19961123)
	,NOW()
)

UPDATE titles
SET to_date  = DATE(99990101)
WHERE emp_no = 500001;

SELECT *
FROM titles
WHERE emp_no = 500001;

-- 소속부서
INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES (
	500001
	,'d009'
	,DATE(19961123)
	,DATE(99990101)
);

UPDATE dept_emp
SET	from_date = DATE(20230315)
WHERE emp_no = 500001 
	AND dept_no = 'd009';

SELECT *
FROM dept_emp
WHERE emp_no = 500001;

-- 짝꿍
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES (
	500002
	,10000
	,DATE(19950704)
	,DATE(99990101)
)

SELECT *
FROM salaries
WHERE emp_no = 500002;

-- 직책
INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500002
	,'Senior Engineer'
	,NOW()
	,DATE(99990101)
)

SELECT *
FROM titles
WHERE emp_no = 500002;

-- 소속부서
UPDATE dept_emp
SET
	dept_no = 'd009'
	from_date = DATE(20230415)
	to_date = DATE(99990101)
WHERE emp_no = 500002;

SELECT *
FROM dept_emp
WHERE emp_no = 500002;

-- 5번
-- DELETE
FROM	employees
WHERE emp_no = 500002;

ROLLBACK;
-- 6번 

UPDATE dept_manager
SET to_date = DATE(20230314)
WHERE emp_no = 111939;

INSERT INTO dept_manager(
	dept_no
	,emp_no
	,from_date
	,to_date
)
VALUES (
	'd009'
	,500001
	,DATE(20230315)
	,DATE(99990101)
)

SELECT *
FROM dept_manager
WHERE dept_no = 'd009'
ORDER BY emp_no DESC;


-- 8번 
SELECT 
	emp_no
	,first_name
FROM employees
WHERE emp_no = (
						SELECT emp_no
						FROM salaries
						WHERE salary = (
												SELECT MAX(salary)
												FROM salaries
					)
)

SELECT 
	emp_no
	,first_name
FROM employees
WHERE emp_no = (
						SELECT emp_no
						FROM salaries
						WHERE salary = (
												SELECT MIN(salary)
												FROM salaries
					)
)

SELECT 
	emp_no
	,first_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM salaries 
						WHERE salary = (SELECT MAX(salary) FROM salaries) 
							OR salary = (SELECT MIN(salary) FROM salaries) 
						)
;

SELECT
	emp_no
	,first_name
FROM employees
WHERE emp_no = ( 
						SELECT emp_no
						FROM salaries
						ORDER BY salary
						LIMIT 1
						)
	OR emp_no =	( 
						SELECT emp_no
						FROM salaries
						ORDER BY salary DESC
						LIMIT 1
						);
-- 9번 
SELECT AVG(salary)
FROM salaries;

-- 10번
SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;