/**
 * Created by monoless on 2015-12-01.
 */
module.exports = function(){
    var container = {};

    this.get = function(param) {
        if (typeof container[param] === 'undefined') {
            return null;
        } else {
            return container[param];
        }
    };

    this.set = function(param, object) {
        container[param] = object;
    };
};