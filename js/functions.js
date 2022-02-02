

var https_host = 'https://'+window.location.hostname+'/', 
    _protocol = document.location.protocol;

function getid(id)
{
 return document.getElementById(id);
}

function gebc(object)
{
 return document.getElementsByClassName(object);
}

function cv_url(pageurl)
{
 try
 {
   parent.window.history.replaceState({path:pageurl},'',pageurl);
 }
 catch(e) { }
}

function ajax_loading(view, id_but_send='')
{
   if (view) $('.cls_loading').css({'display': 'inline-block'});
   else $('.cls_loading').css({'display':'none'});
}

function absPosition(obj,v){if(v=="x"){var x=parseInt(obj.style.left);if(x||0==x)return x;x=0;while(obj){x+=obj.offsetLeft;obj=obj.offsetParent}return x}else{var y=parseInt(obj.style.top);if(y||0==y)return y;y=0;while(obj){y+=obj.offsetTop;obj=obj.offsetParent}return y}};
