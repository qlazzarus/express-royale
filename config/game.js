/**
 * Created by monoless on 2015-12-01.
 */
var maxGroups = 2;  // 반 숫자
var groupPerMan = 21;   // 성별당 최대 수
var expPerSkillLevel = 20;
var itemPlugin = require('../support/itemPlugin');

module.exports = {
    /*
     * ■ 캐릭터 상태
     */
    status: [
        {name: '정상', color: '#00ff00'},
        {name: '경상', color: '#ffff00'},
        {name: '중상', color: '#ff9000'},
        {name: '빈사', color: '#ff3000'},
        {name: '사망', color: '#ff0000'},
        {name: '치료', color: '#00ff00'},
        {name: '수면', color: '#00ff00'}
    ],

    /*
     * ■ 클럽 활동
     */
    clubs: [
        '궁도부', '사격부', '검도부', '펜싱부', '태권도부', '복싱부', '농구부', '배구부', '야구부', '화학부',
        '육상부', '연극부', '컴퓨터부', '요리부'
    ],

    /*
     * ■ 캐릭터 전술
     */
    tactics: [
        {name: '보통'},
        {name: '공격중시'},
        {name: '방어중시'},
        {name: '은밀행동'},
        {name: '탐색행동'},
        {name: '연속공격'}
    ],


    /*
     * ■ 캐릭터 스킬
     */
    skills: {
        shotSkill: '총',
        cutSkill: '칼',
        throwSkill: '던지기',
        fistSkill: '때리기',
        bowSkill: '활',
        meleeSkill: '곤봉',
        bombSkill: '폭탄',
        pokeSkill: '찌르기'
    },


    /*
     * ■ 장소
     */
    places: {
        place0: {
            name: '분교',
            code: 'D-6',
            specialize: 'find_plus',    // 발견증가
            message: '분교다. 곧 여기는 금지지역이 되겠구나.\n빨리 이동하지 않으면, 목걸이가 폭발하고 만다...',
            restrict: true,
            restrictReserve: false
        },
        place1: {
            name: '남쪽 주택가',
            code: 'I-6',
            specialize: 'attack_plus',  // 공격증가
            message: '여기는, 다른 주택가보다, 가게가 많구나. 상점가인가 뭔가였겠지.',
            restrict: false,
            restrictReserve: true
        },
        place2: {
            name: '우체국',
            code: 'C-4',
            specialize: 'find_minus',   // 발견감소
            message: '여기서는, 눈에 띄는 것이 없는데...',
            restrict: false,
            restrictReserve: true
        },
        place3: {
            name: '터널',
            code: 'E-7',
            specialize: 'defence_minus',    // 방어감소
            message: '깜깜하구나. 이런 곳에서 협공당하면 국물도 없겠군.',
            restrict: false,
            restrictReserve: true
        },
        place4: {
            name: '삼림지대',
            code: 'H-4',
            specialize: 'find_minus',   // 발견감소
            message: '나무들이 울창하게 자라 있구나. 풀숲에서 갑자기 습격하더라도 알아채지 못할거야...',
            restrict: false,
            restrictReserve: false
        },
        place5: {
            name: '산악지대',
            code: 'F-5',
            specialize: 'find_plus',    // 발견증가
            message: '이 섬을 한눈에 볼 수 있는 고지대다. 당연히 이곳에 서 있으면, 다른 곳에서도 날 발견할 가능성이 높을 것이다.',
            restrict: false,
            restrictReserve: false
        },
        place6: {
            name: '관음당',
            code: 'C-6',
            specialize: 'attack_plus',  // 공격증가
            message: '크고 작은 여러가지 불상이 모셔져 있구나. 밤에는 으시시하겠네.',
            restrict: false,
            restrictReserve: false
        },
        place7: {
            name: '서쪽 신사',
            code: 'E-2',
            specialize: 'find_minus',   // 발견감소
            message: '학문의 신들이 모셔져 있는거구나, 틀림없어.',
            restrict: false,
            restrictReserve: false
        },
        place8: {
            name: '면사무소',
            code: 'C-3',
            specialize: 'find_plus',    // 발견증가
            message: '여기가 마을의 중심인가. 지금으로서는 아무도 없는가...',
            restrict: false,
            restrictReserve: false
        },
        place9: {
            name: '등대',
            code: 'I-10',
            specialize: 'defence_plus', // 방어증가
            message: '요새로서 점거하면, 견고한 오새가 될듯한데. 바닥에는 말라붙은 혈흔이 많이 있구나. 무슨 일이 있었던거지?',
            restrict: false,
            restrictReserve: false
        },
        place10: {
            name: '서쪽 주택가',
            code: 'F-2',
            specialize: 'defence_plus', // 방어증가
            message: '여기도, 다른 주택가와 같이, 모두 폐허로 변했구나...',
            restrict: false,
            restrictReserve: false
        },
        place11: {
            name: '요양소',
            code: 'I-7',
            specialize: 'find_plus',    // 발견증가
            message: '황폐해져 있지만, 찾아보면 아직 사용할 수 있는 약 같은 것이 있을 것 같다...',
            restrict: false,
            restrictReserve: false
        },
        place12: {
            name: '소방서',
            code: 'C-5',
            specialize: 'find_plus',    // 발견증가
            message: '소방서라곤 해도, 소방차조차 없구나.',
            restrict: false,
            restrictReserve: false
        },
        place13: {
            name: '시미즈 연못',
            code: 'D-4',
            specialize: 'find_plus',    // 발견증가
            message: '맑은 물이 가득 차 있구나.',
            restrict: false,
            restrictReserve: false
        },
        place14: {
            name: '남쪽 신사',
            code: 'G-6',
            specialize: 'find_minus',   // 발견감소
            message: '새집도 썩어서 형편없는 모습을 드러내고 있구나.',
            restrict: false,
            restrictReserve: false
        },
        place15: {
            name: '절',
            code: 'F-8',
            specialize: 'find_minus',   // 발견감소
            message: '모두 아주 황폐해져 있구나.',
            restrict: false,
            restrictReserve: false
        },
        place16: {
            name: '북쪽갑',
            code: 'A-2',
            specialize: 'defence_minus',    // 방어감소
            message: '바다에는 배가 보인다. 탈출하려는 학생들을 감시하고 있는 정부의 배인가...',
            restrict: false,
            restrictReserve: false
        },
        place17: {
            name: '호텔 자리',
            code: 'E-4',
            specialize: 'attack_minus', // 공격감소
            message: '이런 장소는 유령이 자주 나올까? 유령같은건 믿지 않지만.',
            restrict: false,
            restrictReserve: false
        },
        place18: {
            name: '학교',
            code: 'G-3',
            specialize: 'attack_minus', // 공격감소
            message: '낮동안의 학교라는 건 좋은 것이지만, 밤의 학교라는 것은 좋은 것이 아니군.',
            restrict: false,
            restrictReserve: false
        },
        place19: {
            name: '겐지로 연못',
            code: 'H-6',
            specialize: 'find_minus',   // 발견감소
            message: '여기는 연못이라기보다도, 웅덩이구나. 정말 기분 나쁜 곳이야...',
            restrict: false,
            restrictReserve: false
        },
        place20: {
            name: '북쪽 주택가',
            code: 'B-4',
            specialize: 'defence_plus', // 방어증가
            message: '전에는 여기에서도 사람이 살고 있었겠지. 지금은 폐허로 변했구나.',
            restrict: false,
            restrictReserve: false
        },
        place21: {
            name: '남쪽갑',
            code: 'J-6',
            specialize: 'find_plus',    // 발견증가
            message: '병사의 배와... 우승자가 탈 배인가? 몇척의 배가 떠 있다.',
            restrict: false,
            restrictReserve: false
        }
    },


    /*
     * ■ 장소 노출
     */
    placeArrange: [
        'place0',
        'place16',
        'place20',
        'place8',
        'place2',
        'place12',
        'place6',
        'place13',
        'place7',
        'place17',
        'place3',
        'place10',
        'place5',
        'place15',
        'place18',
        'place14',
        'place4',
        'place19',
        'place1',
        'place11',
        'place9',
        'place21'
    ],


    /*
     * ■ 반 번호
     */
    groups: [
        "3학년 A반",
        "3학년 B반",
        "3학년 C반",
        "3학년 D반",
        "3학년 E반",
        "3학년 F반",
        "3학년 G반",
        "3학년 H반",
        "3학년 I반",
        "3학년 J반"
    ],
    maxGroups: maxGroups,   // 반 숫자
    groupPerMan: groupPerMan,    // 성별당 최대수
    maxRecruitMember: maxGroups * groupPerMan * 2,   // 최대등록인원수

    /*
     * ■ 기본 공격/방어/체력
     */
    attack: 8,
    attackMaxIncrease: 5,
    defence: 8,
    defenceMaxIncrease: 5,
    health: 90,
    healthMaxIncrease: 20,

    /*
     * ■ 레벨업 베이스 경험치 & 증가량
     */
    expPerLevel: 16,
    expIncrease: 4,

    /*
     * ■숙련도 요구치
     */
    expPerSkillLevel: expPerSkillLevel,

    /*
     * ■프로그램 최저 개최일수
     * 이벤트·덫등으로 최후의 한명이 결정되더라도, 이 날짜 이하라면 게임이 속행됩니다.
     */
    minimumBattleTime: (1 * 86400000) - 5000,

    /*
     * ■ 프로그램 접수마감일수
     */
    maxRecruitTime: (2 * 86400000) - 5000,

    /*
     * 사망 후 가입 가능 시간
     */
    respawnTime: 60 * 1000,

    /*
     * ■ 스테미너 최대치
     */
    maxStamina: 500,

    /*
     * ■ 응급처치 커맨드의 소비 스테미너
     */
    firstAidStamina: 30,

    /*
     * ■ 독 조사 커맨드의 소비 스테미너
     */
    detoxStamina: 10,

    /*
     * ■ 회복량의 설정
     */
    staminaRecoverInterval: 1,  // 스테미나 회복 시간
    staminaRecoverIncrease: 10, // 한번에 스테미너 회복 포인트

    healthRecoverInterval: 3,   // 체력 회복 시간
    healthRecoverIncrease: 1,   // 한번에 체력 회복 포인트

    /*
     * ■ 아이콘 정의
     */
    icons: [
        {'path': '', 'name': '아이콘을 선택하여 주세요', gender: 'male'},
        {'path': './static/images/0.jpg', 'name': '남자 1번', gender: 'male'},
        {'path': './static/images/1.jpg', 'name': '남자 2번', gender: 'male'},
        {'path': './static/images/2.jpg', 'name': '남자 3번', gender: 'male'},
        {'path': './static/images/3.jpg', 'name': '남자 4번', gender: 'male'},
        {'path': './static/images/4.jpg', 'name': '남자 5번', gender: 'male'},
        {'path': './static/images/5.jpg', 'name': '남자 6번', gender: 'male'},
        {'path': './static/images/6.jpg', 'name': '남자 7번', gender: 'male'},
        {'path': './static/images/7.jpg', 'name': '남자 8번', gender: 'male'},
        {'path': './static/images/8.jpg', 'name': '남자 9번', gender: 'male'},
        {'path': './static/images/9.jpg', 'name': '남자 10번', gender: 'male'},
        {'path': './static/images/10.jpg', 'name': '남자 11번', gender: 'male'},
        {'path': './static/images/11.jpg', 'name': '남자 12번', gender: 'male'},
        {'path': './static/images/12.jpg', 'name': '남자 13번', gender: 'male'},
        {'path': './static/images/13.jpg', 'name': '남자 14번', gender: 'male'},
        {'path': './static/images/14.jpg', 'name': '남자 15번', gender: 'male'},
        {'path': './static/images/15.jpg', 'name': '남자 16번', gender: 'male'},
        {'path': './static/images/16.jpg', 'name': '남자 17번', gender: 'male'},
        {'path': './static/images/17.jpg', 'name': '남자 18번', gender: 'male'},
        {'path': './static/images/18.jpg', 'name': '남자 19번', gender: 'male'},
        {'path': './static/images/19.jpg', 'name': '남자 20번', gender: 'male'},
        {'path': './static/images/20.jpg', 'name': '남자 21번', gender: 'male'},
        {'path': './static/images/21.jpg', 'name': '여자 1번', gender: 'female'},
        {'path': './static/images/22.jpg', 'name': '여자 2번', gender: 'female'},
        {'path': './static/images/23.jpg', 'name': '여자 3번', gender: 'female'},
        {'path': './static/images/24.jpg', 'name': '여자 4번', gender: 'female'},
        {'path': './static/images/25.jpg', 'name': '여자 5번', gender: 'female'},
        {'path': './static/images/26.jpg', 'name': '여자 6번', gender: 'female'},
        {'path': './static/images/27.jpg', 'name': '여자 7번', gender: 'female'},
        {'path': './static/images/28.jpg', 'name': '여자 8번', gender: 'female'},
        {'path': './static/images/29.jpg', 'name': '여자 9번', gender: 'female'},
        {'path': './static/images/30.jpg', 'name': '여자 10번', gender: 'female'},
        {'path': './static/images/31.jpg', 'name': '여자 11번', gender: 'female'},
        {'path': './static/images/32.jpg', 'name': '여자 12번', gender: 'female'},
        {'path': './static/images/33.jpg', 'name': '여자 13번', gender: 'female'},
        {'path': './static/images/34.jpg', 'name': '여자 14번', gender: 'female'},
        {'path': './static/images/35.jpg', 'name': '여자 15번', gender: 'female'},
        {'path': './static/images/36.jpg', 'name': '여자 16번', gender: 'female'},
        {'path': './static/images/37.jpg', 'name': '여자 17번', gender: 'female'},
        {'path': './static/images/38.jpg', 'name': '여자 18번', gender: 'female'},
        {'path': './static/images/39.jpg', 'name': '여자 19번', gender: 'female'},
        {'path': './static/images/40.jpg', 'name': '여자 20번', gender: 'female'},
        {'path': './static/images/41.jpg', 'name': '여자 21번', gender: 'female'}
    ]
};