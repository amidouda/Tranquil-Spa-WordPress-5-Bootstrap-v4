<form action="<?php echo esc_url(home_url('/')); ?>" method="GET">
<div class="form-group">
    <label for="search" class="h4 font-italic">Search</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>">
</div>
</form>