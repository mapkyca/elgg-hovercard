<?php

/*
 * Basic default output hovercard view.
 * 
 * Required fields:
 * 
 * $vars['selector'] = jquery selector to hook on
 * $vars['content'] = Hcard content
 * $vars['image'] = Image URL of the hcard.
 */
?>
<script type="text/javascript">
$(document).ready(function () {
    
    $("<?= $vars['selector']; ?>").hovercard({
        detailsHTML: '<?= $vars['content']; ?>',
        width: 400,
        cardImgSrc: '<?= $vars['image']; ?>'
    });
});
</script>