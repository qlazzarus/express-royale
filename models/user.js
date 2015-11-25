/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    var bcrypt = require('bcrypt-nodejs');
    var userSchema = mongoose.Schema({
        local            : {
            email        : String,
            password     : String,
        },
        facebook         : {
            id           : String,
            token        : String,
            email        : String,
            name         : String
        },
        twitter          : {
            id           : String,
            token        : String,
            displayName  : String,
            username     : String
        },
        google           : {
            id           : String,
            token        : String,
            email        : String,
            name         : String
        },
        game : {
            maxHp : Number,
            hp : Number,
            maxStamina : Number,
            stamina : Number,
            location : Number
        },
        nickName: String,
        loggedAt: Date,
        registerAt: Date
    });

    userSchema.methods.generateHash = function(password){
        return bcrypt.hashSync(password, bcrypt.genSaltSync(8), null);
    };

    userSchema.methods.validPassword = function(password){
        return bcrypt.compareSync(password, this.local.password);
    };

    return mongoose.model('User', userSchema);
};