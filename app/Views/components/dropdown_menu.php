<?php foreach ($menuList as $menuItem) : ?>
    <li><a href="<?= base_url($slug_prefix.$menuItem['slug']) ?>"><?= $menuItem['name'] ?></a></li>
<?php endforeach ?>
