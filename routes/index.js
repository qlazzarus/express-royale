module.exports = function(app, options)
{
    require('./game')(app, options);
    require('./users')(app, options);
};
