<a href="<?= $args['link'] ?>" <?= $args['target'] ? 'target="'.$args['target'].'"' : '';?>  <?= $args['title'] ? 'title="'.$args['title'].'"': '' ?> <?= $args['target']==='_blank' ? 'rel="noopener noreferrer"': '' ?> class="read-more primary mt-4">
  <span><?= $args['label'] ?></span>
  <i class="bi bi-arrow-right"></i>
</a>