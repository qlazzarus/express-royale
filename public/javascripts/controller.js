var CurrentPlace = React.createClass({
    render: function () {
        var places = this.props.places;
        var current = this.props.current;
        if (typeof places == 'undefined') {
            places = [];
        }

        if (typeof current == 'undefined') {
            current = 0;
        }

        var place = {};
        for (var i in places) {
            place = places[i];
            if (place.idx == 'place' + current) {
                break;
            }
        }

        return (
            <span>{place.name} ({place.code})</span>
        );
    }
});

var PlaceSelector = React.createClass({
    getInitialState: function () {
        return {value: 'place' + this.props.current};
    },

    handleChange: function (event) {
        ExpressRoyale.playerMove(event.target.value, this);
    },

    getMapped: function (places) {
        var mapped = [];
        for (var i in places) {
            var place = places[i];
            mapped.push({
                value: place.idx,
                className: (true === place.restrict) ?
                    'restrict' :
                    (true === place.restrictReserve) ?
                        'restrict-reserve' : '',
                subject: '(' + place.code + ')' + place.name
            });
        }

        return mapped;
    },

    render: function () {
        var mapped = this.getMapped(this.props.places);
        return (
            <select value={this.state.value} onChange={this.handleChange}>
                {mapped.map(function (option) {
                    return <option value={option.value} className={option.className}>{option.subject}</option>;
                })}
            </select>
        );
    }
});

