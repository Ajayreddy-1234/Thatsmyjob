var start=null;
var tabisactive=0;
  $(window).on('load',function(){
        start=new Date().getTime();
        tabisactive=1;
  });
  $(window).on('beforeunload',function(){
    if(tabisactive)     
    {var time=new Date().getTime()-start;
    var tk=document.querySelector("meta[name=_token]").content;
        $.ajax({
          type:"POST",
          url:"/getthejsvalue",
        data:{
            _token:tk,
            time:time
            },
            success:function(){

            }
        });
      }
  });
  $(window).on('unload',function(){
    if(tabisactive)     
    {var time=new Date().getTime()-start;
    var tk=document.querySelector("meta[name=_token]").content;
        $.ajax({
          type:"POST",
          url:"/getthejsvalue",
        data:{
            _token:tk,
            time:time
            },
            success:function(){

            }
        });
      }
   
});
$(window).on('blur',function(){
  var time=new Date().getTime()-start;
var tk=document.querySelector("meta[name=_token]").content;
 $.ajax({
   type:"POST",
   url:"/getthejsvalue",
 data:{
     _token:tk,
     time:time
     },
     success:function(){

     }
 });
  tabisactive=0;
});
$(window).on('focus',function(){
  start=new Date().getTime();
  tabisactive=1;
});