<?php include("header.php"); ?>

<div class="page-header">
    <h1>Introduction to MTTree</h1>
	 <ol class="breadcrumb">
	  <li><a href="../index.php">Home</a></li>
	  <li><a href="index.php">Service</a></li>
	  <li class="active">Introduction to CPTree</li>
	</ol>
</div>

<h3>Free of Use</h3>
<p>This website is free and open to all users and there is no login requirement.</br>
powered by <a href="http://php.net">php</a>, <a href="http://bl.ocks.org/kueda/1036776">d3.phylogram.js</a>, <a href="http://getbootstrap.com/">bootstrap</a>, and <a href="http://www.clustal.org/">clustal</a>.</p>

<h3>Permanent link</h3>
<p>
CPTree Home: <a target="_blank" href="../">http://bio.njfu.edu.cn/CPTree</a><br/>
CPTree Introduction: <a target="_blank" href="intro.php">http://bio.njfu.edu.cn/CPTree/service/intro.php</a><br/>
CPTree Tutorial: <a target="_blank" href="../intro.php">http://bio.njfu.edu.cn/CPTree/intro.php</a>
</p>

<h3>Authors</h3>
<p>
<a href="mailto:yiqingxu@njfu.edu.cn">Yiqing Xu</a><sup>1,2,3#</sup>, 
<a href="mailto:bichwei@163.com">Changwei Bi</a><sup>1,2,3#</sup>,
<a href="mailto:annajiang@njfu.edu.cn">Anna Jiang</a><sup>2</sup>, 
<a href="mailto:du.siyuan@qq.com">Siyuan Du</a><sup>2</sup>, 
<a href="mailto:tmyin@njfu.edu.cn">Tongming Yin</a><sup>3,4</sup>,
<a href="mailto:yening@njfu.edu.cn">Ning Ye</a><sup>2,3*</sup>
</p>

<p>
1. School of Computer Science and Engineering, <a target="_blank" href="http://www.seu.edu.cn/">Southeast University</a>, Nanjing, 211189, China<br/>
2. College of Information Science and Technology, <a target="_blank" href=""http://www.njfu.edu.cn">Nanjing Forestry University</a>, Nanjing, 210037, China<br/>
3. The Southern Modern Forestry Collaborative Innovation Center, <a target="_blank" href=""http://www.njfu.edu.cn">Nanjing Forestry University</a>, Nanjing 210037, China<br/>
4. College of Forest Resources and Environment, <a target="_blank" href=""http://www.njfu.edu.cn">Nanjing Forestry University</a>, Nanjing, 210037, China<br/>
# These authors contributed equally to this work. <br/>
* To whom correspondence should be addressed.
</p>

<h3>Brief Introduction to CPTree</h3>
<p style="text-align:justify; text-justify:inter-ideograph">
As a convenient experimental target with low substitution rate and high research value, Chloroplast Genomes, cpDNA, has been widely researched recently, and related research based on comparative genetics developed correspondingly. In this article, we publish CPTree, a web-based phylogenetic tree generator using Chloroplast Genomes to meet the growth in phylogenetic research of cpDNA. <br/>
CPTree supports two modes, and each mode requires different input data. The Fast Mode uses ribosomal RNA data as the material for phylogenetic analysis. In the latest version of CPTree, 16s rRNA or 23s rRNA is preferred. Meanwhile, an input of the whole cpDNA is also supported in the Normal Mode, in which all the gene will be filtered and matched for each species in order to build the phylogenetic tree in a more sophisticated way. However, for most of the users, preparation of multiple cpDNA from several species could be burdensome, so we embedded a local database for our online system. As a key model of CPTree, Chloroplast DNA Database(CPDB), contains a local database of all available cpDNA from Genome Information by Organism in NCBI. It maintains over 1000 cpDNAs and their key features extracted from its original NCBI database, including: full Sequence file(.fa), GenBank file(.gb), Nucleotide and Protein in CDS, Feature table, stand-alone 16S and 23S ribosomal RNA Sequence, and also Summary pages for each cpDNA.<br/>
<embed src="../assets/imgs/flow.svg" type="image/svg+xml" /><br/>
The output Phylogenetic Tree is in Newick format, which has been the standard tree format for the phylogenetic research and widely used in the most popular softwares. We also use the javascript program from d3.phylogram.js to draw tree view and circular view to facilities the fast preview, and the end user could download the generated preview plot in PNG images or SVG vector graphics. The data sharing interface can transmit the tree data to iTOL (<a href="http://itol.embl.de/">http://itol.embl.de/</a>) and generate an online tree for further manipulation. On the other hand, each result is numbered by an experiment code, and user can share the result by simple share the link, whenever the final result is still in process or finalized. In this way, if the process cost too much time calculating, user can use the code to retrieve the final result without waiting online. <br/>
Also, the service homepage of CPTree (<a href="http://bio.njfu.edu.cn/CPTree">http://bio.njfu.edu.cn/CPTree</a>) lists a set of experimental examples, most of which are from the latest cpDNA researches in 2015-2016. Compared with the original tree, the guide tree from the fast mode could predict the major structure, while the normal mode could be relatively accurate in detailed tree building. As a result, we can conclude that the method of this phylogenetic tree generation using Chloroplast Genome is faster and simpler.<br/>

<b>Keywords:</b> Phylogenetic Tree, Chloroplast Genome
</p>

<h3>Screenshots</h3>
<a target="_blank" href="../assets/imgs/intro1.png"><img src="../assets/imgs/intro1.png" width="30%" align="center"/></a>
<a target="_blank" href="../assets/imgs/intro2.png"><img src="../assets/imgs/intro2.png" width="30%" align="center"/></a>
<a target="_blank" href="../assets/imgs/intro3.png"><img src="../assets/imgs/intro3.png" width="30%" align="center"/></a>

<h3>Test Parterner</h3>
<p>
CPTree service has been deployed since Jan. 2016. At end of Nov. 2016, over 500+ trees has been built by CPTree online service and more than 100+ downloads of standalone perl script have been recorded. We proudly present the following test parterners: 
<ul>
	<li><a target="_blank" href="http://english.ibcas.ac.cn/">IBCAS</a></li>
	<li><a target="_blank" href="http://www.genomics.cn/">BGI</a></li>
	<li><a target="_blank" href="http://www.caf.ac.cn/">Chinese Academy of Forestry</a></li>
	<li><a target="_blank" href="http://www.seu.edu.cn/english/main.htm">Southeast University, China</a></li>
	<li><a target="_blank" href="http://en.cau.edu.cn/">China Agricultural University</a></li>
	<li><a target="_blank" href="http://eng.bjfu.edu.cn/">Beijing Forestry University, China</a></li>
	<li><a target="_blank" href="http://english.njau.edu.cn/">Nanjing Agricultural University, China</a></li>
	<li><a target="_blank" href="http://en.zafu.edu.cn/">Zhejiang A&F University (ZAFU), China</a></li>
</ul>
</p>

<?php include("footer.php"); ?>
