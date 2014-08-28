<ul class="langs">
  <?php $languages = ipContent()->getLanguages(); ?>
    <?php foreach ($languages as $language) { ?>
      <?php if($language->isCurrent()): ?>
          <li class="current">
              <a title="<?php echo esc($language->getTitle()) ?>" href="#">
                  <?php echo esc($language->getAbbreviation())?>
                  <span></span>
              </a>
          </li>
      <?php endif; ?>
    <?php } ?>

    <?php foreach ($languages as $language) { ?>
      <?php if($language->isVisible()): ?>
          <li>
            <a title="<?php echo esc($language->getTitle()) ?>" href="<?php echo $language->getLink(); ?>">
                  <?php echo esc($language->getAbbreviation())?>
              </a>
          </li>
      <?php endif; ?>
    <?php } ?>
</ul>
