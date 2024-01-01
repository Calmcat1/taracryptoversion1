// this is a unified toggle system that will toggle all the files

//uses the keywords 
// contentForms-> to specify all togglable content
// togglebtn->specifes all the button being used for toggling

function toggle(page,elmnt){

  let contentForms,togglebtns

  contentForms = document.getElementsByClassName('content');

  //function that shifts the pages
  for(i=0; i<contentForms.length; i++){
    contentForms[i].style.display = "none"
  }

  document.getElementById(page).style.display = "flex"

  //function that removes button color

  togglebtns = document.getElementsByClassName('toggleBtns')

  //function that iterates through the btns and removes their base color
  for(i=0; i<togglebtns.length; i++){
    togglebtns[i].style.textDecoration = "none";
  }

  //this changes the btn color to black
  elmnt.style.textDecoration = "underline";
  elmnt.style.cursor = "pointer";
  

}

document.getElementById('defaultDisplay').click()