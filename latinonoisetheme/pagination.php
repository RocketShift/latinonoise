<?php global $query; ?>
<div class="pagination_block">
	<?php 
      $big = 999999999; // need an unlikely integer
       echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $query->max_num_pages,
   		  'add_args'  => array(),
      ) );
    ?>
</div>