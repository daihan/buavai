					<li class=" gag-link" data-url="{$baseurl}/gag/{$posts[i].PID}" data-text="{$posts[i].story|stripslashes|mb_truncate:20:"...":'UTF-8'}" gagId="{$posts[i].PID}" itemType="list" id="entry-{$posts[i].PID}">
                        <div class="content">
                            <h1 style="width:550px"><a href="{$baseurl}/gag/{$posts[i].PID}" class="jump_focus">{$posts[i].story|stripslashes}</a></h1>
                            <div class="img-wrap">
                                {if $posts[i].nsfw eq "1" AND $smarty.session.FILTER ne "0"}
                                	<a href="{$baseurl}/gag/{$posts[i].PID}"><img src="{$baseurl}/images/nsfw.jpg" alt="{$posts[i].story|stripslashes}" /></a>
                                {else}
                                	{if $posts[i].pic ne ""}
                                	<a href="{$baseurl}/gag/{$posts[i].PID}"><img style="width:550px" src="{$purl}/{$posts[i].pic}" alt="{$posts[i].story|stripslashes}" /></a>
                                    {else}
                                        {if $posts[i].youtube_key != ""}
                                        <center>
                                        {insert name=return_youtube2 value=a assign=youtube youtube=$posts[i].youtube_key}{$youtube}
                                        </center>
                                        {else}
                                        <center>
                                        {insert name=return_fod2 value=a assign=fod fod=$posts[i].fod_key}{$fod}
                                        </center>
                                        {/if}
                                    {/if}
                                {/if}
                            </div>
                            <div class="watermark-clear"></div>
                            <div class="sharing-box ">
                                    <ul class="sharing ">
                                        <li class="facebook" id="share1-{$posts[i].PID}">
                                        	<span id="list-share-twitter-{$posts[i].PID}">
                                        	<a href="https://twitter.com/share" class="twitter-share-button" data-text="{$posts[i].story|stripslashes|mb_truncate:20:"...":'UTF-8'}" data-url="{$baseurl}/gag/{$posts[i].PID}" data-count="horizontal" data-via="">&nbsp;</a>		
                                            </span>
                                            <div style="float:right" class="facebook-share-btn">
                                    		<fb:share-button class=" fb_iframe_widget" href="{$baseurl}/gag/{$posts[i].PID}" type="button_count" fb-xfbml-state="rendered"></fb:share-button>
                                    		</div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div style="position:relative;width:220px;float:right">
                            <div class="info scriptolution-stop" id="action-{$posts[i].PID}">
                            {insert name=get_fav_count value=var assign=fcount PID=$posts[i].PID}
                               {* 
                                <h4>
                                    <a href="{$baseurl}/user/{$posts[i].username|stripslashes}">{$posts[i].username|stripslashes}</a>
                                    <p>{insert name=get_time_to_days_ago time=$posts[i].time_added}</p>
                                </h4>                                
                                <p>
                                    <span class="comment">
                                        <fb:comments-count href="{$baseurl}/gag/{$posts[i].PID}"></fb:comments-count>
                                    </span>
                                    {insert name=get_fav_count value=var assign=fcount PID=$posts[i].PID}
                                    <span id="love_count_{$posts[i].PID}" class="loved" votes="{$fcount}" score="0">{$fcount}</span>
                                    <span class="viewed">{$posts[i].postviewed}</span>
                                </p>
                               *} 
                                <ul class="actions"  style="">
                               	    {if $smarty.session.USERID ne ""}
                                        {insert name=get_fav_status value=var assign=isfav PID=$posts[i].PID}
                                        {if $isfav eq "1"}
                                        <li>
                                            <a class="vote love loved" id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang144}</span></a>
                                        </li>
                                        <li class="count"><a></a><span id="love_count_{$posts[i].PID}" class="badge-item-love-count">{$fcount}</span></li>                                     
                                        <li>
                                            <a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down "  entryId="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang180}</span></a>
                                        </li>
                                        {else}
                                    	    {insert name=get_unfav_status value=var assign=isunfav PID=$posts[i].PID}
                                        	{if $isunfav eq "1"}
                                            <li>
                                                <a class="vote love " id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang144}</span></a>
                                            </li>
                                            <li class="count"><a></a><span id="love_count_{$posts[i].PID}" class="badge-item-love-count">{$fcount}</span></li>
                                            <li>
                                                <a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down unloved "  entryId="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang180}</span></a>
                                            </li>
                                            {else}
                                            <li>
                                                <a class="vote love " id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang144}</span></a>
                                            </li>
                                            <li class="count"><a></a><span id="love_count_{$posts[i].PID}" class="badge-item-love-count">{$fcount}</span></li>
                                            <li>
                                                <a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down "  entryId="{$posts[i].PID}" href="javascript:void(0);"><span>{$lang180}</span></a>
                                            </li>
                                        {/if}
                                      {/if}
                                    {else}
                                    <li>
                                    	<a class="vote love " id="post_love_{$posts[i].PID}" rel="{$posts[i].PID}" href="{$baseurl}/login"><span>{$lang144}</span></a>
                                    </li>
                                    <li class="count"><a></a><span id="love_count_{$posts[i].PID}" class="badge-item-love-count">{$fcount}</span></li>
                                     <li>
                                    	<a id="vote-down-btn-{$posts[i].PID}" class="unlove badge-vote-down " entryId="{$posts[i].PID}" href="{$baseurl}/login"><span>{$lang180}</span></a>
                                    </li>
                                    {/if}
                                    <li>
                                        <a class="comment" href="{$baseurl}/gag/{$posts[i].PID}" target="_blank">
                                            <span class="icon"></span>
                                        </a>
                                        <p>
                                            <span class="comment"><fb:comments-count href="{$baseurl}/gag/{$posts[i].PID}"></fb:comments-count></span>
                                        </p>
                                    </li>
                                </ul>
                                {*
                                <a class="fix" href="{$baseurl}/fix/{$posts[i].PID}">{$lang142}</a>
                                *}
                            </div>
                        </div>
                    </li>