/**
 * Created by monoless on 2015-12-01.
 */
var maxClasses = 2;  // 반 숫자
var classPerMan = 21;   // 성별당 최대 수

module.exports = {
    /*
     * ■ 장소
     */
    places: {
        place0: {
            name: '분교',
            code: 'D-6',
            specialize: 'find_plus',    // 발견증가
            message: '분교다. 곧 여기는 금지지역이 되겠구나.\n빨리 이동하지 않으면, 목걸이가 폭발하고 만다...'
        },
        place1: {
            name: '북쪽갑',
            code: 'A-2',
            specialize: 'defence_minus',    // 방어감소
            message: '바다에는 배가 보인다. 탈출하려는 학생들을 감시하고 있는 정부의 배인가...',
            looted: [
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'etc8',
                'etc9',
                'etc10',
                'etc12',
                'etc13',
                'etc14',
                'etc15',
                'etc8',
                'etc9',
                'etc10',
                'etc12',
                'etc13',
                'etc14',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'trap1',
                'trap5',
                'armor7',
                'armor8'
            ]
        },
        place2: {
            name: '북쪽 주택가',
            code: 'B-4',
            specialize: 'defence_plus', // 방어증가
            message: '전에는 여기에서도 사람이 살고 있었겠지. 지금은 폐허로 변했구나.',
            looted: [
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon2',
                'weapon56',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'etc17',
                'etc18',
                'etc19',
                'weapon58',
                'weapon59',
                'weapon60',
                'weapon61',
                'weapon62',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon58',
                'weapon58',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon2',
                'weapon2',
                'weapon2',
                'weapon2',
                'etc20',
                'etc21',
                'etc22',
                'etc20',
                'etc21',
                'etc22',
                'etc20',
                'etc21',
                'etc22',
                'etc20',
                'etc21',
                'etc22',
                'weapon67',
                'weapon67',
                'weapon68',
                'weapon68',
                'etc23',
                'etc23',
                'etc23',
                'etc23',
                'etc24',
                'etc24',
                'etc24',
                'etc24',
                'armor9',
                'armor9',
                'armor9',
                'armor10'
            ]
        },
        place3: {
            name: '면사무소',
            code: 'C-3',
            specialize: 'find_plus',    // 발견증가
            message: '여기가 마을의 중심인가. 지금으로서는 아무도 없는가...',
            looted: [
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'trap2',
                'trap6',
                'trap2',
                'trap6',
                'trap2',
                'trap6',
                'trap2',
                'trap6',
                'trap2',
                'trap6',
                'trap2',
                'trap6',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc26',
                'armor11',
                'armor11',
                'armor11',
                'armor12',
                'armor12',
                'armor12',
                'armor12',
                'armor12'
            ]
        },
        place4: {
            name: '우체국',
            code: 'C-4',
            specialize: 'find_minus',   // 발견감소
            message: '여기서는, 눈에 띄는 것이 없는데...',
            looted: [
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap2',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'armor13',
                'armor13',
                'armor13',
                'armor13'

            ]
        },
        place5: {
            name: '소방서',
            code: 'C-5',
            specialize: 'find_plus',    // 발견증가
            message: '소방서라곤 해도, 소방차조차 없구나.',
            looted: [
                'etc27',
                'etc27',
                'etc27',
                'etc27',
                'etc27',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'weapon69',
                'weapon69',
                'weapon70',
                'weapon70',
                'weapon70',
                'armor14',
                'armor14',
                'armor14',
                'armor15',
                'armor15'
            ]
        },
        place6: {
            name: '관음당',
            code: 'C-6',
            specialize: 'attack_plus',  // 공격증가
            message: '크고 작은 여러가지 불상이 모셔져 있구나. 밤에는 으시시하겠네.',
            looted: [
                'weapon71',
                'weapon72',
                'weapon73',
                'weapon74',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'armor16',
                'armor16',
                'armor16',
                'armor16',
                'armor17',
                'armor17',
                'armor17',
                'armor17',
                'armor17',
                'armor17',
                'armor18',
                'armor18'
            ]
        },
        place7: {
            name: '시미즈 연못',
            code: 'D-4',
            specialize: 'find_plus',    // 발견증가
            message: '맑은 물이 가득 차 있구나.',
            looted: [
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5'
            ]
        },
        place8: {
            name: '서쪽 신사',
            code: 'E-2',
            specialize: 'find_minus',   // 발견감소
            message: '학문의 신들이 모셔져 있는거구나, 틀림없어.',
            looted: [
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'armor18',
                'armor18'
            ]
        },
        place9: {
            name: '호텔 자리',
            code: 'E-4',
            specialize: 'attack_minus', // 공격감소
            message: '이런 장소는 유령이 자주 나올까? 유령같은건 믿지 않지만.',
            looted: [
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon2',
                'weapon56',
                'weapon58',
                'weapon66',
                'weapon65',
                'weapon59',
                'weapon60',
                'weapon61',
                'weapon62',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'weapon58',
                'weapon58',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon65',
                'stamina3',
                'stamina4',
                'stamina5',
                'stamina6',
                'stamina7',
                'stamina8',
                'stamina9',
                'stamina10',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon68',
                'weapon68',
                'weapon68',
                'weapon68',
                'weapon68',
                'weapon68',
                'weapon2',
                'weapon2',
                'weapon2',
                'weapon2',
                'weapon69',
                'weapon69',
                'weapon70',
                'weapon70',
                'weapon28',
                'weapon29',
                'weapon30',
                'weapon28',
                'weapon29',
                'weapon30',
                'weapon28',
                'weapon29',
                'weapon30',
                'weapon28',
                'weapon29',
                'weapon30'
            ]
        },
        place10: {
            name: '터널',
            code: 'E-7',
            specialize: 'defence_minus',    // 방어감소
            message: '깜깜하구나. 이런 곳에서 협공당하면 국물도 없겠군.',
            looted: [
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc31',
                'etc32',
                'etc32',
                'etc32',
                'etc32',
                'etc32',
                'etc32',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'armor19',
                'armor19',
                'armor20',
                'armor20',
                'armor20',
                'armor21',
                'armor21'
            ]
        },
        place11: {
            name: '서쪽 주택가',
            code: 'F-2',
            specialize: 'defence_plus', // 방어증가
            message: '여기도, 다른 주택가와 같이, 모두 폐허로 변했구나...',
            looted: [
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon2',
                'weapon56',
                'weapon58',
                'weapon66',
                'weapon65',
                'weapon59',
                'weapon60',
                'etc17',
                'etc18',
                'etc19',
                'etc17',
                'etc18',
                'etc19',
                'weapon61',
                'weapon58',
                'weapon58',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon63',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon64',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon65',
                'stamina11',
                'stamina12',
                'stamina13',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon2',
                'weapon2',
                'weapon2',
                'weapon2',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'etc33',
                'armor10',
                'armor22',
                'armor22',
                'armor22',
                'armor23',
                'armor23'

            ]
        },
        place12: {
            name: '산악지대',
            code: 'F-5',
            specialize: 'find_plus',    // 발견증가
            message: '이 섬을 한눈에 볼 수 있는 고지대다. 당연히 이곳에 서 있으면, 다른 곳에서도 날 발견할 가능성이 높을 것이다.',
            looted: [
                'etc8',
                'etc9',
                'etc10',
                'etc11',
                'etc12',
                'etc13',
                'etc14',
                'etc15',
                'etc8',
                'etc9',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon76',
                'weapon76',
                'weapon77',
                'weapon78',
                'weapon78',
                'weapon78',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'weapon79',
                'etc32',
                'etc32',
                'etc32',
                'etc32',
                'etc32',
                'etc32',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'armor19',
                'armor19',
                'armor20',
                'armor20',
                'armor20',
                'armor7',
                'armor7',
                'armor8',
                'armor8'
            ]
        },
        place13: {
            name: '절',
            code: 'F-8',
            specialize: 'find_minus',   // 발견감소
            message: '모두 아주 황폐해져 있구나.',
            looted: [
                'weapon80',
                'weapon81',
                'weapon81',
                'weapon81',
                'weapon81',
                'weapon81',
                'weapon81',
                'weapon81',
                'weapon81',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'weapon55',
                'armor13',
                'armor13'
            ]
        },
        place14: {
            name: '학교',
            code: 'G-3',
            specialize: 'attack_minus', // 공격감소
            message: '낮동안의 학교라는 건 좋은 것이지만, 밤의 학교라는 것은 좋은 것이 아니군.',
            looted: [
                'weapon82',
                'weapon82',
                'weapon82',
                'weapon82',
                'weapon82',
                'weapon82',
                'weapon82',
                'weapon83',
                'weapon83',
                'weapon83',
                'weapon83',
                'weapon83',
                'weapon83',
                'weapon84',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon57',
                'weapon84',
                'weapon84',
                'weapon84',
                'weapon85',
                'weapon85',
                'weapon85',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'weapon37',
                'weapon37',
                'weapon37',
                'weapon37',
                'weapon37',
                'weapon87',
                'weapon88',
                'weapon89',
                'weapon90',
                'weapon91',
                'weapon92',
                'weapon93',
                'weapon94',
                'etc26',
                'weapon70',
                'weapon70',
                'armor24',
                'armor24',
                'armor24',
                'armor24',
                'armor25',
                'armor25',
                'armor10',
                'armor26',
                'armor26',
                'armor26'
            ]
        },
        place15: {
            name: '남쪽 신사',
            code: 'G-6',
            specialize: 'find_minus',   // 발견감소
            message: '새집도 썩어서 형편없는 모습을 드러내고 있구나.',
            looted: [
                'weapon96',
                'weapon96',
                'weapon96',
                'weapon96',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'etc16',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'weapon75',
                'armor18',
                'armor18',
                'armor18'

            ]
        },
        place16: {
            name: '삼림지대',
            code: 'H-4',
            specialize: 'find_minus',   // 발견감소
            message: '나무들이 울창하게 자라 있구나. 풀숲에서 갑자기 습격하더라도 알아채지 못할거야...',
            looted: [
                'weapon25',
                'weapon25',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon97',
                'weapon96',
                'weapon96',
                'weapon96',
                'weapon96',
                'armor8',
                'armor8',
                'armor27',
                'armor27'
            ]
        },
        place17: {
            name: '겐지로 연못',
            code: 'H-6',
            specialize: 'find_minus',   // 발견감소
            message: '여기는 연못이라기보다도, 웅덩이구나. 정말 기분 나쁜 곳이야...',
            looted: [
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25',
                'etc25'

            ]
        },
        place18: {
            name: '남쪽 주택가',
            code: 'I-6',
            specialize: 'attack_plus',  // 공격증가
            message: '여기는, 다른 주택가보다, 가게가 많구나. 상점가인가 뭔가였겠지.',
            looted: [
                'weapon2',
                'weapon56',
                'heal3',
                'heal3',
                'heal3',
                'heal3',
                'heal3',
                'heal3',
                'heal3',
                'heal3',
                'weapon58',
                'weapon66',
                'weapon65',
                'weapon59',
                'weapon60',
                'weapon61',
                'weapon58',
                'weapon58',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon56',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon65',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon66',
                'weapon2',
                'weapon2',
                'weapon2',
                'weapon2',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'etc20',
                'weapon67',
                'weapon67',
                'weapon68',
                'weapon68',
                'etc23',
                'etc23',
                'etc23',
                'etc23',
                'etc24',
                'etc24',
                'etc24',
                'etc24',
                'armor9',
                'armor9',
                'armor9'

            ]
        },
        place19: {
            name: '요양소',
            code: 'I-7',
            specialize: 'find_plus',    // 발견증가
            message: '황폐해져 있지만, 찾아보면 아직 사용할 수 있는 약 같은 것이 있을 것 같다...',
            looted: [
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'heal2',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'stamina14',
                'weapon70',
                'weapon70',
                'armor28',
                'armor28',
                'armor28'

            ]
        },
        place20: {
            name: '등대',
            code: 'I-10',
            specialize: 'defence_plus', // 방어증가
            message: '요새로서 점거하면, 견고한 오새가 될듯한데. 바닥에는 말라붙은 혈흔이 많이 있구나. 무슨 일이 있었던거지?',
            looted: [
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina16',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'stamina15',
                'weapon25',
                'weapon25',
                'weapon70',
                'weapon70',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'weapon54',
                'armor29',
                'armor29'
            ]
        },
        place21: {
            name: '남쪽갑',
            code: 'J-6',
            specialize: 'find_plus',    // 발견증가
            message: '병사의 배와... 우승자가 탈 배인가? 몇척의 배가 떠 있다.',
            looted: [
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap0',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'trap4',
                'etc8',
                'etc9',
                'etc10',
                'etc11',
                'etc12',
                'etc13',
                'etc14',
                'etc15',
                'etc8',
                'etc9',
                'etc10',
                'etc11',
                'etc12',
                'etc13',
                'etc14',
                'etc15',
                'etc8',
                'etc9',
                'etc10',
                'etc11',
                'etc12',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'heal1',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'trap1',
                'trap5',
                'armor7',
                'armor8'
            ]
        }
    },


    /*
     * ■ 전역 스폰 아이템
     */
    globalLooted: [
        'etc8',
        'etc9',
        'etc10',
        'etc11',
        'etc12',
        'etc13',
        'etc14',
        'etc15',
        'heal1',
        'heal1',
        'heal1',
        'heal1',
        'heal1',
        'heal1',
        'weapon98',
        'weapon99',
        'weapon114',
        'weapon100',
        'weapon62',
        'armor30',
        'armor31',
        'armor32',
        'armor33',
        'armor34',
        'armor34',
        'armor34',
        'armor34',
        'armor34',
        'armor29',
        'armor29',
        'armor35',
        'armor35',
        'armor35',
        'armor36',
        'armor22',
        'armor22',
        'armor27',
        'armor37',
        'armor38',
        'armor39',
        'armor40',
        'etc34',
        'weapon102',
        'weapon103',
        'etc20',
        'etc20',
        'etc20',
        'etc20',
        'etc20',
        'etc20',
        'weapon2',
        'weapon2',
        'weapon2',
        'weapon2',
        'weapon21',
        'weapon21',
        'weapon21',
        'weapon21',
        'weapon104',
        'weapon104',
        'weapon104',
        'weapon104',
        'weapon104',
        'weapon104',
        'weapon104',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon57',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon55',
        'weapon105',
        'weapon105',
        'weapon105',
        'weapon105'
    ],


    /*
     * ■ 반 번호
     */
    classes: [
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
    maxClasses: maxClasses,   // 반 숫자
    classPerMan: classPerMan,    // 성별당 최대수
    maxRecruitMember: maxClasses * classPerMan * 2,   // 최대등록인원수

    /*
     * ■ 레벨업 베이스 경험치 & 증가량
     */
    expPerLevel: 16,
    expIncrease: 4,

    /*
     * ■숙련도 요구치
     */
    expPerSkillLevel: 20,

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
    maxStamina: 300,

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
    sleepTime: 30,  // 스테미너 회복시간(초) : 30초로 1포인트 회복
    healingRate: 3, // 체력회복비율 : 스테미너의 1/x (0으로 하지 말것)

    /*
     * ■ 아이콘 정의
     */
    icons: [
        {'path': '', 'name': '아이콘을 선택하여 주세요', gender: 'male'},
        {'path': './images/0.jpg', 'name': '남자 1번', gender: 'male'},
        {'path': './images/1.jpg', 'name': '남자 2번', gender: 'male'},
        {'path': './images/2.jpg', 'name': '남자 3번', gender: 'male'},
        {'path': './images/3.jpg', 'name': '남자 4번', gender: 'male'},
        {'path': './images/4.jpg', 'name': '남자 5번', gender: 'male'},
        {'path': './images/5.jpg', 'name': '남자 6번', gender: 'male'},
        {'path': './images/6.jpg', 'name': '남자 7번', gender: 'male'},
        {'path': './images/7.jpg', 'name': '남자 8번', gender: 'male'},
        {'path': './images/8.jpg', 'name': '남자 9번', gender: 'male'},
        {'path': './images/9.jpg', 'name': '남자 10번', gender: 'male'},
        {'path': './images/10.jpg', 'name': '남자 11번', gender: 'male'},
        {'path': './images/11.jpg', 'name': '남자 12번', gender: 'male'},
        {'path': './images/12.jpg', 'name': '남자 13번', gender: 'male'},
        {'path': './images/13.jpg', 'name': '남자 14번', gender: 'male'},
        {'path': './images/14.jpg', 'name': '남자 15번', gender: 'male'},
        {'path': './images/15.jpg', 'name': '남자 16번', gender: 'male'},
        {'path': './images/16.jpg', 'name': '남자 17번', gender: 'male'},
        {'path': './images/17.jpg', 'name': '남자 18번', gender: 'male'},
        {'path': './images/18.jpg', 'name': '남자 19번', gender: 'male'},
        {'path': './images/19.jpg', 'name': '남자 20번', gender: 'male'},
        {'path': './images/20.jpg', 'name': '남자 21번', gender: 'male'},
        {'path': './images/21.jpg', 'name': '여자 1번', gender: 'female'},
        {'path': './images/22.jpg', 'name': '여자 2번', gender: 'female'},
        {'path': './images/23.jpg', 'name': '여자 3번', gender: 'female'},
        {'path': './images/24.jpg', 'name': '여자 4번', gender: 'female'},
        {'path': './images/25.jpg', 'name': '여자 5번', gender: 'female'},
        {'path': './images/26.jpg', 'name': '여자 6번', gender: 'female'},
        {'path': './images/27.jpg', 'name': '여자 7번', gender: 'female'},
        {'path': './images/28.jpg', 'name': '여자 8번', gender: 'female'},
        {'path': './images/29.jpg', 'name': '여자 9번', gender: 'female'},
        {'path': './images/30.jpg', 'name': '여자 10번', gender: 'female'},
        {'path': './images/31.jpg', 'name': '여자 11번', gender: 'female'},
        {'path': './images/32.jpg', 'name': '여자 12번', gender: 'female'},
        {'path': './images/33.jpg', 'name': '여자 13번', gender: 'female'},
        {'path': './images/34.jpg', 'name': '여자 14번', gender: 'female'},
        {'path': './images/35.jpg', 'name': '여자 15번', gender: 'female'},
        {'path': './images/36.jpg', 'name': '여자 16번', gender: 'female'},
        {'path': './images/37.jpg', 'name': '여자 17번', gender: 'female'},
        {'path': './images/38.jpg', 'name': '여자 18번', gender: 'female'},
        {'path': './images/39.jpg', 'name': '여자 19번', gender: 'female'},
        {'path': './images/40.jpg', 'name': '여자 20번', gender: 'female'},
        {'path': './images/41.jpg', 'name': '여자 21번', gender: 'female'}
    ],

    /*
     * ■ 아이템 정의
     */
    items: {
        // -- weapon
        weapon0: {
            name: '맨손', type: ['fist'], attack: 0, ammo: 0, ammoRequire: false
        },
        weapon1: {
            name: '석궁',
            type: ['bow', 'melee'],
            attack: 20,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon2: {
            name: '식칼', type: ['cut', 'poke'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon3: {
            name: '손도끼', type: ['cut'], attack: 17, ammo: 0, ammoRequire: false
        },
        weapon4: {
            name: '레밍턴M31RS',
            type: ['shot', 'melee'],
            attack: 28,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 5,
            ammoType: '12gauge'
        },
        weapon5: {
            name: '나이프', type: ['cut', 'poke'], attack: 17, ammo: 0, ammoRequire: false
        },
        weapon6: {
            name: '단도', type: ['cut', 'poke'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon7: {
            name: '잉그램M10 서브머신건',
            type: ['shot', 'melee'],
            attack: 30,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 32,
            ammoType: '9mm'
        },
        weapon8: {
            name: '포크', type: ['poke'], attack: 7, ammo: 0, ammoRequire: false
        },
        weapon9: {
            name: '금속 배트', type: ['melee'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon10: {
            name: '22구경 2연발 데린져',
            type: ['shot', 'melee'],
            attack: 20,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 2,
            ammoType: '22lr'
        },
        weapon11: {
            name: '군용 나이프', type: ['cut', 'poke', 'throw'], attack: 20, ammo: 1, ammoRequire: false
        },
        weapon12: {
            name: '월터PPK 9밀리',
            type: ['shot', 'melee'],
            attack: 25,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 8,
            ammoType: '9mm'
        },
        weapon13: {
            name: 'S&W M19 357 매그넘',
            type: ['shot', 'melee'],
            attack: 26,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 6,
            ammoType: '357mag'
        },
        weapon14: {
            name: '베레타M92F',
            type: ['shot', 'melee'],
            attack: 25,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 14,
            ammoType: '9mm'
        },
        weapon15: {
            name: 'S&W 치프스페셜 38구경',
            type: ['shot', 'melee'],
            attack: 23,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 5,
            ammoType: '38special'
        },
        weapon16: {
            name: '콜트357 매그넘 리볼버',
            type: ['shot', 'melee'],
            attack: 27,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 6,
            ammoType: '357mag'
        },
        weapon17: {
            name: '양날 나이프', type: ['cut', 'poke'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon18: {
            name: '브라우닝 하이파워 9mm',
            type: ['shot', 'melee'],
            attack: 26,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 14,
            ammoType: '9mm'
        },
        weapon19: {
            name: '다이버즈 나이프', type: ['cut', 'poke'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon20: {
            name: '다트', type: ['throw'], attack: 5, ammo: 12, ammoRequire: false
        },
        weapon21: {
            name: '수류탄', type: ['bomb'], attack: 40, ammo: 2, ammoRequire: false
        },
        weapon22: {
            name: 'S&W M59 오토',
            type: ['shot', 'melee'],
            attack: 24,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 15,
            ammoType: '9mm'
        },
        weapon23: {
            name: '특수경봉', type: ['melee'], attack: 13, ammo: 0, ammoRequire: false
        },
        weapon24: {
            name: '콜트 하이웨이 패트롤맨 38구경',
            type: ['shot', 'melee'],
            attack: 24,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 6,
            ammoType: '38special'
        },
        weapon25: {
            name: '낫', type: ['cut', 'poke'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon26: {
            name: '얼음송곳', type: ['poke'], attack: 8, ammo: 0, ammoRequire: false
        },
        weapon27: {
            name: '눈쳐크', type: ['melee'], attack: 12, ammo: 0, ammoRequire: false
        },
        weapon28: {
            name: '부메랑', type: ['throw'], attack: 9, ammo: 5, ammoRequire: false
        },
        weapon29: {
            name: 'CZ M75',
            type: ['shot', 'melee'],
            attack: 25,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 16,
            ammoType: '9mm'
        },
        weapon30: {
            name: '우지 9mm 서브머신건',
            type: ['shot', 'melee'],
            attack: 30,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 32,
            ammoType: '9mm'
        },
        weapon31: {
            name: '시그 사우엘 P230 9mm',
            type: ['shot', 'melee'],
            attack: 26,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 8,
            ammoType: '9mm'
        },
        weapon32: {
            name: '콜트 거버먼트 45구경',
            type: ['shot', 'melee'],
            attack: 25,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 8,
            ammoType: '45acp'
        },
        weapon33: {
            name: '일본도', type: ['cut', 'poke'], attack: 25, ammo: 0, ammoRequire: false
        },
        weapon34: {
            name: '부채', type: ['melee'], attack: 1, ammo: 0, ammoRequire: false
        },
        weapon35: {
            name: '대야', type: ['melee'], attack: 3, ammo: 0, ammoRequire: false
        },
        weapon36: {
            name: '슬리퍼', type: ['melee'], attack: 2, ammo: 0, ammoRequire: false
        },
        weapon37: {
            name: '칠판지우개', type: ['throw'], attack: 2, ammo: 1, ammoRequire: false
        },
        weapon38: {
            name: '분필', type: ['throw'], attack: 1, ammo: 1, ammoRequire: false
        },
        weapon39: {
            name: '배트', type: ['melee'], attack: 12, ammo: 0, ammoRequire: false
        },
        weapon40: {
            name: '너클', type: ['fist'], attack: 8, ammo: 0, ammoRequire: false
        },
        weapon41: {
            name: '뿅망치', type: ['melee'], attack: 1, ammo: 0, ammoRequire: false
        },
        weapon42: {
            name: '화염병', type: ['bomb'], attack: 15, ammo: 1, ammoRequire: false
        },
        weapon43: {
            name: '폭탄', type: ['bomb'], attack: 60, ammo: 3, ammoRequire: false
        },
        weapon44: {
            name: '간이화염방사기', type: ['bomb'], attack: 10, ammo: 8, ammoRequire: false
        },
        weapon45: {
            name: '사슬낫', type: ['cut', 'melee'], attack: 22, ammo: 0, ammoRequire: false
        },
        weapon46: {
            name: '못박은배트', type: ['melee'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon47: {
            name: '못박은대나무', type: ['melee'], attack: 13, ammo: 0, ammoRequire: false
        },
        weapon48: {
            name: '돌도끼', type: ['melee'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon49: {
            name: '커스텀나이프', type: ['cut', 'poke'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon50: {
            name: '쇠뇌',
            type: ['bow', 'melee'],
            attack: 25,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon51: {
            name: '죽창', type: ['poke'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon52: {
            name: '언월도', type: ['poke'], attack: 40, ammo: 0, ammoRequire: false
        },
        weapon53: {
            name: '쌍칼', type: ['poke'], attack: 35, ammo: 0, ammoRequire: false
        },
        weapon54: {
            name: '다이나마이트', type: ['bomb'], attack: 30, ammo: 8, ammoRequire: false
        },
        weapon55: {
            name: '돌멩이', type: ['throw'], attack: 15, ammo: 5, ammoRequire: false
        },
        weapon56: {
            name: '컵', type: ['throw'], attack: 10, ammo: 4, ammoRequire: false
        },
        weapon57: {
            name: '야구공세트', type: ['throw'], attack: 20, ammo: 30, ammoRequire: false
        },
        weapon58: {
            name: '접시', type: ['throw'], attack: 10, ammo: 4, ammoRequire: false
        },
        weapon59: {
            name: '텔레비젼', type: ['throw'], attack: 20, ammo: 1, ammoRequire: false
        },
        weapon60: {
            name: '테이블', type: ['throw'], attack: 20, ammo: 1, ammoRequire: false
        },
        weapon61: {
            name: '선반', type: ['throw'], attack: 15, ammo: 1, ammoRequire: false
        },
        weapon62: {
            name: '보검', type: ['cut', 'poke'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon63: {
            name: '빈병', type: ['throw'], attack: 1, ammo: 10, ammoRequire: false
        },
        weapon64: {
            name: '빈캔', type: ['throw'], attack: 2, ammo: 10, ammoRequire: false
        },
        weapon65: {
            name: '유리잔', type: ['throw'], attack: 10, ammo: 4, ammoRequire: false
        },
        weapon66: {
            name: '냄비', type: ['throw'], attack: 10, ammo: 4, ammoRequire: false
        },
        weapon67: {
            name: '쇠사슬', type: ['melee'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon68: {
            name: '후라이팬', type: ['melee'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon69: {
            name: '소방용도끼', type: ['cut'], attack: 20, ammo: 0, ammoRequire: false
        },
        weapon70: {
            name: '소화기', type: ['melee'], attack: 12, ammo: 0, ammoRequire: false
        },
        weapon71: {
            name: '관음보살상', type: ['melee'], attack: 5, ammo: 0, ammoRequire: false
        },
        weapon72: {
            name: '염라대왕상', type: ['melee'], attack: 7, ammo: 0, ammoRequire: false
        },
        weapon73: {
            name: '아수라상', type: ['melee'], attack: 10, ammo: 0, ammoRequire: false
        },
        weapon74: {
            name: '지장보살상', type: ['melee'], attack: 8, ammo: 0, ammoRequire: false
        },
        weapon75: {
            name: '양궁',
            type: ['bow', 'melee'],
            attack: 20,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon76: {
            name: '곡괭이', type: ['poke'], attack: 15, ammo: 0, ammoRequire: false
        },
        weapon77: {
            name: '스카프', type: ['poke', 'melee'], attack: 10, ammo: 0, ammoRequire: false
        },
        weapon78: {
            name: '샤벨', type: ['poke', 'melee'], attack: 5, ammo: 0, ammoRequire: false
        },
        weapon79: {
            name: '암석', type: ['throw'], attack: 20, ammo: 8, ammoRequire: false
        },
        weapon80: {
            name: '목탁', type: ['throw'], attack: 1, ammo: 1, ammoRequire: false
        },
        weapon81: {
            name: '솔도파', type: ['melee'], attack: 4, ammo: 0, ammoRequire: false
        },
        weapon82: {
            name: '연필', type: ['poke'], attack: 2, ammo: 0, ammoRequire: false
        },
        weapon83: {
            name: '지우개', type: ['throw'], attack: 1, ammo: 1, ammoRequire: false
        },
        weapon84: {
            name: '플라스크', type: ['throw'], attack: 1, ammo: 1, ammoRequire: false
        },
        weapon85: {
            name: '대걸레', type: ['melee'], attack: 8, ammo: 0, ammoRequire: false
        },
        weapon87: {
            name: '흰분필', type: ['throw'], attack: 2, ammo: 1, ammoRequire: false
        },
        weapon88: {
            name: '빨간분필', type: ['throw'], attack: 2, ammo: 1, ammoRequire: false
        },
        weapon89: {
            name: '노란분필', type: ['throw'], attack: 2, ammo: 1, ammoRequire: false
        },
        weapon90: {
            name: '파란분필', type: ['throw'], attack: 2, ammo: 1, ammoRequire: false
        },
        weapon91: {
            name: '인체모형', type: ['melee'], attack: 3, ammo: 0, ammoRequire: false
        },
        weapon92: {
            name: '거대삼각자', type: ['melee'], attack: 4, ammo: 0, ammoRequire: false
        },
        weapon93: {
            name: '거대콤파스', type: ['melee'], attack: 4, ammo: 0, ammoRequire: false
        },
        weapon94: {
            name: '의자', type: ['melee'], attack: 4, ammo: 0, ammoRequire: false
        },
        weapon96: {
            name: '대나무', type: ['melee'], attack: 6, ammo: 0, ammoRequire: false
        },
        weapon97: {
            name: '목검', type: ['cut', 'poke'], attack: 12, ammo: 0, ammoRequire: false
        },
        weapon98: {
            name: '화승총',
            type: ['shot', 'melee'],
            attack: 20,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'apostle'
        },
        weapon99: {
            name: '명도마사무네', type: ['cut', 'poke'], attack: 23, ammo: 0, ammoRequire: false
        },
        weapon100: {
            name: '일본궁',
            type: ['bow', 'melee'],
            attack: 18,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon102: {
            name: '전기인두', type: ['poke'], attack: 6, ammo: 0, ammoRequire: false
        },
        weapon103: {
            name: '고장난노트북', type: ['throw'], attack: 10, ammo: 1, ammoRequire: false
        },
        weapon104: {
            name: '수리검', type: ['throw'], attack: 30, ammo: 15, ammoRequire: false
        },
        weapon105: {
            name: '헤비크로스보우',
            type: ['bow', 'melee'],
            attack: 30,
            ammo: 0,
            ammoRequire: true,
            ammoReload: 1,
            ammoType: 'bow'
        },
        weapon106: {
            name: '면도칼', type: ['cut'], attack: 5, ammo: 0, ammoRequire: false
        },
        weapon107: {
            name: '버터플라이나이프', type: ['cut', 'poke'], attack: 8, ammo: 0, ammoRequire: false
        },
        weapon108: {
            name: '화투', type: ['throw'], attack: 1, ammo: 1, ammoRequire: false
        },
        weapon109: {
            name: '트럼프카드', type: ['throw'], attack: 1, ammo: 1, ammoRequire: false
        },
        weapon110: {
            name: '휴대용게임기', type: ['melee'], attack: 2, ammo: 0, ammoRequire: false
        },
        weapon111: {
            name: '비누', type: ['melee'], attack: 1, ammo: 0, ammoRequire: false
        },
        weapon112: {
            name: '칫솔', type: ['melee'], attack: 1, ammo: 0, ammoRequire: false
        },
        weapon113: {
            name: '요도마사무네', type: ['cut', 'poke'], attack: 25, ammo: 0, ammoRequire: false
        },
        weapon114: {
            name: '요도무라마사', type: ['cut', 'poke'], attack: 23, ammo: 0, ammoRequire: false
        },

        // -- armor
        armor0: {name: '목걸이', type: 'head', armor: 1, endurance: 5},
        armor1: {name: '머리핀', type: 'head', armor: 1, endurance: 2},
        armor2: {name: '안경', type: 'head', armor: 1, endurance: 1},
        armor3: {name: '잡지', type: 'accessory', armor: 1, endurance: 2},
        armor4: {name: '다마고치', type: 'accessory', armor: 1, endurance: 3},
        armor5: {name: 'CD플레이어', type: 'accessory', armor: 1, endurance: 3},
        armor6: {name: '방탄조끼', type: 'accessory', armor: 5, endurance: 10},
        armor7: {name: '등산화', type: 'foot', armor: 3, endurance: 5},
        armor8: {name: '등산모', type: 'foot', armor: 2, endurance: 3},
        armor9: {name: '팔찌', type: 'arm', armor: 1, endurance: 2},
        armor10: {name: '털토시', type: 'arm', armor: 2, endurance: 3},
        armor11: {name: '민방위완장', type: 'arm', armor: 2, endurance: 3},
        armor12: {name: '새마을완장', type: 'arm', armor: 1, endurance: 2},
        armor13: {name: '머리띠', type: 'head', armor: 1, endurance: 3},
        armor14: {name: '방화복', type: 'body', material: 'fabric', armor: 10, endurance: 20},
        armor15: {name: '방화헬멧', type: 'head', armor: 3, endurance: 5},
        armor16: {name: '승복', type: 'body', material: 'fabric', armor: 8, endurance: 20},
        armor17: {name: '신관의옷', type: 'body', material: 'fabric', armor: 8, endurance: 15},
        armor18: {name: '나막신', type: 'foot', armor: 2, endurance: 5},
        armor19: {name: '작업용헬멧', type: 'head', armor: 4, endurance: 5},
        armor20: {name: '작업복', type: 'body', material: 'fabric', armor: 8, endurance: 10},
        armor21: {name: '오토바이헬멧', type: 'head', armor: 4, endurance: 10},
        armor22: {name: '리본', type: 'head', armor: 1, endurance: 2},
        armor23: {name: '운동화', type: 'foot', armor: 3, endurance: 5},
        armor24: {name: '주번완장', type: 'arm', armor: 3, endurance: 3},
        armor25: {name: '토시', type: 'arm', armor: 2, endurance: 20},
        armor26: {name: '실내화', type: 'foot', armor: 1, endurance: 2},
        armor27: {name: '녹슨철모', type: 'head', armor: 4, endurance: 3},
        armor28: {name: '흰옷', type: 'body', material: 'fabric', armor: 10, endurance: 5},
        armor29: {name: '장화', type: 'foot', armor: 4, endurance: 5},
        armor30: {name: '갑주', type: 'body', material: 'armor', armor: 12, endurance: 20},
        armor31: {name: '체인메일', type: 'body', material: 'chain', armor: 12, endurance: 20},
        armor32: {name: '투구', type: 'head', armor: 5, endurance: 10},
        armor33: {name: '가보갑주', type: 'body', material: 'armor', armor: 14, endurance: 20},
        armor34: {name: '고무신', type: 'foot', armor: 2, endurance: 4},
        armor35: {name: '하이힐', type: 'foot', armor: 3, endurance: 3},
        armor36: {name: '군화', type: 'foot', armor: 5, endurance: 5},
        armor37: {name: '철모', type: 'head', armor: 5, endurance: 5},
        armor38: {name: '조교완장', type: 'arm', armor: 5, endurance: 5},
        armor39: {name: 'MP완장', type: 'arm', armor: 4, endurance: 5},
        armor40: {name: '군복', type: 'body', material: 'fabric', armor: 10, endurance: 40},
        armor41: {name: '교복', type: 'body', material: 'fabric', armor: 5, endurance: 30},
        armor42: {name: '세라복', type: 'body', material: 'fabric', armor: 5, endurance: 30},


        // -- stamina
        stamina0: {name: '와일드세븐', healing: 20, quantity: 1},
        stamina1: {name: '초콜렛', healing: 20, quantity: 1},
        stamina2: {name: '쿠키', healing: 20, quantity: 1},
        stamina3: {name: '고구마', healing: 20, quantity: 1},
        stamina4: {name: '참마', healing: 10, quantity: 1},
        stamina5: {name: '감자', healing: 20, quantity: 1},
        stamina6: {name: '우엉', healing: 20, quantity: 1},
        stamina7: {name: '당근', healing: 20, quantity: 1},
        stamina8: {name: '양파', healing: 20, quantity: 1},
        stamina9: {name: '마늘', healing: 20, quantity: 1},
        stamina10: {name: '생강', healing: 20, quantity: 1},
        stamina11: {name: '카레가루', healing: 10, quantity: 1},
        stamina12: {name: '간장', healing: 10, quantity: 1},
        stamina13: {name: '소스', healing: 10, quantity: 1},
        stamina14: {name: '영양드링크', healing: 50, quantity: 1},
        stamina15: {name: '스튜', healing: 25, quantity: 1},
        stamina16: {name: '스튜', healing: -25, quantity: 1},
        stamina17: {name: '빵', healing: 20, quantity: 2},


        // -- heal
        heal0: {name: '위스키', healing: 20, quantity: 1},
        heal1: {name: '물', healing: 20, quantity: 1},
        heal2: {name: '약', healing: 40, quantity: 1},
        heal3: {name: '분말쥬스', healing: 30, quantity: 1},


        // -- trap
        trap0: {name: '쥐덫', attack: 10, quantity: 1, deploy: false},
        trap1: {name: '지뢰', attack: 8, quantity: 1, deploy: false},
        trap2: {name: '피아노선', attack: 8, quantity: 1, deploy: false},
        trap3: {name: '강화지뢰', attack: 20, quantity: 1, deploy: false},
        trap4: {name: '쥐덫', attack: 10, quantity: 1, deploy: true},
        trap5: {name: '지뢰', attack: 8, quantity: 1, deploy: true},
        trap6: {name: '피아노선', attack: 8, quantity: 1, deploy: true},
        trap7: {name: '강화지뢰', attack: 20, quantity: 1, deploy: true},


        // -- etc
        etc0: {name: '휴대폰', type: 'etc', quantity: 1},
        etc1: {name: '뇌관', type: 'etc', quantity: 1},
        etc2: {name: '불꽃놀이', type: 'etc', quantity: 1},
        etc3: {name: '헤어스프레이', type: 'etc', quantity: 1},
        etc4: {name: '라이터', type: 'etc', quantity: 1},
        etc5: {name: '간이레이더', type: 'temp_radar', quantity: 1},
        etc6: {name: '샤미센 줄', type: 'etc', quantity: 1},
        etc7: {name: '독약', type: 'poison', quantity: 1},
        etc8: {name: '탄환 (샷건)', type: '12gauge', quantity: 24},
        etc9: {name: '탄환 (9mm)', type: '9mm', quantity: 24},
        etc10: {name: '탄환 (22LR)', type: '22lr', quantity: 24},
        etc12: {name: '탄환 (매그넘)', type: '357mag', quantity: 24},
        etc13: {name: '탄환 (.38SP)', type: '38special', quantity: 24},
        etc14: {name: '탄환 (.45ACP)', type: '45acp', quantity: 24},
        etc15: {name: '탄환 (화승총)', type: 'apostle', quantity: 24},
        etc16: {name: '화살', type: 'bow', quantity: 12},
        etc17: {name: '바느질도구', type: 'armor_refine', quantity: 1, refine: 3},
        etc18: {name: '바느질도구', type: 'armor_refine', quantity: 1, refine: 5},
        etc19: {name: '바느질도구', type: 'armor_refine', quantity: 1, refine: 10},
        etc20: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 1},
        etc21: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 3},
        etc22: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 5},
        etc23: {name: '휘발유', type: 'etc', quantity: 1},
        etc24: {name: '경유', type: 'etc', quantity: 1},
        etc25: {name: '비료', type: 'etc', quantity: 1},
        etc26: {name: '확성기', type: 'speaker', quantity: 1},
        etc27: {name: '배터리', type: 'etc', quantity: 1},
        etc28: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 2},
        etc29: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 4},
        etc30: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 6},
        etc31: {name: '못', type: 'etc', quantity: 1},
        etc32: {name: '도화선', type: 'etc', quantity: 1},
        etc33: {name: '숫돌', type: 'weapon_refine', quantity: 1, refine: 10},
        etc34: {name: '레이더', type: 'radar', quantity: 1},
        etc35: {name: '화약', type: 'etc', quantity: 1},
        etc36: {name: '노트북', type: 'etc', quantity: 1},
        etc37: {name: '모바일PC', type: 'etc', quantity: 1},
        etc38: {name: '창대', type: 'etc', quantity: 1}
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
        'armor0',       // 목걸이
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
        {material: ['etc21', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
        {material: ['etc22', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
        {material: ['etc28', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
        {material: ['etc29', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
        {material: ['etc30', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
        {material: ['etc33', 'weapon5'], result: 'weapon49'},       // 커스텀나이프
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