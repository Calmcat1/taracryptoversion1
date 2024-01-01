
let sum = 0, percentage = 0, counter = 0;


//generator
function generatePortfolio(){

 if (counter < 1){
    const coinTypes = document.getElementsByClassName('coinTYPE');
    const displayPercentage = document.getElementsByClassName('percentify-display');


    for(i=0; i<coinTypes.length; i++){
        sum += Number(coinTypes[i].value);
       
    }

    //get percentage & display
    for(i=0; i<coinTypes.length; i++){
        percentage = parseFloat((coinTypes[i].value)/sum *100).toFixed(2)
        console.log(percentage);
        displayPercentage[i].innerHTML = String(percentage) + "%";
    }
  }

    else{
        window.alert("refresh to create new portfolio")
    }
  
    console.log(counter)
 
}

//clicklogger

document.getElementById('portfolioGenerate').addEventListener('click', function(){
  counter += 1;
  
})



 

