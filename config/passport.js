/**
 * Created by monoless on 2015-11-30.
 */
module.exports = {
    usernameLowerCase: true,
    errorMessages: {
        MissingPasswordError: '비밀번호를 입력해주세요',
        AttemptTooSoonError: '계정이 잠겼습니다. 잠시 후 다시 시도하여 주세요.',
        TooManyAttemptsError: '너무 많은 시도로 계정이 잠겼습니다.',
        NoSaltValueStoredError: '로그인이 불가능합니다. Salt Value 를 설정하여 주세요.',
        IncorrectPasswordError: '비밀번호가 잘못되었습니다.',
        IncorrectUsernameError: '존재하지 않는 계정입니다.',
        MissingUsernameError: '아이디를 입력하여 주세요.',
        UserExistsError: '이미 존재하는 이름입니다.'
    }
};