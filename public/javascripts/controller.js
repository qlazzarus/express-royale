var CurrentPlace = React.createClass({
    render: function () {
        var places = this.props.places;
        var current = this.props.current;
        if (typeof places == 'undefined') {
            places = {};
        }

        if (typeof current == 'undefined') {
            current = 0;
        }

        var place = places['place' + current];
        if (typeof place == 'undefined') {
            place = {};
        }

        return (
            <span>{place.name} ({place.code})</span>
        );
    }
});

var PlaceSelector = React.createClass({
    render: function () {
        var places = this.props.places;
        var current = this.props.current;
        if (typeof places == 'undefined') {
            places = {};
        }

        if (typeof current == 'undefined') {
            current = 0;
        }

        var placeLength = Object.keys(places).length;
        var mapped = [];
        for (var i = 0; i < placeLength; i++) {
            var place = places['place' + i];
            mapped.push({
                value: place.idx,
                className: (true === place.restrict) ?
                    'restrict' :
                    (true === place.restrictReserve) ?
                        'restrict-reserve' : '',
                subject: '(' + place.code + ')' + place.name
            });
        }

        return (
            <select value={'place' + current}>
                {mapped.map(function (option) {
                    return <option value={option.value} className={option.className}>{option.subject}</option>;
                })}
            </select>
        );
    }
});

var Skills = React.createClass({
    render: function () {
        var mapped = [];
        var skillExp = this.props.skillExp;
        var skillNames = this.props.skillNames;
        var expPerSkillLevel = this.props.expPerSkillLevel;

        if (typeof skillExp == 'undefined') {
            skillExp = {};
        }

        if (typeof skillNames == 'undefined') {
            skillNames = {};
        }

        if (typeof expPerSkillLevel == 'undefined') {
            expPerSkillLevel = 1;
        }

        for (var i in skillNames) {
            mapped.push({
                name: skillNames[i],
                exp: skillExp[i],
                level: Math.floor(skillExp[i] / expPerSkillLevel)
            });
        }

        return (
            <ul className="list-inline solid-bordered padding3px">
                {mapped.map(function (option) {
                    return <li className='list-inline-custom'>{option.name} : {option.level} ({option.exp})</li>;
                })}
            </ul>
        );
    }
});

var CharacterInfo = React.createClass({
    render: function () {
        var colStyle = {width: '80px'};
        var data = this.props.data;
        var tactics = this.props.tactics;
        var currentTactics = '보통';
        if (typeof data == 'undefined') {
            data = {};
        }

        if (typeof tactics == 'undefined') {
            tactics = [];
        }

        if (typeof tactics[data.tactics] != 'undefined') {
            currentTactics = tactics[data.tactics].name;
        }

        return (
            <table className="table table-bordered">
                <colgroup>
                    <col style={colStyle}/>
                    <col />
                </colgroup>
                <tbody>
                <tr>
                    <td><img src={data.userIcon} alt=''/></td>
                    <td className="text-center">
                        {data.username}<br />
                        {'Lv ' + data.level}<br />
                        {'(Lv ' + (data.level + 1) + ' 까지 ' + data.requireExp + ' 남음)'}
                    </td>
                </tr>
                <tr>
                    <th>체력</th>
                    <td className="health">{data.health} / {data.maxHealth}</td>
                </tr>
                <tr>
                    <th>스테미너</th>
                    <td className="stamina">{data.stamina}</td>
                </tr>
                <tr>
                    <th>공격력</th>
                    <td>{data.attack} + {data.weapon.endurance}</td>
                </tr>
                <tr>
                    <th>방어력</th>
                    <td>{data.defence} + {data.armor.arm.point + data.armor.body.point + data.armor.foot.point +
                    data.armor.head.point + data.armor.accessory.point}</td>
                </tr>
                <tr>
                    <th>클럽</th>
                    <td>{data.clubName}</td>
                </tr>
                <tr>
                    <th>기본방침</th>
                    <td>{currentTactics}</td>
                </tr>
                <tr>
                    <th>부상부위</th>
                    <td>{data.injured.map(function (o) {
                        return <span>{o}</span>
                    })}</td>
                </tr>
                </tbody>
            </table>
        );
    }
});

var EquipItem = React.createClass({
    render: function(){
        var items = this.props.items;
        var itemSchema = this.props.itemSchema;

        if (typeof items == 'undefined') {
            items = {};
        }

        if (typeof itemSchema == 'undefined') {
            itemSchema = {};
        }

        console.log(items);
        console.log(itemSchema);

        return (
            <div>
                <dl className="dl-horizontal small-dl bg-equip">
                    <dt className="equip-weapon">[무기]</dt>
                    <dd className="equip-weapon"></dd>
                    <dt className="equip-armor">[방어]</dt>
                    <dd className="equip-armor"></dd>
                    <dt className="equip-armor">[머리]</dt>
                    <dd className="equip-armor"></dd>
                    <dt className="equip-armor">[팔]</dt>
                    <dd className="equip-armor"></dd>
                    <dt className="equip-armor">[다리]</dt>
                    <dd className="equip-armor"></dd>
                    <dt className="equip-armor">[장식]</dt>
                    <dd className="equip-armor"></dd>
                </dl>
                <ul className="list-unstyled">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        )
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
            renderCharacterInfo(data.account, data.config.tactics);
            renderPlace(data.place, data.account.place);
            renderSkill(data.account, data.config.skills, data.config.expPerSkillLevel);
            renderItem(data.account, data.itemList);
        }
    }

    function renderCharacterInfo(data, tactics) {
        React.render(
            <CharacterInfo data={data} tactics={tactics}/>,
            document.getElementById('characterInfo')
        );
    }

    function renderSkill(data, skills, expPerSkillLevel) {
        React.render(
            <Skills
                skillExp={data}
                skillNames={skills}
                expPerSkillLevel={expPerSkillLevel}/>,
            document.getElementById('currentSkills')
        );
    }

    function renderPlace(places, current) {
        React.render(
            <CurrentPlace
                places={places}
                current={current} />,
            document.getElementById('currentPlace')
        );

        React.render(
            <PlaceSelector
                places={places}
                current={current}/>,
            document.getElementById('placeSelector')
        );
    }

    function renderItem(items, itemSchema) {
        React.render(
            <EquipItem
                items={items}
                itemSchema={itemSchema} />,
            document.getElementById('equipItem')
        )
    }

    initialize();

    return 'ExpressRoyale';
})();