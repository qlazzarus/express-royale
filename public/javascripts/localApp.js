/**
 * Created by monoless on 2015-11-20.
 */
'use strict';

var socket = io.connect();
var localApp = angular.module('expressRoyale', []);
var chatBody = $('#chatBody');

localApp.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });
                event.preventDefault();
            }
        });
    };
});

localApp.factory(
    'ChatCreator',
    [
        '$http',
        function ($http) {
            return {
                postMessage: function (message, callback) {
                    $http
                        .post('/message', message)
                        .success(function (data, status) {
                            callback(data, false);
                        })
                        .error(function (data, status) {
                            callback(data, true);
                        });
                },
                getMessage: function (callback) {
                    $http
                        .get('/message')
                        .success(function (data, status) {
                            callback(data, false);
                        })
                        .error(function (data, status) {
                            callback(data, true);
                        });
                }
            }
        }
    ]
);

localApp.controller(
    'ChatController',
    [
        '$scope',
        'ChatCreator',
        function ($scope, ChatCreator) {
            $scope.chatInput = '';
            $scope.messages = [];

            ChatCreator.getMessage(function(result, error){
                if (error) {
                    window.alert('Error loading DB');
                    return;
                } else {
                    $scope.messages = result;
                    $scope.$apply();
                    chatBody.animate({ scrollTop: chatBody.prop("scrollHeight")}, 1000);
                }
            });

            //receive new messages from chat
            socket.on('broadcastMessage', function (data) {
                $scope.messages.push(data);
                $scope.$apply();
                chatBody.animate({ scrollTop: chatBody.prop("scrollHeight")}, 1000);
            });

            //send a message to the server
            $scope.sendMessage = function () {
                if ('' !== $scope.chatInput) {
                    ChatCreator.postMessage({'message': $scope.chatInput}, function (result, error) {
                        if (error) {
                            window.alert('Error saving to DB');
                            return;
                        }
                        $scope.chatInput = '';
                    });
                }
            };
        }
    ]
);