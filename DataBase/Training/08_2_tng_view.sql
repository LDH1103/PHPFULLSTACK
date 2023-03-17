CREATE OR REPLACE VIEW test_view
AS 
	SELECT 
		emp.emp_no '사원 번호'
		, CONCAT(emp.last_name, ' ', emp.first_name) fullname
		, dep.dept_name '소속 부서 명'
	FROM employees emp
		INNER JOIN dept_emp dept
			ON emp.emp_no = dept.emp_no
		INNER JOIN departments dep
			ON dept.dept_no = dep.dept_no
	WHERE dept.to_date > NOW()
	ORDER BY emp.emp_no
;

SELECT * FROM test_view;