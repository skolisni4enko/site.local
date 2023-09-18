<div class="col-md-4">
    <h3>Recent post</h3>
    <div class="list-group">
        <?php foreach ($recent_posts as $recent_post): ?>
            <a href="post/<?= $recent_post['slug'] ?>" class="list-group-item list-group-item-action">
                <?= $recent_post['title'] ?>
            </a>
        <?php endforeach ?>
    </div>
</div>