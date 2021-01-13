function checker (value, id) {
    // var name = $(`.${id}`).val();
    console.log('name ere====?', value)
    var char = [];
    var hasNumber = []
    var special =  /[!@#\$%\^&\*]+$/;
    var result = ''
    var invalid = 'Name must not have Special Characters!!'

    console.log(value)

    if(value) {
       //  char = value.split('')

        char.map((validate) => validate === special && result.push(validate))
        char.map((value) => $.isNumeric(value) && hasNumber.push(value))

        result = special.test(value)
    }

    // console.log(result);
    if(hasNumber.length > 0){
        console.log(hasNumber)
        $(`.${id}`).css('border-color', 'red')
    }else if (result > 0){
        $(`.${id}`).css('border-color', 'red')
    }else{
        $(`.${id}`).css('border-color', 'rgb(15, 163, 163)')
    }
};

checker()