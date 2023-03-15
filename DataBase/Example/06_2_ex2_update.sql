U-- UPDATE의 기본구조
-- UPDATE 테이블명
-- SET ( 컬럼1 = 값1, 컬럼2 = 값2 )
-- WHERE 조건
-- ** 추가설명 : 조건을 적지않을 경우 모든 레코드가 수정됩니다.
--				실수를 방지하기위해 WHERE절을 먼저 작성하고 SET절을 작성하는 것을 추천드립니다.


-- Primary Key제약 때문에 업데이트되진 않지만, 이렇게하는게 맞음

UPDATE departments
SET dept_name = '2000'
WHERE dept_no = 'd001'
	OR dept_no = 'd002';
	
SELECT 
	dept_name
	,dept_no
FROM departments;

ROLLBACK;

UPDATE employees
SET 
	birth_date = DATE(19961123)
	,first_name = 'DongHo'
	,last_name = 'Lee'
WHERE emp_no = 500000;

SELECT *
FROM employees
WHERE emp_no = 500000;
