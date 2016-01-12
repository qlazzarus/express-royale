# Express-Royale

## 무엇인가요?
예전 CGI 웹게임으로 유명한 배틀로얄을 node.js + socket.io 로 실시간으로 구현한 예제입니다.

## 저작권
MIT 라이센서를 따릅니다.
변경 및 재배포는 자유입니다! 
다만 하단 라이센스는 지우지 말아주세요 ㅠ_ㅠ...

## 필요한것은?
- 서버
- node.js
- mongodb
의존성 있는 모듈이 있습니다! 프로젝트 root 에서 아래와 같이 입력 해주세요
    # npm install

## 실행은
    # node ./bin/www 
상시실행은 npm forever module 을 권장합니다.

## 추가로...
앞으로 다시 배틀로얄이 흥했으면 좋겠어요

## 후원
가난한 개발자라 후원을 받습니다... 감사합니다.
- [비트코인](bitcoin:3JFrDd9LEKkiBYYof5YcQ3drAoCmKsgSD9?amount=0.1) / bitcoin:3JFrDd9LEKkiBYYof5YcQ3drAoCmKsgSD9

## 업데이트
- 체력 회복이 1초당 1회복에서 3초당 1회복으로 변경되었습니다.
- 스테미너 회복 아이템 효과가 2배 되었습니다.
- 레이더에 표기되는 지역 위치가 올바르게 수정되었습니다.
- 진행상황에 금지구역으로 설정 표기가 올바르게 수정되었습니다.
- 구역에 5명 이상 존재하면 더이상 찾지 못하는 버그를 수정하였습니다.
- 구역에 생존자가 있을때만 알림말이 나오도록 수정하였습니다.
- 스테미너를 소모하는 이벤트가 발생시 스테미너가 남아있더라도 최대체력이 감소하는 버그를 수정하였습니다.
- 아이템 정리시 허용되지 않는 아이템이 조합되는 버그를 수정하였습니다.
- 적이 죽을때 표기되는 생존자의 수가 잘못된 버그를 수정하였습니다.
- 최소 게임 진행시간 및 최소 게임 가입시간을 수정하였습니다.
- 게임에서 사망시 1분후에 재가입이 가능합니다.
- 전투가 안 일어나는 치명적인 버그를 수정하였습니다.
- 최소 게임 실행시간이 하루가 되었고 가입은 이일차까지 가능하도록 변경되었습니다.
- 사고로 사망할 경우 게임이 종료되지 않는 버그를 수정하였습니다.
- 샷건 탄약이 안 모아지는 버그를 수정하였습니다.
- 독이 걸린 아이템이 안 모아지는 버그를 수정하였습니다.
- 금지구역 입장 시도시 스테미너 소모하지 않고 현재 구역 탐색이 되는 버그를 수정하였습니다.
- 우승자 화면에서 아이템이 노출되지 않는 버그를 수정하였습니다.
- 아이템 합성시 아이템 스텟이 잘못 설정되는 버그를 수정하였습니다.
- 일분안에 금지구역을 벗어나지 않으면 목걸이가 터지도록 변경하였습니다. 
- 전학후 분교에서 나가지 않으면 10분후에 목걸이가 터지도록 변경하였습니다.