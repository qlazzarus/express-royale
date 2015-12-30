/**
 * Created by monoless on 2015-12-01.
 */
var maxGroups = 2;  // 반 숫자
var groupPerMan = 21;   // 성별당 최대 수
var expPerSkillLevel = 20;

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
            looted: [
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'heal3', endurance: 1, point: 30},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon59', endurance: 1, point: 20},
                {idx: 'weapon60', endurance: 1, point: 20},
                {idx: 'weapon61', endurance: 1, point: 15},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'weapon67', endurance: 0, point: 15},
                {idx: 'weapon67', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'armor9', endurance: 2, point: 1},
                {idx: 'armor9', endurance: 2, point: 1},
                {idx: 'armor9', endurance: 2, point: 1}

            ],
            restrict: false,
            restrictReserve: true
        },
        place2: {
            name: '우체국',
            code: 'C-4',
            specialize: 'find_minus',   // 발견감소
            message: '여기서는, 눈에 띄는 것이 없는데...',
            looted: [
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'armor13', endurance: 3, point: 1},
                {idx: 'armor13', endurance: 3, point: 1},
                {idx: 'armor13', endurance: 3, point: 1},
                {idx: 'armor13', endurance: 3, point: 1}
            ],
            restrict: false,
            restrictReserve: true
        },
        place3: {
            name: '터널',
            code: 'E-7',
            specialize: 'defence_minus',    // 방어감소
            message: '깜깜하구나. 이런 곳에서 협공당하면 국물도 없겠군.',
            looted: [
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc31', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'armor19', endurance: 5, point: 4},
                {idx: 'armor19', endurance: 5, point: 4},
                {idx: 'armor20', endurance: 10, point: 8},
                {idx: 'armor20', endurance: 10, point: 8},
                {idx: 'armor20', endurance: 10, point: 8},
                {idx: 'armor21', endurance: 10, point: 8},
                {idx: 'armor21', endurance: 10, point: 8}
            ],
            restrict: false,
            restrictReserve: true
        },
        place4: {
            name: '삼림지대',
            code: 'H-4',
            specialize: 'find_minus',   // 발견감소
            message: '나무들이 울창하게 자라 있구나. 풀숲에서 갑자기 습격하더라도 알아채지 못할거야...',
            looted: [
                {idx: 'weapon25', endurance: 0, point: 20},
                {idx: 'weapon25', endurance: 0, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon97', endurance: 0, point: 12},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'armor8', endurance: 3, point: 2},
                {idx: 'armor8', endurance: 3, point: 2},
                {idx: 'armor27', endurance: 3, point: 4},
                {idx: 'armor27', endurance: 3, point: 4}
            ],
            restrict: false,
            restrictReserve: false
        },
        place5: {
            name: '산악지대',
            code: 'F-5',
            specialize: 'find_plus',    // 발견증가
            message: '이 섬을 한눈에 볼 수 있는 고지대다. 당연히 이곳에 서 있으면, 다른 곳에서도 날 발견할 가능성이 높을 것이다.',
            looted: [
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'etc10', endurance: 24, point: 1},
                {idx: 'etc12', endurance: 24, point: 1},
                {idx: 'etc13', endurance: 24, point: 1},
                {idx: 'etc14', endurance: 24, point: 1},
                {idx: 'etc15', endurance: 24, point: 1},
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon76', endurance: 0, point: 15},
                {idx: 'weapon76', endurance: 0, point: 15},
                {idx: 'weapon77', endurance: 0, point: 10},
                {idx: 'weapon78', endurance: 0, point: 5},
                {idx: 'weapon78', endurance: 0, point: 5},
                {idx: 'weapon78', endurance: 0, point: 5},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'weapon79', endurance: 8, point: 20},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'etc32', endurance: 1, point: 1},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'armor19', endurance: 5, point: 4},
                {idx: 'armor19', endurance: 5, point: 4},
                {idx: 'armor20', endurance: 10, point: 8},
                {idx: 'armor20', endurance: 10, point: 8},
                {idx: 'armor20', endurance: 10, point: 8},
                {idx: 'armor7', endurance: 5, point: 3},
                {idx: 'armor7', endurance: 5, point: 3},
                {idx: 'armor8', endurance: 3, point: 2},
                {idx: 'armor8', endurance: 3, point: 2}
            ],
            restrict: false,
            restrictReserve: false
        },
        place6: {
            name: '관음당',
            code: 'C-6',
            specialize: 'attack_plus',  // 공격증가
            message: '크고 작은 여러가지 불상이 모셔져 있구나. 밤에는 으시시하겠네.',
            looted: [
                {idx: 'weapon71', endurance: 0, point: 5},
                {idx: 'weapon72', endurance: 0, point: 7},
                {idx: 'weapon73', endurance: 0, point: 10},
                {idx: 'weapon74', endurance: 0, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'armor16', endurance: 20, point: 8},
                {idx: 'armor16', endurance: 20, point: 8},
                {idx: 'armor16', endurance: 20, point: 8},
                {idx: 'armor16', endurance: 20, point: 8},
                {idx: 'armor17', endurance: 15, point: 8},
                {idx: 'armor17', endurance: 15, point: 8},
                {idx: 'armor17', endurance: 15, point: 8},
                {idx: 'armor17', endurance: 15, point: 8},
                {idx: 'armor17', endurance: 15, point: 8},
                {idx: 'armor17', endurance: 15, point: 8},
                {idx: 'armor18', endurance: 5, point: 2},
                {idx: 'armor18', endurance: 5, point: 2}
            ],
            restrict: false,
            restrictReserve: false
        },
        place7: {
            name: '서쪽 신사',
            code: 'E-2',
            specialize: 'find_minus',   // 발견감소
            message: '학문의 신들이 모셔져 있는거구나, 틀림없어.',
            looted: [
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'armor18', endurance: 5, point: 2},
                {idx: 'armor18', endurance: 5, point: 2}
            ],
            restrict: false,
            restrictReserve: false
        },
        place8: {
            name: '면사무소',
            code: 'C-3',
            specialize: 'find_plus',    // 발견증가
            message: '여기가 마을의 중심인가. 지금으로서는 아무도 없는가...',
            looted: [
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap2', endurance: 1, point: 8},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc26', endurance: 1, point: 1},
                {idx: 'armor11', endurance: 3, point: 2},
                {idx: 'armor11', endurance: 3, point: 2},
                {idx: 'armor11', endurance: 3, point: 2},
                {idx: 'armor12', endurance: 2, point: 1},
                {idx: 'armor12', endurance: 2, point: 1},
                {idx: 'armor12', endurance: 2, point: 1},
                {idx: 'armor12', endurance: 2, point: 1},
                {idx: 'armor12', endurance: 2, point: 1}
            ],
            restrict: false,
            restrictReserve: false
        },
        place9: {
            name: '등대',
            code: 'I-10',
            specialize: 'defence_plus', // 방어증가
            message: '요새로서 점거하면, 견고한 오새가 될듯한데. 바닥에는 말라붙은 혈흔이 많이 있구나. 무슨 일이 있었던거지?',
            looted: [
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina16', endurance: 1, point: -25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'stamina15', endurance: 1, point: 25},
                {idx: 'weapon25', endurance: 0, point: 20},
                {idx: 'weapon25', endurance: 0, point: 20},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'armor29', endurance: 5, point: 4},
                {idx: 'armor29', endurance: 5, point: 4}
            ],
            restrict: false,
            restrictReserve: false
        },
        place10: {
            name: '서쪽 주택가',
            code: 'F-2',
            specialize: 'defence_plus', // 방어증가
            message: '여기도, 다른 주택가와 같이, 모두 폐허로 변했구나...',
            looted: [
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon59', endurance: 1, point: 20},
                {idx: 'weapon60', endurance: 1, point: 20},
                {idx: 'etc17', endurance: 1, point: 3},
                {idx: 'etc17', endurance: 1, point: 5},
                {idx: 'etc17', endurance: 1, point: 10},
                {idx: 'etc17', endurance: 1, point: 3},
                {idx: 'etc17', endurance: 1, point: 5},
                {idx: 'etc17', endurance: 1, point: 10},
                {idx: 'weapon61', endurance: 1, point: 15},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'stamina11', endurance: 1, point: 10},
                {idx: 'stamina12', endurance: 1, point: 10},
                {idx: 'stamina13', endurance: 1, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'etc20', endurance: 1, point: 10},
                {idx: 'armor10', endurance: 3, point: 2},
                {idx: 'armor22', endurance: 2, point: 1},
                {idx: 'armor22', endurance: 2, point: 1},
                {idx: 'armor22', endurance: 2, point: 1},
                {idx: 'armor23', endurance: 5, point: 3},
                {idx: 'armor23', endurance: 5, point: 3}
            ],
            restrict: false,
            restrictReserve: false
        },
        place11: {
            name: '요양소',
            code: 'I-7',
            specialize: 'find_plus',    // 발견증가
            message: '황폐해져 있지만, 찾아보면 아직 사용할 수 있는 약 같은 것이 있을 것 같다...',
            looted: [
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'stamina14', endurance: 1, point: 50},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'armor28', endurance: 5, point: 10},
                {idx: 'armor28', endurance: 5, point: 10},
                {idx: 'armor28', endurance: 5, point: 10}
            ],
            restrict: false,
            restrictReserve: false
        },
        place12: {
            name: '소방서',
            code: 'C-5',
            specialize: 'find_plus',    // 발견증가
            message: '소방서라곤 해도, 소방차조차 없구나.',
            looted: [
                {idx: 'etc27', endurance: 1, point: 1},
                {idx: 'etc27', endurance: 1, point: 1},
                {idx: 'etc27', endurance: 1, point: 1},
                {idx: 'etc27', endurance: 1, point: 1},
                {idx: 'etc27', endurance: 1, point: 1},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'weapon69', endurance: 0, point: 20},
                {idx: 'weapon69', endurance: 0, point: 20},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'armor14', endurance: 20, point: 10},
                {idx: 'armor14', endurance: 20, point: 10},
                {idx: 'armor14', endurance: 20, point: 10},
                {idx: 'armor15', endurance: 5, point: 3},
                {idx: 'armor15', endurance: 5, point: 3}
            ],
            restrict: false,
            restrictReserve: false
        },
        place13: {
            name: '시미즈 연못',
            code: 'D-4',
            specialize: 'find_plus',    // 발견증가
            message: '맑은 물이 가득 차 있구나.',
            looted: [
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8}
            ],
            restrict: false,
            restrictReserve: false
        },
        place14: {
            name: '남쪽 신사',
            code: 'G-6',
            specialize: 'find_minus',   // 발견감소
            message: '새집도 썩어서 형편없는 모습을 드러내고 있구나.',
            looted: [
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'weapon96', endurance: 0, point: 6},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'etc16', endurance: 24, point: 1},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'weapon75', endurance: 0, point: 20},
                {idx: 'armor18', endurance: 5, point: 2},
                {idx: 'armor18', endurance: 5, point: 2},
                {idx: 'armor18', endurance: 5, point: 2}
            ],
            restrict: false,
            restrictReserve: false
        },
        place15: {
            name: '절',
            code: 'F-8',
            specialize: 'find_minus',   // 발견감소
            message: '모두 아주 황폐해져 있구나.',
            looted: [
                {idx: 'weapon80', endurance: 1, point: 1},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon81', endurance: 0, point: 4},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'armor13', endurance: 3, point: 1},
                {idx: 'armor13', endurance: 3, point: 1}
            ],
            restrict: false,
            restrictReserve: false
        },
        place16: {
            name: '북쪽갑',
            code: 'A-2',
            specialize: 'defence_minus',    // 방어감소
            message: '바다에는 배가 보인다. 탈출하려는 학생들을 감시하고 있는 정부의 배인가...',
            looted: [
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'weapon54', endurance: 8, point: 30},
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'etc10', endurance: 24, point: 1},
                {idx: 'etc12', endurance: 24, point: 1},
                {idx: 'etc13', endurance: 24, point: 1},
                {idx: 'etc14', endurance: 24, point: 1},
                {idx: 'etc15', endurance: 24, point: 1},
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'etc10', endurance: 24, point: 1},
                {idx: 'etc12', endurance: 24, point: 1},
                {idx: 'etc13', endurance: 24, point: 1},
                {idx: 'etc14', endurance: 24, point: 1},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap11', endurance: 1, point: 8},
                {idx: 'armor7', endurance: 5, point: 3},
                {idx: 'armor8', endurance: 3, point: 2}
            ],
            restrict: false,
            restrictReserve: false
        },
        place17: {
            name: '호텔 자리',
            code: 'E-4',
            specialize: 'attack_minus', // 공격감소
            message: '이런 장소는 유령이 자주 나올까? 유령같은건 믿지 않지만.',
            looted: [
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon59', endurance: 1, point: 20},
                {idx: 'weapon60', endurance: 1, point: 20},
                {idx: 'weapon61', endurance: 1, point: 15},
                {idx: 'weapon62', endurance: 0, point: 20},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'stamina3', endurance: 1, point: 20},
                {idx: 'stamina4', endurance: 1, point: 10},
                {idx: 'stamina5', endurance: 1, point: 20},
                {idx: 'stamina6', endurance: 1, point: 20},
                {idx: 'stamina7', endurance: 1, point: 20},
                {idx: 'stamina8', endurance: 1, point: 20},
                {idx: 'stamina9', endurance: 1, point: 20},
                {idx: 'stamina10', endurance: 1, point: 20},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon69', endurance: 0, point: 20},
                {idx: 'weapon69', endurance: 0, point: 20},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon28', endurance: 5, point: 9},
                {idx: 'weapon29', endurance: 0, point: 25},
                {idx: 'weapon30', endurance: 0, point: 30},
                {idx: 'weapon28', endurance: 5, point: 9},
                {idx: 'weapon29', endurance: 0, point: 25},
                {idx: 'weapon30', endurance: 0, point: 30},
                {idx: 'weapon28', endurance: 5, point: 9},
                {idx: 'weapon29', endurance: 0, point: 25},
                {idx: 'weapon30', endurance: 0, point: 30},
                {idx: 'weapon28', endurance: 5, point: 9},
                {idx: 'weapon29', endurance: 0, point: 25},
                {idx: 'weapon30', endurance: 0, point: 30}
            ],
            restrict: false,
            restrictReserve: false
        },
        place18: {
            name: '학교',
            code: 'G-3',
            specialize: 'attack_minus', // 공격감소
            message: '낮동안의 학교라는 건 좋은 것이지만, 밤의 학교라는 것은 좋은 것이 아니군.',
            looted: [
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon82', endurance: 0, point: 2},
                {idx: 'weapon83', endurance: 1, point: 1},
                {idx: 'weapon83', endurance: 1, point: 1},
                {idx: 'weapon83', endurance: 1, point: 1},
                {idx: 'weapon83', endurance: 1, point: 1},
                {idx: 'weapon83', endurance: 1, point: 1},
                {idx: 'weapon83', endurance: 1, point: 1},
                {idx: 'weapon84', endurance: 1, point: 1},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon84', endurance: 1, point: 1},
                {idx: 'weapon84', endurance: 1, point: 1},
                {idx: 'weapon84', endurance: 1, point: 1},
                {idx: 'weapon85', endurance: 0, point: 8},
                {idx: 'weapon85', endurance: 0, point: 8},
                {idx: 'weapon85', endurance: 0, point: 8},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'heal2', endurance: 1, point: 40},
                {idx: 'weapon37', endurance: 1, point: 2},
                {idx: 'weapon37', endurance: 1, point: 2},
                {idx: 'weapon37', endurance: 1, point: 2},
                {idx: 'weapon37', endurance: 1, point: 2},
                {idx: 'weapon37', endurance: 1, point: 2},
                {idx: 'weapon87', endurance: 1, point: 2},
                {idx: 'weapon88', endurance: 1, point: 2},
                {idx: 'weapon89', endurance: 1, point: 2},
                {idx: 'weapon90', endurance: 1, point: 2},
                {idx: 'weapon91', endurance: 0, point: 3},
                {idx: 'weapon92', endurance: 0, point: 4},
                {idx: 'weapon93', endurance: 0, point: 4},
                {idx: 'weapon94', endurance: 0, point: 4},
                {idx: 'etc26', endurance: 1, point: 1},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'weapon70', endurance: 0, point: 12},
                {idx: 'armor24', endurance: 3, point: 3},
                {idx: 'armor24', endurance: 3, point: 3},
                {idx: 'armor24', endurance: 3, point: 3},
                {idx: 'armor24', endurance: 3, point: 3},
                {idx: 'armor25', endurance: 20, point: 2},
                {idx: 'armor25', endurance: 20, point: 2},
                {idx: 'armor10', endurance: 3, point: 2},
                {idx: 'armor26', endurance: 2, point: 1},
                {idx: 'armor26', endurance: 2, point: 1},
                {idx: 'armor26', endurance: 2, point: 1}
            ],
            restrict: false,
            restrictReserve: false
        },
        place19: {
            name: '겐지로 연못',
            code: 'H-6',
            specialize: 'find_minus',   // 발견감소
            message: '여기는 연못이라기보다도, 웅덩이구나. 정말 기분 나쁜 곳이야...',
            looted: [
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1},
                {idx: 'etc25', endurance: 1, point: 1}
            ],
            restrict: false,
            restrictReserve: false
        },
        place20: {
            name: '북쪽 주택가',
            code: 'B-4',
            specialize: 'defence_plus', // 방어증가
            message: '전에는 여기에서도 사람이 살고 있었겠지. 지금은 폐허로 변했구나.',
            looted: [
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon55', endurance: 5, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'weapon57', endurance: 30, point: 20},
                {idx: 'etc17', endurance: 1, point: 3},
                {idx: 'etc17', endurance: 1, point: 5},
                {idx: 'etc17', endurance: 1, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon59', endurance: 1, point: 20},
                {idx: 'weapon60', endurance: 1, point: 20},
                {idx: 'weapon61', endurance: 1, point: 15},
                {idx: 'weapon62', endurance: 0, point: 20},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon63', endurance: 10, point: 1},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon64', endurance: 10, point: 2},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon58', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon56', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon65', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon66', endurance: 4, point: 10},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'weapon2', endurance: 0, point: 15},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 3},
                {idx: 'etc20', endurance: 1, point: 5},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 3},
                {idx: 'etc20', endurance: 1, point: 5},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 3},
                {idx: 'etc20', endurance: 1, point: 5},
                {idx: 'etc20', endurance: 1, point: 1},
                {idx: 'etc20', endurance: 1, point: 3},
                {idx: 'etc20', endurance: 1, point: 5},
                {idx: 'weapon67', endurance: 0, point: 15},
                {idx: 'weapon67', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'weapon68', endurance: 0, point: 15},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc23', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'etc24', endurance: 1, point: 1},
                {idx: 'armor9', endurance: 2, point: 1},
                {idx: 'armor9', endurance: 2, point: 1},
                {idx: 'armor9', endurance: 2, point: 1},
                {idx: 'armor10', endurance: 3, point: 2}
            ],
            restrict: false,
            restrictReserve: false
        },
        place21: {
            name: '남쪽갑',
            code: 'J-6',
            specialize: 'find_plus',    // 발견증가
            message: '병사의 배와... 우승자가 탈 배인가? 몇척의 배가 떠 있다.',
            looted: [
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap0', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'trap10', endurance: 1, point: 10},
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'etc10', endurance: 24, point: 1},
                {idx: 'etc12', endurance: 24, point: 1},
                {idx: 'etc13', endurance: 24, point: 1},
                {idx: 'etc14', endurance: 24, point: 1},
                {idx: 'etc15', endurance: 24, point: 1},
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'etc10', endurance: 24, point: 1},
                {idx: 'etc12', endurance: 24, point: 1},
                {idx: 'etc13', endurance: 24, point: 1},
                {idx: 'etc14', endurance: 24, point: 1},
                {idx: 'etc15', endurance: 24, point: 1},
                {idx: 'etc8', endurance: 24, point: 1},
                {idx: 'etc9', endurance: 24, point: 1},
                {idx: 'etc10', endurance: 24, point: 1},
                {idx: 'etc12', endurance: 24, point: 1},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'heal1', endurance: 1, point: 20},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'trap1', endurance: 1, point: 8},
                {idx: 'trap12', endurance: 1, point: 8},
                {idx: 'armor7', endurance: 5, point: 3},
                {idx: 'armor8', endurance: 3, point: 2}
            ],
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
     * ■ 전역 스폰 아이템
     */
    globalLooted: [
        {idx: 'etc8', endurance: 24, point: 1},
        {idx: 'etc9', endurance: 24, point: 1},
        {idx: 'etc10', endurance: 24, point: 1},
        {idx: 'etc12', endurance: 24, point: 1},
        {idx: 'etc13', endurance: 24, point: 1},
        {idx: 'etc14', endurance: 24, point: 1},
        {idx: 'etc15', endurance: 24, point: 1},
        {idx: 'heal1', endurance: 1, point: 20},
        {idx: 'heal1', endurance: 1, point: 20},
        {idx: 'heal1', endurance: 1, point: 20},
        {idx: 'heal1', endurance: 1, point: 20},
        {idx: 'heal1', endurance: 1, point: 20},
        {idx: 'heal1', endurance: 1, point: 20},
        {idx: 'weapon98', endurance: 0, point: 20},
        {idx: 'weapon99', endurance: 0, point: 23},
        {idx: 'weapon114', endurance: 0, point: 23},
        {idx: 'weapon100', endurance: 0, point: 18},
        {idx: 'weapon62', endurance: 0, point: 20},
        {idx: 'armor30', endurance: 20, point: 12},
        {idx: 'armor31', endurance: 20, point: 12},
        {idx: 'armor32', endurance: 10, point: 5},
        {idx: 'armor33', endurance: 20, point: 14},
        {idx: 'armor34', endurance: 4, point: 2},
        {idx: 'armor34', endurance: 4, point: 2},
        {idx: 'armor34', endurance: 4, point: 2},
        {idx: 'armor34', endurance: 4, point: 2},
        {idx: 'armor34', endurance: 4, point: 2},
        {idx: 'armor29', endurance: 5, point: 4},
        {idx: 'armor29', endurance: 5, point: 4},
        {idx: 'armor35', endurance: 3, point: 3},
        {idx: 'armor35', endurance: 3, point: 3},
        {idx: 'armor35', endurance: 3, point: 3},
        {idx: 'armor36', endurance: 3, point: 3},
        {idx: 'armor22', endurance: 2, point: 1},
        {idx: 'armor22', endurance: 2, point: 1},
        {idx: 'armor27', endurance: 3, point: 4},
        {idx: 'armor37', endurance: 5, point: 5},
        {idx: 'armor38', endurance: 5, point: 5},
        {idx: 'armor39', endurance: 5, point: 5},
        {idx: 'armor40', endurance: 40, point: 10},
        {idx: 'etc34', endurance: 1, point: 1},
        {idx: 'weapon102', endurance: 0, point: 6},
        {idx: 'weapon103', endurance: 1, point: 10},
        {idx: 'etc20', endurance: 1, point: 1},
        {idx: 'etc20', endurance: 1, point: 1},
        {idx: 'etc20', endurance: 1, point: 1},
        {idx: 'etc20', endurance: 1, point: 1},
        {idx: 'etc20', endurance: 1, point: 1},
        {idx: 'etc20', endurance: 1, point: 1},
        {idx: 'weapon2', endurance: 0, point: 15},
        {idx: 'weapon2', endurance: 0, point: 15},
        {idx: 'weapon2', endurance: 0, point: 15},
        {idx: 'weapon2', endurance: 0, point: 15},
        {idx: 'weapon21', endurance: 2, point: 40},
        {idx: 'weapon21', endurance: 2, point: 40},
        {idx: 'weapon21', endurance: 2, point: 40},
        {idx: 'weapon21', endurance: 2, point: 40},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon104', endurance: 15, point: 30},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon57', endurance: 30, point: 20},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon55', endurance: 5, point: 15},
        {idx: 'weapon105', endurance: 0, point: 30},
        {idx: 'weapon105', endurance: 0, point: 30},
        {idx: 'weapon105', endurance: 0, point: 30},
        {idx: 'weapon105', endurance: 0, point: 30}
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
     * 0으로 하면 1일.
     */
    minimumBattleTime: 2 * 86400000,

    /*
     * ■ 프로그램 접수마감일수
     */
    maxRecruitTime: 4 * 86400000,

    /*
     * 사망 후 가입 가능 시간
     */
    respawnTime: 7200000,

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
    sleepTime: 1,  // 스테미너 회복시간(초) : 3초로 1포인트 회복
    healingRate: 1, // 체력회복비율 : 스테미너의 1/x (0으로 하지 말것)

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
    ],

    /*
     * ■ 아이템 정의
     */
    items: {
        // -- weapon
        weaponDefault: {
            id: 'weaponDefault',
            equip: 'weapon', name: '맨손', attackType: ['fist'], endurance: 0, point: 0, ammoRequire: false
        },
        weapon1: {
            id: 'weapon1',
            equip: 'weapon',
            name: '석궁',
            attackType: ['bow', 'melee'],
            point: 20,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon2: {
            id: 'weapon2',
            equip: 'weapon', name: '식칼', attackType: ['cut', 'poke'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon3: {
            id: 'weapon3',
            equip: 'weapon', name: '손도끼', attackType: ['cut'], point: 17, endurance: 0, ammoRequire: false
        },
        weapon4: {
            id: 'weapon4',
            equip: 'weapon', name: '레밍턴M31RS',
            attackType: ['shot', 'melee'],
            point: 28,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 5,
            ammoType: '12gauge'
        },
        weapon5: {
            id: 'weapon5',
            equip: 'weapon', name: '나이프', attackType: ['cut', 'poke'], point: 17, endurance: 0, ammoRequire: false
        },
        weapon6: {
            id: 'weapon6',
            equip: 'weapon', name: '단도', attackType: ['cut', 'poke'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon7: {
            id: 'weapon7',
            equip: 'weapon', name: '잉그램M10 서브머신건',
            attackType: ['shot', 'melee'],
            point: 30,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 32,
            ammoType: '9mm'
        },
        weapon8: {
            id: 'weapon8',
            equip: 'weapon', name: '포크', attackType: ['poke'], point: 7, endurance: 0, ammoRequire: false
        },
        weapon9: {
            id: 'weapon9',
            equip: 'weapon', name: '금속 배트', attackType: ['melee'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon10: {
            id: 'weapon10',
            equip: 'weapon',
            name: '22구경 2연발 데린져',
            attackType: ['shot', 'melee'],
            point: 20,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 2,
            ammoType: '22lr'
        },
        weapon11: {
            id: 'weapon11',
            equip: 'weapon',
            name: '군용 나이프', attackType: ['cut', 'poke', 'throw'], point: 20, endurance: 1, ammoRequire: false
        },
        weapon12: {
            id: 'weapon12',
            equip: 'weapon',
            name: '월터PPK 9밀리',
            attackType: ['shot', 'melee'],
            point: 25,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 8,
            ammoType: '9mm'
        },
        weapon13: {
            id: 'weapon13',
            equip: 'weapon',
            name: 'S&W M19 357 매그넘',
            attackType: ['shot', 'melee'],
            point: 26,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 6,
            ammoType: '357mag'
        },
        weapon14: {
            id: 'weapon14',
            equip: 'weapon',
            name: '베레타M92F',
            attackType: ['shot', 'melee'],
            point: 25,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 14,
            ammoType: '9mm'
        },
        weapon15: {
            id: 'weapon15',
            equip: 'weapon',
            name: 'S&W 치프스페셜 38구경',
            attackType: ['shot', 'melee'],
            point: 23,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 5,
            ammoType: '38special'
        },
        weapon16: {
            id: 'weapon16',
            equip: 'weapon',
            name: '콜트357 매그넘 리볼버',
            attackType: ['shot', 'melee'],
            point: 27,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 6,
            ammoType: '357mag'
        },
        weapon17: {
            id: 'weapon17',
            equip: 'weapon',
            name: '양날 나이프', attackType: ['cut', 'poke'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon18: {
            id: 'weapon18',
            equip: 'weapon',
            name: '브라우닝 하이파워 9mm',
            attackType: ['shot', 'melee'],
            point: 26,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 14,
            ammoType: '9mm'
        },
        weapon19: {
            id: 'weapon19',
            equip: 'weapon',
            name: '다이버즈 나이프', attackType: ['cut', 'poke'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon20: {
            id: 'weapon20',
            equip: 'weapon',
            name: '다트', attackType: ['throw'], point: 5, endurance: 12, ammoRequire: false
        },
        weapon21: {
            id: 'weapon21',
            equip: 'weapon',
            name: '수류탄', attackType: ['bomb'], point: 40, endurance: 2, ammoRequire: false
        },
        weapon22: {
            id: 'weapon22',
            equip: 'weapon',
            name: 'S&W M59 오토',
            attackType: ['shot', 'melee'],
            point: 24,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 15,
            ammoType: '9mm'
        },
        weapon23: {
            id: 'weapon23',
            equip: 'weapon',
            name: '특수경봉', attackType: ['melee'], point: 13, endurance: 0, ammoRequire: false
        },
        weapon24: {
            id: 'weapon24',
            equip: 'weapon',
            name: '콜트 하이웨이 패트롤맨 38구경',
            attackType: ['shot', 'melee'],
            point: 24,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 6,
            ammoType: '38special'
        },
        weapon25: {
            id: 'weapon25',
            equip: 'weapon',
            name: '낫', attackType: ['cut', 'poke'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon26: {
            id: 'weapon26',
            equip: 'weapon',
            name: '얼음송곳', attackType: ['poke'], point: 8, endurance: 0, ammoRequire: false
        },
        weapon27: {
            id: 'weapon27',
            equip: 'weapon',
            name: '눈쳐크', attackType: ['melee'], point: 12, endurance: 0, ammoRequire: false
        },
        weapon28: {
            id: 'weapon28',
            equip: 'weapon',
            name: '부메랑', attackType: ['throw'], point: 9, endurance: 5, ammoRequire: false
        },
        weapon29: {
            id: 'weapon29',
            equip: 'weapon',
            name: 'CZ M75',
            attackType: ['shot', 'melee'],
            point: 25,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 16,
            ammoType: '9mm'
        },
        weapon30: {
            id: 'weapon30',
            equip: 'weapon',
            name: '우지 9mm 서브머신건',
            attackType: ['shot', 'melee'],
            point: 30,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 32,
            ammoType: '9mm'
        },
        weapon31: {
            id: 'weapon31',
            equip: 'weapon',
            name: '시그 사우엘 P230 9mm',
            attackType: ['shot', 'melee'],
            point: 26,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 8,
            ammoType: '9mm'
        },
        weapon32: {
            id: 'weapon32',
            equip: 'weapon',
            name: '콜트 거버먼트 45구경',
            attackType: ['shot', 'melee'],
            point: 25,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 8,
            ammoType: '45acp'
        },
        weapon33: {
            id: 'weapon33',
            equip: 'weapon',
            name: '일본도', attackType: ['cut', 'poke'], point: 25, endurance: 0, ammoRequire: false
        },
        weapon34: {
            id: 'weapon34',
            equip: 'weapon',
            name: '부채', attackType: ['melee'], point: 1, endurance: 0, ammoRequire: false
        },
        weapon35: {
            id: 'weapon35',
            equip: 'weapon',
            name: '대야', attackType: ['melee'], point: 3, endurance: 0, ammoRequire: false
        },
        weapon36: {
            id: 'weapon36',
            equip: 'weapon',
            name: '슬리퍼', attackType: ['melee'], point: 2, endurance: 0, ammoRequire: false
        },
        weapon37: {
            id: 'weapon37',
            equip: 'weapon',
            name: '칠판지우개', attackType: ['throw'], point: 2, endurance: 1, ammoRequire: false
        },
        weapon38: {
            id: 'weapon38',
            equip: 'weapon',
            name: '분필', attackType: ['throw'], point: 1, endurance: 1, ammoRequire: false
        },
        weapon39: {
            id: 'weapon39',
            equip: 'weapon',
            name: '배트', attackType: ['melee'], point: 12, endurance: 0, ammoRequire: false
        },
        weapon40: {
            id: 'weapon40',
            equip: 'weapon',
            name: '너클', attackType: ['fist'], point: 8, endurance: 0, ammoRequire: false
        },
        weapon41: {
            id: 'weapon41',
            equip: 'weapon',
            name: '뿅망치', attackType: ['melee'], point: 1, endurance: 0, ammoRequire: false
        },
        weapon42: {
            id: 'weapon42',
            equip: 'weapon',
            name: '화염병', attackType: ['bomb'], point: 15, endurance: 1, ammoRequire: false
        },
        weapon43: {
            id: 'weapon43',
            equip: 'weapon',
            name: '폭탄', attackType: ['bomb'], point: 60, endurance: 3, ammoRequire: false
        },
        weapon44: {
            id: 'weapon44',
            equip: 'weapon',
            name: '간이화염방사기', attackType: ['bomb'], point: 10, endurance: 8, ammoRequire: false
        },
        weapon45: {
            id: 'weapon45',
            equip: 'weapon',
            name: '사슬낫', attackType: ['cut', 'melee'], point: 22, endurance: 0, ammoRequire: false
        },
        weapon46: {
            id: 'weapon46',
            equip: 'weapon',
            name: '못박은배트', attackType: ['melee'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon47: {
            id: 'weapon47',
            equip: 'weapon',
            name: '못박은대나무', attackType: ['melee'], point: 13, endurance: 0, ammoRequire: false
        },
        weapon48: {
            id: 'weapon48',
            equip: 'weapon',
            name: '돌도끼', attackType: ['melee'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon49: {
            id: 'weapon49',
            equip: 'weapon',
            name: '커스텀나이프', attackType: ['cut', 'poke'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon50: {
            id: 'weapon50',
            equip: 'weapon',
            name: '쇠뇌',
            attackType: ['bow', 'melee'],
            point: 25,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon51: {
            id: 'weapon51',
            equip: 'weapon',
            name: '죽창', attackType: ['poke'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon52: {
            id: 'weapon52',
            equip: 'weapon',
            name: '언월도', attackType: ['poke'], point: 40, endurance: 0, ammoRequire: false
        },
        weapon53: {
            id: 'weapon53',
            equip: 'weapon',
            name: '쌍칼', attackType: ['poke'], point: 35, endurance: 0, ammoRequire: false
        },
        weapon54: {
            id: 'weapon54',
            equip: 'weapon',
            name: '다이나마이트', attackType: ['bomb'], point: 30, endurance: 8, ammoRequire: false
        },
        weapon55: {
            id: 'weapon55',
            equip: 'weapon',
            name: '돌멩이', attackType: ['throw'], point: 15, endurance: 5, ammoRequire: false
        },
        weapon56: {
            id: 'weapon56',
            equip: 'weapon',
            name: '컵', attackType: ['throw'], point: 10, endurance: 4, ammoRequire: false
        },
        weapon57: {
            id: 'weapon57',
            equip: 'weapon',
            name: '야구공세트', attackType: ['throw'], point: 20, endurance: 30, ammoRequire: false
        },
        weapon58: {
            id: 'weapon58',
            equip: 'weapon',
            name: '접시', attackType: ['throw'], point: 10, endurance: 4, ammoRequire: false
        },
        weapon59: {
            id: 'weapon59',
            equip: 'weapon',
            name: '텔레비젼', attackType: ['throw'], point: 20, endurance: 1, ammoRequire: false
        },
        weapon60: {
            id: 'weapon60',
            equip: 'weapon',
            name: '테이블', attackType: ['throw'], point: 20, endurance: 1, ammoRequire: false
        },
        weapon61: {
            id: 'weapon61',
            equip: 'weapon',
            name: '선반', attackType: ['throw'], point: 15, endurance: 1, ammoRequire: false
        },
        weapon62: {
            id: 'weapon62',
            equip: 'weapon',
            name: '보검', attackType: ['cut', 'poke'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon63: {
            id: 'weapon63',
            equip: 'weapon',
            name: '빈병', attackType: ['throw'], point: 1, endurance: 10, ammoRequire: false
        },
        weapon64: {
            id: 'weapon64',
            equip: 'weapon',
            name: '빈캔', attackType: ['throw'], point: 2, endurance: 10, ammoRequire: false
        },
        weapon65: {
            id: 'weapon65',
            equip: 'weapon',
            name: '유리잔', attackType: ['throw'], point: 10, endurance: 4, ammoRequire: false
        },
        weapon66: {
            id: 'weapon66',
            equip: 'weapon',
            name: '냄비', attackType: ['throw'], point: 10, endurance: 4, ammoRequire: false
        },
        weapon67: {
            id: 'weapon67',
            equip: 'weapon',
            name: '쇠사슬', attackType: ['melee'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon68: {
            id: 'weapon68',
            equip: 'weapon',
            name: '후라이팬', attackType: ['melee'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon69: {
            id: 'weapon69',
            equip: 'weapon',
            name: '소방용도끼', attackType: ['cut'], point: 20, endurance: 0, ammoRequire: false
        },
        weapon70: {
            id: 'weapon70',
            equip: 'weapon',
            name: '소화기', attackType: ['melee'], point: 12, endurance: 0, ammoRequire: false
        },
        weapon71: {
            id: 'weapon71',
            equip: 'weapon',
            name: '관음보살상', attackType: ['melee'], point: 5, endurance: 0, ammoRequire: false
        },
        weapon72: {
            id: 'weapon72',
            equip: 'weapon',
            name: '염라대왕상', attackType: ['melee'], point: 7, endurance: 0, ammoRequire: false
        },
        weapon73: {
            id: 'weapon73',
            equip: 'weapon',
            name: '아수라상', attackType: ['melee'], point: 10, endurance: 0, ammoRequire: false
        },
        weapon74: {
            id: 'weapon74',
            equip: 'weapon',
            name: '지장보살상', attackType: ['melee'], point: 8, endurance: 0, ammoRequire: false
        },
        weapon75: {
            id: 'weapon75',
            equip: 'weapon',
            name: '양궁',
            attackType: ['bow', 'melee'],
            point: 20,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon76: {
            id: 'weapon76',
            equip: 'weapon',
            name: '곡괭이', attackType: ['poke'], point: 15, endurance: 0, ammoRequire: false
        },
        weapon77: {
            id: 'weapon77',
            equip: 'weapon',
            name: '스카프', attackType: ['poke', 'melee'], point: 10, endurance: 0, ammoRequire: false
        },
        weapon78: {
            id: 'weapon78',
            equip: 'weapon',
            name: '샤벨', attackType: ['poke', 'melee'], point: 5, endurance: 0, ammoRequire: false
        },
        weapon79: {
            id: 'weapon79',
            equip: 'weapon',
            name: '암석', attackType: ['throw'], point: 20, endurance: 8, ammoRequire: false
        },
        weapon80: {
            id: 'weapon80',
            equip: 'weapon',
            name: '목탁', attackType: ['throw'], point: 1, endurance: 1, ammoRequire: false
        },
        weapon81: {
            id: 'weapon81',
            equip: 'weapon',
            name: '솔도파', attackType: ['melee'], point: 4, endurance: 0, ammoRequire: false
        },
        weapon82: {
            id: 'weapon82',
            equip: 'weapon',
            name: '연필', attackType: ['poke'], point: 2, endurance: 0, ammoRequire: false
        },
        weapon83: {
            id: 'weapon83',
            equip: 'weapon',
            name: '지우개', attackType: ['throw'], point: 1, endurance: 1, ammoRequire: false
        },
        weapon84: {
            id: 'weapon84',
            equip: 'weapon',
            name: '플라스크', attackType: ['throw'], point: 1, endurance: 1, ammoRequire: false
        },
        weapon85: {
            id: 'weapon85',
            equip: 'weapon',
            name: '대걸레', attackType: ['melee'], point: 8, endurance: 0, ammoRequire: false
        },
        weapon87: {
            id: 'weapon87',
            equip: 'weapon',
            name: '흰분필', attackType: ['throw'], point: 2, endurance: 1, ammoRequire: false
        },
        weapon88: {
            id: 'weapon88',
            equip: 'weapon',
            name: '빨간분필', attackType: ['throw'], point: 2, endurance: 1, ammoRequire: false
        },
        weapon89: {
            id: 'weapon89',
            equip: 'weapon',
            name: '노란분필', attackType: ['throw'], point: 2, endurance: 1, ammoRequire: false
        },
        weapon90: {
            id: 'weapon90',
            equip: 'weapon',
            name: '파란분필', attackType: ['throw'], point: 2, endurance: 1, ammoRequire: false
        },
        weapon91: {
            id: 'weapon91',
            equip: 'weapon',
            name: '인체모형', attackType: ['melee'], point: 3, endurance: 0, ammoRequire: false
        },
        weapon92: {
            id: 'weapon92',
            equip: 'weapon',
            name: '거대삼각자', attackType: ['melee'], point: 4, endurance: 0, ammoRequire: false
        },
        weapon93: {
            id: 'weapon93',
            equip: 'weapon',
            name: '거대콤파스', attackType: ['melee'], point: 4, endurance: 0, ammoRequire: false
        },
        weapon94: {
            id: 'weapon94',
            equip: 'weapon',
            name: '의자', attackType: ['melee'], point: 4, endurance: 0, ammoRequire: false
        },
        weapon96: {
            id: 'weapon96',
            equip: 'weapon',
            name: '대나무', attackType: ['melee'], point: 6, endurance: 0, ammoRequire: false
        },
        weapon97: {
            id: 'weapon97',
            equip: 'weapon',
            name: '목검', attackType: ['cut', 'poke'], point: 12, endurance: 0, ammoRequire: false
        },
        weapon98: {
            id: 'weapon98',
            equip: 'weapon',
            name: '화승총',
            attackType: ['shot', 'melee'],
            point: 20,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'apostle'
        },
        weapon99: {
            id: 'weapon99',
            equip: 'weapon',
            name: '명도마사무네', attackType: ['cut', 'poke'], point: 23, endurance: 0, ammoRequire: false
        },
        weapon100: {
            id: 'weapon100',
            equip: 'weapon',
            name: '일본궁',
            attackType: ['bow', 'melee'],
            point: 18,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon102: {
            id: 'weapon102',
            equip: 'weapon',
            name: '전기인두', attackType: ['poke'], point: 6, endurance: 0, ammoRequire: false
        },
        weapon103: {
            id: 'weapon103',
            equip: 'weapon',
            name: '고장난노트북', attackType: ['throw'], point: 10, endurance: 1, ammoRequire: false
        },
        weapon104: {
            id: 'weapon104',
            equip: 'weapon',
            name: '수리검', attackType: ['throw'], point: 30, endurance: 15, ammoRequire: false
        },
        weapon105: {
            id: 'weapon105',
            equip: 'weapon',
            name: '헤비크로스보우',
            attackType: ['bow', 'melee'],
            point: 30,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon106: {
            id: 'weapon106',
            equip: 'weapon',
            name: '면도칼', attackType: ['cut'], point: 5, endurance: 0, ammoRequire: false
        },
        weapon107: {
            id: 'weapon107',
            equip: 'weapon',
            name: '버터플라이나이프', attackType: ['cut', 'poke'], point: 8, endurance: 0, ammoRequire: false
        },
        weapon108: {
            id: 'weapon108',
            equip: 'weapon',
            name: '화투', attackType: ['throw'], point: 1, endurance: 1, ammoRequire: false
        },
        weapon109: {
            id: 'weapon109',
            equip: 'weapon',
            name: '트럼프카드', attackType: ['throw'], point: 1, endurance: 1, ammoRequire: false
        },
        weapon110: {
            id: 'weapon110',
            equip: 'weapon',
            name: '휴대용게임기', attackType: ['melee'], point: 2, endurance: 0, ammoRequire: false
        },
        weapon111: {
            id: 'weapon111',
            equip: 'weapon',
            name: '비누', attackType: ['melee'], point: 1, endurance: 0, ammoRequire: false
        },
        weapon112: {
            id: 'weapon112',
            equip: 'weapon',
            name: '칫솔', attackType: ['melee'], point: 1, endurance: 0, ammoRequire: false
        },
        weapon113: {
            id: 'weapon113',
            equip: 'weapon',
            name: '요도마사무네', attackType: ['cut', 'poke'], point: 25, endurance: 0, ammoRequire: false
        },
        weapon114: {
            id: 'weapon114',
            equip: 'weapon',
            name: '요도무라마사', attackType: ['cut', 'poke'], point: 23, endurance: 0, ammoRequire: false
        },
        weapon115: {
            id: 'weapon115',
            equip: 'weapon',
            name: 'M16A2',
            attackType: ['shot', 'melee'],
            point: 30,
            endurance: 0,
            ammoRequire: true,
            ammoReload: 30,
            ammoType: '5.56mm'
        },

        // -- armor
        armorDefault: {id: 'armorDefault', equip: 'armor', name: '속옷', type: 'body', material: 'fabric', point: 0, endurance: 0},
        armor0: {id: 'armor0', equip: 'armor', name: '목걸이', type: 'head', point: 1, endurance: 5},
        armor1: {id: 'armor1', equip: 'armor', name: '머리핀', type: 'head', point: 1, endurance: 2},
        armor2: {id: 'armor2', equip: 'armor', name: '안경', type: 'head', point: 1, endurance: 1},
        armor3: {id: 'armor3', equip: 'armor', name: '잡지', type: 'accessory', point: 1, endurance: 2},
        armor4: {id: 'armor4', equip: 'armor', name: '다마고치', type: 'accessory', point: 1, endurance: 3},
        armor5: {id: 'armor5', equip: 'armor', name: 'CD플레이어', type: 'accessory', point: 1, endurance: 3},
        armor6: {id: 'armor6', equip: 'armor', name: '방탄조끼', type: 'accessory', point: 5, endurance: 10},
        armor7: {id: 'armor7', equip: 'armor', name: '등산화', type: 'foot', point: 3, endurance: 5},
        armor8: {id: 'armor8', equip: 'armor', name: '등산모', type: 'head', point: 2, endurance: 3},
        armor9: {id: 'armor9', equip: 'armor', name: '팔찌', type: 'arm', point: 1, endurance: 2},
        armor10: {id: 'armor10', equip: 'armor', name: '털토시', type: 'arm', point: 2, endurance: 3},
        armor11: {id: 'armor11', equip: 'armor', name: '민방위완장', type: 'arm', point: 2, endurance: 3},
        armor12: {id: 'armor12', equip: 'armor', name: '새마을완장', type: 'arm', point: 1, endurance: 2},
        armor13: {id: 'armor13', equip: 'armor', name: '머리띠', type: 'head', point: 1, endurance: 3},
        armor14: {
            id: 'armor14',
            equip: 'armor',
            name: '방화복',
            type: 'body',
            material: 'fabric',
            point: 10,
            endurance: 20
        },
        armor15: {id: 'armor15', equip: 'armor', name: '방화헬멧', type: 'head', point: 3, endurance: 5},
        armor16: {id: 'armor16', equip: 'armor', name: '승복', type: 'body', material: 'fabric', point: 8, endurance: 20},
        armor17: {
            id: 'armor17',
            equip: 'armor',
            name: '신관의옷',
            type: 'body',
            material: 'fabric',
            point: 8,
            endurance: 15
        },
        armor18: {id: 'armor18', equip: 'armor', name: '나막신', type: 'foot', point: 2, endurance: 5},
        armor19: {id: 'armor19', equip: 'armor', name: '작업용헬멧', type: 'head', point: 4, endurance: 5},
        armor20: {
            id: 'armor20',
            equip: 'armor',
            name: '작업복',
            type: 'body',
            material: 'fabric',
            point: 8,
            endurance: 10
        },
        armor21: {id: 'armor21', equip: 'armor', name: '오토바이헬멧', type: 'head', point: 4, endurance: 10},
        armor22: {id: 'armor22', equip: 'armor', name: '리본', type: 'head', point: 1, endurance: 2},
        armor23: {id: 'armor23', equip: 'armor', name: '운동화', type: 'foot', point: 3, endurance: 5},
        armor24: {id: 'armor24', equip: 'armor', name: '주번완장', type: 'arm', point: 3, endurance: 3},
        armor25: {id: 'armor25', equip: 'armor', name: '토시', type: 'arm', point: 2, endurance: 20},
        armor26: {id: 'armor26', equip: 'armor', name: '실내화', type: 'foot', point: 1, endurance: 2},
        armor27: {id: 'armor27', equip: 'armor', name: '녹슨철모', type: 'head', point: 4, endurance: 3},
        armor28: {id: 'armor28', equip: 'armor', name: '흰옷', type: 'body', material: 'fabric', point: 10, endurance: 5},
        armor29: {id: 'armor29', equip: 'armor', name: '장화', type: 'foot', point: 4, endurance: 5},
        armor30: {id: 'armor30', equip: 'armor', name: '갑주', type: 'body', material: 'armor', point: 12, endurance: 20},
        armor31: {
            id: 'armor31',
            equip: 'armor',
            name: '체인메일',
            type: 'body',
            material: 'chain',
            point: 12,
            endurance: 20
        },
        armor32: {id: 'armor32', equip: 'armor', name: '투구', type: 'head', point: 5, endurance: 10},
        armor33: {
            id: 'armor33',
            equip: 'armor',
            name: '가보갑주',
            type: 'body',
            material: 'armor',
            point: 14,
            endurance: 20
        },
        armor34: {id: 'armor34', equip: 'armor', name: '고무신', type: 'foot', point: 2, endurance: 4},
        armor35: {id: 'armor35', equip: 'armor', name: '하이힐', type: 'foot', point: 3, endurance: 3},
        armor36: {id: 'armor36', equip: 'armor', name: '군화', type: 'foot', point: 5, endurance: 5},
        armor37: {id: 'armor37', equip: 'armor', name: '철모', type: 'head', point: 5, endurance: 5},
        armor38: {id: 'armor38', equip: 'armor', name: '조교완장', type: 'arm', point: 5, endurance: 5},
        armor39: {id: 'armor39', equip: 'armor', name: 'MP완장', type: 'arm', point: 4, endurance: 5},
        armor40: {
            id: 'armor40',
            equip: 'armor',
            name: '군복',
            type: 'body',
            material: 'fabric',
            point: 12,
            endurance: 40
        },
        armor41: {id: 'armor41', equip: 'armor', name: '교복', type: 'body', material: 'fabric', point: 5, endurance: 30},
        armor42: {
            id: 'armor42',
            equip: 'armor',
            name: '세라복',
            type: 'body',
            material: 'fabric',
            point: 5,
            endurance: 30
        },
        armor43: {
            id: 'armor43',
            equip: 'armor',
            name: '체육복',
            type: 'body',
            material: 'fabric',
            point: 5,
            endurance: 30
        },
        armor44: {id: 'armor44', equip: 'armor', name: '슬리퍼', type: 'foot', point: 3, endurance: 10},


        // -- stamina
        stamina0: {id: 'stamina0', equip: 'stamina', name: '와일드세븐', point: 20, endurance: 1},
        stamina1: {id: 'stamina1', equip: 'stamina', name: '초콜렛', point: 20, endurance: 1},
        stamina2: {id: 'stamina2', equip: 'stamina', name: '쿠키', point: 20, endurance: 1},
        stamina3: {id: 'stamina3', equip: 'stamina', name: '고구마', point: 20, endurance: 1},
        stamina4: {id: 'stamina4', equip: 'stamina', name: '참마', point: 10, endurance: 1},
        stamina5: {id: 'stamina5', equip: 'stamina', name: '감자', point: 20, endurance: 1},
        stamina6: {id: 'stamina6', equip: 'stamina', name: '우엉', point: 20, endurance: 1},
        stamina7: {id: 'stamina7', equip: 'stamina', name: '당근', point: 20, endurance: 1},
        stamina8: {id: 'stamina8', equip: 'stamina', name: '양파', point: 20, endurance: 1},
        stamina9: {id: 'stamina9', equip: 'stamina', name: '마늘', point: 20, endurance: 1},
        stamina10: {id: 'stamina10', equip: 'stamina', name: '생강', point: 20, endurance: 1},
        stamina11: {id: 'stamina11', equip: 'stamina', name: '카레가루', point: 10, endurance: 1},
        stamina12: {id: 'stamina12', equip: 'stamina', name: '간장', point: 10, endurance: 1},
        stamina13: {id: 'stamina13', equip: 'stamina', name: '소스', point: 10, endurance: 1},
        stamina14: {id: 'stamina14', equip: 'stamina', name: '영양드링크', point: 50, endurance: 1},
        stamina15: {id: 'stamina15', equip: 'stamina', name: '스튜', point: 25, endurance: 1},
        stamina16: {id: 'stamina16', equip: 'stamina', name: '스튜', point: -25, endurance: 1},
        stamina17: {id: 'stamina17', equip: 'stamina', name: '빵', point: 20, endurance: 2},
        stamina18: {id: 'stamina18', equip: 'stamina', name: '건빵', point: 20, endurance: 2},


        // -- heal
        heal0: {id: 'heal0', equip: 'health', name: '위스키', point: 20, endurance: 1},
        heal1: {id: 'heal1', equip: 'health', name: '물', point: 20, endurance: 1},
        heal2: {id: 'heal2', equip: 'health', name: '약', point: 40, endurance: 1},
        heal3: {id: 'heal3', equip: 'health', name: '분말쥬스', point: 30, endurance: 1},
        heal4: {id: 'heal4', equip: 'health', name: '구급약', point: 50, endurance: 3},


        // -- trap
        trap0: {id: 'trap0', equip: 'trap', name: '쥐덫', point: 10, endurance: 1, deploy: false},
        trap1: {id: 'trap1', equip: 'trap', name: '지뢰', point: 8, endurance: 1, deploy: false},
        trap2: {id: 'trap2', equip: 'trap', name: '피아노선', point: 8, endurance: 1, deploy: false},
        trap3: {id: 'trap3', equip: 'trap', name: '강화지뢰', point: 20, endurance: 1, deploy: false},
        trap10: {id: 'trap10', equip: 'trap', name: '쥐덫', point: 10, endurance: 1, deploy: true},
        trap11: {id: 'trap11', equip: 'trap', name: '지뢰', point: 8, endurance: 1, deploy: true},
        trap12: {id: 'trap12', equip: 'trap', name: '피아노선', point: 8, endurance: 1, deploy: true},
        trap13: {id: 'trap13', equip: 'trap', name: '강화지뢰', point: 20, endurance: 1, deploy: true},


        // -- etc
        etc0: {id: 'etc0', equip: 'item', name: '휴대폰', endurance: 1, point: 1},
        etc1: {id: 'etc1', equip: 'item', name: '뇌관', endurance: 1, point: 1},
        etc2: {id: 'etc2', equip: 'item', name: '불꽃놀이', endurance: 1, point: 1},
        etc3: {id: 'etc3', equip: 'item', name: '헤어스프레이', endurance: 1, point: 1},
        etc4: {id: 'etc4', equip: 'item', name: '라이터', endurance: 1, point: 1},
        etc5: {id: 'etc5', equip: 'temp_radar', name: '간이레이더', endurance: 1, point: 1},
        etc6: {id: 'etc6', equip: 'item', name: '샤미센 줄', endurance: 1, point: 1},
        etc7: {id: 'etc7', equip: 'poison', name: '독약', endurance: 1, point: 1},
        etc8: {id: 'etc8', equip: '12gauge', name: '탄환 (샷건)', endurance: 24, point: 1},
        etc9: {id: 'etc9', equip: '9mm', name: '탄환 (9mm)', endurance: 24, point: 1},
        etc10: {id: 'etc10', equip: '22lr', name: '탄환 (22LR)', endurance: 24, point: 1},
        etc12: {id: 'etc12', equip: '357mag', name: '탄환 (매그넘)', endurance: 24, point: 1},
        etc13: {id: 'etc13', equip: '38special', name: '탄환 (.38SP)', endurance: 24, point: 1},
        etc14: {id: 'etc14', equip: '45acp', name: '탄환 (.45ACP)', endurance: 24, point: 1},
        etc15: {id: 'etc15', equip: 'apostle', name: '탄환 (화승총)', endurance: 24, point: 1},
        etc16: {id: 'etc16', equip: 'bow', name: '화살', endurance: 12, point: 1},
        etc17: {id: 'etc17', equip: 'armor_refine', name: '바느질도구', endurance: 1, point: 3},
        etc20: {id: 'etc20', equip: 'weapon_refine', name: '숫돌', endurance: 1, point: 1},
        etc23: {id: 'etc23', equip: 'item', name: '휘발유', endurance: 1, point: 1},
        etc24: {id: 'etc24', equip: 'item', name: '경유', endurance: 1, point: 1},
        etc25: {id: 'etc25', equip: 'item', name: '비료', endurance: 1, point: 1},
        etc26: {id: 'etc26', equip: 'speaker', name: '확성기', endurance: 1, point: 1},
        etc27: {id: 'etc27', equip: 'battery', name: '배터리', endurance: 1, point: 1},
        etc31: {id: 'etc31', equip: 'item', name: '못', endurance: 1, point: 1},
        etc32: {id: 'etc32', equip: 'item', name: '도화선', endurance: 1, point: 1},
        etc34: {id: 'etc34', equip: 'radar', name: '레이더', endurance: 1, point: 1},
        etc35: {id: 'etc35', equip: 'item', name: '화약', endurance: 1, point: 1},
        etc36: {id: 'etc36', equip: 'item', name: '노트북', endurance: 1, point: 1},
        etc37: {id: 'etc37', equip: 'mobilepc', name: '모바일PC', endurance: 0, point: 1},
        etc38: {id: 'etc38', equip: 'item', name: '창대', endurance: 1, point: 1},
        etc39: {id: 'etc39', equip: 'program', name: '프로그램해제키', endurance: 1, point: 1}
    },


    /*
     * ■ 개인 아이템 정의
     */
    personalItems: [
        'etc0',         // 휴대폰
        'stamina0',     // 와일드세븐
        'stamina1',     // 초코렛
        'heal0',        // 위스키
        'stamina2',     // 쿠키
        'weapon106',    // 면도칼
        'weapon107',    // 버터플라이나이프
        'armor1',       // 목걸이
        'etc1',         // 뇌관
        'weapon108',    // 화투
        'weapon109',    // 트럼프카드
        'weapon110',    // 휴대용게임기
        'weapon111',    // 비누
        'weapon112',    // 칫솔
        'etc3',         // 헤어스프레이
        'armor2',       // 안경
        'etc4',         // 라이터
        'armor3',       // 잡지
        'armor4',       // 다마고치
        'armor5'        // CD플레이어
    ],


    /*
     * ■ 보급 아이템 정의
     */
    supplyItems: [
        'weapon1',      // 석궁
        'weapon2',      // 식칼
        'weapon3',      // 손도끼
        'armor6',       // 방탄조끼
        'weapon4',      // 레밍턴M31RS
        'weapon5',      // 나이프
        'weapon6',      // 단도
        'weapon7',      // 잉그램M10 서브머신건
        'etc5',         // 간이레이더
        'weapon8',      // 포크
        'weapon9',      // 금속 배트
        'weapon10',     // 22구경 2연발 데린져
        'weapon11',     // 군용 나이프
        'etc6',         // 샤미센 줄
        'weapon12',     // 월터PPK 9밀리
        'weapon13',     // S&W M19 357 매그넘
        'weapon14',     // 베레타M92F
        'weapon15',     // S&W 치프스페셜 38구경
        'weapon16',     // 콜트357 매그넘 리볼버
        'weapon17',     // 양날 나이프
        'weapon18',     // 브라우닝 하이파워 9mm
        'weapon19',     // 다이버즈 나이프
        'weapon20',     // 다트
        'weapon21',     // 수류탄
        'weapon22',     // S&W M59 오토
        'weapon23',     // 특수경봉
        'weapon24',     // 콜트 하이웨이 패트롤맨 38구경
        'weapon25',     // 낫
        'weapon26',     // 얼음송곳
        'weapon27',     // 눈쳐크
        'weapon28',     // 부메랑
        'weapon29',     // CZ M75
        'weapon30',     // 우지 9mm 서브머신건
        'weapon31',     // 시그 사우엘 P230 9mm
        'weapon32',     // 콜트 거버먼트 45구경
        'weapon33',     // 일본도
        'weapon34',     // 부채
        'weapon35',     // 대야
        'weapon36',     // 슬리퍼
        'weapon37',     // 칠판지우개
        'weapon38',     // 분필
        'weapon39',     // 배트
        'weapon40',     // 너클
        'weapon41',     // 뿅망치
        'etc7'          // 독약
    ],


    /*
     * ■ 조합 아이템 정의
     */
    mixItems: [
        {material: ['etc24', 'etc25'], result: 'etc35'},            // 화약
        {material: ['etc23', 'weapon63'], result: 'weapon42'},      // 화염병
        {material: ['etc1', 'etc35'], result: 'weapon43'},          // 폭탄
        {material: ['etc35', 'etc32'], result: 'weapon54'},         // 다이나마이트
        {material: ['etc35', 'trap1'], result: 'trap3'},            // 강화지뢰
        {material: ['etc3', 'etc4'], result: 'weapon44'},           // 간이화염방사기
        {material: ['weapon67', 'weapon25'], result: 'weapon45'},   // 사슬낫
        {material: ['weapon39', 'etc31'], result: 'weapon46'},      // 못박은배트
        {material: ['weapon96', 'etc31'], result: 'weapon47'},      // 못박은대나무
        {material: ['weapon79', 'weapon96'], result: 'weapon48'},   // 돌도끼
        {material: ['etc20', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
        {material: ['weapon1', 'trap2'], result: 'weapon50'},       // 쇠뇌
        {material: ['weapon96', 'weapon5'], result: 'weapon51'},    // 죽창
        {material: ['etc36', 'etc5'], result: 'etc34'},             // 레이더
        {material: ['weapon110', 'etc5'], result: 'etc34'},         // 레이더
        {material: ['weapon102', 'weapon103'], result: 'etc36'},    // 노트북
        {material: ['etc0', 'etc36'], result: 'etc37'},             // 모바일PC
        {material: ['weapon62', 'etc38'], result: 'weapon52'},      // 언월도
        {material: ['weapon2', 'weapon2'], result: 'weapon53'},     // 쌍칼
        {material: ['weapon96', 'trap2'], result: 'etc38'}          // 창대
    ]
};