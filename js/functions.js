class checker {
    constructor(val) {
        this.value = val
        value.map((char) => {
            if($.isNumeric(char)) {
                $('.name').css('border-color', 'red')
            }else{
                $('.name').css('border-color', '#bbbbbb')
            }
        })
    }
}