/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
var itemPlugin = require('../support/itemPlugin');

module.exports = function (mongoose) {
    var passportLocalMongoose = require('passport-local-mongoose');
    var Schema = mongoose.Schema;

    var User = new Schema({
        username: {type: String, unique: true, required: true, dropDups: true},
        userGender: Boolean,
        userIcon: String,       // icon2
        ip: String,
        npc: Boolean,

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
        requireExp: Number, // exp (minus 되는 구조)
        injured: Array,     // inf
        place: Number,      // pls
        status: Number,     // sts
        statusChangedAt: Date,
        joinedAt: Date,

        // battle
        prevAttacker: String,   // bid 공격자 ID (중복공격 방지)
        deathCause: String,     // death
        deathType: Number,
        deathAt: Date,          // endtime

        // character extends
        groupName: String,  // cl
        studentNo: String,  // no
        clubId: Number,     // club
        clubName: String,   // club
        tactics: Number,    // tactics


        // skills
        shotSkill: Number,   // wg
        cutSkill: Number,    // wn
        throwSkill: Number,  // wc
        fistSkill: Number,   // wp
        bowSkill: Number,    // wa
        meleeSkill: Number,  // wb
        bombSkill: Number,   // wd
        pokeSkill: Number,   // ws

        // equip
        weapon: itemPlugin.schema(String, Number, Array),
        armor: {
            head: itemPlugin.schema(String, Number, Array),
            body: itemPlugin.schema(String, Number, Array),
            arm: itemPlugin.schema(String, Number, Array),
            foot: itemPlugin.schema(String, Number, Array),
            accessory: itemPlugin.schema(String, Number, Array)
        },

        // game items
        item0: itemPlugin.schema(String, Number, Array),
        item1: itemPlugin.schema(String, Number, Array),
        item2: itemPlugin.schema(String, Number, Array),
        item3: itemPlugin.schema(String, Number, Array),
        item4: itemPlugin.schema(String, Number, Array),
        item5: itemPlugin.schema(String, Number, Array)
    });

    User.plugin(passportLocalMongoose, require('../config/passport'));
    return mongoose.model('User', User);
};