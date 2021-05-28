import $ from "jquery"

$(".accessControls").hide();
class Accessability{
    constructor(){
        this.Accessability()
    }
    //events
    Accessability(){
        $(".top-of-banner-access").on("click", this.AccessabilityShow.bind(this))
        $('.default').on('click', this.defaultSize.bind(this))
        $('.medium').on('click', this.mediumSize.bind(this))
        $('.large').on('click', this.largeSize.bind(this))
        $('.contrast-default').on('click', this.contrastDefault.bind(this))
        $('.inverted').on('click', this.inverted.bind(this))
        $('.high-contrast').on('click', this.highContrast.bind(this))
    }
    //Methods
    AccessabilityShow(e){
        $(".accessControls").slideToggle();
    }
    defaultSize(e){
        $(".medium").css('background', '#fff')
        $(".medium").css('color', '#003c4f')
        $(".large").css('background', '#fff')
        $(".large").css('color', '#003c4f')
        $(".default").css('background', '#003c4f')
        $(".default").css('color', '#fff')
        $("body").css('font-size', '100%')
        $(".top-of-banner-access").css('font-size', '3em')
        $(".front-page").css('font-size', '1em')
        $(".accessControls").slideUp()
    }
    mediumSize(e){
        $(".default").css('background', '#FFF')
        $(".default").css('color', '#003c4f')
        $(".medium").css('background', '#003c4f')
        $(".medium").css('color', '#fff')
        $(".large").css('background', '#fff')
        $(".large").css('color', '#003c4f')
        $("body").css('font-size', '150%')
        $(".top-of-banner-access").css('font-size', '2em')
        $(".top-of-banner-asl").css('font-size', '2em')
        $(".front-page").css('font-size', '.7em')
        $(".accessControls").slideUp()
    }
    largeSize(e){
        $(".default").css('background', '#FFF')
        $(".default").css('color', '#003c4f')
        $(".medium").css('background', '#fff')
        $(".medium").css('color', '#003c4f')
        $(".large").css('background', '#003c4f')
        $(".large").css('color', '#fff')
        $("body").css('font-size', '200%')
        $(".top-of-banner-access").css('font-size', '1.5em')
        $(".top-of-banner-asl").css('font-size', '1.5em')
        $(".front-page").css('font-size', '.5em')
        $(".accessControls").slideUp()
    }
    contrastDefault(){

    }
    inverted(){

    }
    highContrast(){
        $("body, .container1, .container2, .accessControls, .mainLinks, .postsContainer, footer").css("background-color", "black")
        $("body, a, .container1, .container2, .accessControls, p").css("color", "white")
        $(".accessControls").slideUp()
    }
    inverted(){
        $("body, .container1, .container2, .mainLinks, .postsContainer, .accessControls, footer").css("background-color", "#fff")
        $("body, a, .container1, .container2, .accessControls, p").css("color", "black")
        $(".donate_button a").css("color", "#fff")
        $(".accessControls").slideUp()
    }
    contrastDefault(){
        $("footer, .container1").css("background-color", "#003c4f")
        $(".container2, body, .mainLinks, .postsContainer, .accessControls").css("background-color", "#fff")
        $("body, .container1, .container2, .mainLinks, .accessControls, p").css("color", "#003c4f")
        $("a").css("color", "#fff")
        $(".mainLinks a, .container2 a").css("color", "#003c4f")
        $(".donate_button a").css("color", "#93bbe5")
        $(".accessControls").slideUp()
    }
}
export default Accessability;