var CurrentPlace = React.createClass({
    render: function () {
        return (
            <span>{this.props.placeName}</span>
        );
    }
});

var PlaceSelector = React.createClass({
    render: function () {
        var options = this.props.options;
        var mapped = [];
        for (var i in options) {
            var option = options[i];
            mapped.push({
                value: option.idx,
                className: (true === option.restrict) ?
                    'restrict' :
                    (true === option.restrictReserve) ?
                        'restrict-reserve' : '',
                optionName: '(' + option.code + ')' + option.name,
            });
        }

        return (
            <select>
                {mapped.map(function (option) {
                    return <option value={option.value} className={option.className}>{option.optionName}</option>;
                })}
            </select>
        );
    }
});

var ExpressRoyale = (function () {
    var that = this;
    var socket = io();

    function initialize() {
        observeEvent();
    }

    function observeEvent() {
        socket.on('recv', receivePacket);
    }

    function receivePacket(data) {
        // check server-flag

        // check account status

        // check data.type
        if (0) {

        } else {
            renderPlace(data.place, data.account.place);
        }
    }

    function renderPlace(places, current) {
        var place = places['place' + current];
        var placeLength = Object.keys(places).length;

        var options = [];
        for (var i = 0; i < placeLength; i++) {
            options.push(places['place' + i]);
        }

        React.render(
            <CurrentPlace placeName={place.name + ' (' + place.code + ')'}/>,
            document.getElementById('currentPlace')
        );

        React.render(
            <PlaceSelector options={options}/>,
            document.getElementById('placeSelector')
        );
    }

    initialize();

    return 'ExpressRoyale';
})();