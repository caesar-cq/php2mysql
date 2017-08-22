/* NCBI file reader */

var availableList = ["Size (Kb)", "GC%","Protein","rRNA","tRNA","Other RNA","Gene","Pseudogene"];

function reloadNCBIInfo() {
	var summary = $("#summary")[0].innerHTML;
	var organism = getOrganismName(summary);

	var organismStr = "<a href='https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?name="+organism+"' target='_blank'>"+organism+"</a>";
	$("#Organism")[0].innerHTML = $("#Organism")[0].innerHTML + organismStr;
	$("#taxonomy")[0].innerHTML = getTaxonomy(summary, organismStr);

	$.get("mtdb/genomes_organelles.txt", function(NCBIData){
		var availableValues =  getNCBIAvailableValues(NCBIData, nc_number);
		drawRadar(NCBIData, availableValues);
  	});
}

function drawRadar(NCBIData, values) {
	var myChart = echarts.init(document.getElementById('radar'));

    option = {
	    title: {
	        text: 'Basic Information'
	    },
        tooltip: {},
        radar: {
            shape: 'circle',
            indicator: []
        },
        series: [{
            name: 'Basic Information',
            type: 'radar',
            areaStyle: {normal: {}},
            data : [
                {
                    value : [],
                    name : 'Basic Information'
                }
            ]
        }]
    };

    var i=0;
    for (v in values) {
    	option.radar.indicator[i] = statisticRange ( getColumnByName( NCBIData, v, "mitochondrion" ) );
    	option.series[0].data[0].value[i++] = values[v];
    }

    myChart.setOption(option);
}

function statisticRange(columnArray) {
	var name = columnArray[0]
	var min = 65535;
	var max = -1;

	for (var i=2; i<=columnArray.length; i++) {
		if ( columnArray[i] == "-" ) continue;
		if ( min > parseFloat(columnArray[i]) ) min= columnArray[i];
		if ( max < parseFloat(columnArray[i]) ) max= columnArray[i];
	}
	return {name, min, max};
}

function getNCBIAvailableValues(NCBIData, NCNumber) {
	var headers = getNCBIHeaders(NCBIData);
	var values = getNCBIValues(NCBIData, NCNumber);

	var re = new Object();
	for (var i=0; i<availableList.length; i++) {
		if ( values[i+6] != "-" ) {
			re[availableList[i]] = values[i+6];
		}
	}
	return re;
}

function getNCBIValues(NCBIData, NCNumber) {
	var lines = NCBIData.split("\n");
	for (var i=1; i<=lines.length; i++) {
		var nc_no = lines[i].split("\t")[4];
		if ( nc_no==NCNumber ) {
			return lines[i].split("\t");
		}
	}
	return undefined;
}

function getColumn(NCBIData, columnNumber, type) {
	var lines = NCBIData.split("\n");
	var re = lines[0].split("\t")[columnNumber] + ",";
	for (var i=1; i<lines.length-1; i++) { // length-1: the last line is empty
		if ( lines[i].split("\t")[3] == type ) {
			re += lines[i].split("\t")[columnNumber] + ",";
		}
	}
	return re.substr(0, re.length-1).split(",");
}

function getColumnByName(NCBIData, columnName, type) {
	var headers = getNCBIHeaders(NCBIData);
	for (var i=0; i <= headers.length; i++) {
		if ( headers[i] == columnName ) return getColumn(NCBIData, i, type);
	}
	return undefined;
}

function getNCBIHeaders(NCBIData) {
	var lines = NCBIData.split("\n");
	return lines[0].split("\t");
}

function getOrganismName(summary) {
	var organismPattern= /ORGANISM[\s\w-_\.,\/\(\)]+\n/;
	return summary.match(organismPattern)[0].substr(10);
}

function getTaxonomy(summary, organismName) {
	var re = "<h4>Taxonomy</h4>";
	var lines = summary.split("\n");
	var findTaxonomy = 0;
	for ( findTaxonomy = 0; findTaxonomy <= lines.length; findTaxonomy++ ){
	  if ( lines[findTaxonomy].search("ORGANISM") > 0 ) break;
	}

	var fullTaxonomy = "";
	for (findTaxonomy++ ;findTaxonomy <= lines.length; findTaxonomy++) {
	  if ( lines[findTaxonomy].search(" ")!=0 ) break;
	  fullTaxonomy += lines[findTaxonomy];
	}

	fullTaxonomy = fullTaxonomy.replace(/ /g,"");
	fullTaxonomy = fullTaxonomy.replace(".","");

	var taxonomys = fullTaxonomy.split(";");
	var i=0;
	for (i=0; i <= taxonomys.length-1; i++ ) {
		for (var j=1; j<= i; j++ ) {
			if ( j<i ) re += "&nbsp;&nbsp;&nbsp;&nbsp;"
			else re += "&#9492;<i class='fa fa-caret-right' aria-hidden='true'></i> ";
		}
		re += "<a href='https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?name="+taxonomys[i]+"' target='_blank'>"+taxonomys[i]+"</a><br/>" ;
	}
	for (var j=1; j<= i; j++ ) {
		if ( j<i ) re += "&nbsp;&nbsp;&nbsp;&nbsp;"
		else re += "&#9492;<i class='fa fa-caret-right' aria-hidden='true'></i> ";
	}
	re += organismName;

	return re;
}
