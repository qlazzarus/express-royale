/**
 * Created by monoless on 2015-11-20.
 */
'use strict';

var socket = io.connect();
var localApp = angular.module('expressRoyale', []);

socket.on('connect', function(){
    console.log('server connected');
});

socket.on('recv', function(data){
    console.log(data);
});