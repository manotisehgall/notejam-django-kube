<div class="three columns">
  <h4 id="logo">My pads</h4>
  <nav>
      <ul>
        <?php foreach($pads as $pad): ?>
          <li><a href="#"><?= $pad->name ?></a></li>
        <?php endforeach; ?>
      </ul>
      <hr />
      <a href="#">New pad</a>
  </nav>
</div>
