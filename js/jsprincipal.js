$(document).ready(function(){
    $(".carousel-control-prev-icon").hide();
    $(".carousel-control-next-icon").hide();
    $(".slide").mouseover(function(){
        $(".carousel-control-prev-icon").show();
        $(".carousel-control-next-icon").show();
        $(".slide").mouseout(function(){
            $(".carousel-control-prev-icon").hide();
            $(".carousel-control-next-icon").hide();
        });
    });
console.log("ai");
});

                    