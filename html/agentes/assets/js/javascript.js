var card = document.querySelector('#viper');
card.addEventListener('mouseenter',function(){ mouseEnter(card, viper, '#viper')})

var card = document.querySelector('#sova');
card.addEventListener( 'onmousein', function() {
	sova.classList.toggle('is-flipped');
});

var card = document.querySelector('#cypher');
card.addEventListener( 'click', function() {
	cypher.classList.toggle('is-flipped');
});

var card = document.querySelector('#sage');
card.addEventListener( 'click', function() {
	sage.classList.toggle('is-flipped');
});

var card = document.querySelector('#phoenix');
card.addEventListener( 'click', function() {
	phoenix.classList.toggle('is-flipped');
});

var card = document.querySelector('#omen');
card.addEventListener( 'click', function() {
	omen.classList.toggle('is-flipped');
});

var card = document.querySelector('#jett');
card.addEventListener( 'click', function() {
	jett.classList.toggle('is-flipped');
});

var card = document.querySelector('#brimstone');
card.addEventListener( 'click', function() {
	brimstone.classList.toggle('is-flipped');
});

var card = document.querySelector('#breach');
card.addEventListener( 'click', function() {
	breach.classList.toggle('is-flipped');
});

function mouseEnter(card, name, id){ 
	name.classList.toggle('is-flipped');
	var asd = document.querySelector(id); 
	asd.removeEventListener('mouseenter', mouseEnter)
};
function mouseOut(name){
	name.classList.toggle('is-flipped')
	var card = document.querySelector('#viper'); 
	card.removeEventListener('mouseenter', mouseOut)
};