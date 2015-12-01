/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    var passportLocalMongoose = require('passport-local-mongoose');
    var Schema = mongoose.Schema;

    var User = new Schema({
        username: {type:String, unique:true, required:true, dropDups:true},
        password: {type:String, required:true},
        userGender: {type:Boolean, required:true},
        userIcon: {type:String, required:true},
        message: {type:String, required:true},
        messageDying: {type:String, required:true},
        messageComment: {type:String, required:true},
        loggedAt: Date,
        registerAt: Date,
        last: Number,  // last-login attempt
        attempts: Number,   // login attempt
        maxHp : {type:Number, required:true},
        hp : {type:Number, required:true},
        maxStamina : {type:Number, required:true},
        stamina : {type:Number, required:true},
        location : {type:Number, required:true}
    });

    User.plugin(passportLocalMongoose, require('../config/passport'));
    return mongoose.model('User', User);
};