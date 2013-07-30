<?php

    /**
     * The Twitter Rest API is no longer available, but I don't have time to get into it now... therefore I'm keeping this here for reference only.
     */

	$vars['value'] = trim($vars['value'], ' .@/');
?>
<a href="http://www.twitter.com/<?php echo $vars['value']?>" target="_blank" data-hovercard="<?php echo $vars['value']?>" class="hovercard-twitter">@<?php echo $vars['value']?></a>