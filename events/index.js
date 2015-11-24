module.exports = function(io, options)
{
    require('./onconnection')(io, options);
};
