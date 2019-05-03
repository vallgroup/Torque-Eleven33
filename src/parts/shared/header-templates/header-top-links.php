<?php
$leasing = get_field('leasing_phone_number', 'options');

$top_links = get_field( 'top_links', 'options' );

$link1 = array(
  (isset($top_links['link_1_text']) ? $top_links['link_1_text'] : ''),
  (isset($top_links['link_1_url']) ? $top_links['link_1_url'] : ''),
);

$link2 = array(
  (isset($top_links['link_2_text']) ? $top_links['link_2_text'] : ''),
  (isset($top_links['link_2_url']) ? $top_links['link_2_url'] : ''),
);

$link3 = array(
  (isset($top_links['link_3_text']) ? $top_links['link_3_text'] : ''),
  (isset($top_links['link_3_url']) ? $top_links['link_3_url'] : ''),
);

?>

<div class="top-links">
  <div class="top-link leasing">
    <a href="<?php echo $link1[1]; ?>" >
      <?php echo $link1[0]; ?>
    </a>
  </div>

  <div class="top-link">
    <a href="<?php echo $link2[1]; ?>" target="_blank" referrer="noopener noreferrer">
      <?php echo $link2[0]; ?>
    <a>
  </div>

  <div class="top-link">
    <a href="<?php echo $link3[1]; ?>" target="_blank" referrer="noopener noreferrer">
      <?php echo $link3[0]; ?>
    <a>
  </div>
</div>
