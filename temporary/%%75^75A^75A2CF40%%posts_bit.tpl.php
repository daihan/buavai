<?php /* Smarty version 2.6.6, created on 2013-11-14 23:48:22
         compiled from posts_bit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'posts_bit.tpl', 1, false),array('modifier', 'mb_truncate', 'posts_bit.tpl', 1, false),array('insert', 'return_youtube2', 'posts_bit.tpl', 13, false),array('insert', 'return_fod2', 'posts_bit.tpl', 17, false),array('insert', 'get_fav_count', 'posts_bit.tpl', 39, false),array('insert', 'get_fav_status', 'posts_bit.tpl', 56, false),array('insert', 'get_unfav_status', 'posts_bit.tpl', 66, false),)), $this); ?>
					<li class=" gag-link" data-url="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" data-text="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
" gagId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" itemType="list" id="entry-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                        <div class="content">
                            <h1><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="jump_focus"><?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></h1>
                            <div class="img-wrap">
                                <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['nsfw'] == '1' && $_SESSION['FILTER'] != '0'): ?>
                                	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/nsfw.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                                <?php else: ?>
                                	<?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic'] != ""): ?>
                                	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"><img style="max-width:460px" src="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['pic']; ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" /></a>
                                    <?php else: ?>
                                        <?php if ($this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'] != ""): ?>
                                        <center>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_youtube2', 'value' => 'a', 'assign' => 'youtube', 'youtube' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['youtube_key'])), $this);  echo $this->_tpl_vars['youtube']; ?>

                                        </center>
                                        <?php else: ?>
                                        <center>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'return_fod2', 'value' => 'a', 'assign' => 'fod', 'fod' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['fod_key'])), $this);  echo $this->_tpl_vars['fod']; ?>

                                        </center>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="watermark-clear"></div>
                            <div class="sharing-box ">
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                        	<span id="list-share-twitter-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                                        	<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['posts'][$this->_sections['i']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('mb_truncate', true, $_tmp, 20, "...", 'UTF-8') : smarty_modifier_mb_truncate($_tmp, 20, "...", 'UTF-8')); ?>
" data-url="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" data-count="horizontal" data-via="">&nbsp;</a>		
                                            </span>
                                            <div style="float:right" class="facebook-share-btn">
                                    		<fb:share-button class=" fb_iframe_widget" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" type="button_count" fb-xfbml-state="rendered"></fb:share-button>
                                    		</div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info scriptolution-stop" id="action-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
">
                            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_count', 'value' => 'var', 'assign' => 'fcount', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                
                                <ul class="actions"  style="">
                               	    <?php if ($_SESSION['USERID'] != ""): ?>
                                        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_fav_status', 'value' => 'var', 'assign' => 'isfav', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                        <?php if ($this->_tpl_vars['isfav'] == '1'): ?>
                                        <li>
                                            <a class="vote love loved" id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                        </li>
                                        <li class="count"><a></a><span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="badge-item-love-count"><?php echo $this->_tpl_vars['fcount']; ?>
</span></li>                                     
                                        <li>
                                            <a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down "  entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                        </li>
                                        <?php else: ?>
                                    	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'get_unfav_status', 'value' => 'var', 'assign' => 'isunfav', 'PID' => $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID'])), $this); ?>

                                        	<?php if ($this->_tpl_vars['isunfav'] == '1'): ?>
                                            <li>
                                                <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                            </li>
                                            <li class="count"><a></a><span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="badge-item-love-count"><?php echo $this->_tpl_vars['fcount']; ?>
</span></li>
                                            <li>
                                                <a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down unloved "  entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <a class="vote love " id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                            </li>
                                            <li class="count"><a></a><span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="badge-item-love-count"><?php echo $this->_tpl_vars['fcount']; ?>
</span></li>
                                            <li>
                                                <a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down "  entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="javascript:void(0);"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                            </li>
                                        <?php endif; ?>
                                      <?php endif; ?>
                                    <?php else: ?>
                                    <li>
                                    	<a class="vote love " id="post_love_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" rel="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><span><?php echo $this->_tpl_vars['lang144']; ?>
</span></a>
                                    </li>
                                    <li class="count"><a></a><span id="love_count_<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="badge-item-love-count"><?php echo $this->_tpl_vars['fcount']; ?>
</span></li>
                                     <li>
                                    	<a id="vote-down-btn-<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" class="unlove badge-vote-down " entryId="<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login"><span><?php echo $this->_tpl_vars['lang180']; ?>
</span></a>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <a class="comment" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
" target="_blank">
                                            <span class="icon"></span>
                                        </a>
                                        <p>
                                            <span class="comment"><fb:comments-count href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['posts'][$this->_sections['i']['index']]['PID']; ?>
"></fb:comments-count></span>
                                        </p>
                                    </li>
                                </ul>
                                                            </div>
                        </div>
                    </li>