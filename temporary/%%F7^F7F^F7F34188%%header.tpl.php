<?php /* Smarty version 2.6.6, created on 2013-11-15 00:01:06
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'header.tpl', 15, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)">
<head prefix="og: http://ogp.me/ns/fb#">
<title><?php if ($this->_tpl_vars['gagtitle'] != ""):  echo $this->_tpl_vars['gagtitle'];  else:  if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name'];  endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php if ($this->_tpl_vars['gagtitle'] != ""):  echo $this->_tpl_vars['gagtitle'];  else:  if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  if ($this->_tpl_vars['metadescription'] != ""):  echo $this->_tpl_vars['metadescription']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name'];  endif; ?>">
<meta name="keywords" content="<?php if ($this->_tpl_vars['gagkeys'] != ""):  echo $this->_tpl_vars['gagkeys'];  else:  if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
,<?php endif;  if ($this->_tpl_vars['metakeywords'] != ""):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name'];  endif; ?>">
<meta name="title" content="<?php if ($this->_tpl_vars['gagtitle'] != ""):  echo $this->_tpl_vars['gagtitle'];  else:  if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name'];  endif; ?>" />
<meta property="og:title" content="<?php if ($this->_tpl_vars['gagtitle'] != ""):  echo $this->_tpl_vars['gagtitle'];  else:  if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name'];  endif; ?>"/>
<meta property="og:site_name" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
"/>
<meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/"/>
<meta property="og:type" content="blog" />
<meta property="fb:app_id" content="<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
"/>
<meta property="fb:admins" content="<?php echo $this->_tpl_vars['FACEBOOK_ADMIN']; ?>
"/>
<?php if ($this->_tpl_vars['viewpage'] == '1'):  if ($this->_tpl_vars['p']['youtube_key'] != ""): ?><link rel="image_src" href="http://i.ytimg.com/vi/<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['youtube_key'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
/0.jpg" / ><?php else: ?><link rel="image_src" href="<?php echo $this->_tpl_vars['purl']; ?>
/<?php echo $this->_tpl_vars['p']['pic']; ?>
" / ><?php endif;  endif; ?>
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.scrollTo-1.4.2-min.js"></script>
</head>
<body id="page-landing" class="main-body ">
<div id="fb-root"></div>
<?php if ($this->_tpl_vars['enable_fc'] == '1'):  echo '
<script src="http://connect.facebook.net/vi_VN/all.js"></script>
<script>
  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe(\'auth.login\', function(response) {
    window.location.reload();
  });	  
</script>
'; ?>

<?php endif; ?>
<div id="tmp-img" style="display:none"></div>
<?php echo '
<script type="text/javascript"> 
function rmt(l) { var img = new Image(); img.src = l; document.getElementById(\'tmp-img\').appendChild(img); } 
function myWindow(location, address, gaCategory, gaAction) { var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "myWindow", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
</script>
'; ?>

<div id="head-wrapper">
    <div id="head-bar">
        <h1><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><?php echo $this->_tpl_vars['site_name']; ?>
</a></h1>
        <ul class="main-menu" style="overflow:visible">            
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 1): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot"><?php echo $this->_tpl_vars['lang201']; ?>
</a></li>
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 3): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/trending">Xu hướng</a></li>            
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 4): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/vote"><?php echo $this->_tpl_vars['lang173']; ?>
</a></li>
            <li><a class="" href="http://memeful.com/" target="_blank">Chế MeMe</a></li>            
        </ul>
        <ul class="main-2-menu">
            <li>
                <form action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search">
                    <input id="sitebar_search_header" type="text" class="" name="query" tabindex="1" placeholder="<?php echo $this->_tpl_vars['lang189']; ?>
"/>
                </form>
            </li>
            <li><a class="search-button search-toggler" href="javascript:void(0);"><strong><?php echo $this->_tpl_vars['lang189']; ?>
</strong></a></li>
            <?php if ($_SESSION['USERID'] != ""): ?>
            <li>
                <?php echo '
                <script type="text/javascript">
                function loadContent(elementSelector, sourceURL) {
                $(""+elementSelector+"").load(""+sourceURL+"");
                }
                </script>
                '; ?>

                <div id="loadme"></div>
                <div id="profile-menu" class="profile-menu">
                <a id="profile-username" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="profile-button"><?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                <ul>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/settings"><?php echo $this->_tpl_vars['lang45']; ?>
</a></li>
                    <li><a href="javascript:loadContent('#loadme', '<?php echo $this->_tpl_vars['baseurl']; ?>
/log_out');"><?php echo $this->_tpl_vars['lang198']; ?>
</a></li>
                </ul>
                </div>
            </li>
            <?php else: ?>         
            <li id="side-bar-signup">
            <a class="signup-button green" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/signup" label="Header">Sign up</a>
            </li>            
            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login" class="button">Log in</a></li>            
            <?php endif; ?>
            <!-- <li><a class="random-button" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" id="rand-but"><strong><?php echo $this->_tpl_vars['lang196']; ?>
</strong></a></li> -->
            <li><a class="add-post <?php if ($this->_tpl_vars['menu'] == 3): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/submit" onclick="_gaq.push(['_trackEvent', 'New-Post', 'Clicked', 'Headbar', 1]);">Upload</a></li>
        </ul>
    </div>
    <?php if ($this->_tpl_vars['homepage'] == '1'): ?>
    <?php if ($this->_tpl_vars['enable_featured'] == '1'): ?>
	<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/scriptolution.css" media="screen" rel="stylesheet" type="text/css" />
    <div class="scriptolution-bar">
    <ul>
        <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['feat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>            
        <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/gag/<?php echo $this->_tpl_vars['feat'][$this->_sections['j']['index']]['PID']; ?>
" >
        <img src="<?php echo $this->_tpl_vars['purl']; ?>
/s-<?php echo $this->_tpl_vars['feat'][$this->_sections['j']['index']]['pic']; ?>
" />
        <span class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['feat'][$this->_sections['j']['index']]['story'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</span>
        </a>
        <?php endfor; endif; ?>    
    </ul>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>
<div id="head-line">
    <p><?php echo $this->_tpl_vars['lang169']; ?>
: <?php echo $this->_tpl_vars['lang153']; ?>
 <?php echo $this->_tpl_vars['site_name']; ?>
     </p>
    <div class="social">                        
        <div class="fb-like" data-href="https://www.facebook.com/BuaVai" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>            
    </div>
</div>            
<?php if ($this->_tpl_vars['homepage'] == '1'):  if ($this->_tpl_vars['enable_featured'] == '1'): ?>
<div style="clear:both; margin-top:160px;"></div>
<?php endif;  endif;  echo '
<script type="text/javascript">
$(\'.search-button\').click(function() {
    $(this).css(\'display\',\'none\');
    $(\'#sitebar_search_header\').toggle(\'slow\');
    $(\'#sitebar_search_header\').css(\'float\',\'none\');
});
$(document).mouseup(function (e) {
    var container = $(\'.search-button\');
    var button_search = $(\'#sitebar_search_header\');
    if (!container.is(e.target) && container.has(e.target).length === 0 && !button_search.is(e.target)){
        container.show();
        $(\'#sitebar_search_header\').css(\'display\', \'none\');
    } 
});
</script>
'; ?>
              
<div id="container" style="">
<?php if ($this->_tpl_vars['viewpage'] == '1'):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>