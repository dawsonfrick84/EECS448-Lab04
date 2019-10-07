function checkSubmit(){
    selected_items=0;
    shipping=false;
    valid=false;

    if(document.getElementById("1").checked==true){
      selected_items=selected_items+1;
    }
    if(document.getElementById("2").checked==true){
      selected_items=selected_items+1;
    }
    if(document.getElementById("3").checked==true){
      selected_items=selected_items+1;
    }
    if(document.getElementById("4").checked==true){
      selected_items=selected_items+1;
    }
    if(document.getElementById("5").checked==true){
      selected_items=selected_items+1;
    }
    if(document.getElementById("6").checked==true){
      selected_items=selected_items+1;
    }

    if(document.getElementById("shipping1").checked==true){
      shipping=true;
    }
    if(document.getElementById("shipping2").checked==true){
      shipping=true;
    }
    if(document.getElementById("shipping3").checked==true){
      shipping=true;
    }

    if(document.getElementById("pass").value > ""){
      if(document.getElementById("user").value > ""){
        valid=true;
      }
    }

    if(selected_items>0&&shipping==true&&valid==true){
      alert("Your order has been submitted")
      return true;
    }
    else if(selected_items>0&&shipping==false){
      alert("Please add a shipping method")
      return false;
      returnToPreviousPage();
    }
    else if(selected_items==0){
      alert("Please select item(s) first")
      return false;
      returnToPreviousPage();
    }
    else{
      alert("Please enter a username and password")
      return false;
      returnToPreviousPage();
    }
}

function reset(){
      document.getElementById("1").checked=false;
      document.getElementById("2").checked=false;
      document.getElementById("3").checked=false;
      document.getElementById("4").checked=false;
      document.getElementById("5").checked=false;
      document.getElementById("6").checked=false;
      document.getElementById("q1").value=false;
      document.getElementById("q2").value=false;
      document.getElementById("q3").value=false;
      document.getElementById("q4").value=false;
      document.getElementById("q5").value=false;
      document.getElementById("q6").value=false;
      document.getElementById("shipping1").checked=false;
      document.getElementById("shipping2").checked=false;
      document.getElementById("shipping3").checked=false;
      document.getElementById("user").value = "";
      document.getElementById("pass").value = "";
}
