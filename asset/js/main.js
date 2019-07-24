$(document).ready(function(){
    console.log(Cookies.get('color'))
    if(Cookies.get('color')==undefined){
        $('.navbar').addClass('back');
    }else{
        $('.navbar').addClass(Cookies.get('color'));
    }
    
    $(window).on('activate.bs.scrollspy', function (e,obj) {
        if(obj.relatedTarget!='#home'){
            $('.navbar').addClass('light');
            $('.navbar').removeClass('back');
            Cookies.set('color', 'light');
        }else{
            $('.navbar').addClass('back');
            $('.navbar').removeClass('light');
            Cookies.set('color', 'back');
        }
    });
});