/**
 * return user Model
 * @param mongoose
 * @returns {Model<T>}
 */
module.exports = function(mongoose){
    return mongoose.model('Server', {
        status: String,         // 경기 상태
        started: Date,          // 경기 시작일
        restrictIndex: Number   // 현재 차단된 지역
    });
};