module.exports = function(app, options)
{
    require('./main')(app, options);
    require('./users')(app, options);
    require('./chat')(app, options);
};
