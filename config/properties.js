/**
 * Created by monoless on 2015-11-23.
 */
module.exports = {
    'development': {
        'mongoose': 'mongodb://localhost/mean-royale',
        'sessionKey': 'iHaveToGo',
        'game': {
            defaultHp: 100,
            defaultStamina: 300,
            staminaConsume: 25,
            hpRecoverPerSecond: 2,
            staminaRecoverPerSecond: 10
        }
    }
};