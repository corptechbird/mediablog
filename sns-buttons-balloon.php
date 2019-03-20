<div id="sns-buttons" class="sns-buttons-pc">
  <ul class="snsb snsb-balloon">
    <li class="balloon-btn twitter-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://twitter.com/search?q=<?php echo urlencode(get_the_permalink()); ?>" target="blank" class="arrow-box-link twitter-arrow-box-link" rel="nofollow">
            <span class="social-count twitter-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://twitter.com/share?text=<?php the_title() ?>&url=<?php the_permalink() ?>" target="blank" class="balloon-btn-link twitter-balloon-btn-link" rel="nofollow">
          <i class="fa fa-spinner fa-spin"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn facebook-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title() ?>" target="blank" class="arrow-box-link facebook-arrow-box-link" rel="nofollow">
            <span class="social-count facebook-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&t=<?php the_title() ?>" target="blank" class="balloon-btn-link facebook-balloon-btn-link" rel="nofollow">
          <i class="fa fa-spinner fa-spin"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn hatena-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="http://b.hatena.ne.jp/entry/<?php the_permalink() ?>" target="blank" class="arrow-box-link hatena-arrow-box-link" rel="nofollow">
            <span class="social-count hatebu-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink() ?>&title=<?php echo get_encoded_title( get_the_title() ) ?>" target="blank" class="balloon-btn-link hatena-balloon-btn-link" rel="nofollow">
          <i class="fa fa-spinner fa-spin"></i>
        </a>
      </span>
    </li>
    <li class="balloon-btn pocket-balloon-btn">
      <span class="balloon-btn-set">
        <span class="arrow-box">
          <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>" target="blank" class="arrow-box-link pocket-arrow-box-link" rel="nofollow">
            <span class="social-count pocket-count"><i class="fa fa-spinner fa-spin"></i></span>
          </a>
        </span>
        <a href="https://getpocket.com/edit?url=<?php the_permalink() ?>" target="blank" class="balloon-btn-link pocket-balloon-btn-link" rel="nofollow">
          <i class="fa fa-spinner fa-spin"></i>
        </a>
      </span>
    </li>
  </ul>
</div>
<div style="clear:both"></div>