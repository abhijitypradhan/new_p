<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<form id="frm">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" name="email" required></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" id="frmSubmit" ></td>
</tr>

</table>
@csrf
</form>
<div id="message"></div>
<script>
    jQuery('#frm').submit(function(e)
    {
e.preventDefault();
jQuery.ajax({
    url:"{{url('form_submit')}}",
    data:jQuery('#frm').serialize(),
    type:'post',
    success:function(result){
        jQuery('#message').html(result.msg);
        jQuery('#frm')['0'].reset();
    }

});
    });
</script>