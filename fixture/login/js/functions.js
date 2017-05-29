function __(pattern, tokens) {
	var ph = /%s/;

	if (typeof tokens !== 'object') {
		return pattern.replace(ph, tokens);
	} else {
		for (var x = 0; x < tokens.length; x++) {
			pattern = pattern.replace(ph, tokens[x])
		}
		return pattern;
	}
}

function checkDups(team) {
	// checks a team name t, to see whether it already exists
	// in the array of team names
	// returns the index of the array element, or -1 if not found

	var idx = $.inArray(team, league.teams);
	if (idx == -1) {
		dup_err.text('');
	} else {
		dup_err.text(__('%s is already in the team list', team));
	}
	return idx;

} // end checkDups

function genUid(n) {

	var uid = '';	//var uid initially empty
	var possible = new String('ABCDEFGHJKLMNPRTWXYZabcdefghjkmnprstwxyz2346789');	//var possible contains all possible characters
	for (var x=0; x < n; x++) {
		uid = uid + possible[Math.floor(Math.random() * possible.length)];	//math.floor returns largest integer <= input which might be decimal
	}		//uid will be geenrated till 12 in League
	return uid;

} // end genUid

function roundRobin(n) {	//used in league.js

	// if the number of teams is odd, then add a dummy as the 'bye'
	n += (n % 2);	//n will be incrased if n is odd

	var round = Array(n-1);		//create array round of size n-1
	var reverse = Array(n-1);	//create array reverse of size n-1
	for (var x = 1; x < n; x++) {		//from 1 to n incrememnt
		round[x-1] = new Array(n / 2);	//from 0th element to n-1, halve the array
		reverse[x-1] = new Array(n / 2);	//reverse copy of above array
		for (var y = 1; y <= (n / 2); y++) {	//from y to half the array increment
			var first = (y == 1) ? 1 :((x + y - 2) % (n - 1) + 2);	// if y=1, first=1 else ((x + y - 2) % (n - 1) + 2)
			round[x-1][y-1] = [first, ((n - 1 + x - y) % (n - 1) + 2)];
			reverse[x-1][y-1] = [((n - 1 + x -y) % (n - 1) + 2), first];	//for home and away function reverse of 1st round
		}
	}

	//return round;//.concat(reverse);

	return (league.subtype === 0) ? round : round.concat(reverse);

} // end roundRobin

// functino to shuffle an array in a random order
function shuffle(arr) {

	var current = arr.length,
			temp,
			random;

	while (0 !== current) {

		random = Math.floor(Math.random() * current);
		current -= 1;

		temp = arr[current];
		arr[current] = arr[random];
		arr[random] = temp;

		return arr;

	}

} // end shuffle