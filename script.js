$(document).ready(function(){ 
/*:::::::::::::::::MENU::::::::::::::::::::::::::::::::::*/
/*::::::::::::::::::::::FORM secure :::::::::::::::::::::::::::::*/
    function escapeRegExp(string){
            return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
    }

    function valideDate(str) {
        var m = str.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
        return (m) ? new Date(m[3], m[2]-1, m[1]) : null;
    }
    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    function isValid(p) {
        var phoneRe = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
        var digits = p.replace(/\D/g, "");
        return phoneRe.test(digits);
      }

    $('#submit').click(function(){

        var valid = true;
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var tel = $("#tel").val();
        var mail = $("mail").val();
        var msg = $("#msg").val();
        var date = $("#date").val();
        var valid = true;
        
        nom = escapeRegExp(nom);
        prenom = escapeRegExp(prenom);
        tel = escapeRegExp(tel);
        mail = validateEmail(mail);
        msg = escapeRegExp(msg);
        date = valideDate(date);
        tel = isValid(tel);

        if(!tel){
            $("#tel").css({"border-color":"red"});
            valid = false
        }else{
            !$("#tel").css({"border-color":"white"});
        }

        if(!mail || mail == ""){
            $("#mail").css({"border-color":"red"});
            valid = false
        }else{
            !$("#mail").css({"border-color":"white"});
        }
        
        if (date==null){
            $("#date").css({"border-color":"red"});
            valid = false
        }else{
            $("#date").css({"border-color":"white"});
        }

        if(nom==""){
            $('#nom').css({"border-color":"red"});
            valid = false
        }else{
            $("#nom").css({"border-color":"white"});
        }

        return valid;
        
    });

    
/*:::::::::::::::::::NAV:::::::::::::::::::::::*/
    $('#planete').hover(function(){
        $('.sousmenu').stop();
        $('.sousmenu').slideToggle();
    });
    var open;
    $('#right').click(function() {
        if(!open){
            $('#left').css({"width":"50%", "transition":"0.5s"});
            open = true;
        }else{
            $('#left').css({"width":"0%", "transition":"0.5s"});
            open = false;
        }         
    });

    
/*slid:::::::::::::::::::::*/
    $('.slid').click(function(){
        $('.text').stop();
        $('.text').not($( '.text',this)).slideUp();
        $('.text',this).slideToggle();
    });



/*:::::::::AFFICHAGE DES INFO PLANETE ::::::::*/
    function verifActiv(){
        $('#popUpfond').css({'display':'block'})
        $('#popUp1').css({'display':'none'})
        $('#popUp2').css({'display':'none'})
        $('#popUp3').css({'display':'none'})
        $('#popUp4').css({'display':'none'})
    }
    $('#jupiter').click(function(){
        verifActiv();
        $('#popUp1').css({'display':'block'})
    })
    $('#saturne').click(function(){
        verifActiv();
        $('#popUp2').css({'display':'block'})
    })
    $('#uranus').click(function(){
        verifActiv();
        $('#popUp3').css({'display':'block'})
    })
    $('#neptune').click(function(){
        verifActiv();
        $('#popUp4').css({'display':'block'})
    })


/*:::::::::supr */
    $('.bouton').click(function(){
        $('#popUpfond').css({'display':'none'})
    })
    
});
/*cosmonaute:::::::::::::::::::::::::::::*/
$('#cosmonaute').hover(function(){
    $('#cosmonaute>p').css({'display':'block'})
    $('#cosmonaute').css({'animation':'none'})
});

/*:::::::::::::::::Sythème solaire :::::::::::::::::::*/
$('#mercureB').click(function(){
    annimMer();
});
$('#venusB').click(function(){
    annimVen();
});
$('#terreB').click(function(){
    annimTer();
});
$('#marsB').click(function(){
    annimMar();
});
$('#annimB').click(function(){
    annimMer();
    annimVen();
    annimTer();
    annimMar();
});
$('#resetB').click(function(){
    stop()
});

function annimMer(){
    $('#mercureS').animate({
        'rotate':'+=250deg'
    },1000 ,"linear", annimMer);
};
function annimVen(){
    $('#venusS').animate({
        'rotate':'+=50deg'
    },1000 ,"linear", annimVen);
};
function annimTer(){
    $('#terreS').animate({
        'rotate':'+=100deg'
    },1000 ,"linear", annimTer);
};
function annimMar(){
    $('#marsS').animate({
        'rotate':'+=180deg'
    },1000 ,"linear", annimMar);
};

function stop(){
    $('#mercureS').stop().css({'rotate':'0deg'});
    $('#venusS').stop().css({'rotate':'0deg'});
    $('#terreS').stop().css({'rotate':'0deg'});
    $('#marsS').stop().css({'rotate':'0deg'});
}



/*::::::::::::::::::::  form contact :::::::::::::::::::::::::::::::::::::::::*/
$('input').focus(function(){
 $(this).css({'background-color':'gray', 'color':'white'});
})
$('input').focusout(function(){
 $(this).css({'background-color':'white', 'color':'black'});
})
$('textarea').focus(function(){
 $(this).css({'background-color':'gray', 'color':'white'});
})
$('textarea').focusout(function(){
 $(this).css({'background-color':'white', 'color':'black'});
})





