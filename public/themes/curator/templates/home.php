<?php $this->layout('theme::layout/00_layout') ?>
<div class="Navbar hidden-print">
    <?php $this->insert('theme::partials/navbar_content', ['params' => $params]); ?>
</div>

<?php if ($params['html']['repo']) {
    ?>
    <a href="https://github.com/<?= $params['html']['repo']; ?>" target="_blank" id="github-ribbon" class="Github hidden-print"><img src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
<?php

} ?>

<div class="HomepageContent">
    <div class="container">
        <div class="container--inner">
            <div class="doc_content s-content">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Curator Documentation</h1>
                        <p class="text-center">Widget guides, API integration and support documentation for Curator.io</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center1 home-item">
                        <h3>Widgets</h3>
                        <div>
                            <p>Documentation covering the various Curator.io widgets. </p>
                        </div>
                        <p><a href="./widgets/index" class="btn btn-primary btn-bold">View docs</a></p>
                    </div>
                    <div class="col-md-4 text-center1 home-item">
                        <h3>API</h3>
                        <div>
                            <p>Details on how to access the Curator.io REST API. Including read & write access to feeds and sources.</p>
                        </div>
                        <p><a href="./api/getting-started/index" class="btn btn-primary btn-bold">View docs</a></p>

                    </div>
                    <div class="col-md-4 text-center1  home-item">
                        <h3>Help</h3>
                        <div>
                            <p>General help on the Curator.io platform.</p>
                        </div>
                        <p><i>Coming very soon</i></p>
<!--                        <p class=""><a href="/help/getting-started/index" class="btn btn-primary btn-bold">View docs</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="HomepageFooter">
    <div class="container">
        <div class="container--inner">
            <?php if (!empty($params['html']['links'])) {
                ?>
                <ul class="HomepageFooter__links">
                    <?php foreach ($params['html']['links'] as $name => $url) {
                    echo '<li><a href="' . $url . '" target="_blank">' . $name . '</a></li>';
                } ?>
                </ul>
            <?php

            } ?>

            <?php if (!empty($params['html']['twitter'])) {
                ?>
                <div class="HomepageFooter__twitter">
                    <?php foreach ($params['html']['twitter'] as $handle) {
                    ?>
                    <div class="Twitter">
                        <iframe allowtransparency="true" frameborder="0" scrolling="no" style="width:162px; height:20px;" src="https://platform.twitter.com/widgets/follow_button.html?screen_name=<?= $handle; ?>&amp;show_count=false"></iframe>
                    </div>
                    <?php

                } ?>
                </div>
            <?php

            } ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
