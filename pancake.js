function getList()
{
var almond = document.getElementsByName('almond');
var wheat = document.getElementsByName('wheat');
var maida = document.getElementsByName('maida');
var topping = document.getElementsByName('topping');

for (var i = 0, length = almond.length; i < length; i++) {
  if (almond[i].checked) {
 var almondvalue=almond[i].value; 
 //document.getElementById("pancakerecipe").innerHTML = almondvalue;
    break;
  }
}

for (var i = 0, length = wheat.length; i < length; i++) {
   if (wheat[i].checked) {
    var wheatvalue=wheat[i].value;
    break;
  }
}

for (var i = 0, length = maida.length; i < length; i++) {
   if (maida[i].checked) {
    var maidavalue=maida[i].value;   
    break;
  }
}

for (var i = 0, length = topping.length; i < length; i++) {
   if (topping[i].checked) {
    var toppingvalue=topping[i].value;
    break;
  }
}

if(almondvalue=="Yes")
{
   document.getElementById("pancakerecipe").innerHTML = "<h3>Ingredient List:</h3><BR>Almond Flour - 1 Cup<BR>Wheat Flour - 1/2 Cup<BR>Sugar - 2 tablespoons <BR> Baking powder - 2 teaspoons <BR> Baking soda - 1 teaspoon <BR> Salt - 1/2 teaspoon <BR> Milk or Buttermilk - 1 Cup <BR> Eggs - 2 large <BR> Butter - 1/4 Cup Melted";
}
else
{
  if(wheatvalue=="Yes")
    {
     document.getElementById("pancakerecipe").innerHTML = "<h3>Ingredient List:</h3><BR>Wheat Flour - 1.5 Cups<BR>Sugar - 2 tablespoons <BR> Baking powder - 2 teaspoons <BR> Baking soda - 1 teaspoon <BR> Salt - 1/2 teaspoon <BR> Milk or Buttermilk - 1 Cup <BR> Eggs - 2 large <BR> Butter - 1/4 Cup Melted";
    }

  else
   {
    document.getElementById("pancakerecipe").innerHTML = "<h3>Ingredient List:</h3><BR>All Purpose Flour - 1.5Cups<BR>Sugar - 2 tablespoons <BR> Baking powder - 2 teaspoons <BR> Baking soda - 1 teaspoon <BR> Salt - 1/2 teaspoon <BR> Milk or Buttermilk - 1 Cup <BR> Eggs - 2 large <BR> Butter - 1/4 Cup Melted";
   }

}
}
function getRecipe()
{
 
document.getElementById("pancake").innerHTML = "<h3>Directions:</h3><BR> 1. Sieve the dry ingredients together.<BR> 2. Beat eggs until fluffy and add to the flour mix.<BR> 3. Add the cooled down melted butter to the mixture (make sure it is not hot otherwise it will make the eggs half cooked). <BR> Add the toppings you have and then give a stir. Keep it closed for 15 minutes. <BR> 4. Take an Electric griddle and set the temperature to 300F (very low temperature if you are using stove top).<BR> 5. Take a laddle full of batter and pour it on the griddle. Wait until bubbles out in the pancakes and flip it.<BR> 6. Cook until done. <BR> 7. Have it with maple syrup or honey.<BR><BR><BR> Note: This quantity is for 20 serving size. Adjust according to your need!!";

}
