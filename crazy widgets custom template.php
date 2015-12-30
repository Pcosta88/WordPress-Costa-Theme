<?php 
/* 
  Template Name: Crazy Widgets Custom Template 
  Author: Patrick Costa
  Author url: patcosta.com
*/
?>
<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    
    <table class="widget_table" align="center">
    <tr>
   <td> <aside id="data1" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'data1' ); ?>
</aside></td>
<td>
<aside id="data2" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'data2' ); ?>
</aside>
</td>
<td>
<aside id="data3" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'data3' ); ?> </aside>
</td>
</tr>
<tr>
<td>
<aside id="data4" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'data4' ); ?> </aside>
  </td>
  <td> 
<aside id="data5" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'data5' ); ?> </aside>
  </td>

<td>
<aside id="data6" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'data6' ); ?> </aside>
  </td>

</tr>
</table>
    
    </div>
  </div>
</section>


<?php get_template_part('content', 'portfolio'); ?>


<?php get_footer(); ?>