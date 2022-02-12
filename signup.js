function validate()
                {
  					//var name = document.getElementById("name").value;
  					//var username = document.getElementById("username").value;
  					var phone = document.getElementById("phone").value;
  					var error_message = document.getElementById("error_message");
  					
  					error_message.style.padding = "10px";

  					if(isNaN(phone) || phone.length != 10)
  					{
    				text = "Please Enter valid Phone Number";
    				error_message.innerHTML = text;
    				return false;
  					}
  				}	