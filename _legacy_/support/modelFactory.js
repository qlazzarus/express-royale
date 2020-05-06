/**
 * Created by monoless on 2015-11-30.
 */
module.exports = function(mongoose, modelPath){
    var container = require('./container');
    var Container = new container();

    this.getModel = function(modelName) {
        if (null === Container.get(modelName)) {
            Container.set(modelName, require(modelPath + modelName)(mongoose));
        }

        return Container.get(modelName);
    };
};