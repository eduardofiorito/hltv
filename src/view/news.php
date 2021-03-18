<?php
    require_once '../client/getNews.php';
?>

<main role="main" class="container mt-4">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow">
        <img class="mr-3" src="../assets/img/favicon.png" alt="" width="48" height="48">
        <div class="lh-100">
            <h1 class="mb-0 lh-100 h3 font-weight-bold">News</h1>
            <small>10 most recent news about the Counter-Strike: Global Offensive scenario posted on <a class="custom-link" href="https://www.hltv.org/" rel="noreferrer" target="_blank">HLTV.org</a>.</small>
        </div>
    </div>

    <div class="my-3 p-3 bg-dark rounded box-shadow">
        <h2 class="border-bottom border-gray pb-2 mb-0 h5">Recent news</h2>

        <?php foreach ($getNews as $new) : ?>

            <a class="news media text-muted pt-3" href="<?= $new['link']?>">

                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded secondary-color" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17841ace1e6%20text%20%7B%20fill%3A%23e83e8c%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17841ace1e6%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23e83e8c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">

                <div class="media-body">

                    <h3 class="h6 news-title">
                        <?= $new['title']?>
                    </h3>
                    <p class="pb-3 mb-0 news-description border-bottom border-gray">
                        <?= $new['description']?>
                    </p>

                </div>
            </a>

        <?php endforeach ?>
        
        <small class="d-block text-right mt-3">
            <a class="custom-link" href="https://www.hltv.org/news/archive/2021/march" rel="noreferrer" target="_blank">All news</a>
        </small>

    </div>

</main>