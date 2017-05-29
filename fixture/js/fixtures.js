/*
Developed by Rubin and Ujval
Contents or functions of file
redraw with reference to BUILD function in functions.js
1.Title and subtitle, dont redraw league functions
2.Formats input suboption DISPLAY functions, ie, seeded, home away, etc
3.2 functions for RR homeaway and DE random displaying
4. function for sortable input for teams DELETION of items and redrawing league when deleted
5. function for sortable input EDITING
*/

function initFixtures() {
//the title and subtitle functions linked to the html code on being changed mustnt redraw the league
	$('#c_title').on('change', function() {
		league.title = this.value;	//take value from box as title
		league.redraw(false);	//dont redraw league if changed
	});

	$('#c_subtitle').on('change', function() {
		league.subtitle = this.value;	//take subtitle	
		league.redraw(false);	//dont redraw league if changed
	});

	//this function is so the appropriate suboption radio buttons are SHOWN, note that DE options are present BY DEFAULT
	$('#formats input[name=c_format]').on('click', function() {
		if (this.value === 'rr') {		//rr options is the html name for the RR radio SUBOPTION buttons, while rr is the value is round robin is selected
			$('#rr_options').show().next().hide();	//for RR type, SHOW RR options, and league type is 0
			league.type = 0;
		} else if (this.value === 'de') {	//if format value in html file is de
			$('#rr_options').hide().next().show();	//for DE, HIDE RR options, league type is 1
			league.type = 1;
		}
		league.redraw(true);	//redraw league when these are clicked
	})
	
	//the below functions are for changing the league subtypes for DE and RR, since Seeded and Once only are selected BY DEFAULT when league is selected
	//do this if homeaway is selected in rr subotion
	$('#formats input[name=rr_sub]').on('click', function() {
		if (this.value === 'homeaway') {		//if subotion value is homeaway
			league.subtype = 1;		//league sybtype is 1 for homeaway for RR
		} else {
			league.subtype = 0;
		}
		league.redraw(true);	//redraw league
	})

		//do this if freedraw or random draw  for DE is selected in rr suboption
	$('#formats input[name=de_sub]').on('click', function() {
		if (this.value === 'freedraw') {
			league.subtype = 1;
		} else {
			league.subtype = 0;
		}
		league.redraw(true);
	})

	//not used, if you want to export the output
	$('#export').on('click', function() {
		// do something with $('#format option:selected').val();
	})

	$('input[name="period"]').on('change', function() {
		
		if ($(this).val() == 'other') {
			$('#otherperiod').removeAttr('disabled');
		} else {
			$('#otherperiod').attr('disabled', 'disabled');
			if ($(this).val() == 'day') {
				league.dateint = 1;
			} else if ($(this).val() == 'week') {
				league.dateint = 7;
			}
		}
		league.redraw();
		
	})
//otherperiod in the html is for specifying day interval other than weekly or daily
	$('#otherperiod').on('change', function() {
		league.dateint = Number($(this).val());	//dateint is in League.js variable for intervals between rounds in RR
		league.redraw();	//redraw if this is changed
	})

//for .sortable min js file which is used while entering team names to delete items
	$('.sortable').on('click', '.team_delete', function() {
		$(this).parent().parent().remove();
		league.build();	//rebuild league on deletion
	})

//for sortable min js editing
	$('.sortable').on('click', '.team_edit', function() {
		// when edit button is clicked, turn the label into an input box
		var lbl = $(this).parent().parent().find('.team_name');		//linked to team name in functions.js in BUILD function in functions.js
		var team = lbl.text();
		lbl.replaceWith(__('<input class="rename" autofocus="on" type="text" value="%s" />', team));
	}).on('change', '.rename', function() {
		var newname = $(this).val();
		idx = $(this).parent().index();
		// see if the new team already exists
		// if it doesn't replace the array element selected with the new name
		if (checkDups(newname) == -1) {		//checkdups function is in functions.js
			league.teams[idx] = newname;
			$(this).replaceWith(__('<span class="team_name">%s</span>', newname));
			league.build();		//rebuild league with nee edited name of team
		}	else {
			$(this).replaceWith(__('<span class="team_name">%s</span>', league.teams[idx]));	//old name is retained no rebuilding of league
		}
	})

	$('#c_newteam').on('change', function() {
		var slist = $('#schedule');
		var t = this.value.replace(/&/g, '&amp;')
											.replace(/</g, '&lt;')
											.replace(/>/g, '&gt;')
											.replace(/%s/, '')
											.replace(/"/g, '');

		// check to see if entered team already exists in list
		if (checkDups(t) == -1) {
			app = __(c, t);
			list.sortable('destroy'); // delete the current sortable list
			list.append (app);
			list.sortable({	handle: '.handle'	}); // then make it sortable again with new element
		}
		this.value = '';
		league.build();
	})	
	
	$('.sortable').sortable({ handle: '.handle' }).bind('sortupdate', function() {
		// called when sorting finished
		league.build();
	});

} // end initfixtures
