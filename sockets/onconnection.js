/**
 * Created by monoless on 2015-12-10.
 */
module.exports = function(io, options, socket){
    var util = options.container.get('util');
    options.container.get('service').getBasicInfo(
        options.models.getModel('user'),
        options.models.getModel('place'),
        options.models.getModel('server'),
        socket.request.user.username,
        function(err, data){
            console.log('client connected - ' + socket.id);
            if (err) {
                console.log(err);
            } else {
                data.type = 'info';
                data.place = util.arrangePlaceInfo(data.place);
                data.itemList = util.getItem([
                    data.account.weapon.idx,
                    data.account.armor.head.idx,
                    data.account.armor.body.idx,
                    data.account.armor.arm.idx,
                    data.account.armor.foot.idx,
                    data.account.armor.accessory.idx,
                    data.account.item0.idx,
                    data.account.item1.idx,
                    data.account.item2.idx,
                    data.account.item3.idx,
                    data.account.item4.idx,
                    data.account.item5.idx
                ]);

                socket.join(data.account.place);
                socket.join(data.account.username);
                io.sockets.to(data.account.username).emit('recv', data);
            }
        }
    );
};