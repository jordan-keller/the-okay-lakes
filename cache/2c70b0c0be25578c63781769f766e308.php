<entry>
    <id><?php echo e($entry->getUrl()); ?></id>
    <link type="text/html" rel="alternate" href="<?php echo e($entry->getUrl()); ?>" />
    <title><?php echo e($entry->title); ?></title>
    <published><?php echo e(date(DATE_ATOM, $entry->date)); ?></published>
    <updated><?php echo e(date(DATE_ATOM, $entry->date)); ?></updated>
    <author>
        <name><?php echo e($entry->author); ?></name>
    </author>
    <summary type="html"><?php echo e($entry->getExcerpt()); ?>...</summary>
    <content type="html"><![CDATA[
        <?php echo $__env->first(['_posts.' . $entry->getFilename(), '_posts._tmp.' . $entry->getFilename()], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    ]]></content>
</entry>
<?php /**PATH /Users/Jordan/Herd/the-okay-lakes/source/_components/post-as-rss-item.blade.php ENDPATH**/ ?>