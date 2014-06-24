init = function(){
      jarallax = new Jarallax();
      var body_width = $('body').outerWidth();
  
      
      if(body_width>650){
         var all = $('.t-content').outerHeight();

         var ftop = ( ( $('.well-fieldgrass').position().top / all ) * 100 )-25;
         var f_img = $('.well-fieldgrass .post-img').position();
         var f_con = $('.well-fieldgrass .container').outerHeight();
             f_img = ((f_img.top / f_con) * 100) ;

         var gtop = ( ( $('.well-grass').position().top / all ) * 100 )-25;
         var g_img = $('.well-grass .post-img').position();
         var g_con = $('.well-grass .container').outerHeight();
             g_img = ((g_img.top / g_con) * 100) ;

         var wtop = ( ( $('.well-wood').position().top / all ) * 100 )-25;
         var w_img = $('.well-wood .post-img').position();
         var w_con = $('.well-wood .container').outerHeight();
             w_img = ((w_img.top / w_con) * 100) ;

         console.log(ftop);
         console.log(gtop);
         console.log(wtop);
         console.log((all/all)*100);

         jarallax.addAnimation('.well-fieldgrass .light-f',[{progress: ftop + "%", top:"0%"}, {progress: "100%", top: "-100%"}]);
         jarallax.addAnimation('.well-grass .light-f',[{progress: gtop + "%", top:"0%"}, {progress: "100%", top: "-100%"}]);
         jarallax.addAnimation('.well-wood .light-f',[{progress: wtop + "%", top:"0%"}, {progress: "100%", top: "-100%"}]);

         jarallax.addAnimation('.well-fieldgrass .light-b',[{progress: ftop + "%", top:"0%"}, {progress: "100%", top: "-100%"}]);
         jarallax.addAnimation('.well-grass .light-b',[{progress: gtop + "%", top:"0%"}, {progress: "100%", top: "-100%"}]);
         jarallax.addAnimation('.well-wood .light-b',[{progress: wtop + "%", top:"0%"}, {progress: "100%", top: "-100%"}]);

         jarallax.addAnimation('.well-fieldgrass .post-img',[{progress: ftop + "%", top: parseInt(f_img)+"%"}, {progress: gtop + "%", top: "20%"}]);
         jarallax.addAnimation('.well-grass .post-img',[{progress: gtop + "%", top: parseInt(g_img)+"%"}, {progress: wtop + "%", top: "20%"}]);
         jarallax.addAnimation('.well-wood .post-img',[{progress: wtop + "%", top: parseInt(w_img)+"%"}, {progress: "100%", top: "20%"}]);

         jarallax.addAnimation('.well-fieldgrass .f1',[{progress: ftop + "%", top: "50%"}, {progress: "100%", top: "-100%"}]);
         jarallax.addAnimation('.well-fieldgrass .f2',[{progress: ftop + "%", top: "-5%"}, {progress: "100%", top: "-60%"}]);
         jarallax.addAnimation('.well-fieldgrass .f3',[{progress: ftop + "%", top: "-10%"}, {progress: "100%", top: "-50%"}]);
         jarallax.addAnimation('.well-fieldgrass .f4',[{progress: ftop + "%", top: "-15%"}, {progress: "100%", top: "-30%"}]);

         jarallax.addAnimation('.well-wood .r1',[{progress: wtop + "%", top: "30%"}, {progress: "100%", top: "-100%"}]);
         jarallax.addAnimation('.well-wood .r2',[{progress: wtop + "%", top: "-10%"}, {progress: "100%", top: "-60%"}]);
         jarallax.addAnimation('.well-wood .r3',[{progress: wtop + "%", top: "10%"}, {progress: "100%", top: "-50%"}]);

      }

   //    jarallax.setDefault('#p1, #p2, #p3', {opacity:'0'});
   //    jarallax.setDefault('#p1, #p2, #p3', {marginLeft:'-1000px'});
   //    jarallax.addAnimation('.planet2',[{progress: "0%", top:"70%"}, {progress: "100%", top: "40%"}]);
   //    jarallax.addAnimation('.planet1',[{progress: "0%", top:"90%"}, {progress: "100%", top: "-5%"}]);
   //    jarallax.addAnimation('.behind',[{progress: "0%", top:"0%"}, {progress: "100%", top: "-10%"}]);
	  // jarallax.addAnimation('.bmeter',[{progress: "0%", width:"0%"}, {progress: "100%", width: "100%"}]);
	  // jarallax.addAnimation('.theend',[{progress: "95%", opacity:"0"}, {progress: "100%", opacity:"0.85"}]);
      
   //    jarallax.addAnimation('#p1',[{progress: "15%", opacity:"0"}, {progress: "20%", opacity:"1"}]);
   //    jarallax.addAnimation('#p1',[{progress: "20%", opacity:"1"}, {progress: "30%"}]);
   //    jarallax.addAnimation('#p1',[{progress: "30%", opacity:"1"}, {progress: "40%", opacity:"0"}]);
   //    jarallax.addAnimation('#p1',[{progress: "15%", marginLeft:"0"}, {progress: "40%"}]);
      
   //    jarallax.addAnimation('#p2',[{progress: "45%", opacity: "0"}, {progress: "50%", opacity: "1"}]);
   //    jarallax.addAnimation('#p2',[{progress: "50%", opacity: "1"}, {progress: "60%"}]);
   //    jarallax.addAnimation('#p2',[{progress: "60%", opacity:"1"}, {progress: "70%", opacity:"0"}]);     
   //    jarallax.addAnimation('#p2',[{progress: "45%", marginLeft:"0"}, {progress: "70%"}]);
      
   //    jarallax.addAnimation('#p3',[{progress: "75%", opacity:"0"}, {progress: "80%", opacity:"1"}]);
   //    jarallax.addAnimation('#p3',[{progress: "80%", opacity:"1"}, {progress: "100%"}]);
   //    jarallax.addAnimation('#p3',[{progress: "75%", marginLeft:"0"}, {progress: "100%"}]);
    }