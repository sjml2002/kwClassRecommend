[2021/08/05 업데이트]

- 회원가입 페이지와 서버 연결 완료
- AWS 연결시 500 error 뜨면 DB sql query문 확인해볼것 (특히 대소문자)

<br>
[2021/07/30 업데이트]

- location값 넣을때 id조회해서 age, gender, job도 같이 insert 해줌

<br>
[2021/07/26 업데이트]

- AWS new server connecting
- populationData에서 유동인구수(population변수)도 넘길 수 있도록 수정

<br>
[2021/07/17 업데이트]

- 유동인구 데이터 받아오는 populationData.php 파일 create
    => DB연결 작업 필요 (DB (clensingData)에 저장되어 있는 위/경도와 어떤 방법으로 기준점(현재 지도의 중심 위/경도)과 가까운 데이터들만 추출할 것인지 알고리즘 강구 필요)

<br>
[2021/06/26 업데이트]

- 회원가입 사용자정보 DB insert 구현
    => 데이터목록: id, pw, salt, age, gender, job
- id로 사용자정보 get 구현
- id와 pw로 Login 구현
- DBconnect에러 발생시 errorMessage띄우도록 구현
- 서버->프론트로 가는 모든 데이터는 result를 포함함 (true면 정상적 실행, false면 에러)
    => 이떄 false반환시 errorMessage데이터 함께 보내기

<br>
[2021/06/25 업데이트]

- location table에 위도(latitude)와 경도(longitude) insert구현
