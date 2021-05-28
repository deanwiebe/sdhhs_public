import $ from "jquery";

class Membership{
    constructor(){
        this.openButton = $('.membership-button')
        this.events()
    }
    events(){
        this.openButton.on('click', this.openForm.bind(this))
    }
    openForm(e){
        const ass = $(e.target).closest('.blue-row').children('.show-hide')
        ass.slideToggle('slow').css('display', 'flex')
    }
}

export default Membership