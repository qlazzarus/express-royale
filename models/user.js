/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    var bcrypt = require('bcrypt-nodejs');
    var userSchema = mongoose.Schema({
        userId: String,
        password: String,
        userName: String,
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
        location : Number
    });

    userSchema.methods.generateHash = function(password){
        return bcrypt.hashSync(password, bcrypt.genSaltSync(8), null);
    };

    userSchema.methods.validPassword = function(password){
        return bcrypt.compareSync(password, this.password);
    };

    return mongoose.model('User', userSchema);
};