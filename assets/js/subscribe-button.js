/***************************************
 SUBSCRIBE BUTTON ANIMATION
****************************************/


    var subscribeElement = document.querySelector(".lf-subscribe");
    var element1 = document.getElementById('lf-subscribe__element-teaser');
    var element2 = document.getElementById('lf-subscribe__element-email');
    var element3 = document.getElementById('lf-subscribe__element-firstname');
    var element4 =  document.getElementById('lf-subscribe__element-title');
    var closeElement = document.getElementById('lf-subscribe-close');
    var thanksElement = document.getElementById('lf-subscribe__element-thanks');
    
    document.addEventListener("click", function () {
        console.dir(document.documentElement.scrollHeight);
    });
    
    function openSubscribe(){
    
        tl = new TimelineMax({delay:0.05});
        tl.to(element1,0.7, {ease:Back.easeOut, rotation: -90, x:-55, y:25, transformOrigin: "140% -200%"})
            .to(element2, 0.6, {ease:Back.easeOut, rotation: -90, x:-110,y:73, transformOrigin: "140% -200%"}, "-=0.6")
            .to(element3, 0.5, {ease:Back.easeOut, rotation: -90, x:-160,y:117, transformOrigin: "140% -200%"}, "-=0.5")
            .to(element4, 0.4, {ease:Back.easeOut, rotation: -90, x:-130,y:120, transformOrigin: "126% -250%"}, "-=0.4");
    
        TweenLite.to(thanksElement, 0, {
            rotation: -90, x:-200, y:200, transformOrigin: "140% -200%"
        });
    
        element1.className = "lf-subscribe__item lf-subscribe__item__open";
        element1.removeAttribute("onclick");
        element1.setAttribute("onclick", "hideSubscribe()");
    }
    
    function closeSubscribe(callback){
    
        var reverseSubscribe = function(){
            tl.reverse(-0.2, true);
    
            if(callback){
                callback();
            }
        };
    
        TweenLite.to(closeElement, 0.7, {
            ease: Back.easeIn,
            rotation: 360,
            delay: 0,
            onComplete: reverseSubscribe
        });
    
        TweenLite.set(closeElement, {rotation:0});
    
        element1.removeAttribute("onclick");
        element1.setAttribute("onclick", "openSubscribe()")
    
        return false;
    }
    
    function hideSubscribe(){
    
        closeSubscribe(function(){
            thanksElement.style.left = "-150";
            tl2 = new TimelineMax({delay:0.05});
    
            tl2.to(element1, 0.5, {ease:Power1.easeInOut, y: -150, delay:1})
                .to(thanksElement, 1, {x: -250, opacity:1, ease:Power1.easeInOut})
                .to(thanksElement, 0.5, {opacity:0, ease:Power1.easeInOut, delay:3})
            ;
    
        });
    }

