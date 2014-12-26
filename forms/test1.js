/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var clone = $('#workexp1').clone(),
    number = $('.workexp').length+1;

//add new id to the clone
clone.attr('id', 'workexp'+number)

//change label
.find('label').each(function(){
   $(this).attr('labelemployer', $(this).attr('employer').replace('_1_', '_'+number+'_'));
   $(this).attr('labelfrom', $(this).attr('from').replace('_1_', '_'+number+'_'));
   $(this).attr('labelto', $(this).attr('to').replace('_1_', '_'+number+'_'));
   $(this).attr('labelposition', $(this).attr('position').replace('_1_', '_'+number+'_'));
   $(this).attr('labeljobcomment', $(this).attr('jobcomment').replace('_1_', '_'+number+'_'));
});

//change inputs inside the form-group
clone.find('.form-group > input').each(function(){
   $(this).attr('employer', $(this).attr('employer').replace('_1_', '_'+number+'_'));
   $(this).attr('from', $(this).attr('from').replace('_1_', '_'+number+'_'));
   $(this).attr('to', $(this).attr('to').replace('_1_', '_'+number+'_'));
   $(this).attr('position', $(this).attr('position').replace('_1_', '_'+number+'_'));
   $(this).attr('jobcomment', $(this).attr('jobcomment').replace('_1_', '_'+number+'_'));   
});

//change latest input
clone.find('input.form-control').last().each(function(){
   $(this).attr('id', $(this).attr('id').replace('_1', '_'+number+''));
   $(this).attr('name', $(this).attr('id').replace('[1]', '['+number+']'));
   $(this).val(number);
});

//insert the clone after the last
clone.insertAfter('.edu_row:last');