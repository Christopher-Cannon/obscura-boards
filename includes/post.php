<div class="post">
  <header class="post-header">
    <div class="post-header-row">
      <div class="post-header-name bold"><p><?php echo $row['post_name']; ?></p></div>
      <div class="post-header-datetime"><p><?php echo $row['post_time']; ?></p></div>
      <div class="post-header-number">
        <p>No. <a class="link-post-id" href="#<?php echo $row['post_id']; ?>"><?php echo $row['post_id']; ?></a></p>
      </div>
    </div>

    <?php
      if($image_id != 0) {
        echo '<div class="post-header-row">
          <div class="post-header-file-name">
            <a class="link-general" href="' . $img_row["image_path"] . '">' . $img_row["image_name"]. '</a>
          </div>

          <div class="post-header-file-size"><p>' . $img_row["image_size"] . '</p></div>
          <div class="post-header-dimensions"><p>' . $img_row["image_dim"] . '</p></div>
        </div>';
      }
    ?>
  </header>

  <div class="post-body">
    <?php
      if($image_id != 0) {
        echo '<div class="post-body-image">
          <a href="' . $img_row["image_path"] . '" target="_blank"><img src="' . $img_row["image_path"] . '" /></a>
        </div>';
      }
    ?>

    <div class="post-body-text">
      <p><?php echo $post_body; ?></p>
    </div>
  </div>
</div>
