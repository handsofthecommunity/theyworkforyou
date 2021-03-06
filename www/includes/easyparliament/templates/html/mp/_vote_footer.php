<div class="panel panel--secondary">
    <p>Note for journalists and researchers: The data on this page may be used freely,
       on condition that TheyWorkForYou.com is cited as the source.</p>

    <p>For an explanation of the vote descriptions please see our page about
      <a href="/voting-information">voting information on TheyWorkForYou</a>.</p>

  <?php if(isset($data['photo_attribution_text'])) { ?>
    <p>
      <?php if(isset($data['photo_attribution_link'])) { ?>
        Profile photo:
        <a href="<?= $data['photo_attribution_link'] ?>"><?= $data['photo_attribution_text'] ?></a>
      <?php } else { ?>
        Profile photo: <?= $data['photo_attribution_text'] ?>
      <?php } ?>
    </p>
  <?php } ?>
</div>
