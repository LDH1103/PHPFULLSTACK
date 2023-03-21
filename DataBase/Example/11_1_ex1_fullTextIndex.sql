1. 전체 텍스트 인덱스(Full Text Index )란?
	긴 문자로 구성된 텍스트 데이터를 빠르게 검색하기 위한 기능

2. 전체 텍스트 인덱스 생성
	CREATE TABLE 테이블(
		컬럼 데이터타입
		, FULLTEXT 인덱스명(컬럼) 
	)

	CREATE TABLE test_text (
	txt_no INT PRIMARY KEY AUTO_INCREMENT
	, f_text VARCHAR(4000)
	, FULLTEXT idx_full_test_text_f_text(f_text)
)
;

INSERT INTO test_text(f_text) VALUES('동해물과 백두산이 마르고 닳고록 하느님이 보우하사 우리나라만세');
INSERT INTO test_text(f_text) VALUES('무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세');
INSERT INTO test_text(f_text) VALUES('남산위에 저소나무 철갑을 두른듯 바람서리 불변함은 우리기상일세');
INSERT INTO test_text(f_text) VALUES('가을 하늘 공활한데 높고 구름 없이 밝은 달은 우리 가슴 일편단심일세');
INSERT INTO test_text(f_text) VALUES('이 기상과 이 맘으로 충성을 다하여 괴로우나 즐거우나 나라 사랑하세');


	CREATE FULLTEXT INDEX 인덱스명 ON 테이블(컬럼);

3. 전체 텍스트 인덱스 삭제
	DROP INDEX 인덱스명 ON 테이블명;

4. 전체 텍스트 조회 방법
	-- 검색어1 또는 검색어2 (or 검색)
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('검색어1 검색어2');
	
	SELECT * FROM test_text
	WHERE MATCH(f_text) AGAINST('동해물과');
	
	-- 검색어 중간에 공백이 들어가는 경우
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('"검색어 검색어"');
	
	-- 검색어1을 검색한 결과에서 검색어2가 들어간것을 제외 할 때
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('"검색어1" -검색어2' in boolean mode);
	
	-- 검색어1, 검색어2 함께 검색이 되는 경우 (and 검색) 
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('+"검색어1" +"검색어2"' in boolean mode);
	
	-- 검색어1과 검색어2 And 검색과 함께 검색어2의 결과도 함께 출력
	SELECT * FROM Table_Name
	WHERE MATCH(컬럼) AGAINST('"검색어1" +"검색어2"' in boolean mode);