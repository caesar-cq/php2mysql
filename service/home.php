<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>坤厚自动化</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" >

    <!-- Custom CSS -->
    <link href="../assets/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">坤厚 @XXXX</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li><a class="page-scroll" href="#services">Features</a></li>
                    <li><a class="page-scroll" href="#portfolio">MTDB</a></li>
                    <li><a class="page-scroll" href="#team">Examples</a></li>
                    <li><a class="page-scroll" href="#about">Roadmap</a></li>
                    <li><a class="page-scroll" href="intro.php">Intro</a></li>
                    <li><a class="page-scroll" href="../intro.php">Tutorial</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">XXXXXX</div>
                <div class="intro-lead-in">A web-based Phylogenetic Tree Generator <br/>using Mitochondrial Genomes</div>
                <a href="../storage/stuffinfo_select.php?mode=in" class="page-scroll btn btn-xl">In_Storage</a>  &nbsp; or &nbsp; <a href="../storage/stuffinfo_select.php?mode=out" class="page-scroll btn btn-xl">Out_Storage</a>
            </div>
        </div>
    </header>

    <!-- Feature Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Features</h2>
                    <h3 class="section-subheading text-muted">Easy, Fast and Stable</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Local Mitochondrial DNA Database</h4>
                    <p class="text-muted">MTDB, contains a local database of all available mtDNAs from NCBI. It maintains 10000 mtDNAs and their key features extracted from its original <a href="https://www.ncbi.nlm.nih.gov/" target="_blank">NCBI</a> database.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Phylogenetic Tree Building</h4>
                    <p class="text-muted">It implements an easy-to-use web interface for the <a href="index.php?mode=normal" target="_blank">NORMAL</a> process with an automatic gene selection.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-share-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Data Visualization and Sharing</h4>
                    <p class="text-muted">In the result page, we draw tree view and circular view to facilities the fast preview, also you can transmit data to <a href="http://itol.embl.de/" target="_blank">iTOL</a> for further manipulation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MTDB Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MTDB</h2>
                    <h3 class="section-subheading text-muted">Mitochondrial DNA Database, over 10000 mtDNAs plus their key features</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_001284.2" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/at.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Arabidopsis thaliana</h4>
                        <p class="text-muted">Brassicaceae</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_010972.2" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/ca.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Carolina anole</h4>
                        <p class="text-muted">Dactyloidae</p>
                    </div>
                </div>




                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_002333.2" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/dr.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Danio rerio</h4>
                        <p class="text-muted">Cyprinidae</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_024511.2" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/dm.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Drosophila melanogaster</h4>
                        <p class="text-muted">Drosophilidae</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_012920.1" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/hs.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Homo sapiens</h4>
                        <p class="text-muted">Hominidae</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_006915.1" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/mm.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Mus musculus</h4>
                        <p class="text-muted">Muridae</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_011033.1" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/os.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Oryza sativa</h4>
                        <p class="text-muted">Poaceae</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdata.php?id=NC_028096.1" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/pt.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Populus trichocarpa</h4>
                        <p class="text-muted">Salicaceae</p>
                    </div>
                </div>



                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="mtdb.php" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-list fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/imgs/mtdb/more.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>More creatures</h4>
                        <p class="text-muted">Full List</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Examples Section -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Examples</h2>
                    <h3 class="section-subheading text-muted">Experimental examples from the latest mtDNA researches</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="../assets/imgs/examples/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Fagopyrum cymosum</h4>
                        <p class="text-muted">Tree Building using rRNA</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="index.php?mode=fast&sample=Fagopyrum_cymosum" target="_blank"><i class="fa fa-database"></i></a>
                            </li>
                            <li><a href="result.php?code=Fagopyrum_cymosum_cp_16s" target="_blank"><i class="fa fa-tree"></i></a>
                            </li>
                            <li><a href="result.php?code=Fagopyrum_cymosum_cp_23s" target="_blank"><i class="fa fa-tree"></i></a>
                            </li>
                            <li><a href="http://dx.doi.org/10.3109/19401736.2015.1030619" target="_blank"><i class="fa fa-file-text"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="../assets/imgs/examples/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Capsicum chinense Jacq</h4>
                        <p class="text-muted">Tree Building using Genes</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="index.php?mode=normal&sample=Capsicum_chinense_Jacq" target="_blank"><i class="fa fa-database"></i></a>
                            </li>
                            <li><a href="result.php?code=Capsicum_chinense_Jacq_normal" target="_blank"><i class="fa fa-tree"></i></a>
                            </li>
                            <li><a href="http://dx.doi.org/10.1080/23802359.2016.1144113" target="_blank"><i class="fa fa-file-text"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="../assets/imgs/examples/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Solanum commersonii</h4>
                        <p class="text-muted">Tree Building</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="index.php?mode=normal&sample=Solanum_commersonii"><i class="fa fa-database" target="_blank"></i></a>
                            </li>
                            <li><a href="result.php?code=Solanum_commersonii_normal"><i class="fa fa-tree" target="_blank"></i></a>
                            </li>
                            <li><a href="http://dx.doi.org/10.1007/s00299-016-2022-y" target="_blank"><i class="fa fa-file-text"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Update your data now to see your own phylogenetic tree.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Roadmap</h2>
                   <!-- <h3 class="section-subheading text-muted">current version: CPTree 1.2</h3>-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../assets/imgs/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>September 2016</h4>
                                    <h4 class="subheading">Project Start</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Perl Standalone<br/>
                                        - Data Extractor<br/>
                                        - Tree Builder<br/>
                                        50 Sample Data<br/>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../assets/imgs/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2016</h4>
                                    <h4 class="subheading">Service Beta Online</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        MTTree Online<br/>
                                        Add Examples<br/>
                                        Fix bugs<br/>
                                        
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../assets/imgs/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>February 2017</h4>
                                    <h4 class="subheading">Major Data Update</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        MTDB: 10000 mtDNAs available<br/>
                                        Tutorial Online<br/>
                                
                                        Fix Bugs<br/>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../assets/imgs/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>April 2017</h4>
                                    <h4 class="subheading">Minor Update</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Data update <br/>
                                        ORF re-identified<br/>
                                        Fix bugs<br/>
                                        Samples<br/>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>
                                    <br/>More
                                    <br/>
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; <a href="yiqingxu@njfu.edu.cn">yiqingxu</a> 2015-2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.researchgate.net/profile/Yiqing_Xu3"><i class="fa fa-graduation-cap"></i></a>
                        </li>
                        <li><a href="mailto:yiqingxu@njfu.edu.cn"><i class="fa fa-envelope"></i></a>
                        </li>
                        <li><a href="https://scholar.google.com/citations?user=HNYpuGYAAAAJ&hl=zh-CN"><i class="fa fa-google"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="http://bio.njfu.edu.cn">BIO.NJFU</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    

    <!-- jQuery 
    <script src="js/jquery.js"></script> -->
    <script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript
    <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../assets/js/classie.js"></script>
    <script type="text/javascript" src="../assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="../assets/js/agency.js"></script>

</body>

</html>
