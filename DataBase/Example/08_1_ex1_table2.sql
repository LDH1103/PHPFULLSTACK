INSERT INTO test_tbl (
	MEM_NO
	, MEM_NAME
	, MEM_AGE
	, MEM_SEX
	, MEM_SIGNIN_DATE
	, MEM_SIGNOUT_DATE
)
VALUES (
	4
	, '이동호'
	, 28
	, 'M'
	, NOW()
	, NULL
)
;

SELECT * FROM test_tbl;

DELETE FROM test_tbl;

-- TRUNCATE TABLE test_tbl; -- 롤백 안됨

ROLLBACK;

COMMIT;