<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
        <div class="autopagerize_page_element">
            <div class="content">
                <div class="post_page">
                    <div class="post animated fadeInDown">
                        <div class="post_title post_detail_title">
                            <h2>
                                <a><?php $this->title() ?></a>

                            </h2>
                            <span class="date"><?php $this->date('Y-m-d'); ?> by <?php $this->author(); ?></span>

                        </div>

                        <div class="post_content markdown">
                        <?php $this->content(); ?>
                        </div>

                        <div class="post_footer">
                            <div class="meta">
                                <div class="info">

                                </div>

                            </div>

                        </div>


                    </div>


                </div>

            </div>

        </div>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>