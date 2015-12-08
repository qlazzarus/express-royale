/**
 * Created by monoless on 2015-12-08.
 *
 * return groups Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    return mongoose.model('Group', {
        name: String,
        maleCount: Number,
        femaleCount: Number,
        totalCount: Number
    });
};