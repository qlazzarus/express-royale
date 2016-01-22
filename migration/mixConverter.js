#!/usr/bin/env node

var item = require('./../config/items');
var fs = require('fs');
var async = require('async');

async.waterfall([
    function (callback) {
        fs.readFile('./config/items.js', 'utf8', callback);
    },

    function (data, callback) {
        console.log('read complete');
        var queue = [];
        var lines = data.split("\r\n");
        var length = lines.length;
        for (var i = 0; i < length; i++) {
            var result = /\s+(push\s+\(\@tmakeitem,\s+"([^<]+)<>([^<]+)<>([^<]+)<>([^<]+)<>([^<]+)<>([0-9]+)"\);)/g.exec(lines[i]);
            if (null !== result) {
                queue.push({
                    line: i,
                    original: result[1],
                    material: [result[2], result[3]],
                    itemName: result[4],
                    itemType : result[5],
                    point: result[6],
                    endurance: result[7],
                    convert: ''
                });
            }
        }

        callback(null, data, queue);
    },

    function (data, queue, callback) {
        console.log('grep complete');
        for (var i = 0; i < queue.length; i++) {
            var materialOne = false;
            var materialTwo = false;

            for (var o in item.items) {
                var entry = item.items[o];
                if (entry.name === queue[i].material[0]) {
                    queue[i].material[0] = entry.id;
                    materialOne = true;
                }

                if (entry.name === queue[i].material[1]) {
                    queue[i].material[1] = entry.id;
                    materialTwo = true;
                }

                if (true === materialOne && true === materialTwo) {
                    break;
                }
            }
        }

        callback(null, data, queue);
    },


    function (data, queue, callback) {
        console.log('material complete');
        console.log(queue);
        /*
        for (var i = 0; i < queue.length; i++) {
            var materialOne = false;
            var materialTwo = false;

            for (var o in item.items) {
                var entry = item.items[o];
                if (entry.name === queue[i].material[0]) {
                    queue[i].material[0] = entry.id;
                    materialOne = true;
                }

                if (entry.name === queue[i].material[1]) {
                    queue[i].material[1] = entry.id;
                    materialTwo = true;
                }

                if (true === materialOne && true === materialTwo) {
                    break;
                }
            }
        }

        callback(null, data, queue);
        */
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
