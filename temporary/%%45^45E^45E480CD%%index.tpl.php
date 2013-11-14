<?php /* Smarty version 2.6.6, created on 2013-11-14 23:48:22
         compiled from index.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/scroll.jquery.js"></script>
<div id="main">
    <div id="content-holder">        
        <div class="main-filter ">
            <ul class="content-type">
                <li> <a class="current" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot"><strong><?php echo $this->_tpl_vars['lang172']; ?>
</strong></a></li>
                <li> <a class="" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/trending"><strong><?php echo $this->_tpl_vars['lang173']; ?>
</strong></a></li>
                <li> <a class="" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote"><strong><?php echo $this->_tpl_vars['lang174']; ?>
</strong></a></li>                
            </ul>
            <a id="changeview" class="view_thumbs" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot?show=thumbs"><?php echo $this->_tpl_vars['lang258']; ?>
</a>
            <?php if ($_SESSION['USERID'] != ""): ?>
                <?php if ($_SESSION['FILTER'] == '1'): ?>
                <a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
">&nbsp;</a>
                <?php else: ?>
                <a class="safe-mode-switcher off" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/safe?m=<?php echo $this->_tpl_vars['eurl']; ?>
&o=1">&nbsp;</a>
                <?php endif; ?>
            <?php else: ?>
            	<a class="safe-mode-switcher on" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login">&nbsp;</a>
            <?php endif; ?>
        </div>
        <div id="content" listPage="hot"> 
                    <div id="entries-content" class="list">
                <ul id="entries-content-ul" class="col-1">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['posts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "posts_bit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endfor; endif; ?>                    
                </ul>
                <div id="lastPostsLoader"><img src="<?php echo $this->_tpl_vars['imageurl']; ?>
/loading.gif" /></div>
                <?php echo '
                <script type="text/javascript">
				var tpage = 1;
				$(function(){
					$(\'#entries-content-ul\').scrollPagination({
						\'contentPage\': \'';  echo $this->_tpl_vars['baseurl']; ?>
/<?php echo 'indexmore.php\',
						\'contentData\': {page:function() {return tpage}},
						\'scrollTarget\': $(window),
						\'heightOffset\': 10,
						\'beforeLoad\': function(){
							$(\'#lastPostsLoader\').fadeIn();	
							tpage = tpage+1;
						},
						\'afterLoad\': function(elementsLoaded){
							 $(\'#lastPostsLoader\').fadeOut();
							 var i = 0;
							 $(elementsLoaded).fadeIn();
						 	$(\'#backtotop\').show();
						}
					});
				});
				</script>
                '; ?>
  
            </div>	
        </div>
        <?php echo '
        <script type="text/javascript">
        $(\'.unlove\').click(function(){
        var id=$(this).attr(\'entryId\');
        if( $(this).hasClass(\'unloved\')){
        $(this).removeClass(\'unloved\');
        ulikedeg($(this).attr(\'entryId\'),0,-1);
        }else{
        $(this).addClass(\'unloved\');
        if($(\'#post_love_\'+id).hasClass(\'loved\')){
        ulikedeg($(this).attr(\'entryId\'),-1,1);	
        $(\'#post_love_\'+id).removeClass(\'loved\');
        }else{
        ulikedeg($(this).attr(\'entryId\'),0,1);	
        }
        }
        });
        $(\'.vote\').click(function(){
        var id=$(this).attr(\'rel\');
        if( $(this).hasClass(\'loved\')){
        $(this).removeClass(\'loved\');
        ulikedeg($(this).attr(\'rel\'),-1,0);
        }else{
        $(this).addClass(\'loved\');
        if($(\'#vote-down-btn-\'+id).hasClass(\'unloved\')){
        $(\'#vote-down-btn-\'+id).removeClass(\'unloved\');
        ulikedeg($(this).attr(\'rel\'),1,-1);
        }else{
        ulikedeg($(this).attr(\'rel\'),1,0);
        }
        }
        });        
        function ulikedeg(p,l,u){
        jQuery.ajax({
        type:\'POST\',
        url:\'';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/votegag.php\',
        data:\'l=\'+l+\'&pid=\' + p +\'&u=\'+u,
        success:function(e){
        $(\'#love_count_\'+p).html(e);
        }
        });
        }        
        </script>
        '; ?>

    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  
<div id="footer" class="">