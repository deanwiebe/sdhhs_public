import $ from "jquery"
$(".page-asl").hide();
$("#Layer_1").hide()
class VideoSlide{
    constructor(){
        this.VideoSlide()
    }
    //events
    VideoSlide(){
        $("#Layer_1").fadeIn(3000);
        $("#Layer_1").on("click", this.PageVideoSlide.bind(this))
    }
    //Methods
    PageVideoSlide(e){
        $(".page-asl").slideToggle("slow")
    }
}
export default VideoSlide;