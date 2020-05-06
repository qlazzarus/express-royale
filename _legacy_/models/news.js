/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    return mongoose.model('News', {
        registerAt: Date,
        type: String,
        message: String,
        victim: {
            username: String,
            userGender: Boolean,
            groupName: String,  // cl
            studentNo: String   // no
        },
        murder: {
            username: String,
            userGender: Boolean,
            groupName: String,  // cl
            studentNo: String,  // no
            weaponName: String,
            weaponMethod: String
        },
        restrict: Array,
        restrictReserve: Array
    });
};