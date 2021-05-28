import $ from "jquery"

class MobileMenu{
    constructor(){
        this.MobileMenu()
    }
    //events
    MobileMenu(){
        $(".icon").on("click", this.MobileMenuShow.bind(this))
    }
    //Methods
    MobileMenuShow(e){
        $("#myLinks").slideToggle("slow")
    }
}
export default MobileMenu;