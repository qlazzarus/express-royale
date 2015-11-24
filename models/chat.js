/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    return mongoose.model('Chat', {
        userId: String,
        userName: String,
        message: String
    });
};