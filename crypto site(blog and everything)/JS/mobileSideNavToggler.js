let counter = 0;
const toggleBtns = document.getElementsByClassName('toggleBtns')
const isMobile = window.matchMedia("(max-width: 425px)")
const specifiedArea = document.getElementById('navigation-logo-area');


function navigationToggler() {

//TODO: find out how to make it consistent on developer view

  if (counter%2 != 1){
    document.getElementById('mobilenavbar').style.width = '40%';
    document.getElementById('mobilenavbar').style.padding = '10%';
    document.getElementById('mobilenavbar').style.paddingTop = '30%';
  
    for(i=0; i<toggleBtns.length; i++){
      toggleBtns[i].style.display = 'block';
      toggleBtns[i].style.pointerEvents = 'auto'
    }
  
  }

  else{
    document.getElementById('mobilenavbar').style.width = '0';
    document.getElementById('mobilenavbar').style.padding = '0';

    for(i=0; i<toggleBtns.length; i++){
      toggleBtns[i].style.display = 'none';
      toggleBtns[i].style.pointerEvents = 'none'
    }

  }
}



document.getElementById('navigationToggle').addEventListener('click', function(){
  counter += 1;
  
})





if(isMobile.matches){
// Add a click event listener to the document
document.addEventListener('click', function(event) {
  const clickedElement = event.target;

  // Check if the clicked element is not a child of the specified area
  if (!specifiedArea.contains(clickedElement)) {
    document.getElementById('mobilenavbar').style.width = '0';
    document.getElementById('mobilenavbar').style.padding = '0';

    for(i=0; i<toggleBtns.length; i++){
      toggleBtns[i].style.display = 'none';
      toggleBtns[i].style.pointerEvents = 'none'
    }
  }
});

}


