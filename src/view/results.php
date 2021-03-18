<?php

require_once '../client/getResults.php';
require_once 'partials/header.php';

?>

<main role="main" class="container mt-4">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded box-shadow">
        <img class="mr-3" src="../assets/img/favicon.png" alt="" width="48" height="48">
        <div class="lh-100">
            <h1 class="mb-0 lh-100 h3 font-weight-bold">Results</h1>
            <small>Below we have the latest results of the CS GO championships around the world</small>
        </div>
    </div>

    <div class="my-3 p-3 bg-dark rounded box-shadow">
        <h2 class="border-bottom border-gray pb-2 mb-0 h5">Featured results</h2>

        <?php foreach ($getResults as $result) : ?>
            <a class="results d-flex flex-row align-items-center border-bottom border-gray py-4" href="https://www.hltv.org/<?= $result['matchId'] ?>" target="_blank" rel=”noreferrer”>
                <div class="d-flex flex-column justify-content-start align-items-center w-100">
                    <strong class="mb-3 result-title">Teams</strong>
                    <ul class="list-inline my-0">
                        <li class="list-inline-item">
                            <?php $team1 = $result['team1']; ?>
                            <span class="result-description"><?= $team1['name'] ?></span>
                            <img class="mr-3" src="<?= $team1['crest'] ?>" alt="teamLogo1" width="25px" height="25px">
                            <span class="result-description"><?= $team1['result'] ?></span>

                        </li>
                        <li class="list-inline-item result-description">X</li>
                        <li class="list-inline-item">
                            <?php $team2 = $result['team2']; ?>
                            <span class="result-description"><?= $team2['result'] ?></span>
                            <img class="ml-3" src=" <?= $team2['crest'] ?>" alt="teamLogo2" width="35px" height="35px">
                            <span class="result-description"><?= $team2['name'] ?></span>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center w-100">
                    <strong class="mb-3 result-title">Event</strong>
                    <p class="text-center result-description"><?= $result['event'] ?></p>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center w-50">
                    <strong class="mb-3 result-title">Series</strong>
                    <p class="result-description"><?= $result['maps'] ?></p>
                </div>
            </a>
        <?php endforeach ?>

        <small class="d-block text-right mt-3">
            <a class="custom-link" href="https://www.hltv.org/news/archive/2021/march" rel="noreferrer" target="_blank">More results</a>
        </small>

    </div>

</main>

<?php

require_once 'partials/footer.php';
