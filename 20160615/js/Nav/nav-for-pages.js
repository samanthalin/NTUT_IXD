var head = document.querySelector('.topNav-icon');
	var drop = document.querySelector('.topNav');


			head.addEventListener('click', function (event) {
			  
			  if(drop.getAttribute("class").match("open")) {
			    drop.setAttribute("class", drop.getAttribute("class").replace("open", ""));
			     
			    return;
			  }
			  drop.setAttribute("class", drop.getAttribute("class") + " open");
			  
			})		