// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'indigo'; // TODO: change this to your favorite color from the list
console.log(color);
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if (color === 'red'){
	console.log("The color is red, like a firetruck");
}else if (color === 'orange'){
	console.log("The color is orange, like an orange");
}else if (color === 'yellow'){
	console.log("The color is yellow, like a sunflower");
}else if (color === 'green'){
	console.log("The color is green, like an alligator");
}else if (color === 'blue'){
	console.log("The color is blue, like the sky");
}else if (color === 'indigo'){
	console.log("The color is indigo, like those things that are indigo");
}else{
	console.log("The color is violet, like a violet");
}

//check to see if it is my favorite
var is_it_my_fav = (color === favorite) ? "My favorite color!" : "It's alright. Not my favorite though.";
console.log(is_it_my_fav);

// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.