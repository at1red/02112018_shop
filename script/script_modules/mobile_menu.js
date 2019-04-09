window.onload = function (){

    document.querySelector('.menu-item').onmouseover = function() {
        menuShow();
        menuAnimate();
    };
    document.querySelector('.menu-item').onmouseout = function(){
        menuHide();
        document.querySelector('.menu-button').removeAttribute("style");
        Object.assign(document.querySelector('.stick-1').style,{transition: ("0.5s all"),height:"4px",width:"30px",top:"-12px"});
        Object.assign(document.querySelector('.stick-2').style,{transition: ("0.5s all"),height:"4px",width:"30px"});
        Object.assign(document.querySelector('.stick-3').style,{transition: ("0.5s all"),height:"4px",width:"30px",bottom:"-12px"});
    };

    document.querySelector('.menu-login').onmouseover = function() {
        loginShow();
                
    };
    document.querySelector('.menu-login').onmouseout = function(){
        loginHide();
        
    };

    function menuAnimate(){
        Object.assign(document.querySelector('.stick-3').style,{transition: ("0.5s all"),bottom:"0",top:"0",height:"0"});
        Object.assign(document.querySelector('.stick-2').style,{transition: ("0.5s all"),height:"1px",top:"0",width:"45px"});
        Object.assign(document.querySelector('.stick-1').style,{transition: ("0.5s all"),bottom:"0",top:"0",height:"0"});
        Object.assign(document.querySelector('.menu-button').style,{transition: ("0.5s all"),border:"0",height:"1px",width:"1px",right:"30px"});
    }

    function loginShow(){
        document.querySelector('.menu__login-text').style.left = 1;
    }

    function loginHide(){
        document.querySelector('.menu__login-text').style.left = '-255px';
    }
    function menuShow(){
        document.querySelector('.menu-navigation').style.right = 1;
    }

    function menuHide(){
        document.querySelector('.menu-navigation').style.right = '-255px';
    }
    
};