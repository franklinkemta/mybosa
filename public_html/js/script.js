
$(document).ready(function(){
  login = function () {
     // go to login instead of showing popup
    document.location = $('#login_btn').attr('href');
  }

  $('.closeMenu').click(function(){
    $('.menuMobile').css("display","none");
  });

  $('.hamMenu').click(function(){
    $('.menuMobile').css("display","block");
  });
  $('.menutext').click(function(){
    $('.menuMobile').css("display","block");
  });
  $('.moins').click(function(){
    $('.detailEtudiant').css("display","none");
    $('.elipseXs').css("display","block");
    $('.menuList').css("display","block");
   
  });

  $('.connect_mb').click(function(){

    console.log("Hey You clicked");
    login();
    // $('.sign_in_form').css("display","block");

  });

  $('.closeForm').click(function(){
    $('.sign_in_form').css("display","block");
  });
  $('#form_suivant').click(function(){
    console.log("Suivant form");
    $('.step_1_form').css("display","none");
    $('.step_2_form').css("display","block");


  });

  $('.suivant').click(function(){
    var etape1 = $('.premiereEtape').css("display");
    var etape2 = $('.deuxiemeEtape').css("display");
    var etape3 = $('.troisiemeEtape').css("display");
  
    

    if(etape1 != "none"){
      $('.premiereEtape').css("display","none");
      $('.deuxiemeEtape').css("display","block");
      $('.circle-etap1').css("background-color","white");
      $('.circle-etap2').css("background-color","grey");
    }
    else if(etape2 != "none"){
    
      $('.deuxiemeEtape').css("display","none");
      $('.troisiemeEtape').css("display","block");
      

      $('.circle-etap3').css("background-color","grey");
      $('.circle-etap2').css("background-color","white");
    
    }
    else if(etape3 != "none"){
      this.css("cursor","")

    }


  });
  
  $('.precedent').click(function(){
    var etape1 = $('.premiereEtape').css("display");
    var etape2 = $('.deuxiemeEtape').css("display");
    var etape3 = $('.troisiemeEtape').css("display");
 
  
    

    if(etape2 != "none"){
      $('.premiereEtape').css("display","block");
      $('.deuxiemeEtape').css("display","none");
      $('.circle-etap1').css("background-color","white");
      $('.circle-etap2').css("background-color","grey");
    }
    else if(etape3 != "none"){
    
      $('.deuxiemeEtape').css("display","block");
      $('.troisiemeEtape').css("display","none");
      $('.circle-etap2').css("background-color","grey");
      $('.circle-etap3').css("background-color","white");
    }
    else if(etape1 != "none"){
      $('.troisiemeEtape').css("display","block");
      $('.premiereEtape').css("display","none");
      $('.circle-etap3').css("background-color","grey");
      $('.circle-etap1').css("background-color","white");

    }


  });
  $('.circle-etap1').click(function(){
    var etape1 = $('.premiereEtape').css("display");
    var etape2 = $('.deuxiemeEtape').css("display");
    var etape3 = $('.troisiemeEtape').css("display");
  
    

    if(etape1 != "none"){
      $('.premiereEtape').css("display","none");
      $('.deuxiemeEtape').css("display","block");
      $('.circle-etap1').css("background-color","white");
      $('.circle-etap2').css("background-color","grey");
    }
    else if(etape2 != "none"){
    
      $('.deuxiemeEtape').css("display","none");
      $('.troisiemeEtape').css("display","block");
      

      $('.circle-etap3').css("background-color","grey");
      $('.circle-etap2').css("background-color","white");
    
    }
    else if(etape3 != "none"){
      this.css("cursor","")

    }




  });
  
  
  

  $('.plusInfo').click(function(){
    
    $('.elipseXs').css("display","none");
    $('.menuList').css("display","none");
    $('.detailEtudiant').css("display","block");
  });
  $('.connexionXs').click(
    function(){
      login();
      // $(".sign_in_form").css("display","block");

    }
  );

  /*
  $('.sub_menu_items').hover(function(){

    console.log("hovered");

  $('.navigation').css('background','#189E03');

    $('.navigation').css('height','270px');
    $('.navigation').addClass('navigation_hover')
    $('.sub_menu').css('display','block');
    $('header').css('height','600px')
    


  });
  */
  $('.sub_menu_items').mouseover(function(){

    console.log("hovered");

  $('.navigation').css('background','#189E03');

    //$('.navigation').css('height','270px');
    $('.navigation').addClass('navigation_hover');
    $('.sub_menu').css('display','block');
    $('header').css('height','600px')

  });

  $('.cont_ets').click(function(){

    $('.step_1_ets').css('display','none');
    $('.step__ets').css('display','block');

  });

  $('.co-menu').mouseover(function(){

    console.log("hovered");

  $('.navigation').css('background','');

    //$('.navigation').css('height','270px');
    $('.navigation').removeClass('navigation_hover');
    $('.sub_menu').css('display','none');
    $('header').css('height','auto')

  });
  $('.ets-menu').mouseover(function(){

    console.log("hovered");

  $('.navigation').css('background','');

    //$('.navigation').css('height','270px');
    $('.navigation').removeClass('navigation_hover');
    $('.sub_menu').css('display','none');
    $('header').css('height','auto')

  });
  $('.navigation').mouseleave(function(){

    $('.navigation').removeClass('navigation_hover');
    $('header').css('height','auto');
    $('.navigation').css('background','');
    $('.sub_menu').css('display','none');
    
  });




});
/**
 * 
 * 
 * $(document).ready(function(){

  /*$('.sub_menu_items').mouseenter(function(){
    $('.navigation').addClass('curtain');
    $('header').css('height','600px');
  });
  
  $('.navigation').mouseleave(function(){
    $('.navigation').removeClass('curtain');
    $('header').css('height','');

  });

});*/


