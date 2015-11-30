/**
 * Created by monoless on 2015-11-30.
 */
module.exports = function(mongoose, modelPath){
    var container = {};

    this.getModel = function(modelName) {
        if (typeof container[modelName] === 'undefined') {
            container[modelName] = require(modelPath + modelName)(mongoose);
        }

        return container[modelName];
    };
};