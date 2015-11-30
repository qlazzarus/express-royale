/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    var passportLocalMongoose = require('passport-local-mongoose');
    var Schema = mongoose.Schema;

    var User = new Schema({
        username: String,
        password: String,
        userGender: Boolean,
        userIcon: String,
        message: String,
        messageDying: String,
        messageComment: String,
        loggedAt: Date,
        registerAt: Date,
        maxHp : Number,
        hp : Number,
        maxStamina : Number,
        stamina : Number,
        location : Number,
        attempts: Number,   // login attempt
        last: Number   // last-login attempt
    });

    User.plugin(passportLocalMongoose, require('../config/passport'));
    return mongoose.model('User', User);
};