/*  $('.connexion').click(
    function(){
      $(".sign_in_form").css("display","block");

    }
  );*/

  /*
 $('.sub_menu_items').mouseenter(function(){
    $('.plusPc').css('display','none');
    $('.moinsPc').css('display','block');
    //$('.moinsPc').css('margin','0');
   // $('.logo').css('display','none');
    $('.sub_menu_items').css('display','inline-flex');
    $('nav').css({'position':'absolute','top':'0','background':'#189E03','margin-bottom':'0'});
    $('.menuPc').css({"margin-bottom":"2em","margin-top":"1.2em","margin-left":"16.3em"});
    $('.connexion').css('background-color','white');
    $('.inscription').css({"border":"1px solid white","margin-top":"1em"});
    $('.sub_menu').css('display','flex');

    
    $('.sub_page_info').css('margin-top','3em');

 });
 $('.sub_menu').mouseleave(function(){
  $('.plusPc').css('display','block');
  $('.moinsPc').css('display','none');
  $('.sub_menu').css('display','none');
  //$('.logo').css('display','block');
  //$('nav').animate({'position':'','top':'','background':'','margin-bottom':''},{queue: false,
    //duration: 3000})
    $('nav').css({'position':'','top':'','background':'','margin-bottom':''});
    $('.menuPc').css({"margin-bottom":"","margin-top":"","margin-left":""});
    $('.connexion').css('background-color','');
    $('.inscription').css({"border":"","margin-top":""});
    $('.sub_menu').css('display','');
    $('.sub_page_info').css('margin-top','');

});

 

  $('.inscription').click(
    function(){
      $(".sign_up_form").css("display","block");
      console.log("Justin is there");
    }
  
  );
  
 
  $(".closeForm").click(function(){
    $(".sign_up_form").css("display","none");
    $(".sign_in_form").css("display","none");

  });
  $('#suivant_type').click(function(){
    var radioValue = $("input[name='typeCompte']:checked").val();
    $('.type_compte').css("display","none");
    if(radioValue == "etudiant"){
        $('.step_1_form').css("display","block");
        $('.etudiant').dialog();
        $('#form_suivant').prop('disabled','true');

    }
    if(radioValue == "etablissement"){
      $('.etablissement').css("display","block");
  }
  if(radioValue == "conseiller"){
  
    $('.step_1_form').css("display","block");
}

  

    
  });
  $('#form_suivant').click(function(){
    $('.step_1_form').css("display","none");
    $('.step_2_form').css("display","block");
  });
  
  $('.retour_type_compte').click(function(){
    $('.type_compte').css("display","block");
    $('.step_1_form').css("display","none"); 
  });
  $('.retour_type_compte_ets').click(function(){
    $('.type_compte').css("display","block");
    $('.etablissement').css("display","none"); 
  });

  $('.retour_step_1').click(function(){
    $('.step_2_form').css("display","none");
    $('.step_1_form').css("display","block");
  });
 
    
  
  });
  
 */