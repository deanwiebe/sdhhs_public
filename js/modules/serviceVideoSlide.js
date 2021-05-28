import $ from "jquery"

class ServiceVideoSlide{
    constructor(){
        this.events()
    }
    events(){
        $(".service-asl").hide()
        $(".service-button").hide()
        $(".service-button").fadeIn(3000)
        $(".service-button").on("click", this.serviceButtonDispatcher.bind(this))
    }
    serviceButtonDispatcher(e){
        // const serviceVideo = $(e.target).closest(".title-and-video").children(".service-asl")
        const serviceVideo = $(e.target).closest(".service-title").children(".service-asl")
        serviceVideo.slideToggle("slow")
        console.log(serviceVideo)
    }
}


export default ServiceVideoSlide