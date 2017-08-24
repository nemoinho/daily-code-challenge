module.exports = arr => 
    arr.map(x => x===''+x && x.replace(/,/g,'').replace(/$/, ' ') || 1)
        .toString()
	.replace(/^(.)/, ',$1')
        .split(',')
        .reduce(y => ++y, -1)
