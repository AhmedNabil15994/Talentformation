$('select[name="valid_type"]').on('change',function(){
    $('input[name="valid_value"]').val('');
    if($(this).val() == 1){
        $('.datetimepicker-inputs').datepicker('remove');
    }else if($(this).val() == 2){
        $('.datetimepicker-inputs').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        });
    }
});