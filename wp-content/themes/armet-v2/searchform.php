<form action="<?php echo home_url( '/' ); ?>" method="get">
    <div class="search">
        <label for="search"><i class="fas fa-search fa-lg"></i></label>
        <input type="text" name="search" id="search" placeholder="Search..." value="<?php the_search_query(); ?>" />
    </div>
    <input type="submit" value="Search" class="button">
</form>
