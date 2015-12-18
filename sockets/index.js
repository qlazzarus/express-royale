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
                    } else if ('runaway' === req.command) {
                        require('./finalize')(io, options, socket, req, res, 'info', true,
                            res.account.username + '은(는) 전속력으로 도망쳤다...');
                    } else if (-1 !== [
                            'meleeSkill', 'shotSkill', 'cutSkill', 'throwSkill', 'fistSkill', 'bowSkill',
                            'pokeSkill', 'bombSkill'
                        ].indexOf(req.command)) {
                        require('./attackTarget')(io, options, socket, req, res);
                    } else if (-1 !== ['item0', 'item1', 'item2', 'item3', 'item4', 'item5'].indexOf(req.command)) {
                        require('./useItem')(io, options, socket, req, res);
                    } else if (-1 !== ['injured', 'injured_body', 'injured_head', 'injured_foot', 'injured_arm'].indexOf(req.command)) {
                        require('./injured')(io, options, socket, req, res);
                    } else {
                        require('./finalize')(io, options, socket, req, res, 'info', true, '');
                    }
                }
            );
        });
    });
};
