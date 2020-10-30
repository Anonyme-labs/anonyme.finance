<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,height=device-height" />
        <meta property="og:title" content="Compound | Dashboard" />
        <meta property="og:description" content="A simple, full featured dashboard, from the developers of Compound. Supply or borrow assets from the protocol, and participate in community governance." />
        <meta property="og:image" content="images/meta-tag.png" />
        <meta property="og:url" content="" />
        <meta name="twitter:card" content="summary_large_image" />
        <link rel="apple-touch-icon" sizes="192x192" href="images/compound-192.png" />
        <link rel="apple-touch-icon" sizes="512x512" href="images/compound-512.png" />
        <link rel="manifest" href="js/manifest.json" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <title>Compound | Dashboard</title>
        <meta name="description" content="A simple, full featured dashboard, from the developers of Compound. Supply or borrow assets from the protocol, and participate in community governance." />
        <link href="css/dapp.e295ff51.chunk.css" rel="stylesheet" />
    </head>
    <body>
        <noscript>
            You need to enable JavaScript to run this app. The Compound dApp is a distributed application to interact with the Compound Protocol on the Ethereum blockchain. This app requires JavaScript to run. If you are interested in
            learning more about Compound, please visit <a href="https://compound.finance">https://compound.finance</a>.
        </noscript>
        <div id="main">
            <div id="borrow-interface-root">
                <header class="dapp">
                    <div class="container-large">
                        <div class="row align-middle">
                            <div class="col-xs-3"><a class="brand" rel="external" href="https://compound.finance"></a></div>
                            <div class="col-xs-6 mobile-hide text-center links"><a class="active" href="/">Dashboard</a><a class="" href="vote.html">Vote</a></div>
                           <div class="col-xs-9 col-sm-3 text-right actions"><div class="comp-balance">0.0000<img src="images/comp-icn.svg"></div><a id="account" class="mobile-hide"><span class=""></span>0x89...DDD5</a></div>
                            <div class="col-xs-9 mobile-links"><a class="dapp button hollow mobile-links__link" href="vote.html">Vote</a></div>
                        </div>
                    </div>
                </header>
                <span>
                    <section id="borrow-overview" class="hero">
                        <div class="balance-totals">
                            <div class="content">
                                <div class="row align-middle mobile-hide">
                                    <div class="col-xs-5 text-center">
                                        <label class="supply">Supply Balance</label>
                                        <div class="headline headline--loading"></div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="net-apy-wrapper">
                                            <div class="net-apy">
                                                <svg viewBox="0 0 140 140" width="100%">
                                                    <path d="M 70 70 L  70 0 A 70 70 0 0 1 70 0 Z" stroke="transparent" fill="#9669ED"></path>
                                                    <path d="M 70 70 L  70 0 A 70 70 0 1 1 69.99956017702848 1.381744718642608e-9 Z" stroke="transparent" fill="#00D395"></path>
                                                </svg>
                                            </div>
                                            <div class="net-apy-description">
                                                <label>Net APY</label>
                                                <div class="headline headline--loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 text-center">
                                        <label class="borrow">Borrow Balance</label>
                                        <div class="headline headline--loading"></div>
                                    </div>
                                </div>
                                <div class="row align-middle mobile-only">
                                    <div class="col-xs-4">
                                        <div class="net-apy-wrapper">
                                            <div class="net-apy">
                                                <svg viewBox="0 0 140 140" width="100%">
                                                    <path d="M 70 70 L  70 0 A 70 70 0 0 1 70 0 Z" stroke="transparent" fill="#9669ED"></path>
                                                    <path d="M 70 70 L  70 0 A 70 70 0 1 1 69.99956017702848 1.381744718642608e-9 Z" stroke="transparent" fill="#00D395"></path>
                                                </svg>
                                            </div>
                                            <div class="net-apy-description">
                                                <label>Net APY</label>
                                                <div class="headline headline--loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 text-left">
                                        <div class="balance">
                                            <label class="supply">Collateral Balance</label>
                                            <div class="headline headline--loading"></div>
                                            <label class="borrow">Borrow Balance</label>
                                            <div class="headline headline--loading"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="limit-bar align-between">
                                <label>Borrow Limit</label>
                                <div class="progress-bar-wrapper">
                                    <div class="progress dark-clear thin"><div role="progressbar" aria-value-now="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar green" style="width: 0%;"></div></div>
                                    <div class="progress-bar-percent-label">
                                        <div style="width: 0%;"><p class="small">0%</p></div>
                                    </div>
                                    <div class="progress-bar-hover-space"></div>
                                </div>
                                <label>$0</label>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="container-large">
                            <div id="interface-container" class="row">
                                <div id="collateral-pane" class="col-sm-6">
                                    <div class="governance-panel">
                                        <div class="governance-panel__header align-between"><h4>Supply Markets</h4></div>
                                    </div>
                                </div>
                                <div id="borrowing-pane" class="col-sm-6">
                                    <div class="governance-panel">
                                        <div class="governance-panel__header align-between"><h4>Borrow Markets</h4></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </span>
                <footer class="dapp">
                    <div class="container-large">
                        <div class="row top">
                            <div class="col-xs-12 col-sm-2"><a href="/" class="brand"></a></div>
                            <div class="col-xs-12 col-sm-10 links">
                                <a target="_blank" rel="external" href="https://compound.finance/markets">Markets</a><a target="_blank" rel="external" href="https://compound.finance/governance">Governance</a>
                                <a target="_blank" rel="external" href="https://compound.finance/governance/comp">COMP</a><a href="/terms">Terms</a>
                                <a target="_blank" rel="external" href="https://medium.com/compound-finance/the-compound-guide-to-supplying-borrowing-crypto-assets-94821f2950a0">Support</a>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="help">
                                <div class="mobile-hide">
                                    <span class="dot-indicator red"></span><label class="small">Latest Block: –</label><a target="_blank" rel="external" href="https://compound.finance/markets">Markets</a>
                                    <a target="_blank" rel="external" href="https://compound.finance/governance">Governance</a><a target="_blank" rel="external" href="https://compound.finance/governance/comp">COMP</a>
                                    <a target="_blank" rel="external" href="https://medium.com/compound-finance/the-compound-guide-to-supplying-borrowing-crypto-assets-94821f2950a0">Support</a><a href="/terms">Terms</a>
                                </div>
                            </div>
                            <div class="social">
                                <div class="dropdown dropdown--currency">
                                    <span class="dropdown__selected dropdown__selected--light-1"><label class="small" style="margin-left: 0px;">$ USD</label></span>
                                    <div class="dropdown__options dropdown__options--footer"></div>
                                </div>
                                <div class="dropdown dropdown--language">
                                    <span class="dropdown__selected dropdown__selected--language"><label class="small">Language</label><span class="icn english"></span></span>
                                    <div class="dropdown__options dropdown__options--footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <span></span>
            </div>
        </div>
        <!--script src="js/runtime_polyfills.09b6cd69.js"></script>
        <script src="js/vendors_dapp_landing_polyfills.e9e68e69.chunk.js"></script>
        <script src="js/vendors_polyfills.3570ab06.chunk.js"></script>
        <script src="js/polyfills.9fb97b9c.chunk.js"></script>
        <script src="js/runtime_dapp.b18be7fc.js"></script>
        <script src="js/vendors_dapp_landing.2efa2a68.chunk.js"></script>
        <script src="js/dapp.b2fea9d0.chunk.js"></script-->
    </body>
</html>