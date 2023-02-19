@@@@@@ 해야할 것 (계속해서 갱신) @@@@@@
- 2022년 강의 DB classList 로 옮기기

> 밑의 회원정보와 관련된건 mvp 우선 만들고 생각해보기
> 학번을 id로 하기로 했으니 학번을 제대로 입력했는지 검사하기 위해 학생증 검사 등의 방법이 필요할 듯
> 회원정보 출력하는 mypage 만들기

@@@@@@@@@@@@@@@@@@@@@@@@
<br> <br>

########## 기록 ##########
<br>
- 2023/02/19
	- (modify) createProject -> inputForAnalysis
	- (create) model/classAnalysis.php
		- classAnalysis.php는 실제 추천분석하는 ML로 데이터를 보내고 result를 받는 controller 역할
	- (create) DB classList, DB majorList
- 2023/01/20
	- (create) lib/set_result.php
- 2023/01/09
	- (add) user_info 테이블 필드: major, subMajor
	- (create) 회원 정보: major, subMajor
	- (modify) ID -> 학번
- 2023/01/08
	- 죽어있던 프로젝트 다시 살림 ㅋㅋ
- 2021/06/18
	- 로그인 구현완료
	- 프로젝트 생성 기능 구현 완료 (DB저장까지 완료)