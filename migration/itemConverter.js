#!/usr/bin/env node

var item = require('./../config/items');
var fs = require('fs');
var async = require('async');

async.waterfall([
    function (callback) {
        fs.readFile('./../config/items.js', 'utf8', callback);
    },

    function (data, callback) {
        console.log('read complete');
        var queue = [];
        var lines = data.split("\r\n");
        var length = lines.length;
        for (var i = 0; i < length; i++) {
            var result = /\s+([0-9]+,([^<]+)<>([A-Z0-9]+),([0-9]+),([0-9∞]+),)/g.exec(lines[i]);
            if (null !== result) {
                queue.push({
                    line: i,
                    original: result[1],
                    itemName: result[2],
                    itemType: result[3],
                    point: result[4],
                    endurance: result[5],
                    convert: ''
                });
            }
        }

        callback(null, data, queue);
    },

    function (data, queue, callback) {
        console.log('grep complete');
        for (var i = 0; i < queue.length; i++) {
            for (var o in item.items) {
                var entry = item.items[o];
                if (entry.name === queue[i].itemName) {
                    var stats = '';

                    if (-1 !== ['TO', 'TA', 'TB', 'TC', 'TD', 'TE', 'TF'].indexOf(queue[i].itemType)) {
                        stats = ", ['deploy']";
                    }

                    if (-1 !== ['HD', 'SD'].indexOf(queue[i].itemType)) {
                        stats = ", ['poison']";
                    }

                    if (-1 !== ['HD2', 'SD2'].indexOf(queue[i].itemType)) {
                        stats = ", ['super_poison']";
                    }

                    if ('∞' === queue[i].endurance) {
                        queue[i].endurance = '0';
                    }

                    if ('stamina' === entry.equip) {
                        queue[i].point *= 2;
                    }

                    queue[i].convert = [
                        "itemPlugin.toObject('",
                        entry.id,
                        "', ",
                        queue[i].endurance,
                        ", ",
                        queue[i].point,
                        stats,
                        "),"
                    ].join('');
                    break;
                }
            }
        }

        callback(null, data, queue);
    },

    function (data, queue, callback) {
        console.log('convert complete');
        var lines = data.split("\r\n");
        var queueLength = queue.length;;
        for (var i = 0; i < queueLength; i++) {
            if ('' === queue[i].convert) continue;
            lines[queue[i].line] = lines[queue[i].line].replace(queue[i].original, queue[i].convert);
        }

        callback(null, lines.join("\r\n"));
    },

    function (result) {
        //fs.readFile('./config/items.js', 'utf8', callback);
        fs.writeFile('./config/items2.js', result);
    }
]);
