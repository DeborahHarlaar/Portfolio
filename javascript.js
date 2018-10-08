var speed = 140;
var speedRemove = 46.6;
var textChange = ["Webentwickler", "Passioniert", "Autodidakt", "Kreativ", "Problemlöser"];
var currentWordIndex = null;

function addWord(word, callback){
	function nextLetter(){
		if (word == ""){
			setTimeout(callback, 1000);
		}else{
			var letter;
			letter = word.substr(0, 1);
			word = word.substr(1);
			setTimeout(nextLetter, speed);
		document.getElementById("typewriter").innerHTML += letter;
		}
	}
	nextLetter();
}

function removeWord(callback){
	function removeLetter(){
		if (document.getElementById("typewriter").innerHTML != ""){
			var currentContent = document.getElementById("typewriter").innerHTML;
			document.getElementById("typewriter").innerHTML = currentContent.substr(0, currentContent.length - 1); 
			setTimeout(removeLetter, speedRemove);
		}else{
			setTimeout(callback, 400);
		}
	}
	removeLetter();
}

function nextStep(){
	if (document.getElementById("typewriter").innerHTML == ""){
		if (currentWordIndex === null){
			currentWordIndex = 0;
		}else if (currentWordIndex + 1 ==textChange.length){
			currentWordIndex = 0;
		}else{
			currentWordIndex += 1;
		}
		addWord(textChange[currentWordIndex], nextStep);
	}else{
		removeWord(nextStep);
	}
}