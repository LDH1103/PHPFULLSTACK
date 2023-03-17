CREATE OR REPLACE VIEW test_view
AS 
	SELECT 
		emp.emp_no
		, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
		, dep.dept_name
	FROM employees emp
		INNER JOIN dept_emp dept
			ON emp.emp_no = dept.emp_no
		INNER JOIN departments dep
			ON dept.dept_no = dep.dept_no
	WHERE dept.to_date > NOW()
	ORDER BY emp.emp_no
;

SELECT * FROM test_view;