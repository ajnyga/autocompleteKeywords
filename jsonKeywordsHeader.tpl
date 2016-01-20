{**
 * @file plugins/generic/jsonKeywords/jsonKeywordsHeader.tpl
 *
 * Copyright (c) 2016 Antti-Jussi Nygård
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Add javascript to header
 *
 *}
 {literal}
	<script type="text/javascript">		
		
        $(document).ready(function(){

			$("#subject").tagit({
				allowSpaces: true,
				singleField: true,
				singleFieldDelimiter: "; ",
				tagSource: function( request, response ) {
								$.ajax({
									url: "http://api.finto.fi/rest/v1/search?vocab=ysa&lang=fi",
									dataType: "json",
									data: {
										query: request.term + "*"
									},
									success: function( data ) {
										var output = eval(data.results);
										response($.map(output, function(item) {
											return {
												label: item.prefLabel + "(" + item.uri + ")",
												value: item.prefLabel
											}
										}));
									}
									
									
								});				
							
							}
			});	


		});
	
	</script>
{/literal}		