$("#play-radio").click(() => {
    if($("#play-radio").hasClass("pause")){
        document.querySelector("audio").play();
        $("#play-radio").removeClass("pause");
        $("#play-radio").addClass("playing");
        $(".icone-play").html("pause")
    }else {
        document.querySelector("audio").pause();
        $("#play-radio").removeClass("playing");
        $("#play-radio").addClass("pause");
        $(".icone-play").html("play_arrow")
    }      
})
