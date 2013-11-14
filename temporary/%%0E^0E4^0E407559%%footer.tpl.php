<?php /* Smarty version 2.6.6, created on 2013-11-15 00:01:07
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'footer.tpl', 1, false),)), $this); ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 2)), $this); ?>


</div>
<div id="overlay-shadow" class="hide"></div>
<div id="overlay-container" class="hide" >
<?php if ($this->_tpl_vars['owner'] == '1'):  if ($this->_tpl_vars['viewpage'] == '1' && $this->_tpl_vars['error'] == "" && $this->_tpl_vars['new'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js3.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  endif; ?>
    <div id="scriptolution-soft-report" class="scriptolution-soft-box hide">
    	<?php if ($this->_tpl_vars['viewpage'] == '1'): ?>
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-scriptolution-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3><?php echo $this->_tpl_vars['lang206']; ?>
</h3>
                <h4><?php echo $this->_tpl_vars['lang207']; ?>
</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value="<?php echo $this->_tpl_vars['p']['PID']; ?>
"/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/><?php echo $this->_tpl_vars['lang208']; ?>
</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/><?php echo $this->_tpl_vars['lang209']; ?>
</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/><?php echo $this->_tpl_vars['lang210']; ?>
</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/><?php echo $this->_tpl_vars['lang211']; ?>
&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['p']['PID']; ?>
" />
                </div>
            </form>
        </div>
        <?php else: ?>
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-scriptolution-soft-report" class="modal" action="#" onsubmit="return false" >
                <h3><?php echo $this->_tpl_vars['lang206']; ?>
</h3>
                <h4><?php echo $this->_tpl_vars['lang207']; ?>
</h4>
                <input id="report_entry_id" type="hidden" name="entryId" value=""/>
                <div class="field">
                    <label for="violation"><input id="violation" type="radio" name="report-reason" value="1"/><?php echo $this->_tpl_vars['lang208']; ?>
</label>
                    <label for="solicitation"><input id="solicitation" type="radio" name="report-reason" value="2"/><?php echo $this->_tpl_vars['lang209']; ?>
</label>
                    <label for="offensive"><input id="offensive" type="radio" name="report-reason" value="3"/><?php echo $this->_tpl_vars['lang210']; ?>
</label>
                    <label for="repost"><input id="repost" type="radio" name="report-reason" value="4"/><?php echo $this->_tpl_vars['lang211']; ?>
&darr;</label>
                </div>
                <div class="field">
                	<input id="repost_link" type="text" class="text " placeholder="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/" />
                </div>
            </form>
        </div>
        <?php endif; ?>
        <div class="actions">
            <ul class="buttons">
                <li><a class="cancel close-report" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang119']; ?>
</a></li>
                <li><a class="button submit-button" href="javascript:void(0);" id="report-submit"><?php echo $this->_tpl_vars['lang212']; ?>
</a></li>
                <li class="hide"><a class="button loading" href="javascript:void(0);"></a></li>
            </ul>
        </div>
    </div>
    <div id="scriptolution-soft-share" class="scriptolution-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn"></a>
            <form id="form-scriptolution-soft-share" class="modal" action="">
            </form>
        </div>                
    </div>
    <div id="scriptolution-soft-language" class="scriptolution-soft-box hide">
        <div class="content">
            <a href="javascript:void(0);" class="close-btn badge-language-close"></a>
            <form id="form-scriptolution-soft-language" class="modal" action="" onsubmit="return false;">
                <h3><?php echo $this->_tpl_vars['lang222']; ?>
</h3>
                <h4><?php echo $this->_tpl_vars['lang223']; ?>
</h4>
                <div class="field">                
                    <label for="lang-en">
                    <input id="lang-en" type="radio" name="language" value="en" <?php if ($_SESSION['language'] == 'en'): ?>class="current" checked="checked"<?php endif; ?>></input>English
                    </label>
                                    
                    <label for="lang-vi">
                    <input id="lang-vi" class="" type="radio" name="language" value="vi" <?php if ($_SESSION['language'] == 'vi'): ?>class="current" checked="checked"<?php endif; ?>></input>Tiếng Việt
                    </label>
                </div>
            </form>
        </div>
        <div class="actions">
            <ul class="buttons">
                <li><a id="badge-language-close" class="cancel badge-language-close" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang119']; ?>
</a></li>
                <li><a id="language-submit-button" class="button submit-button" href="javascript:void(0);"><?php echo $this->_tpl_vars['lang221']; ?>
</a></li>
            </ul>
        </div>
    </div>
    <div class="keyboard-instruction hide">
        <h3><?php echo $this->_tpl_vars['lang213']; ?>
</h3>
        <div class="keyboard-img"></div>
        <ul class="key">
            <li><strong>R</strong> - <?php echo $this->_tpl_vars['lang214']; ?>
</li>
            <li><strong>C</strong> - <?php echo $this->_tpl_vars['lang215']; ?>
</li>
            <li><strong>H</strong> - <?php echo $this->_tpl_vars['lang216']; ?>
</li>
            <li><strong>J</strong> - <?php echo $this->_tpl_vars['lang217']; ?>
</li>
            <li><strong>K</strong> - <?php echo $this->_tpl_vars['lang218']; ?>
</li>
            <li><strong>L</strong> - <?php echo $this->_tpl_vars['lang219']; ?>
</li>
        </ul>
        <p><?php echo $this->_tpl_vars['lang220']; ?>
</p>
    </div>
</div>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/fbshare.js" type="text/javascript"></script>
<?php echo '
<script type="text/javascript">
function sendlang(lang){
jQuery.ajax({
type:\'POST\',
url:\' ';  echo $this->_tpl_vars['baseurl'];  echo '\'+ \'/changelang.php\',
data:\'language=\'+lang,
success:function(e){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#scriptolution-soft-language\').addClass(\'hide\');
location.reload();
}
});
}
$(\'.badge-language-selector\').click(function(){
$("#overlay-shadow").removeClass("hide");
$("#overlay-container").removeClass("hide");
$("#scriptolution-soft-language").removeClass("hide");
$("#language-submit-button").click(function(){
sendlang($(\'input[name=language]:checked\').val());
});
$("#badge-language-close").click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
$(\'#scriptolution-soft-language\').addClass(\'hide\');
});
});
$(\'.close-report\').click(function(){
$(\'#overlay-shadow\').addClass(\'hide\');
$(\'#overlay-container\').addClass(\'hide\');
});
</script>
'; ?>

<?php if ($this->_tpl_vars['viewpage'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js4.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js5.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php echo '
<a style="width:55px;height:46px; position:fixed; bottom:0; right:20px; background:#eeeeee;-webkit-border-top-left-radius: 5px; -webkit-border-top-right-radius: 5px;-moz-border-radius-topleft: 5px;-moz-border-radius-topright: 5px;border-top-left-radius: 5px;border-top-right-radius: 5px;-webkit-box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:    0px 0px 2px rgba(0, 0, 0, 0.4);box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.4);padding:12px 6px 0 6px;font-size:14px;font-weight:bold;border: 1px #FFF solid;color:#000;display:none;" href="javascript:void(0);" onclick="if($.browser.safari || $.browser.chrome){ bodyelem = $(body) } else{ bodyelem = $(html) }bodyelem.animate({scrollTop : 1},\'slow\'); $(\'#backtotop\').hide();"  id="backtotop"><center>';  echo $this->_tpl_vars['lang251'];  echo '</center></a>
'; ?>

<?php if ($this->_tpl_vars['viewpage'] == '1'): ?>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<?php endif; ?>
</body>
</html>