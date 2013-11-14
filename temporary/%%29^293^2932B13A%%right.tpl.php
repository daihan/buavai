<?php /* Smarty version 2.6.6, created on 2013-11-15 00:01:06
         compiled from right.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'get_advertisement', 'right.tpl', 7, false),array('insert', 'get_feat_gags', 'right.tpl', 27, false),array('insert', 'get_fav_count', 'right.tpl', 40, false),array('modifier', 'stripslashes', 'right.tpl', 32, false),array('modifier', 'mb_truncate', 'right.tpl', 32, false),)), $this); ?>
	<div class="side-bar">
    	<?php if ($_SESSION['USERID'] == ""): ?>
        <li id="side-bar-signup">
        	<a class="spcl-button green" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/signup" label="Header"><?php echo $this->_tpl_vars['lang148']; ?>
</a>
        </li>
        <?php endif; ?>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_advertisement', 'AID' => 1)), $this); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'top10.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="msg-box">
            <h3><?php echo $this->_tpl_vars['lang153']; ?>
 <?php echo $this->_tpl_vars['site_name']; ?>
</h3>
            <div class="facebook-like">
                <iframe src="//www.facebook.com/plugins/like.php?href=http://facebook.com/<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
%2F&amp;send=false&amp;layout=standard&amp;width=270&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:80px;" allowTransparency="true"></iframe>
            </div>
            <div class="twitter-follow">
            	<a href="http://twitter.com/<?php echo $this->_tpl_vars['twitter']; ?>
" class="twitter-follow-button"><?php echo $this->_tpl_vars['lang149']; ?>
 @<?php echo $this->_tpl_vars['twitter']; ?>
</a>
            </div>          
            <div class="google-plus">
            	<p><?php echo $this->_tpl_vars['lang150']; ?>
</p>
            	<g:plusone size="medium" href="<?php echo $this->_tpl_vars['baseurl']; ?>
"></g:plusone>
            </div>
        </div>        
        <div id="moving-boxes">
            <div id="post-gag-stay" class="_badge-sticky-elements" data-y="60">
                <div class="popular-block">
                    <h3><?php echo $this->_tpl_vars['lang260']; ?>
</h3>
                    <ol>
                    	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_feat_gags', 'assign' => 'recgags')), $this); ?>

                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['recgags']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <a class="wrap" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['recgags'][$this->_sections['i']['index']]['PID']; ?>
">
                            <li>
                            	<?php if ($this->_tpl_vars['recgags'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
                                <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw.jpg" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['recgags'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
" />	
                                <?php else: ?>
                                <img src="<?php echo $this->_tpl_vars['purl']; ?>
/s-<?php echo $this->_tpl_vars['recgags'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['recgags'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
" />
                                <?php endif; ?>		
                                <h4><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['recgags'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
</h4>
                                <h4><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$this->_tpl_vars['recgags'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['recgags'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></h4>
                                <p class="meta">
                                	<span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['recgags'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span>
                                    <span class="loved"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_count', 'value' => 'var', 'assign' => 'fcount', 'PID' => $this->_tpl_vars['recgags'][$this->_sections['i']['index']]['PID'])), $this);  echo $this->_tpl_vars['fcount']; ?>
</span>
                                </p>
                            </li>
                        </a>
                        <?php endfor; endif; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div id="moving-boxes">
            <div class="msg-box">
            	<h3><?php echo $this->_tpl_vars['lang151']; ?>
</h3>
            	<p><?php echo $this->_tpl_vars['lang152']; ?>
</p>
            </div>
            <div class="section-2" style="width:250px">
                <div class="wrap" style="width:250px">
                    <ul class="sideinfo side-items-left" style="font-weight:bold; font-size:11px;margin-bottom:10px;padding-left:5px">
                        <li>Copyright &copy; 2013 <?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 - <a class="badge-language-selector" href="javascript:void(0);" style="color:#4c6aa9"><?php if ($_SESSION['language'] == 'en'): ?>English<?php elseif ($_SESSION['language'] == 'vi'): ?>Tiếng Việt<?php endif; ?></a></li>
                    </ul>
                    <ul class="sideinfo side-items-left" style="overflow:visible; width:400px">
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/about"><?php echo $this->_tpl_vars['lang67']; ?>
</a></li>
                        <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/rules"><?php echo $this->_tpl_vars['lang135']; ?>
</a></li>
                        <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/faq"><?php echo $this->_tpl_vars['lang202']; ?>
</a></li>
                        <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/contact"><?php echo $this->_tpl_vars['lang205']; ?>
</a></li>
                    </ul>
                    <ul class="sideinfo side-items-left" style="overflow:visible; width:400px">
                        <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/terms_of_service"><?php echo $this->_tpl_vars['lang203']; ?>
</a></li>
                        <li>·<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/privacy_policy"><?php echo $this->_tpl_vars['lang204']; ?>
</a></li>
                    </ul>
                    <div style="clear:both"></div>
                    <div style="padding-left:7px; padding-top:10px;">
                    <a><b>Powered by Gag Việt - Phiên Bản <?php echo $this->_tpl_vars['ver']; ?>
</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>