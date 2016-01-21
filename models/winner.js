/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
var itemUtil = require('../support/itemPlugin');

module.exports = function (mongoose) {
    return mongoose.model('Winner', {
        status: String,         // 경기 상태
        started: Date,          // 경기 시작일
        ended: Date,            // 경기 종료일
        username: String,
        userGender: Boolean,
        userIcon: String,       // icon2
        message: String,        // msg2
        messageDying: String,   // dmes2
        messageComment: String, // com2
        attack: Number,     // att
        defence: Number,    // def
        health: Number,     // hit
        maxHealth: Number,  // mhit
        stamina: Number,    // sta
        killCount: Number,  // kill
        level: Number,      // level
        requireExp: Number, // exp (minus 되는 구조)
        injured: Array,     // inf
        groupName: String,  // cl
        studentNo: String,  // no
        clubId: Number,     // club
        clubName: String,   // club
        tactics: Number,    // tactics
        shotSkill: Number,   // wg
        cutSkill: Number,    // wn
        throwSkill: Number,  // wc
        fistSkill: Number,   // wp
        bowSkill: Number,    // wa
        meleeSkill: Number,  // wb
        bombSkill: Number,   // wd
        pokeSkill: Number,   // ws

        // equip
        weapon: itemUtil.schema(String, Number, Array),
        armor: {
            head: itemUtil.schema(String, Number, Array),
            body: itemUtil.schema(String, Number, Array),
            arm: itemUtil.schema(String, Number, Array),
            foot: itemUtil.schema(String, Number, Array),
            accessory: itemUtil.schema(String, Number, Array)
        },

        // game items
        item0: itemUtil.schema(String, Number, Array),
        item1: itemUtil.schema(String, Number, Array),
        item2: itemUtil.schema(String, Number, Array),
        item3: itemUtil.schema(String, Number, Array),
        item4: itemUtil.schema(String, Number, Array),
        item5: itemUtil.schema(String, Number, Array)
    });
};