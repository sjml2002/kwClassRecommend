> [나의 dbdiagram](https://dbdiagram.io/d/649a69d802bd1c4a5e1cc00c)

@@@@@@ 해야할 것 (계속해서 갱신) @@@@@@

* rank.json을 읽는 readJson.js가 실행되지 않고 있음

> 밑의 회원정보와 관련된건 mvp 우선 만들고 생각해보기
> 학번을 id로 하기로 했으니 학번을 제대로 입력했는지 검사하기 위해 학생증 검사 등의 방법이 필요할 듯
> 회원정보 출력하는 mypage 만들기

@@@@@@@@@@@@@@@@@@@@@@@@
<br> <br>

########## 기록 ##########
<br>
- 2023/11/25
	- (create) inputForAnalysis에서 주관식으로 쓸 수 있는 입력칸 만듦
	- (create) inputForAnalysis에서 간단한 강의 검색 구현함
	- (create) classSearch.html 만듦 (메인화면에서 강의평 게시판 검색) --> 아직 많이 손봐야함
- 2023/11/23
	- (modify) scp.sql DB안에 classList의 강의들 한글 깨지는거 오류 수정
- 2023/11/22
	- (modify) 민성측에서 rank.json 업데이트함
- 2023/10/19
	- (create) view에서 header과 footer 만듦
	- (create) newView.html -> 이제 앞으로 새로운 view페이지를 만들때는 newView.html을 복사해서 사용할 것
	- (modify) recommendedClass.html 에서 강의계획서로 이동하는 a tag 추가
	- (create) classGallery(게시판) 글 검색 입력 폼 만듦 
- 2023/07/31
	- (debug) classDAO -> fetch_row 한거 classGalleryMain(view) 로 넘어올 때 메모리초과 버그 수정
	- (create) classGallery 각 강의 별 버튼 추가
- 2023/07/06
	- (create) 강의 별 게시판 초기 작업 진행 중 (방 만들기 진행중)
- 2023/07/03
	- (delete) subMajor 삭제
	- (create) 강의 별 게시판 DB
- 2023/06/27
	- (modify) DB table user_info의 major 및 submajor 의 FK 생성 후 majorList의 name 과 연결
- 2023/06/23
	- (modify) 입력 폼에서 분반 및 강의 파악 테스트지 추가 완료 [classAnalysis]
- 2023/04/29
	- (modify) classList에 2022년도 2학기 강의 추가 완료
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