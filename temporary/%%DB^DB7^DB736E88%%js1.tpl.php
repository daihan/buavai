<?php /* Smarty version 2.6.6, created on 2013-11-15 00:01:06
         compiled from js1.tpl */ ?>
<?php echo '
<script type="text/javascript">
function keyfind(e)
{
var code;
if (!e) var e = window.event;
if (e.keyCode) code = e.keyCode;
else if (e.which) code = e.which;
var character = String.fromCharCode(code);
var classes=$(\'.entry-item\').length;
if($(\'#header_searchbar\').css(\'display\')!=\'none\'){
character=0;}
if(character ==\'J\' || character ==\'j\'){
window.location.href=$(\'#next_post\').attr(\'href\');
}
if(character ==\'K\' || character ==\'k\'){
window.location.href=$(\'#prev_post\').attr(\'href\');
}
if(character==\'L\' || character==\'l\'){
$(\'#post_view_love\').trigger(\'click\');
}
if(character==\'R\' || character==\'r\'){
window.location.href = "';  echo $this->_tpl_vars['baseurl']; ?>
/random<?php echo '";
}
}
</script>
'; ?>