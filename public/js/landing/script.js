$(document).ready(function(){
	$(document).on('click','.btn_answers',function(e){
		e.preventDefault()
		var quiz = $(this).attr('quiz')
		$('.form_quiz').append(`<input type="hidden" name="quiz" value="${quiz}"/>`)
		$('.form_quiz').submit()
	})

	$(document).on('click','.joker',function(){
		setTimeout(function(){
			$('.joker_m').removeProp("display");

		},100)
	})
	$(document).on('click','.result_img',function(){
        FB.ui({ method: 'share', href: $('.fb-share-button').attr('data-href'), hashtag: null,quote:null}, function(response){});
	})

	$(document).on('click','.edit_question',function(){
       var person = prompt("Please enter your question number:", 1);
		if (person != null || Number(person) > 0) {
		    window.location.href = $('#url').val()+"/Admin/Game/"+$('#id').val()+"/EditQuestion/"+person;
		}
	})

})