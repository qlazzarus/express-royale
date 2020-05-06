module.exports = function (io, options) {
    io.on('connection', function (socket) {
        // connection
        require('./onconnection')(io, options, socket);

        // disconnect
        socket.on('disconnect', function () {
            require('./disconnect')(io, options, socket);
        });

        // res
        socket.on('req', function (req) {
            options.container.get('service').getBasicInfo(
                options.models.getModel('user'),
                options.models.getModel('place'),
                options.models.getModel('server'),
                socket.request.user.username,
                function (err, res) {
                    console.log([socket.id, ' request:', req.command, ' - ', req.value].join(''));
                    if (err) {
                        console.log(err);
                        // TODO error to client
                    } else if ('move' === req.command) {
                        require('./move')(io, options, socket, req, res);

                    } else if ('explore' === req.command) {
                        require('./explore')(io, options, socket, req, res);

                    } else if (-1 !== [
                            'meleeSkill', 'shotSkill', 'cutSkill', 'throwSkill', 'fistSkill', 'bowSkill',
                            'pokeSkill', 'bombSkill'
                        ].indexOf(req.command)) {
                        require('./attackTarget')(io, options, socket, req, res);

                    } else if ('drop' === req.command) {
                        require('./drop')(io, options, socket, req, res);

                    } else if ('use' === req.command) {
                        require('./useItem')(io, options, socket, req, res);

                    } else if ('health' === req.command) {
                        require('./health')(io, options, socket, req, res);

                    } else if ('stamina' === req.command) {
                        require('./stamina')(io, options, socket, req, res);

                    } else if ('backpack' === req.command) {
                        require('./backpack')(io, options, socket, req, res);

                    } else if (-1 !== ['combine', 'combineStart'].indexOf(req.command)) {
                        require('./combine')(io, options, socket, req, res);

                    } else if (-1 !== ['mix', 'mixStart'].indexOf(req.command)) {
                        require('./mix')(io, options, socket, req, res);

                    } else if ('weapon' === req.command) {
                        require('./weapon')(io, options, socket, req, res);

                    } else if ('injured' === req.command) {
                        require('./injured')(io, options, socket, req, res);

                    } else if ('tactics' === req.command) {
                        require('./tactics')(io, options, socket, req, res);

                    } else if ('messageStart' === req.command) {
                        require('./messageStart')(io, options, socket, req, res);

                    } else if ('poisonStart' === req.command) {
                        require('./poisonStart')(io, options, socket, req, res);

                    } else if ('poisonCheck' === req.command) {
                        require('./poisonCheck')(io, options, socket, req, res);

                    } else if ('speaker' === req.command) {
                        require('./speaker')(io, options, socket, req, res);

                    } else if ('hacking' === req.command) {
                        require('./hacking')(io, options, socket, req, res);

                    } else if ('deathGet' === req.command) {
                        require('./deathGet')(io, options, socket, req, res, 'info', true, []);

                    } else if ('message' === req.command) {
                        require('./finalize')(io, options, socket, req, res, 'message', true,
                            '살해시, 사망시의 대사를 변경합니다.');

                    } else if ('runaway' === req.command) {
                        require('./finalize')(io, options, socket, req, res, 'info', true,
                            res.account.username + '은(는) 전속력으로 도망쳤다...');

                    } else if ('special' === req.command) {
                        require('./finalize')(io, options, socket, req, res, 'special', true, '특수 커맨드입니다.');

                    } else {
                        require('./finalize')(io, options, socket, req, res, 'info', true, '');

                    }
                }
            );
        });
    });
};
