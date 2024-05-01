<?php
    require_once __DIR__ . '/core.php';

    include 'templates/head.php';
    include 'templates/navigation.php';
?>

    <div class="container">
        <main>
            <section id="home" class="hero">
                <h1 class="animate__animated animate__fadeIn"><?php echo $config['welcome']; ?> <span class="server-brand"><?php echo $config['title']; ?></span></h1>
                <p class="animate__animated animate__fadeIn"><?php echo $config['description']; ?></p>
            </section>

            <section id="servers" class="servers">
                <div class="row justify-content-center">
                    <?php foreach($servers as $serverId => $server) { ?>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="server animate__animated animate__fadeIn">
                                <?php if($config['lastWiped']['enabled'] == 'yes' && $server['wiped']) { ?>
                                    <div class="ribbon"><span><?php echo $config['lastWiped']['text']; ?></span></div>
                                <?php } ?>
                                <div class="server-image-container">
                                    <img class="server-image img-fluid" src="<?php echo $server['image']; ?>" alt="<?php echo $server['name']; ?> Server Image" title="<?php echo $server['name']; ?>">
                                    <div class="server-image-overlay"></div>
                                </div>
                                <div class="server-container">
                                    <span class="server-name"><?php echo $server['name']; ?></span>
                                    <span class="server-description"><?php echo $server['map']; ?></span>
                                    <div class="server-tags">
                                        <?php foreach($server['tags'] as $tag) { ?>
                                            <span class="server-tag"><?php echo $tag; ?></span>
                                        <?php } ?>
                                    </div>
                                    <?php if($server['online'] === true) { ?>
                                        <span class="server-players">
                                            <?php echo $server['players']; ?> / <?php echo $server['maxPlayers']; ?> <?php if($server['queuedPlayers'] > 0) { echo '('.$server['queuedPlayers'].')'; } ?> players
                                            </span>
                                        <div class="progress">
                                            <div class="progress-bar bg-rust" role="progressbar" aria-label="Amount of players" aria-valuemin="<?php echo $server['playersPercentage']; ?>" aria-valuemax="<?php echo $server['maxPlayers']; ?>" style="width: <?php echo $server['playersPercentage']; ?>%"></div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="server-message">
                                            <div class="server-offline">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                </svg>
                                                Server is currently offline
                                            </div>
                                        </div>
                                    <?php } ?>
	                                <?php if($server['online'] === true) { ?>
                                        <a href="steam://connect/<?php echo $server['ip'] . ':' . $server['port']; ?>" title="Connect via Steam" class="btn btn-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                            Connect
                                        </a>
                                    <?php } ?>
	                                <?php if($server['store'] != '') { ?>
                                        <a href="<?php echo $server['store']; ?>" target="_blank" title="Shop" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            Shop
                                        </a>
	                                <?php } ?>
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#server<?php echo $serverId; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Info
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>

            <?php if($config['store']['enabled'] == 'yes') { ?>
                <section id="store" class="store">
                    <div class="row">
                        <div class="d-none d-md-flex col-12 col-md-6">
                            <div class="store-image-container">
                                <img class="img-fluid" src="img/vending.webp" alt="A vending machine in Rust" title="Shop">
                                <div class="store-image-overlay"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="store-heading text-center text-md-start"><?php echo $config['store']['heading']; ?></h2>
                            <div class="store-message"><?php echo $config['store']['message']; ?></div>
                            <a href="<?php echo $config['store']['link']; ?>" title="Shop" target="_blank" class="d-block d-md-inline-block btn btn-primary btn-store">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
	                            <?php echo $config['store']['button']; ?>
                            </a>
                        </div>
                    </div>
                </section>
            <?php } ?>

	        <?php if($config['rules']['enabled'] == 'yes') { ?>
                <section id="rules" class="rules">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="rules-heading"><?php echo $config['rules']['heading']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion" id="accordionRules">
	                            <?php foreach($config['rules']['rules'] as $ruleId => $rule) { ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="rule<?php echo $ruleId; ?>">
                                            <button class="accordion-button <?php if($ruleId > 0) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRule<?php echo $ruleId; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <?php echo $rule['title']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseRule<?php echo $ruleId; ?>" class="accordion-collapse collapse <?php if($ruleId == 0) { echo 'show'; } ?>" data-bs-parent="#accordionRules">
                                            <div class="accordion-body"><?php echo $rule['text']; ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
	        <?php } ?>

	        <?php if($config['staff']['enabled'] == 'yes') { ?>
                <section id="staff" class="staff">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="staff-heading"><?php echo $config['staff']['heading']; ?></h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php foreach($config['staff']['members'] as $member) { ?>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="member-container d-flex justify-content-center">
                                    <div class="member d-flex flex-column">
	                                    <?php if($member['link']) { ?>
                                            <a href="<?php echo $member['link']; ?>" target="_blank" class="member-name-link">
                                        <?php } ?>
                                            <img loading="lazy" src="<?php if($member['avatar'] != '') { echo 'img/' . $member['avatar']; } else { echo 'img/member-default.webp'; } ?>" alt="Avatar of <?php echo $member['name']; ?>" title="<?php echo $member['name']; ?>">
                                        <?php if($member['link']) { ?>
                                            </a>
                                        <?php } ?>
                                        <div class="member-description">
                                            <?php if($member['link']) { ?>
                                                <a href="<?php echo $member['link']; ?>" target="_blank" class="member-name-link">
                                                    <span class="member-name"><?php echo $member['name']; ?></span>
                                                </a>
                                            <?php } else { ?>
                                                <span class="member-name"><?php echo $member['name']; ?></span>
                                            <?php } ?>
                                            <span class="member-rank"><?php echo $member['rank']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            <?php } ?>

	        <?php if($config['faq']['enabled'] == 'yes') { ?>
                <section id="faq" class="faq">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="faq-heading"><?php echo $config['faq']['heading']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion" id="accordionFaq">
						        <?php foreach($config['faq']['entries'] as $faqId => $faq) { ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="faq<?php echo $faqId; ?>">
                                            <button class="accordion-button <?php if($faqId > 0) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq<?php echo $faqId; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
										        <?php echo $faq['title']; ?>
                                            </button>
                                        </h2>
                                        <div id="collapseFaq<?php echo $faqId; ?>" class="accordion-collapse collapse <?php if($faqId == 0) { echo 'show'; } ?>" data-bs-parent="#accordionFaq">
                                            <div class="accordion-body"><?php echo $faq['text']; ?></div>
                                        </div>
                                    </div>
						        <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
	        <?php } ?>

        </main>
    </div>

    <?php foreach($servers as $serverId => $server) { ?>
    <div class="modal fade modal-rust" id="server<?php echo $serverId; ?>" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="server-image-modal-container">
                        <img class="server-image-modal img-fluid" src="<?php echo $server['image']; ?>" alt="<?php echo $server['name']; ?> Server Image" title="<?php echo $server['name']; ?>">
                        <div class="server-image-modal-overlay"></div>
                    </div>
                    <div class="server-modal-details">
                        <span class="server-name"><?php echo $server['name']; ?></span>
                        <span class="server-description">
                            <?php echo $server['map']; ?>
	                        <?php if($server['online'] === true) { ?>
                                - <?php echo $server['players']; ?>/<?php echo $server['maxPlayers']; ?> <?php if($server['queuedPlayers'] > 0) { echo '('.$server['queuedPlayers'].')'; } ?>
                            <?php } ?>
                        </span>
                        <span class="server-rules"><?php echo $server['description']; ?></span>
                    </div>
                </div>
                <div class="modal-footer">
	                <?php if($server['battlemetrics'] != '') { ?>
                    <a href="<?php echo $server['battlemetrics']; ?>" target="_blank" title="BattleMetrics" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        BattleMetrics
                    </a>
	                <?php } ?>
                    <?php if($server['store'] != '') { ?>
                    <a href="<?php echo $server['store']; ?>" target="_blank" title="Shop" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Shop
                    </a>
                    <?php } ?>
	                <?php if($server['online'] === true) { ?>
                        <a href="steam://connect/<?php echo $server['ip'] . ':' . $server['port']; ?>" title="Connect via Steam" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Connect
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php
        include 'templates/footer.php';
    ?>
