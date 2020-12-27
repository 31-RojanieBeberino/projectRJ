$(function () {
    $('input').keyup(() => {
        var name = $('.formName').val();
        var char = name.split('');
        var hasNumber = []
        var special =  /[!@#\$%\^&\*]+$/;
        var result = special.test(name)
        var invalid = 'Name must not have Special Characters!!'

        char.map((validate) => validate === special && result.push(validate))
        char.map((value) => $.isNumeric(value) && hasNumber.push(value))

        console.log(result);
        if(hasNumber.length > 0){
            console.log(hasNumber)
            $('input').css('border-color', 'red')
        }else if (result > 0){
            $('input').css('border-color', 'red')
        }else{
            $('input').css('border-color', '#bbbbbb')
        }
    });
});