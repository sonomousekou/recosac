
<li class="single-list"  
        <?php if (in_array($activePage, ['evenements', 'articles', 'projets'])) echo 'class="active"'; ?>>
            <a href="javascript:void(0)" class="single"><?php echo __('na'); ?> <i class="ri-arrow-down-s-line"></i></a>
            <ul class="submenu">
            <li class="single-list" <?php if ($activePage === 'articles') echo 'class="active"'; ?>>
                 <a href="index.php?route=articles" class="single"><?php echo __('articles'); ?></a>
            </li>
            <li class="single-list" <?php if ($activePage === 'evenements') echo 'class="active"'; ?>>
                <a href="index.php?route=evenements" class="single"><?php echo __('evenements'); ?></a>
            </li>
            <li class="single-list" <?php if ($activePage === 'projets') echo 'class="active"'; ?>>
                <a href="index.php?route=projets" class="single"><?php echo __('projets'); ?></a>
            </li>
            </ul>
        </li>