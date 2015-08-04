	function askAudience () {
		alert("Shows a diagram of the audience's vote.");
		$('#aud').prop('disabled', true);
	}

	function fiftyFifty() {
		alert('Eliminates two of the possible answers.');
		$('#fif').prop('disabled', true);
	}

	function callFriend(answer) {
		alert(answer);
		$('#friend').prop('disabled', true);
	}