/* this javascript file handles all calculations that are required to be done by the application*/

let number1, number2, result
const resultDisplay = document.getElementById("PnLIndicator");

function calculate(){


    number1 = Number(document.getElementById("price-bought-at-container").value);
    number2 = Number(document.getElementById("price-sold-at-container").value);

    // checks whether a number was input 
    if(number1 && number2 != NaN){
    result = parseFloat(((number2 - number1)/ number1)*100).toFixed(3)
     //checks whether the result is negative or positive and puts the corresponding numbers
      if(result < 0){
       resultDisplay.style.color = "red";
      }
      else if(result > 0){
        resultDisplay.style.color = "green";
      }
      else{
        resultDisplay.style.color = "black";
      }
    //sets the innerHtml of the display:

      resultDisplay.innerHTML = result + "%";

   
    }

    else{
      window.alert("Input a number!")
    }

   
}

