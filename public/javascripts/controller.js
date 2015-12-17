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
        return {value: 'place' + this.getCurrent()};
    },

    handleChange: function (event) {
        ExpressRoyale.playerMove(event.target.value, this);
    },

    getPlaces: function () {
        var places = this.props.places;
        if (typeof places == 'undefined') {
            places = [];
        }

        return places;
    },

    getCurrent: function () {
        var current = this.props.current;
        if (typeof current == 'undefined') {
            current = 0;
        }

        return current;
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
        var mapped = this.getMapped(this.getPlaces());
        return (
            <select value={this.state.value} onChange={this.handleChange}>
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

var BattleInfo = React.createClass({
    getAccount: function () {
        var account = this.props.account;

        if (typeof account == 'undefined') {
            account = {};
        }

        return account;
    },

    getEnemy: function () {
        var enemy = this.props.enemy;

        if (typeof enemy == 'undefined') {
            enemy = {};
        }

        return enemy;
    },

    getItemSchema: function () {
        var itemSchema = this.props.itemSchema;

        if (typeof itemSchema == 'undefined') {
            itemSchema = {};
        }

        return itemSchema;
    },

    render: function () {
        var account = this.getAccount();
        var enemy = this.getEnemy();
        var itemSchema = this.getItemSchema();

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
                    var desc = ['-'];

                    if ('' !== o.status.idx) {
                        desc = [
                            ExpressRoyale.getItemName(o.status.idx, itemSchema),
                            '/',
                            o.status.point,
                            '/',
                            o.status.endurance
                        ];
                    }

                    return (
                        <dl className="dl-horizontal small-dl bg-equip">
                            <dt className={o.className}>{o.category}</dt>
                            <dd>{desc.join('')}</dd>
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
    getInitialState: function () {
        return {command: ''};
    },

    handleChange: function (value) {
        this.setState({command: value});
    },

    getCommand: function () {
        var command = this.props.command;

        if (typeof command == 'undefined') {
            command = '';
        }

        return command;
    },

    getAccount: function () {
        var account = this.props.account;

        if (typeof account == 'undefined') {
            account = {};
        }

        return account;
    },

    getEnemy: function () {
        var enemy = this.props.enemy;

        if (typeof enemy == 'undefined') {
            enemy = {};
        }

        return enemy;
    },

    getServerFlag: function () {
        var serverFlag = this.props.serverFlag;

        if (typeof serverFlag == 'undefined') {
            serverFlag = {};
        }

        return serverFlag;
    },

    getItemSchema: function () {
        var itemSchema = this.props.itemSchema;

        if (typeof itemSchema == 'undefined') {
            itemSchema = {};
        }

        return itemSchema;
    },

    getExecuteName: function (command) {
        return '확인';
    },

    getCommandDesc: function (command) {
        return '무엇을 합니까?';
    },

    getCommandList: function (command, account, serverFlag, itemSchema) {
        var commandList = [];
        if (-1 !== ['info', 'move', 'explore'].indexOf(command)) {
            commandList = [
                {name: '아이템 정리/합성/장비', value: 'items', className: '', item: false},
                {name: '응급처치', value: 'injured', className: '', item: false},
                {name: '특수커맨드', value: 'special', className: '', item: false}
            ];

            if (0 != account.place) {
                commandList.splice(1, 0, {
                        name: '치료',
                        value: 'health',
                        className: 'health',
                        item: false,
                        target: null
                    },
                    {name: '수면', value: 'stamina', className: 'stamina', item: false});
            }

            var itemList = this.getItemCommandList(account.item0, account.item1, account.item2, account.item3,
                account.item4, account.item5, itemSchema);

            var itemLength = itemList.length;
            if (0 < itemLength) {
                for (var i = itemLength; i > 0; i--) {
                    commandList.unshift(itemList[(i - 1)]);
                }
            }

            if (0 != account.place || (0 == account.place && 'hacked' == serverFlag.status)) {
                commandList.unshift({
                    name: '탐색',
                    value: 'explore',
                    className: '',
                    item: false
                });
            }
        } else if (-1 !== ['attackStart'].indexOf(command)) {
            var weaponInfo = itemSchema[account.weapon.idx];
            var queueList = [
                {name: '때린다', type: 'melee', skill: account.meleeSkill, value: 'meleeSkill'},
                {name: '때린다', type: 'fist', skill: account.fistSkill, value: 'fistSkill'},
                {name: '쏜다', type: 'shot', skill: account.shotSkill, value: 'shotSkill'},
                {name: '쏜다', type: 'bow', skill: account.bowSkill, value: 'bowSkill'},
                {name: '벤다', type: 'cut', skill: account.cutSkill, value: 'cutSkill'},
                {name: '찌른다', type: 'poke', skill: account.pokeSkill, value: 'pokeSkill'},
                {name: '던진다', type: 'throw', skill: account.throwSkill, value: 'throwSkill'},
                {name: '던진다', type: 'bomb', skill: account.bombSkill, value: 'bombSkill'}
            ];

            for (var i in queueList) {
                var queue = queueList[i];
                if (-1 !== weaponInfo.attackType.indexOf(queue.type)) {
                    commandList.push({
                        name: queue.name + '(' + queue.skill + ')',
                        value: queue.value,
                        className: '',
                        item: false
                    });
                }
            }

            commandList.push({name: '도망', value: 'runaway', className: '', item: false});
        } else {
            commandList.push({name: '돌아간다', value: 'info', className: '', item: false});
        }

        return commandList;
    },

    getItemCommandList: function (item0, item1, item2, item3, item4, item5, itemSchema) {
        var result = [];
        var mapped = [item0, item1, item2, item3, item4, item5];
        for (var i in mapped) {
            var item = mapped[i];
            if ('' !== item.idx) {
                result.push({
                    name: [ExpressRoyale.getItemName(item.idx, itemSchema), item.point, item.endurance].join('/'),
                    value: 'item' + i,
                    className: ExpressRoyale.getItemType(item.idx, itemSchema),
                    item: true
                });
            }
        }

        return result;
    },

    executeCommand: function (evt) {
        evt.preventDefault();
        var command = evt.target.cmd.value;
        var enemy = this.getEnemy();

        ExpressRoyale.playerCommand(command, enemy.username);
    },

    render: function () {
        var command = this.getCommand();
        var account = this.getAccount();
        var serverFlag = this.getServerFlag();
        var itemSchema = this.getItemSchema();

        var executeName = this.getExecuteName(command);
        var commandDesc = this.getCommandDesc(command);
        var commandList = this.getCommandList(command, account, serverFlag, itemSchema);

        var that = this;

        return (
            <form onSubmit={this.executeCommand}>
                <p className="padding5px">{commandDesc}</p>
                <ul className="list-unstyled">
                    {commandList.map(function (o, i) {
                        return (
                            <li className={o.className}>
                                <label>
                                    <input type="radio" name="cmd" value={o.value}
                                           onChange={that.handleChange.bind(that, o.value)}
                                           defaultChecked={i == 0 ? true : false}/>
                                    <span className="padding5px">{o.name}</span>
                                </label>
                                {(() => {
                                    if (o.item) {
                                        return (
                                            <label>
                                                &nbsp;(
                                                <span className="padding5px">버림</span>
                                                <input type="radio" name="cmd"
                                                       className="vertical-text-bottom" value={'drop_' + o.value}
                                                       onChange={that.handleChange.bind(that, 'drop_' + o.value)}/>
                                                &nbsp;)
                                            </label>
                                        );
                                    }
                                })()}
                            </li>
                        );
                    })}
                </ul>
                <input type='submit' className="input btn btn-warning bg-red" value={executeName}/>
            </form>
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
            var desc = [];
            var className = '';

            if ('' !== item.idx) {
                desc = [
                    getItemName(item.idx, itemSchema),
                    '/',
                    item.point,
                    '/',
                    item.endurance
                ];

                className = getItemType(item.idx, itemSchema);
            }

            result.push({
                className: className,
                desc: desc.join('')
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
            'drop_item0',
            'drop_item1',
            'drop_item2',
            'drop_item3',
            'drop_item4',
            'drop_item5'
        ];

        if (-1 === commandList.indexOf(command)) {
            console.log(command);
            console.log(value);
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
        getItemName: getItemName,
        getItemType: getItemType,
        showItems: showItems,
        playerMove: playerMove,
        playerCommand: playerCommand,
        showLoading: showLoading,
        hideLoading: hideLoading
    };
})();