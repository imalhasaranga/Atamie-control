// JavaScript Document

function onccorrect(a){
	
	
	
	
	
    if(a.type != 'password'){
		
        a.value = '';
        a.style.color = '#000';
        a.style.fontStyle = 'normal';
        a.type='password';
    }
}
	
	
	
function onccorrect1(a){
	
	
    a.value = '';
    a.style.color = '#000';
    a.style.fontStyle = 'normal';
	
}
	
	
function showpaswordcchange(){
	
    var k = document.getElementById('passwordp');
	
    if(k.style.visibility == 'visible'){
		
        k.style.visibility = 'hidden';
		
    }else{
        k.style.visibility = 'visible';
			
    }
	
	
	
}
	
function movewindow(a){

    var b = a.value;
	
    window.location = "payments.php?a="+b;
	
}
	
var k = '';
function getitmenChange(b){
    if(k != ''){
        k.bgColor="#FFFFFF";
    }
    k = b;
	
    b.bgColor='#00CC00';
	
}

function addTeacher(e){

    var id = e.options[e.selectedIndex].value;
    var name = e.options[e.selectedIndex].text;
   
    if(k != ''){
        var elms =  k.getElementsByTagName("*");
       
         elms[4].value = name;
        elms[1].innerHTML = name;
        elms[3].value = id;
       
       

        

    }
}
function addSubject(e){

  
    var id = e.options[e.selectedIndex].value;
    var name = e.options[e.selectedIndex].text;

    if(k != ''){
        var elms =  k.getElementsByTagName("*");

        elms[2].value = id;
        elms[0].innerHTML = name;
        

    }

}



function removecolor(){

    if(k != ''){
        k.bgColor="#FFFFFF";
    }
    return true;
}
	

	
	

	