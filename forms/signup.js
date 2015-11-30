/**
 * Created by monoless on 2015. 11. 29..
 */
module.exports = function(password){
    return {
        'userGender': {
            isInt:{
                errorMessage:'성별을 선택해주세요.'
            }
        },
        'userIcon': {
            notEmpty:{
                errorMessage:'아이콘을 선택해주세요.'
            }
        },
        'username': {
            notEmpty:{
                errorMessage:'이름을 입력해주세요.'
            }
        },
        'password': {
            notEmpty:{
                errorMessage:'비밀번호를 입력해주세요.'
            }
        },
        'passwordConfirm': {
            notEmpty:{
                errorMessage:'비밀번호 확인을 입력해주세요.'
            },
            equals:{
                options: [password],
                errorMessage:'비밀번호가 일치하지 않습니다.'
            }
        },
        'message': {
            notEmpty:{
                errorMessage:'대사를 입력해주세요.'
            }
        },
        'messageDying': {
            notEmpty:{
                errorMessage:'유언을 입력해주세요.'
            }
        },
        'messageComment': {
            notEmpty:{
                errorMessage:'자기어필을 입력해주세요.'
            }
        }
    }
};