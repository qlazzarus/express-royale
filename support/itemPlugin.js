/**
 * Created by monoless on 2016-01-21.
 */
module.exports = (function () {
    return {
        schema: function (stringType, numberType, arrayType) {
            return {
                idx: stringType,
                endurance: numberType,
                point: numberType,
                stats: arrayType
            };
        },

        empty: function() {
            return {
                idx: '',
                endurance: 0,
                point: 0,
                stats: []
            }
        },

        toObject: function (itemId, endurance, point, stats) {
            if ('number' !== typeof endurance) {
                endurance = 0;
            }

            if ('number' !== typeof point) {
                point = 0;
            }

            if ('undefined' === typeof stats) {
                stats = [];
            }

            return {
                idx: itemId,
                endurance: endurance,
                point: point,
                stats: stats
            }
        }
    };
})();