var Selector = React.createClass({
    getInitialState: function () {
        return {value: this.props.current};
    },

    handleChange: function (event) {
        this.setState({value: event.target.value});
    },

    render: function () {
        var mapped = this.props.options;
        return (
            <select value={this.state.value} onChange={this.handleChange}>
                {mapped.map(function (option) {
                    return <option value={option.index}>{option.name}</option>;
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

var BattleInfo = React.createClass({
    render: function () {
        var account = this.props.account;
        var enemy = this.props.enemy;
        var itemSchema = this.props.itemSchema;

        return (
            <div className="solid-bordered row">
                <h5 className="red text-center">전투 발생</h5>
                <div className="col-sm-5 col-sm-offset-1">
                    <img src={account.userIcon} alt=''/><br />
                    {account.username}<br />
                    {account.groupName} ({0 == account.userGender ? '남자' : '여자'}{account.studentNo}번)<br />
                    체력 : {account.health}/{account.maxHealth}<br />
                    무기 : {ExpressRoyale.getItemName(account.weapon.idx, itemSchema)}<br />
                    방어 : {ExpressRoyale.getItemName(account.armor.body.idx, itemSchema)}<br />
                    살해수 : {account.killCount}명
                </div>
                <div className="col-sm-5 col-sm-offset-1">
                    <img src={enemy.userIcon} alt=''/><br />
                    {enemy.username}<br />
                    {enemy.groupName} ({0 == enemy.userGender ? '남자' : '여자'}{enemy.studentNo}번)<br />
                    상태 : <span style={{color:enemy.healthStatusStyle}}>{enemy.healthStatus}</span><br />
                    무기 : {ExpressRoyale.getItemName(enemy.weapon.idx, itemSchema)}<br />
                    방어 : {ExpressRoyale.getItemName(enemy.armor.body.idx, itemSchema)}<br />
                    살해수 : {account.killCount}명
                </div>
            </div>
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
                    <td>{data.attack} + {data.weapon.point}</td>
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
                        var value = {
                            head: '머리',
                            body: '복부',
                            foot: '다리',
                            arm: '팔'
                        }[o];
                        return <span>{value} </span>
                    })}</td>
                </tr>
                </tbody>
            </table>
        );
    }
});

var EquipItem = React.createClass({
    render: function () {
        var items = this.props.items;
        var itemSchema = this.props.itemSchema;

        if (typeof items == 'undefined') {
            items = {armor: {}};
        }

        if (typeof itemSchema == 'undefined') {
            itemSchema = {};
        }

        var equipMapped = [
            {className: 'equip-weapon', category: '[무기]', status: items.weapon},
            {className: 'equip-armor', category: '[방어]', status: items.armor.body},
            {className: 'equip-armor', category: '[머리]', status: items.armor.head},
            {className: 'equip-armor', category: '[팔]', status: items.armor.arm},
            {className: 'equip-armor', category: '[다리]', status: items.armor.foot},
            {className: 'equip-armor', category: '[장식]', status: items.armor.accessory}
        ];
        var itemMapped = ExpressRoyale.showItems(
            [items.item0, items.item1, items.item2, items.item3, items.item4, items.item5],
            itemSchema
        );

        return (
            <div>
                {equipMapped.map(function (o) {
                    var desc = '-';

                    if ('' !== o.status.idx) {
                        desc = ExpressRoyale.getItemDesc(o.status, itemSchema);
                    }

                    return (
                        <dl className="dl-horizontal small-dl bg-equip">
                            <dt className={o.className}>{o.category}</dt>
                            <dd>{desc}</dd>
                        </dl>
                    );
                })}
                <ul className="list-unstyled">
                    {itemMapped.map(function (o) {
                        return (
                            <li className={o.className}>{o.desc}</li>
                        );
                    })}
                </ul>
            </div>
        )
    }
});

var Logger = React.createClass({
    log: [],

    getMapped: function () {
        if (typeof this.props.log === 'string') {
            this.log.push(this.props.log);
        } else if (this.props.log instanceof Array) {
            this.log = this.log.concat(this.props.log);
        }

        var logLength = this.log.length;
        var maxLength = 5;
        if (logLength > maxLength) {
            this.log.splice(0, logLength - maxLength);
        }

        return this.log;
    },

    componentDidUpdate: function () {
        var node = this.getDOMNode();
        node.scrollTop = node.scrollHeight;
    },

    render: function () {
        var mapped = this.getMapped();
        return (
            <div className="solid-bordered status-log">
                {mapped.map(function (o) {
                    return (
                        <p dangerouslySetInnerHTML={{__html: o}}></p>
                    );
                })}
            </div>
        );
    }
});

var Commander = React.createClass({
    getCommandDesc: function (command) {
        var desc = '무엇을 합니까?';
        if ('injured' === command) {
            desc = '어디를 치료합니까?';
        } else if ('combine' === command) {
            desc = '무엇과 무엇을 모읍니까?';
        }

        return desc;
    },

    getItemList: function (item0, item1, item2, item3, item4, item5, itemSchema) {
        var result = [];
        var mapped = [item0, item1, item2, item3, item4, item5];
        for (var i in mapped) {
            var item = mapped[i];
            if ('' !== item.idx) {
                result.push({
                    name: ExpressRoyale.getItemDesc(item, itemSchema),
                    index: 'item' + i,
                    type: ExpressRoyale.getItemType(item.idx, itemSchema)
                });
            }
        }

        return result;
    },

    getInfoCommand: function (account, serverFlag, itemList) {
        var commandList = [
            {
                name: '아이템 정리/합성/장비',
                event: 'backpack',
                className: '',
                type: 'command'
            }
        ];

        if (0 != account.place) {
            commandList.push({
                name: '치료',
                event: 'healing',
                className: 'health',
                type: 'command'
            });
            commandList.push({
                name: '수면',
                event: 'sleep',
                className: 'stamina',
                type: 'command'
            });
        }

        commandList.push({
            name: '응급처치',
            event: 'injured',
            className: '',
            type: 'command'
        });

        commandList.push({
            name: '특수커맨드',
            event: 'special',
            className: 'stamina',
            type: 'command'
        });

        var itemLength = itemList.length;
        if (0 < itemLength) {
            for (var i = itemLength; i > 0; i--) {
                var item = itemList[(i - 1)];
                commandList.unshift({
                    name:  item.name,
                    event: item.index,
                    className: '',
                    type: 'item'
                });
            }
        }

        if (0 != account.place || (0 == account.place && 'hacked' == serverFlag.status)) {
            commandList.unshift({
                name:  '탐색',
                event: 'explore',
                className: '',
                type: 'command'
            });
        }

        return commandList;
    },

    getAttackCommand: function (account, enemy, itemSchema) {
        var weaponInfo = itemSchema[account.weapon.idx];
        var commandList = [];
        var queueList = [
            {name: '때린다', type: 'melee', skill: account.meleeSkill, command: 'meleeSkill'},
            {name: '때린다', type: 'fist', skill: account.fistSkill, command: 'fistSkill'},
            {name: '쏜다', type: 'shot', skill: account.shotSkill, command: 'shotSkill'},
            {name: '쏜다', type: 'bow', skill: account.bowSkill, command: 'bowSkill'},
            {name: '벤다', type: 'cut', skill: account.cutSkill, command: 'cutSkill'},
            {name: '찌른다', type: 'poke', skill: account.pokeSkill, command: 'pokeSkill'},
            {name: '던진다', type: 'throw', skill: account.throwSkill, command: 'throwSkill'},
            {name: '던진다', type: 'bomb', skill: account.bombSkill, command: 'bombSkill'}
        ];

        for (var i in queueList) {
            var queue = queueList[i];
            if (-1 !== weaponInfo.attackType.indexOf(queue.type)) {
                commandList.push({
                    name: queue.name + '(' + queue.skill + ')',
                    event: queue.command,
                    value: enemy.username,
                    className: '',
                    type: 'command'
                });
            }
        }

        commandList.push({name: '도망', event: 'runaway', className: '', type: 'command'});
        return commandList;
    },

    getInjureCommand: function (account) {
        var commandList = [{name: '돌아간다', event: 'info', className: '', type: 'command'}];
        var mapped = [
            {name: '머리', type: 'head'},
            {name: '팔', type: 'arm'},
            {name: '복부', type: 'body'},
            {name: '다리', type: 'foot'}
        ];

        for (var i in mapped) {
            var map = mapped[i];
            if (-1 !== account.injured.indexOf(map.type)) {
                commandList.push({name: map.name, event: 'injured', value: map.type, className: '', type: 'command'});
            }
        }

        return command;
    },

    getBackpackCommand: function (account) {
        var commandList = [
            {name: '돌아간다', event: 'info', className: '', type: 'command'},
            {name: '아이템 정리', event: 'combine', className: '', type: 'command'},
            {name: '아이템 합성', event: 'mix', className: '', type: 'command'}
        ];

        if ('weaponDefault' !== account.weapon.idx) {
            commandList.push({
                name: '장비무기를 벗는다',
                event: 'weapon',
                value: 'unequip',
                className: '',
                type: 'command'
            });
            commandList.push({name: '장비무기를 버린다', event: 'weapon', value: 'drop', className: '', type: 'command'});
        }

        return commandList;
    },

    getItemMixCommand: function (nextEvent, account, itemList) {
        var newItem = itemList.slice(0);
        newItem.unshift({name:'그만둔다', index: 'info'});
        return [{name: '확인', event: nextEvent, value: newItem, className: '', type: 'itemMix'}];
    },

    getCommandList: function (command, account, serverFlag, itemSchema) {
        var commandList = [];
        var itemList = this.getItemList(account.item0, account.item1, account.item2, account.item3,
            account.item4, account.item5, itemSchema);

        if (-1 !== ['info', 'move', 'explore'].indexOf(command)) {
            commandList = this.getInfoCommand(account, serverFlag, itemList);
        } else if ('attackStart' === command) {
            commandList = this.getAttackCommand(account, this.props.enemy, itemSchema);
        } else if ('injured' === command) {
            commandList = this.getInjureCommand(account);
        } else if ('backpack' === command) {
            commandList = this.getBackpackCommand(account);
        } else if (-1 !== ['combine', 'mix'].indexOf(command)) {
            commandList = this.getItemMixCommand(command + 'Start', account, itemList);
        } else {
            commandList.push({
                name:  '돌아간다',
                event: 'info',
                className: '',
                type: 'command'
            });
        }

        return commandList;
    },

    executeCommand: function (command, value) {
        if ('combineStart' === command) {
            var newValue = [];
            for (var i in value) {
                newValue.push(this.refs[value[i]].state.value);
            }

            value = newValue;
        }

        ExpressRoyale.playerCommand(command, value);
    },

    render: function () {
        var that = this;
        var commandDesc = this.getCommandDesc(this.props.command);
        var commandList = this.getCommandList(
            this.props.command,
            this.props.account,
            this.props.serverFlag,
            this.props.itemSchema
        );

        return (
            <div>
                <p className="padding5px">{commandDesc}</p>
                <ul className="list-unstyled">
                    {commandList.map(function (o) {
                        o.className = 'padding3px ' + o.className;
                        if ('item' === o.type) {
                            return (
                                <li className={o.className}>
                                    <button className="input btn btn-sm btn-danger"
                                            onClick={that.executeCommand.bind(that, 'use', o.event)}>
                                        {o.name}
                                    </button>
                                    <button className="input btn btn-sm btn-danger margin3px"
                                            onClick={that.executeCommand.bind(that, 'drop', o.event)}>
                                        버림
                                    </button>
                                </li>
                            );
                        } else if ('itemMix' === o.type) {
                            var itemFrom = <Selector ref="itemFrom" options={o.value} current="info" />;
                            var itemTo = <Selector ref="itemTo" options={o.value} current="info" />;

                            return (
                                <li className={o.className}>
                                    <p>{itemFrom}</p>
                                    <p>{itemTo}</p>
                                    <button className="input btn btn-sm btn-danger"
                                            onClick={that.executeCommand.bind(that, o.event, ['itemFrom', 'itemTo'])}>
                                        {o.name}
                                    </button>
                                </li>
                            );
                        } else {
                            return (
                                <li className={o.className}>
                                    <button className="input btn btn-sm btn-danger"
                                            onClick={that.executeCommand.bind(that, o.event, o.value)}>
                                        {o.name}
                                    </button>
                                </li>
                            );
                        }
                    })}
                </ul>
            </div>
        );
    }
});

var QueueManager = function (socket) {
    var that = this;
    var receivePacketName = 'recv';
    var requestPacketName = 'req';
    var queueId = '';
    var reserveCallback = undefined;

    this.setQueueId = function (id) {
        queueId = id;
    };

    this.getQueueId = function () {
        return queueId;
    };

    this.setReserveCallback = function (callback) {
        reserveCallback = callback;
    };

    this.getReserveCallback = function () {
        return reserveCallback;
    };

    this.generateId = function (length) {
        if (typeof length == 'undefined') {
            length = 10;
        }

        var result = [];
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < length; i++) {
            result.push(possible.charAt(Math.floor(Math.random() * possible.length)));
        }

        return result.join('');
    };

    this.observe = function (callback) {
        socket.on(receivePacketName, function (data) {
            if (!data.queueId) {
                callback(data);
            } else if (data.queueId == that.getQueueId()) {
                callback(data, that.getReserveCallback());
                that.setQueueId('');
                if (typeof that.getReserveCallback() !== 'undefined') {
                    that.setReserveCallback();
                }
                ExpressRoyale.hideLoading();
            }
        });
    };

    this.send = function (data, reserveCallback) {
        if ('' === that.getQueueId()) {
            ExpressRoyale.showLoading();

            that.setQueueId(that.generateId());
            that.setReserveCallback(reserveCallback);

            data.queueId = that.getQueueId();
            socket.emit(requestPacketName, data);
        }
    };
};

var ExpressRoyale = (function () {
    var that = this;
    var socket = io();
    var queueManager = new QueueManager(socket);
    var holders = {};

    function initialize() {
        observeEvent();
    }

    function observeEvent() {
        queueManager.observe(receivePacket);
    }

    function getItemDesc(item, itemSchema) {
        var itemName = getItemName(item.idx, itemSchema);
        var itemInfo = itemSchema[item.idx];
        if (typeof itemInfo === 'undefined') {
            itemInfo = {};
        }

        var result = [itemName, Math.abs(item.point)];
        if (0 < item.endurance
            || ('weapon' === itemInfo.equip && -1 !== itemInfo.attackType.indexOf('shot'))
            || ('weapon' === itemInfo.equip && -1 !== itemInfo.attackType.indexOf('bow'))) {
            result.push(item.endurance);
        }

        return result.join('/');
    }

    function getItemName(itemId, itemSchema) {
        var currentItem = itemSchema[itemId];
        var itemName = '';
        if (typeof currentItem == 'undefined') {
            currentItem = {};
        }

        if (typeof currentItem.name != 'undefined') {
            itemName = currentItem.name;
        }

        return itemName;
    }

    function getItemType(itemId, itemSchema) {
        var currentItem = itemSchema[itemId];
        var itemType = '';
        if (typeof currentItem == 'undefined') {
            currentItem = {};
        }

        if (typeof currentItem.equip != 'undefined') {
            itemType = currentItem.equip;
        }

        return itemType;
    }

    function showItems(itemList, itemSchema) {
        var result = [];
        for (var i in itemList) {
            var item = itemList[i];
            var desc = '';
            var className = '';

            if ('' !== item.idx) {
                desc = getItemDesc(item, itemSchema);
                className = getItemType(item.idx, itemSchema);
            }

            result.push({
                className: className,
                desc: desc
            });
        }

        return result;
    }

    function receivePacket(data, callback) {
        renderInit();

        if (-1 !== ['info', 'move', 'explore'].indexOf(data.type)) {
            renderCharacterInfo(data);
            renderCurrentPlace(data);
            renderPlaceSelector(data);
            renderSkill(data);
            renderItem(data);
            renderCommander(data);
        } else if (-1 !== ['attackStart', 'attackResult'].indexOf(data.type)) {
            renderBattleInfo(data);
            renderCurrentPlace(data);
            renderCommander(data);
        } else if (-1 !== ['injured', 'backpack', 'combine', 'mix'].indexOf(data.type)) {
            renderCharacterInfo(data);
            renderCurrentPlace(data);
            renderSkill(data);
            renderItem(data);
            renderCommander(data);
        }

        renderLog(data.log);

        if (typeof callback !== 'undefined') {
            callback(data.result);
        }
    }

    function getBattleInfoHolder() {
        if (typeof holders.battleInfo == 'undefined') {
            holders.battleInfo = document.getElementById('battleInfo');
        }

        return holders.battleInfo;
    }

    function getCharacterInfoHolder() {
        if (typeof holders.characterInfo == 'undefined') {
            holders.characterInfo = document.getElementById('characterInfo');
        }

        return holders.characterInfo;
    }

    function getCurrentSkillsHolder() {
        if (typeof holders.currentSkills == 'undefined') {
            holders.currentSkills = document.getElementById('currentSkills');
        }

        return holders.currentSkills;
    }

    function getCurrentPlaceHolder() {
        if (typeof holders.currentPlace == 'undefined') {
            holders.currentPlace = document.getElementById('currentPlace');
        }

        return holders.currentPlace;
    }

    function getPlaceSelectorHolder() {
        if (typeof holders.placeSelector == 'undefined') {
            holders.placeSelector = document.getElementById('placeSelector');
        }

        return holders.placeSelector;
    }

    function getEquipItemHolder() {
        if (typeof holders.equipItem == 'undefined') {
            holders.equipItem = document.getElementById('equipItem');
        }

        return holders.equipItem;
    }

    function getCommanderHolder() {
        if (typeof holders.commander == 'undefined') {
            holders.commander = document.getElementById('commander');
        }

        return holders.commander;
    }

    function getLoggerHolder() {
        if (typeof holders.logger == 'undefined') {
            holders.logger = document.getElementById('logger');
        }

        return holders.logger;
    }

    function renderInit() {
        getBattleInfoHolder().style.display = 'none';
        getCharacterInfoHolder().style.display = 'none';
        getCurrentSkillsHolder().style.display = 'none';
        getCurrentPlaceHolder().style.display = 'none';
        getPlaceSelectorHolder().style.display = 'none';
        getEquipItemHolder().style.display = 'none';
        getCommanderHolder().style.display = 'none';
        getLoggerHolder().style.display = 'none';
    }

    function renderBattleInfo(data) {
        getBattleInfoHolder().style.display = 'block';
        React.render(
            <BattleInfo account={data.account} enemy={data.enemy} itemSchema={data.itemList}/>,
            getBattleInfoHolder()
        );
    }

    function renderCharacterInfo(data) {
        getCharacterInfoHolder().style.display = 'block';
        React.render(
            <CharacterInfo data={data.account} tactics={data.config.tactics}/>,
            getCharacterInfoHolder()
        );
    }

    function renderSkill(data) {
        getCurrentSkillsHolder().style.display = 'block';
        React.render(
            <Skills
                skillExp={data.account}
                skillNames={data.config.skills}
                expPerSkillLevel={data.config.expPerSkillLevel}/>,
            getCurrentSkillsHolder()
        );
    }

    function renderCurrentPlace(data) {
        getCurrentPlaceHolder().style.display = 'block';
        React.render(
            <CurrentPlace
                places={data.place}
                current={data.account.place}/>,
            getCurrentPlaceHolder()
        );
    }

    function renderPlaceSelector(data) {
        getPlaceSelectorHolder().style.display = 'block';
        React.render(
            <PlaceSelector
                places={data.place}
                current={data.account.place}/>,
            getPlaceSelectorHolder()
        );
    }

    function renderItem(data) {
        getEquipItemHolder().style.display = 'block';
        React.render(
            <EquipItem
                items={data.account}
                itemSchema={data.itemList}/>,
            getEquipItemHolder()
        );
    }

    function renderCommander(data) {
        getCommanderHolder().style.display = 'block';
        React.render(
            <Commander
                command={data.type}
                account={data.account}
                enemy={data.enemy}
                serverFlag={data.server}
                itemSchema={data.itemList}/>,
            getCommanderHolder()
        );
    }

    function renderLog(log) {
        getLoggerHolder().style.display = 'block';
        React.render(
            <Logger log={log}/>,
            getLoggerHolder()
        );
    }

    function playerMove(nextPlace, placeSelector) {
        queueManager.send({command: 'move', value: nextPlace}, function (result) {
            if (true === result) {
                placeSelector.setState({value: nextPlace});
            }
        });
    }

    function playerCommand(command, value) {
        var commandList = [
            'info',
            'explore',
            'runaway',
            'meleeSkill',
            'shotSkill',
            'cutSkill',
            'throwSkill',
            'fistSkill',
            'bowSkill',
            'pokeSkill',
            'bombSkill',
            'drop',
            'use',
            'injured',
            'backpack',
            'combine',
            'mix',
            'combineStart',
            'mixStart',
            'weapon'
        ];

        if (-1 === commandList.indexOf(command)) {
            return false;
        } else {
            queueManager.send({command: command, value: value});
        }
    }

    function showLoading() {
        if (!document.getElementById('loading')) {
            var loading = document.createElement("div");
            loading.setAttribute('id', 'loading');
            document.body.appendChild(loading);
        }
    }

    function hideLoading() {
        var loading = document.getElementById('loading');
        if (loading) {
            loading.parentNode.removeChild(loading);
        }
    }

    initialize();

    return {
        getItemDesc: getItemDesc,
        getItemName: getItemName,
        getItemType: getItemType,
        showItems: showItems,
        playerMove: playerMove,
        playerCommand: playerCommand,
        showLoading: showLoading,
        hideLoading: hideLoading
    };
})();