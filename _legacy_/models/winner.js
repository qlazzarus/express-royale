/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
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
        weapon: {
            idx: String,
            endurance: Number,
            point: Number
        },
        armor: {
            head: {
                idx: String,
                endurance: Number,
                point: Number
            },
            body: {
                idx: String,
                endurance: Number,
                point: Number
            },
            arm: {
                idx: String,
                endurance: Number,
                point: Number
            },
            foot: {
                idx: String,
                endurance: Number,
                point: Number
            },
            accessory: {
                idx: String,
                endurance: Number,
                point: Number
            }
        },

        // game items
        item0: {
            idx: String,
            endurance: Number,
            point: Number
        },
        item1: {
            idx: String,
            endurance: Number,
            point: Number
        },
        item2: {
            idx: String,
            endurance: Number,
            point: Number
        },
        item3: {
            idx: String,
            endurance: Number,
            point: Number
        },
        item4: {
            idx: String,
            endurance: Number,
            point: Number
        },
        item5: {
            idx: String,
            endurance: Number,
            point: Number
        }
    });
};