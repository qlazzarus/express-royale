/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    var passportLocalMongoose = require('passport-local-mongoose');
    var Schema = mongoose.Schema;

    /*
     $bid,   // 공격자 ID (중복공격 방지)
     $log,   // 이전 액션 로그
     */

    var User = new Schema({
        userGender: Boolean,
        userIcon: String,       // icon2

        // message
        message: String,        // msg2
        messageDying: String,   // dmes2
        messageComment: String, // com2

        // character stats
        attack: Number,     // att
        defence: Number,    // def
        health: Number,     // hit
        maxHealth: Number,  // mhit
        stamina: Number,    // sta
        killCount: Number,  // kill
        level: Number,      // level
        exp: Number,        // exp
        injured: Array,     // inf
        place: Number,      // pls
        status: Number,     // sts

        deathCause: String, // death
        deathAt: Number,    // endtime

        // character extends
        className: String,  // cl
        studentNo: String,  // no
        club: String,       // club
        tactics: Number,    // tactics


        // skills
        shot: Number,   // wg
        cut: Number,    // wn
        throw: Number,  // wc
        fist: Number,   // wp
        bow: Number,    // wa
        melee: Number,  // wb
        bomb: Number,   // wd
        poke: Number,   // ws

        // equip
        weapon:{
            idx: String,    // wep
            attack: Number, // watt
            ammo: Number    // wtai
        },
        armor:{
            head:{
                idx: String,        // bou_h
                defence: Number,    // bdef_h
                endurance: Number   // btai_h
            },
            body:{
                idx: String,        // bou
                defence: Number,    // bdef
                endurance: Number   // btai
            },
            arm:{
                idx: String,        // bou_a
                defence: Number,    // bdef_a
                endurance: Number   // btai_a
            },
            foot:{
                idx: String,        // bou_f
                defence: Number,    // bdef_f
                endurance: Number   // btai_f
            }
        },

        // game items
        item0:{
            idx: String,
            point: Number,
            quantity: Number
        },
        item1:{
            idx: String,
            point: Number,
            quantity: Number
        },
        item2:{
            idx: String,
            point: Number,
            quantity: Number
        },
        item3:{
            idx: String,
            point: Number,
            quantity: Number
        },
        item4:{
            idx: String,
            point: Number,
            quantity: Number
        },
        item5:{
            idx: String,
            point: Number,
            quantity: Number
        },

        // passport properties
        username: {type:String, unique:true, required:true, dropDups:true},
        password: {type:String, required:true},
        last: Number,       // last-login attempt
        attempts: Number    // login attempt
    });

    User.plugin(passportLocalMongoose, require('../config/passport'));
    return mongoose.model('User', User);
};