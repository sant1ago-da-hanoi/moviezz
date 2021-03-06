<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Categories Manager</h2>

                    <span class="main__title-stat">14 452 total</span>

                    <div class="main__title-wrap">
                        <!-- filter sort -->
                        <div class="filter" id="filter__sort">
                            <span class="filter__item-label">Sort by:</span>

                            <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="Date created">
                                <span></span>
                            </div>

                            <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
                                <li>Date created</li>
                                <li>Date updated</li>
                                <li>Rating</li>
                                <li>Views</li>
                            </ul>
                        </div>
                        <!-- end filter sort -->

                        <!-- search -->
                        <form action="#" class="main__title-form">
                            <input type="text" placeholder="Find movie / tv series..">
                            <button type="button">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8.25998" cy="8.25995" r="7.48191" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle><path d="M13.4637 13.8523L16.3971 16.778" stroke="#2F80ED" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </button>
                        </form>
                        <!-- end search -->
                    </div>
                </div>
            </div>
            <!-- end main title -->

            <!-- users -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATEGORY</th>
                            <th>STATUS</th>
                            <th>CREATED DATE</th>
                            <th>UPDATE DATE</th>
                            <th>ACTIONS</th>
                        </tr>
                        </thead>

                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="main__table-text">
                                            <?php echo $category['id']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">
                                            <a href="#">
                                                <?php echo $category['name']; ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        $status_text = 'Visible';
                                        if ($category['status'] == 0) {
                                            $status_text = 'Invisible';
                                        }
                                        ?>
                                        <?php if ($category['status'] == 1): ?>
                                            <div class="main__table-text main__table-text--green">
                                                <?php echo $status_text; ?>
                                            </div>
                                        <?php elseif ($category['status'] == 0): ?>
                                            <div class="main__table-text main__table-text--red">
                                                <?php echo $status_text; ?>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="main__table-text">
                                            <?php echo date('d M Y', strtotime($category['created_at'])); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">
                                            <?php echo isset($category['updated_at']) ? date('d M Y', strtotime($category['updated_at'])) : 'N/A'; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="main__table-btns">
                                            <a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12,13a1.49,1.49,0,0,0-1,2.61V17a1,1,0,0,0,2,0V15.61A1.49,1.49,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/>
                                                </svg>
                                            </a>
                                            <a href="view-category-<?php echo $category['id'] ?>" class="main__table-btn main__table-btn--view">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                                </svg>
                                            </a>
                                            <a href="edit-category-<?php echo $category['id'] ?>" class="main__table-btn main__table-btn--edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"/>
                                                </svg>
                                            </a>
                                            <a href="delete-category-<?php echo $category['id'] ?>" class="main__table-btn main__table-btn--delete open-modal" onclick="$('.open-modal').magnificPopup({	fixedContentPos: true, fixedBgPos: true, overflowY: 'auto', type: 'inline', preloader: false, focus: '#username', modal: false, removalDelay: 300, mainClass: 'my-mfp-zoom-in',	});">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" href="#modal-delete">
                                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            <?php endforeach ?>
                        <?php endif; ?>

                    </table>
                </div>
            </div>
            <!-- end users -->

            <!-- paginator -->
            <div class="col-12">
                <div class="paginator">
                    <span class="paginator__pages">
                        <?php
                        $link = mysqli_connect("localhost", "kaoflixc_bimbimpoca", "vx8_]^-JV18F", "kaoflixc_cinema");
                        mysqli_query($link,'set names utf8');
                        $sql = 'SELECT COUNT(*) AS "total" FROM categories WHERE status = 1';
                        $query = mysqli_query($link, $sql);
                        while($result = mysqli_fetch_assoc($query)) {
                        ?>
                            10 from <?php echo $result['total']?>
                        <?php } ?>
                    </span>

                    <?php if (!empty($categories)): ?>
                    <ul class="paginator__paginator">
                        <li><?php echo $pages; ?></li>
                    </ul>
                    <?php else: ?>
                        <ul class="paginator__paginator">
                            <li>
                                <a href="#">
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>
                                <a href="#">
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <!-- end paginator -->
        </div>
    </div>
</main>
<!-- end main content -->

<!-- modal status -->
<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Status change</h6>

    <p class="modal__text">Are you sure about immediately change status?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Apply</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Item delete</h6>

    <p class="modal__text">Are you sure to permanently delete this category?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Delete</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal delete -->