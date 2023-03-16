-- 사원의 사원번호, 풀네임, 직책명을 출력
SELECT 
	emp.emp_no
	, CONCAT(emp.first_name, ' ', emp.last_name) fullname
	, ti.title
FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
;

-- 사원의 사원번호, 성별, 현재 월급을 출력
SELECT 
	emp.emp_no
	, emp.gender
	, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date > NOW()
;	
	
-- 10010사원의 풀네임, 과거부터 현재까지 월급 이력을 출력
SELECT
	CONCAT(emp.first_name, ' ', emp.last_name) fullname
	, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010
;


-- 사원의 사원번호, 풀네임, 소속부서명을 출력
SELECT
	emp.emp_no
	, CONCAT(emp.first_name, ' ', emp.last_name) fullname
	, dep.dept_name
FROM employees emp
	INNER JOIN dept_emp dept
		ON emp.emp_no = dept.emp_no
	INNER JOIN departments dep
		ON dept.dept_no = dep.dept_no
WHERE dept.to_date > NOW()
ORDER BY emp.emp_no
;


-- 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력
SELECT
	emp.emp_no
	, CONCAT(emp.first_name, ' ', emp.last_name) fullname
	, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
ORDER BY sal.salary DESC
LIMIT 10
;


-- 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력
SELECT
	dep.dept_name
	, CONCAT(emp.first_name, ' ', emp.last_name) fullname
	, emp.hire_date
FROM employees emp
	INNER JOIN dept_manager dept_m
		ON emp.emp_no = dept_m.emp_no
	INNER JOIN departments dep
		ON dept_m.dept_no = dep.dept_no
WHERE dept_m.to_date > NOW()
;


-- 현재 직책이 "Staff"인 사원의 현재 평균 월급을 출력
SELECT
	sal.emp_no
	, AVG(sal.salary) avg_sal
FROM titles ti
	INNER JOIN salaries sal
		ON sal.emp_no = ti.emp_no
WHERE ti.title = 'Staff'
;

-- 부서장직을 역임했던 모든 사원의 풀네임과 입사일 사번 부서번호를 출력
SELECT
	CONCAT(emp.first_name, ' ', emp.last_name) fullname
	, emp.hire_date
	, emp.emp_no
	, dept_m.dept_no
FROM employees emp
	INNER JOIN dept_manager dept_m
		ON emp.emp_no = dept_m.emp_no
;

-- 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력
SELECT 
	ti.title
	, TRUNCATE(AVG(sal.salary), 0) AS avg_sal
FROM salaries sal
	INNER JOIN titles ti
		ON sal.emp_no = ti.emp_no
WHERE 
	ti.to_date > NOW()
	AND sal.to_date > NOW()
GROUP BY ti.title
HAVING avg_sal >= 60000
ORDER BY avg_sal DESC
;

-- 성별이 여자인 사원들의 직급별 사원수를 출력
SELECT
	ti.title
	, COUNT(*)
FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
WHERE emp.gender = 'F'
	AND ti.to_date > NOW()
GROUP BY ti.title
;