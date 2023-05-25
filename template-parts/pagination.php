<?php if (paginate_links()) : ?>
    <!-- pagenation -->
    <div class="pagination">
        <div class="pagination_inner">
            <?php
                echo paginate_links(
                    array(
                        'end_size' => 1,
                        'mid_size' => 1,
                        'prev_next' => true,
                        'prev_text' => '＜',
                        'next_text' => '＞',
                    )
                )
            ?>
        </div>

    </div><!-- /pagenation -->
<?php endif; ?>