/**
 * Created by monoless on 2015-11-30.
 */
module.exports = function (mongoose, modelPath) {
    var container = require('./container');
    var Container = new container();

    var remove = function(model, condition, callback) {
        model.remove(condition, function(err){
            if (err) {
                console.log(err);
                throw new Error('remove failed');
            } else if (typeof callback === 'function') {
                callback();
            }
        });
    };

    var save = function(entry, callback) {
        entry.save(function(err){
            if (err) {
                console.log(err);
                throw new Error('save failed');
            } else if (typeof callback === 'function') {
                callback();
            }
        });
    };

    var saveAll = function(model, entries, callback) {
        model.collection.insert(entries, function(err){
            if (err) {
                console.log(err);
                throw new Error('bulk save failed');
            } else if (typeof callback === 'function') {
                callback();
            }
        });
    };

    var count = function (model, condition, callback) {
        if (typeof condition === 'undefined') {
            condition = {};
        }

        model.count(condition, function(err, result){
            if (err) {
                console.log(err);
                throw new Error('count failed');
            } else if (typeof callback === 'function') {
                callback(result);
            }
        });
    };

    var read = function (model, condition, callback) {
        if (typeof condition === 'undefined') {
            condition = {};
        }

        model.findOne(condition, function(err, entry){
            if (err) {
                console.log(err);
                throw new Error('read failed');
            } else if (typeof callback === 'function') {
                callback(entry);
            }
        });
    };

    var readAll = function(model, condition, fields, options, callback) {
        if ('function' === typeof condition) {
            callback = condition;
            condition = {};
            fields = null;
            options = null;
        } else if ('function' == typeof fields) {
            callback = fields;
            fields = null;
            options = null;
        } else if ('function' == typeof options) {
            callback = options;
            options = null;
        }

        model.find(condition, fields, options, function(err, entries){
            if (err) {
                console.log(err);
                throw new Error('read failed');
            } else if (typeof callback === 'function') {
                callback(entries);
            }
        });
    };

    var model = function (modelName) {
        if (null === Container.get(modelName)) {
            Container.set(modelName, require(modelPath + modelName)(mongoose));
        }

        return Container.get(modelName);
    };

    this.truncateServerFlag = function (callback) {
        var serverModel = model('server');
        remove(serverModel, {}, callback);
    };

    this.addServerFlag = function (callback, status, started, restrictIndex, winner) {
        var serverModel = model('server');
        var server = new serverModel({
            status: status,
            started: started,
            restrictIndex: restrictIndex,
            winner: winner
        });

        save(server, callback);
    };

    this.getServerFlag = function (callback) {
        var serverModel = model('server');
        read(serverModel, {}, callback);
    };

    this.truncateGroups = function (callback) {
        var groupModel = model('group');
        remove(groupModel, {}, callback);
    };

    this.addGroups = function (callback, groups) {
        var groupModel = model('group');
        saveAll(groupModel, groups, callback);
    };

    this.getGroup = function (callback, condition) {
        var groupModel = model('group');
        read(groupModel, condition, callback);
    };

    this.getGroups = function (callback, condition) {
        var groupModel = model('group');
        readAll(groupModel, condition, callback);
    };

    this.truncateNews = function (callback) {
        var newsModel = model('news');
        remove(newsModel, {}, callback);
    };

    this.addNews = function (callback, registerAt, type, message, murder, victim, restrict, restrictReserve) {
        var newsModel = model('news');
        var news = new newsModel({
            registerAt: registerAt,
            type: type,
            message: message,
            murder: murder,
            victim: victim,
            restrict: restrict,
            restrictReserve: restrictReserve
        });

        save(news, callback);
    };

    this.getNews = function (callback) {
        var newsModel = model('news');
        readAll(newsModel, {}, null, {sort:{registerAt: -1}}, callback);
    };

    this.truncateUsers = function (callback) {
        var userModel = model('user');
        remove(userModel, {}, callback);
    };

    this.registerUser = function (callback, object, password) {
        var userModel = model('user');
        userModel.register(
            new userModel(object),
            password,
            callback
        );
    };

    this.addUserByObject = function (callback, object) {
        var userModel = model('user');
        var user = new userModel(object);
        save(user, callback);
    };

    this.authenticateUser = function() {
        var userModel = model('user');
        return userModel.authenticate();
    };

    this.serializeUser = function() {
        var userModel = model('user');
        return userModel.serializeUser();
    };

    this.deserializeUser = function() {
        var userModel = model('user');
        return userModel.deserializeUser();
    };

    this.getUser = function (callback, condition) {
        var userModel = model('user');
        read(userModel, condition, callback);
    };

    this.getUsers = function (callback, condition) {
        var userModel = model('user');
        readAll(userModel, condition, callback);
    };

    this.countUser = function (callback, condition) {
        var userModel = model('user');
        count(userModel, condition, callback);
    };

    this.truncatePlaces = function (callback) {
        var placeModel = model('place');
        remove(placeModel, {}, callback);
    };

    this.addPlaces = function (callback, places) {
        var placeModel = model('place');
        saveAll(placeModel, places, callback);
    };

    this.getPlaces = function (callback, condition) {
        var placeModel = model('place');
        readAll(placeModel, condition, callback);
    };

    this.addNoWinner = function (callback, started, ended) {
        var winnerModel = model('winner');
        var winner = new winnerModel({
            status: 'noWinner',
            started: started,
            ended: ended
        });

        save(winner, callback);
    };

    this.addWinner = function (callback, status, started, ended, user) {
        var winnerModel = model('winner');
        var winner = new winnerModel({
            status: status,
            started: started,
            ended: ended,
            username: user.username,
            userGender: user.userGender,
            userIcon: user.userIcon,
            message: user.message,
            messageDying: user.messageDying,
            messageComment: user.messageComment,
            attack: user.attack,
            defence: user.defence,
            health: user.health,
            maxHealth: user.maxHealth,
            stamina: user.stamina,
            killCount: user.killCount,
            level: user.level,
            requireExp: user.requireExp,
            injured: user.injured,
            groupName: user.groupName,
            studentNo: user.studentNo,
            clubId: user.clubId,
            clubName: user.clubName,
            tactics: user.tactics,
            shotSkill: user.shotSkill,
            cutSkill: user.cutSkill,
            throwSkill: user.throwSkill,
            fistSkill: user.fistSkill,
            bowSkill: user.bowSkill,
            meleeSkill: user.meleeSkill,
            bombSkill: user.bombSkill,
            pokeSkill: user.pokeSkill,
            weapon: user.weapon,
            armor: user.armor,
            item0: user.item0,
            item1: user.item1,
            item2: user.item2,
            item3: user.item3,
            item4: user.item4,
            item5: user.item5
        });

        save(winner, callback);
    };

    this.getWinners = function (callback) {
        var winnerModel = model('winner');
        readAll(winnerModel, {}, null, {sort:{'_id':-1}}, callback);
    };
};