-- 사원의 사원번호, 풀네임, 직책명을 출력
SELECT 
	emp.emp_no
	, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
	, ti.title
FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
WHERE ti.to_date >= NOW()
;

-- 사원의 사원번호, 성별, 현재 월급을 출력
SELECT 
	emp.emp_no
	, emp.gender
	, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()
;

-- 10010사원의 풀네임, 과거부터 현재까지 월급 이력을 출력
SELECT 
	CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
	, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010
;

-- 사원의 사원번호, 풀네임, 소속부서명을 출력
SELECT 
	emp.emp_no
	, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
	, dep.dept_name
FROM employees emp
	INNER JOIN dept_emp dept
		ON emp.emp_no = dept.emp_no
	INNER JOIN departments dep
		ON dept.dept_no = dep.dept_no
WHERE dept.to_date >= NOW()
ORDER BY emp.emp_no
;

-- 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력
SELECT 
	emp.emp_no
	, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
	, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()
ORDER BY sal.salary DESC
LIMIT 10
;

SELECT RNK.*
FROM (
		SELECT 
			emp.emp_no
			, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
			, sal.salary
			, RANK() over(ORDER BY sal.salary DESC) AS rn 
		FROM employees emp
		INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
		WHERE sal.to_date > NOW()
		) RNK
WHERE RNK.rn <= 10
;		


-- 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력
SELECT 
	dep.dept_name AS '부서명'
	, CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
	, emp.hire_date AS '입사일'
	, dep.dept_no
FROM employees emp
	INNER JOIN dept_manager dept
		ON emp.emp_no = dept.emp_no
	INNER JOIN departments dep
		ON dept.dept_no = dep.dept_no
WHERE dept.to_date >= NOW()
ORDER BY dep.dept_no ASC
;

-- 현재 직책이 "Staff"인 사원의 현재 평균 월급을 출력
SELECT 
	ti.title
	, AVG(sal.salary) AS avg_sal
FROM titles ti
	INNER JOIN salaries sal
		ON sal.emp_no = ti.emp_no
WHERE ti.title = 'staff'
	AND sal.to_date >= NOW()
	AND ti.to_date >= NOW()
;

-- 부서장직을 역임했던 모든 사원의 풀네임과 입사일 사번 부서번호를 출력
SELECT 
	CONCAT(emp.last_name, ' ', emp.first_name) AS fullname
	, emp.hire_date
	, emp.emp_no
	, dept.dept_no
FROM employees emp
	INNER JOIN dept_manager dept
		ON emp.emp_no = dept.emp_no
;

-- 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력
SELECT 
	ti.title
	, TRUNCATE(AVG(sal.salary), 0) AS avg_sal
FROM titles ti
	INNER JOIN salaries sal
		ON ti.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()
	AND ti.to_date >= NOW()
GROUP BY ti.title
HAVING avg_sal >= 60000
ORDER BY avg_sal DESC
;

-- 성별이 여자인 사원들의 직급별 사원수를 출력
SELECT 
	ti.title
	, COUNT(*) AS '사원 수'
FROM employees emp
	INNER JOIN titles ti
		ON emp.emp_no = ti.emp_no
WHERE emp.gender = 'F'
	AND ti.to_date >= NOW()
GROUP BY ti.title
;

-- 직급별 퇴사한 남자 사원수
SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender
;