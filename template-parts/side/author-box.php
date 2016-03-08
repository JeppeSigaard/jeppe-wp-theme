<?php

global $post;
$author_id=$post->post_author;
if($author_id) :

$author = get_user_by('id',$author_id);

?>
<div class="site-nav-part author-box">
	<div class="auhor-img" data-bg="">
	</div>
	<div>
	    <p>
	        <strong>Jeppe Sigaard</strong>
	    </p>
	    <p>
            Web udvikler ved <a href="//smartmoneky.dk">SmartMonkey</a>
	    </p>
	    <p>
	    </p>
	</div>
</div>


<?php endif; ?>
