/**
 * Created by monoless on 2015-12-08.
 *
 * return places Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    return mongoose.model('Place', {
        idx: String,
        name: String,
        code: String,
        restrict: Boolean,
        restrictReserve: Boolean,
        items: Array
    });
};