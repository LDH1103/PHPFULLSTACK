SELECT *
FROM dept_manager
WHERE dept_no = 
					(
						SELECT dept_no 
						FROM dept_manager
						WHERE emp_no = 110344
					);

SELECT *
FROM dept_manager
WHERE emp_no IN  
					(
						SELECT emp_no 
						FROM dept_manager
						WHERE dept_no = 'd009'
					);
					
SELECT *
FROM dept_manager
WHERE dept_no = ALL (
						SELECT dept_no 
						FROM dept_manager
						WHERE emp_no IN (110344, 111035)
					);
					
SELECT 
	emp_no
	, first_name
	, last_name
	, gender
FROM employees
WHERE emp_no IN (	
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no
						HAVING AVG(salary) >= 70000
					);
					
SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
	AND to_date >= NOW();
	
SELECT emp_no
	, last_name
FROM	employees
WHERE emp_no IN ( 
						SELECT emp_no
						FROM titles
						WHERE title = 'Senior Engineer'
						AND to_date >= NOW()
					)
ORDER BY last_name ASC;
