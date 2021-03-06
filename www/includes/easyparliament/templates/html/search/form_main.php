<div class="search-page__section search-page__section--search">
    <div class="search-page__section__primary">
        <p class="search-page-main-inputs">
            <input type="text" name="q" value="<?= _htmlentities($search_keyword) ?>" class="form-control">
            <input type="submit" class="button" value="Search">
        </p>
      <?php if (isset($warnings) ) { ?>
        <p class="error">
            <?= $warnings ?>
        </p>
      <?php } ?>
      <?php if (isset($person_id)) { ?>
        <p class="search-result-person-options">
          <input id="pid_only" type="radio" name="pid" value="<?= _htmlentities($person_id) ?>" checked><label for="pid_only">Search only speeches by <?= _htmlentities($person_name) ?></label>
          <input id="pid_all" type="radio" name="pid" value=""><label for="pid_all">Search all speeches</label>
        </p>
      <?php } ?>
        <p>
            <ul class="search-result-display-options">
                <li><a href="#options" class="search-options-toggle js-toggle-search-options">Advanced search</a></li>
              <?php if ( $is_adv ) { ?>
                <?= $search_phrase ? '<li>Exactly: ' . _htmlentities($search_phrase) . '</li>' : '' ?>
                <?= $search_exclude ? '<li>Excluding: ' . _htmlentities($search_exclude) . '</li>' : '' ?>
                <?= $search_from ? '<li>From: ' . _htmlentities($search_from) . '</li>' : '' ?>
                <?= $search_to ? '<li>To: ' . _htmlentities($search_to) . '</li>' : '' ?>
                <?= $search_person ? '<li>Person: ' . _htmlentities($search_person) . '</li>' : '' ?>
                <?= $search_section ? '<li>Section: ' . _htmlentities($search_section_pretty) . '</li>' : '' ?>
                <?= $search_column ? '<li>Column: ' . _htmlentities($search_column) . '</li>' : '' ?>
              <?php } ?>
            </ul>
        </p>
    </div>
</div>
