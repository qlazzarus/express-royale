/**
 * return location Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    return mongoose.model('Location', {
        locationName: String,
        restrictStart: Date,
        restrictEnd: Date,
        peoplesIn: Array
    });
};